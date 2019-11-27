<?php
/**
 * License: This file is part of the package ifabrik/ifab_realestate.
 * For the full copyright and license information, please read the
 * license file that was distributed with this source code.
 *
 * @copyright 2019 i-fabrik GmbH
 * @author    Aristeidis Karavas
 */

namespace Ifabrik\IfabRealestate\Controller;

use Ifabrik\IfabRealestate\Helper\DatabaseQueries;
use TYPO3\CMS\Extbase\Persistence\Exception\InvalidQueryException;
use Ifabrik\IfabRealestate\Domain\Model\Property;
use Ifabrik\IfabRealestate\Domain\Repository\PropertyRepository;

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
     * assigned variable to call the property repository
     *
     * @var \Ifabrik\IfabRealestate\Domain\Repository\PropertyRepository
     */
    protected $propertyRepository = null;

    /**
     * Injects the property repository
     *
     * @param \Ifabrik\IfabRealestate\Domain\Repository\PropertyRepository $propertyRepository
     */
    public function injectPropertyRepository(PropertyRepository $propertyRepository
    ) {
        $this->propertyRepository = $propertyRepository;
    }

    /**
     * returns all the available properties. Including the pagination settings.
     *
     * @return void
     * @throws InvalidQueryException
     */
    public function listAction()
    {
        $settings = $this->settings;
        $maxItems = intval($settings['list']['maxItems']);
        $hiddenPagination = intval($settings['list']['hidePagination']);

        if ($hiddenPagination === 1 && $maxItems) {
            $properties = $this->propertyRepository->findAllAvailableProperties($maxItems);
        } else {
            $properties = $this->propertyRepository->findAllAvailableProperties();
        }

        $this->view->assign('propertiess', $properties);
    }

    /**
     * returns all the information about the selected property
     *
     * @param \Ifabrik\IfabRealestate\Domain\Model\Property $property
     * @return void
     */
    public function showAction(Property $property)
    {
        $this->view->assign('property', $property);
    }

    /**
     * searches for the data in the database and gives back a list for some of the search fields.
     *
     * @return void
     */
    public function searchAction()
    {
        $cheapestProperty = DatabaseQueries::findCheapestProperty();
        $mostExpensiveProperty = DatabaseQueries::findMostExpensiveProperty();
        $marketingMethods = DatabaseQueries::findMarketingMethods();
        $propertyNature = DatabaseQueries::findPropertyNature();
        $minSurface = DatabaseQueries::findMinSurface();
        $prices = array(
            'getMinRent' => $cheapestProperty,
            'getMaxRent' => $mostExpensiveProperty
        );

        $this->view->assignMultiple([
            'minSurface' => $minSurface,
            'propertyNature' => $propertyNature,
            'marketingMethods' => $marketingMethods,
            'prices' => $prices,
            'pageData' => (is_object($GLOBALS['TSFE'])) ? $GLOBALS['TSFE']->page : [],
        ]);
    }

    /**
     * returns a list of the searched properties. Including the pagination settings.
     *
     * @return void
     * @throws InvalidQueryException
     */
    public function searchResultsAction()
    {
        $args = $this->request->getArguments();
        $searchArguments = $args['search'];
        $settings = $this->settings;
        $maxItems = intval($settings['list']['maxItems']);
        $hiddenPagination = intval($settings['list']['hidePagination']);

        if ($hiddenPagination === 1 && $maxItems) {
            $getSearchedProperties = $this->propertyRepository->searchResults($searchArguments, $maxItems);
        } else {
            $getSearchedProperties = $this->propertyRepository->searchResults($searchArguments);
        }

        $this->view->assignMultiple([
            'propertiess' => $getSearchedProperties,
            'pageData' => (is_object($GLOBALS['TSFE'])) ? $GLOBALS['TSFE']->page : [],
        ]);
    }
}
