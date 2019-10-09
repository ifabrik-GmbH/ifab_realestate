<?php
namespace Ifabrik\IfabRealestate\Controller;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface;
use TYPO3\CMS\Extbase\Mvc\View\JsonView;
use TYPO3\CMS\Fluid\View\StandaloneView;

/***
 *
 *  (c) 2019 ifabrik GmbH <info@ifababrik.de>, ifabrik GmbH
 *
 ***/
/**
 * PropertyController
 */
class AjaxController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * @var JsonView
     */
    protected $view;

    /**
     * @var string
     */
    protected $defaultViewObjectName = JsonView::class;

    /**
     * @var
     */
    protected $settings;

    /**
     * @var
     */
    protected $viewConfig;

    /**
     * @var
     */
    protected $extbaseFrameworkConfiguration;

    /**
     * propertyRepository
     * 
     * @var \Ifabrik\IfabRealestate\Domain\Repository\PropertyRepository
     * @inject
     */
    protected $propertyRepository = null;

    /**
     * Initialize Action
     */
    public function initializeAction(): void
    {
        $this->settings = array_merge($this->settings);
        $this->viewConfig = GeneralUtility::makeInstance(StandaloneView::class);
        $this->extbaseFrameworkConfiguration = $this->configurationManager->getConfiguration(ConfigurationManagerInterface::CONFIGURATION_TYPE_FRAMEWORK);
        $this->viewConfig->setTemplateRootPaths($this->extbaseFrameworkConfiguration['view']['templateRootPaths']);
        $this->viewConfig->setLayoutRootPaths($this->extbaseFrameworkConfiguration['view']['layoutRootPaths']);
        $this->viewConfig->setPartialRootPaths($this->extbaseFrameworkConfiguration['view']['partialRootPaths']);
    }


    /**
     * action list
     * 
     * @return void
     */
    public function ajaxResultsAction() : void
    {
        $this->viewConfig->setTemplate('Property/AjaxSearch.html');
        $args = $this->request->getArguments();
        $searchArguments = $args['search'];

        $getSearchedProperties = $this->propertyRepository->searchResults($searchArguments);
        if ($getSearchedProperties !== null)
        {
            $results = count($getSearchedProperties);
        }
        else {
            $results = 0;
        }
        $anzahl = $results;

        $this->view->setVariablesToRender(['anzahl']);
        $this->view->assign('anzahl', $anzahl);
    }
}
