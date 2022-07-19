<?php
/**
 * License: This file is part of the package ifabrik/ifab-sitepackage.
 * For the full copyright and license information, please read the
 * license file that was distributed with this source code.
 *
 * @copyright 2022 i-fabrik GmbH
 * @author    Ralph Kropp
 */

namespace Ifabrik\IfabRealestate\Backend\Preview;

use TYPO3\CMS\Backend\Preview\PreviewRendererInterface;
use TYPO3\CMS\Backend\Preview\StandardContentPreviewRenderer;
use Psr\Log\LoggerAwareInterface;
use Psr\Log\LoggerAwareTrait;
use TYPO3\CMS\Backend\Routing\UriBuilder;
use TYPO3\CMS\Backend\Utility\BackendUtility;
use TYPO3\CMS\Backend\View\BackendLayout\Grid\GridColumnItem;
use TYPO3\CMS\Core\Authentication\BackendUserAuthentication;
use TYPO3\CMS\Core\Core\Environment;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Imaging\Icon;
use TYPO3\CMS\Core\Imaging\IconFactory;
use TYPO3\CMS\Core\Localization\LanguageService;
use TYPO3\CMS\Core\Service\FlexFormService;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Object\ObjectManager;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;
use TYPO3\CMS\Fluid\View\StandaloneView;

class BackendPreviewRenderer extends StandardContentPreviewRenderer {

    /**
     * @var IconFactory
     */
    protected $iconFactory = null;


    /**
     * Dedicated method for rendering preview header HTML for
     * the page module only. Receives the the GridColumnItem
     * that contains the record for which a preview header
     * should be rendered and returned.
     *
     * @param GridColumnItem $item
     * @return string
     */
    public function renderPageModulePreviewHeader(GridColumnItem $item): string {
        $record = $item->getRecord();
        $itemLabels = $item->getContext()->getItemLabels();

        $outHeader = '';

        if ($record['header']) {
            $infoArr = [];
            $this->getProcessedValue($item, 'header_position,header_layout,header_link', $infoArr);
            $hiddenHeaderNote = '';
            // If header layout is set to 'hidden', display an accordant note:
            if ($record['header_layout'] == 100) {
                $hiddenHeaderNote = ' <em>[' . htmlspecialchars($this->getLanguageService()->sL('LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.6')) . ']</em>';
            }
            $outHeader = $record['date']
                ? htmlspecialchars($itemLabels['date'] . ' ' . BackendUtility::date($record['date'])) . '<br />'
                : '';
            $outHeader .= '<strong>' . $this->linkEditContent($this->renderText($record['header']), $record)
                . $hiddenHeaderNote . '</strong><br />';
        }

        return $outHeader;
    }

    /**
     * Dedicated method for rendering preview body HTML for
     * the page module only. Receives the the GridColumnItem
     * that contains the record for which a preview should be
     * rendered and returned.
     *
     * @param GridColumnItem $item
     * @return string
     */
    public function renderPageModulePreviewContent(GridColumnItem $item): string {
        $record  = $item->getRecord();

        if ($record['list_type'] === 'ifabrealestate_ifabrealestate') {
            $standaloneView = GeneralUtility::makeInstance(StandaloneView::class);
            $templatePath = GeneralUtility::getFileAbsFileName('EXT:ifab_realestate/Resources/Private/Backend/Templates/PageLayoutView.html');

            $data = GeneralUtility::xml2array($record['pi_flexform']);
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

            if ($standaloneView->hasTemplate()) {
                $itemContent = $standaloneView->render();
            } else {
                return parent::renderPageModulePreviewContent($item);
            }
            return $itemContent;
        } else {
            return parent::renderPageModulePreviewContent($item);
        }
    }

    /**
     * Render a footer for the record to display in page module below
     * the body of the item's preview.
     *
     * @param GridColumnItem $item
     * @return string
     */
    public function renderPageModulePreviewFooter(GridColumnItem $item): string {
        return parent::renderPageModulePreviewFooter($item);
    }

    /**
     * Dedicated method for wrapping a preview header and body
     * HTML. Receives $item, an instance of GridColumnItem holding
     * among other things the record, which can be used to determine
     * appropriate wrapping.
     *
     * @param string $previewHeader
     * @param string $previewContent
     * @param GridColumnItem $item
     * @return string
     */
    public function wrapPageModulePreview(string $previewHeader, string $previewContent, GridColumnItem $item): string {
        return $previewHeader . $previewContent;
    }


    /**
     * Helper functions
     * ToDo: Prüfen, ob noch gebraucht. Eventuell greifen auch neue Typo3-interne Mechanismen
     */
    /**
     * Returns the language service
     *
     * @return \TYPO3\CMS\Core\Localization\LanguageService
     */
    protected function getLanguageService(): LanguageService {
        return $GLOBALS['LANG'];
    }

