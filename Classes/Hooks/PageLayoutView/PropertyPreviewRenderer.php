<?php
/**
 * License: This file is part of the package ifabrik/ifab_realestate.
 * For the full copyright and license information, please read the
 * license file that was distributed with this source code.
 *
 * @copyright concept & creation by ifabrik.de, Leipzig
 * @author    Aristeidis Karavas
 */

namespace Ifabrik\IfabRealestate\Hooks\PageLayoutView;

use TYPO3\CMS\Backend\Utility\BackendUtility;
use TYPO3\CMS\Backend\Utility\BackendUtility as BackendUtilityCore;
use TYPO3\CMS\Backend\View\PageLayoutView;
use TYPO3\CMS\Backend\View\PageLayoutViewDrawItemHookInterface;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Imaging\Icon;
use TYPO3\CMS\Core\Imaging\IconFactory;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Object\ObjectManager;
use TYPO3\CMS\Fluid\View\StandaloneView;
use TYPO3\CMS\Frontend\Page\PageRepository;

class PropertyPreviewRenderer implements PageLayoutViewDrawItemHookInterface
{

    /**
     * @var IconFactory
     */
    protected $iconFactory;

    /**
     * @var PageRepository
     */
    protected $pageRepository;

    /**
     * initialize some classes
     *
     * PropertyPreviewRenderer constructor.
     */
    public function __construct()
    {
        $this->iconFactory = GeneralUtility::makeInstance(IconFactory::class);
        $this->pageRepository = GeneralUtility::makeInstance(PageRepository::class);
    }

    /**
     * Rendering for custom content elements
     *
     * @param PageLayoutView $parentObject
     * @param bool $drawItem
     * @param string $headerContent
     * @param string $itemContent
     * @param array $row
     */
    public function preProcess(PageLayoutView &$parentObject, &$drawItem, &$headerContent, &$itemContent, array &$row)
    {
        if ($row['list_type'] === 'ifabrealestate_ifabrealestate') {
            $objectManager = GeneralUtility::makeInstance(ObjectManager::class);
            $standaloneView = $objectManager->get(StandaloneView::class);
            $templatePath = GeneralUtility::getFileAbsFileName('EXT:ifab_realestate/Resources/Private/Backend/Templates/PageLayoutView.html');

            $drawItem = false;

            $data = GeneralUtility::xml2array($row['pi_flexform']);

            $action = $this->getActionFromFlexform($data);
            $generalSettings = $this->getGeneralSettingsFromFlexform($data);
            $additionalSettings = $this->getAdditionalSettingsFromFlexform($data);

            $standaloneView->setFormat('html');
            $standaloneView->setTemplatePathAndFilename($templatePath);

            $standaloneView->assignMultiple([
                'action' => $action,
                'generalSettings' => $generalSettings,
                'additionalSettings' => $additionalSettings
            ]);


            $itemContent .= $standaloneView->render();
        }
    }

    /**
     * Find the current action and display the name on the BackEnd
     *
     * @param array $flexform
     *
     * @return array $results
     */
    public function getActionFromFlexform($flexform)
    {
        $defineAction = $flexform['data']['sDEF']['lDEF']['switchableControllerActions']['vDEF'];
        $trimmedAction = GeneralUtility::trimExplode(';', $defineAction);
        $onlyAction = str_replace('Property->', '', $trimmedAction[0]);

        $results = array(
            "actionName" => $onlyAction,
        );

        return $results;
    }

    /**
     * Get the general settings and format them in order to get the values on the BackEnd
     *
     * @param array $flexform
     *
     * @return array $selectGeneralSettings
     */
    public function getGeneralSettingsFromFlexform($flexform): array
    {
        $getPids = $content = array();
        $selectGeneralSettings = $flexform['data']['sDEF']['lDEF'];
        $selectGeneralSettings = array_map(function ($setting) {
            return array(
                'value' => $setting['vDEF'],
            );
        }, $selectGeneralSettings);

        $selectGeneralSettings['settings.listPid']['table'] = 'pages';
        $selectGeneralSettings['settings.detailPid']['table'] = 'pages';
        $selectGeneralSettings['settings.searchResultsPid']['table'] = 'pages';
        $selectGeneralSettings['persistence.storagePid']['table'] = 'pages';


        foreach ($selectGeneralSettings as $key => $settings) {
            if (is_numeric($settings['value'])) {
                if ($settings['table'] === 'pages') {

                    $title = $this->getQueryResults($settings['table'], $settings['value']);
                    $getIcon = $this->getIcon($settings['table'], $title[0]);
                    $dom = $this->createDom($settings['value'], $getIcon, $title[0]['title']);
                    $content[$key] = BackendUtilityCore::wrapClickMenuOnIcon($dom, $settings['table'],
                        $settings['value'], true, '', '+info,edit,history');
                }
                $getPids[$key] = $settings;
            } else {
                $getPids[$key] = $settings;
            }
            array_push($getPids[$key], $content[$key]);
        }

        $getPids = array_map(function ($getPid) {
            return array(
                'value' => $getPid['value'],
                'table' => $getPid['table'],
                'link' => $getPid[0]
            );
        }, $getPids);

        $keys = str_replace('.', '', array_keys($getPids));
        $results = array_combine($keys, array_values($getPids));

        return $results;
    }

    /**
     * Get the pages where the extension settings link to
     *
     * @param string $table
     * @param int $recordId
     *
     * @return array $results
     */
    public function getQueryResults($table, $recordId)
    {
        $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getQueryBuilderForTable($table);
        $getQuery = $queryBuilder
            ->select('*')
            ->from($table)
            ->where(
                $queryBuilder->expr()->eq('uid', $queryBuilder->createNamedParameter($recordId, \PDO::PARAM_INT)),
                $queryBuilder->expr()->eq('hidden', $queryBuilder->createNamedParameter(0, \PDO::PARAM_INT)),
                $queryBuilder->expr()->eq('deleted', $queryBuilder->createNamedParameter(0, \PDO::PARAM_INT))
            )
            ->execute()
            ->fetchAll();

        $results = $getQuery;

        return $results;
    }

    /**
     * get the icon for the searched page
     *
     * @param $table
     * @param $row
     * @return string
     */
    public function getIcon($table, $row)
    {
        return $this->iconFactory->getIconForRecord($table, $row, Icon::SIZE_SMALL)->render();
    }

    /**
     * Build a url for each page
     *
     * @param $value
     * @param $icon
     * @param $title
     * @return string
     */
    public function createDom($value, $icon, $title)
    {
        $dom = '<span data-toggle="tooltip" data-placement="top" data-title="id=' . $value . '"> ' . $icon . ' ' . $title . '</span> ';

        return $dom;
    }

    /**
     * Get the additional settings and format them in order to get the values on the BackEnd
     *
     * @param array $flexform
     *
     * @return array $results
     */
    public function getAdditionalSettingsFromFlexform($flexform)
    {
        $selectAdditionalSettings = $flexform['data']['options']['lDEF'];
        if ($selectAdditionalSettings) {
            $selectAdditionalSettings = array_map(function ($setting) {
                array(
                    'value' => $setting['vDEF'],
                );
                return array_pop($setting);
            }, $selectAdditionalSettings);

            $keys = str_replace('.', '', array_keys($selectAdditionalSettings));
            $results = array_combine($keys, array_values($selectAdditionalSettings));
            return $results;
        } else {
            return null;
        }
    }

}