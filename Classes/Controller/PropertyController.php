<?php
namespace Ifabrik\IfabRealestate\Controller;


use Ifabrik\IfabRealestate\Helper\DatabaseQueries;

/***
 *
 *  (c) 2019 ifabrik GmbH <info@ifababrik.de>, ifabrik GmbH
 *
 ***/
/**
 * PropertyController
 */
class PropertyController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

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
    public function listAction()
    {
        $settings = $this->settings;
        $maxItems = intval($settings['list']['maxItems']);
        $hiddenPagination = intval($settings['list']['hidePagination']);

        if ($hiddenPagination === 1  && $maxItems) {
            $properties = $this->propertyRepository->findAllAvailableProperties($maxItems);
        }
        else {
            $properties = $this->propertyRepository->findAllAvailableProperties();
        }

        $this->view->assign('propertiess', $properties);
    }

    /**
     * action show
     *
     * @param \Ifabrik\IfabRealestate\Domain\Model\Property $property
     * @return void
     */
    public function showAction(\Ifabrik\IfabRealestate\Domain\Model\Property $property)
    {
        $this->view->assign('property', $property);
    }

    /**
     * action search
     *
     * @return void
     */
    public function searchAction()
    {
        $cheapiestProperty = DatabaseQueries::findCheapiestImmo();
        $mostExpensiveProperty = DatabaseQueries::findMostExpensiveImmo();
        $marketingMethods = DatabaseQueries::findMarketingMethods();
        $propertyNature = DatabaseQueries::findPropertyNature();
        $minSurface = DatabaseQueries::findMinSurface();
        $prices = array(
            'getMinRent' => $cheapiestProperty,
            'getMaxRent' => $mostExpensiveProperty);

        $this->view->assignMultiple([
            'minSurface' => $minSurface,
            'propertyNature' => $propertyNature,
            'marketingMethods' => $marketingMethods,
            'prices' => $prices,
            'pageData'          => (is_object($GLOBALS['TSFE'])) ? $GLOBALS['TSFE']->page : [],
        ]);
    }

    /**
     * action searchResults
     *
     * @return void
     */
    public function searchResultsAction()
    {
        $args = $this->request->getArguments();
        $searchArguments = $args['search'];
        $settings = $this->settings;
        $maxItems = intval($settings['list']['maxItems']);
        $hiddenPagination = intval($settings['list']['hidePagination']);

        if ($hiddenPagination === 1  && $maxItems) {
            $getSearchedProperties = $this->propertyRepository->searchResults($searchArguments, $maxItems);
        }
        else {
            $getSearchedProperties = $this->propertyRepository->searchResults($searchArguments);
        }
        
        $this->view->assignMultiple([
            'propertiess' => $getSearchedProperties,
            'pageData'          => (is_object($GLOBALS['TSFE'])) ? $GLOBALS['TSFE']->page : [],
        ]);
    }
}
