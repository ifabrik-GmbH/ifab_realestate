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
     * propertyRepository
     *
     * @var \Ifabrik\IfabRealestate\Domain\Repository\PropertyRepository
     */
    protected $propertyRepository = null;

    /**
     * Inject the propertyRepository
     *
     * @param \Ifabrik\IfabRealestate\Domain\Repository\PropertyRepository $propertyRepository
     */
    public function injectPropertyRepository(\Ifabrik\IfabRealestate\Domain\Repository\PropertyRepository $propertyRepository)
    {
        $this->propertyRepository = $propertyRepository;
    }

    /**
     * action list
     *
     * @return void
     */
    public function ajaxResultsAction() : void
    {
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