    /**
     * Returns the backend user authentication
     *
     * @return \TYPO3\CMS\Core\Authentication\BackendUserAuthentication
     */
    protected function getBackendUser(): BackendUserAuthentication {
        return $GLOBALS['BE_USER'];
    }

    /**
     * Compilation of the standard data
     *
     * @param $row
     *
     * @return void
     */
    protected function setDefaults(&$row) {
        if ($this->getBackendUser()->recordEditAccessInternals('tt_content', $row)) {
            $urlParameters   = [
                'edit'      => [
                    'tt_content' => [
                        $row['uid'] => 'edit',
                    ],
                ],
                'returnUrl' => GeneralUtility::getIndpEnv('REQUEST_URI') . '#element-tt_content-' . $row['uid'],
            ];

            $uriBuilder      = GeneralUtility::makeInstance(UriBuilder::class);
            $url             = (string)$uriBuilder->buildUriFromRoute(
                'record_edit',
                $urlParameters
            );

            $return          = [
                'url'   => $url,
                'title' => htmlspecialchars(
                    $this->getLanguageService()->getLL('edit')
                ),
            ];
            $row['editLink'] = $return;
        }

        $row['CType-label'] = $this->getLanguageService()->sL(
            BackendUtility::getLabelFromItemListMerged(
                $row['pid'],
                'tt_content',
                'CType',
                $row['CType']
            )
        );

        //
        // Dateireferenzen (Bilder) zusammenstellen.
        //

        // Feldnamen von zu prüfenden Feldschlüsseln.
        // ´key´   = Feldschlüssel
        // ´value´ = Feld mit ´nested´-Feldschlüsseln innerhalb einer
        //           Dateireferenzen.
        //           (Bsp. ´media_poster´ innerhalb ´sys_file_referenz´)
        $readFileReferencesFrom = [
            'assets'  => ['media_poster'],
            'assets2' => ['media_poster'],
            'media'   => ['media_poster'],
            'image'   => ['media_poster'],
        ];

        // ... auslesen.
        foreach ($readFileReferencesFrom as $key => $nestedFileReferenceFields) {
            if ($row[$key] ?? false) {
                $cKey = ucfirst($key);

                // ... Dateireferenzen der View bekanntgeben.
                $allCKeyData = FilereferenceService::resolveFilereferences(
                    $key,
                    'tt_content',
                    $row['uid']
                );

                foreach ($allCKeyData as $subCKey => $subKeyData) {
                    $subData = FilereferenceService::resolveFilereferences(
                        'media_poster',
                        'sys_file_reference',
                        $subKeyData['uid']
                    );

                    $allCKeyData[$subCKey]['mediaPosterData'] = $subData;
                }

                $row['all' . $cKey] = $allCKeyData;

                // ... Anzahl aktiver Dateireferenzen der View bekanntgeben.
                $row['all' . $cKey . '-visible'] = FilereferenceService::countNumberOfVisibleFilereferences(
                    $key,
                    'tt_content',
                    $row['uid']
                );
            }
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
            if (isset($settings['value']) && is_numeric($settings['value'])) {
                if ($settings['table'] === 'pages') {

                    $title = $this->getQueryResults($settings['table'], $settings['value']);
                    $getIcon = $this->getIcon($settings['table'], $title[0]);
                    $dom = $this->createDom($settings['value'], $getIcon, $title[0]['title']);
                    $content[$key] = BackendUtility::wrapClickMenuOnIcon(
                        $dom,
                        $settings['table'],
                        $settings['value'],
                        true,
                    );
                }
                $getPids[$key] = $settings;
            } else {
                $getPids[$key] = $settings;
            }
            if ( isset($content[$key]) ) {
                $getPids[$key][] = $content[$key];
            }

            if (!isset($getPids[$key]['value'])) {
                $getPids[$key]['value'] = null;
            }
            if (!isset($getPids[$key]['table'])) {
                $getPids[$key]['table'] = null;
            }
            if (!isset($getPids[$key][0])) {
                $getPids[$key][0] = null;
            }
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
        if (empty($this->iconFactory) || ! is_a($this->iconFactory, IconFactory::class)) {
            $this->iconFactory = GeneralUtility::makeInstance(IconFactory::class);
        }
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
        if (isset($flexform['data']['options']['lDEF'])) {
            $selectAdditionalSettings = array_map(function ($setting) {
                array(
                    'value' => $setting['vDEF'],
                );
                return array_pop($setting);
            }, $flexform['data']['options']['lDEF']);

            $keys = str_replace('.', '', array_keys($selectAdditionalSettings));
            $results = array_combine($keys, array_values($selectAdditionalSettings));
            return $results;
        } else {
            return null;
        }
    }



}
