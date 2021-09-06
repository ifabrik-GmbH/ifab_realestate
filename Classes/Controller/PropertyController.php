<?php
/**
 * License: This file is part of the package ifabrik/ifab_realestate.
 * For the full copyright and license information, please read the
 * license file that was distributed with this source code.
 *
 * @copyright concept & creation by ifabrik.de, Leipzig
 * @author    Aristeidis Karavas
 */

namespace Ifabrik\IfabRealestate\Controller;

use Ifabrik\IfabRealestate\Helper\DatabaseQueries;
use Ifabrik\IfabRealestate\PageTitle\RealEstatePageProvider;
use TYPO3\CMS\Core\MetaTag\MetaTagManagerRegistry;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Persistence\Exception\InvalidQueryException;
use Ifabrik\IfabRealestate\Domain\Model\Property;
use TYPO3\CMS\Extbase\Service\ImageService;
use Ifabrik\IfabRealestate\Domain\Repository\PropertyRepository;

/**
 * PropertyController
 */
class PropertyController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * @var \TYPO3\CMS\Core\MetaTag\MetaTagManagerRegistry
     */
    protected $metaTagManagerRegistry;

    /**
     * @var \TYPO3\CMS\Extbase\Service\ImageService
     */
    protected $imageService;

    /**
     * @var string
     */
    protected $url;

    public function __construct(
        MetaTagManagerRegistry $metaTagManagerRegistry,
        ImageService $imageService
    )
    {
        if ((float)TYPO3_branch < 10)
        {
            parent::__construct();
        }

        $this->metaTagManagerRegistry = $metaTagManagerRegistry;
        $this->imageService = $imageService;
    }

    public function initializeAction()
    {
        parent::initializeAction();
        $this->url = $this->uriBuilder->getRequest()->getRequestUri();
    }

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
        $maxItems = (int)$settings['list']['maxItems'];
        $hiddenPagination = (int)$settings['list']['hidePagination'];

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
        $pageTitleProvider = GeneralUtility::makeInstance(RealEstatePageProvider::class);
        $pageTitleProvider->setTitle($property->getPropertyTitle());

        $imageUrl = $this->getSharingImage($property);
        $this->addMetaTags($property, $imageUrl);


        $this->view->assign('property', $property);
    }

    /**
     * searches for the data in the database and gives back a list for some of the search fields.
     *
     * @return void
     */
    public function searchAction()
    {
        $args = $this->request->getArguments();

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
            'search_min_surface' => $args['minSurface'],
            'search_max_coldrent' => $args['maxColdRent'],
            'formArgs' => $args,
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
        $maxItems = (int)$settings['list']['maxItems'];
        $hiddenPagination = (int)$settings['list']['hidePagination'];

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

    /**
     * @param \Ifabrik\IfabRealestate\Domain\Model\Property $property
     * @param $imageUrl
     * @return void
     */
    public function addMetaTags($property, $imageUrl)
    {
        $staticMetaTags = $this->settings['realestate']['metaTags'];
        $completeMetaTags = [];
       foreach ($staticMetaTags as $key => $metaTagProvider)
       {
           switch ($key){
               case 'general':
                   $metaTagProvider['subject'] = $property->getPropertyTitle();
                   $metaTagProvider['description'] = strip_tags(substr($property->getPropertyDescription(), 0, 150));
                   $metaTagProvider['url'] =$this->url;
                   $completeMetaTags[] = $metaTagProvider;
                   break;
               case 'facebook':
                   $metaTagProvider['og:title'] = $property->getPropertyTitle();
                   $metaTagProvider['og:description'] = strip_tags(substr($property->getPropertyDescription(), 0, 150));
                   $metaTagProvider['og:url'] =$this->url;
                   $metaTagProvider['og:image'] =$imageUrl;
                   $completeMetaTags[] = $metaTagProvider;
                   break;
               case 'twitter':
                   if (isset($metaTagProvider['twitter:card']))
                   {
                       $removeTwitterCard = $this->metaTagManagerRegistry->getManagerForProperty('twitter:card');
                       $removeTwitterCard->removeProperty('twitter:card');
                   }
                   $metaTagProvider['twitter:title'] = $property->getPropertyTitle();
                   $metaTagProvider['twitter:description'] = strip_tags(substr($property->getPropertyDescription(), 0, 150));
                   $metaTagProvider['twitter:url'] =$this->url;
                   $metaTagProvider['twitter:image'] =$imageUrl;
                   $metaTagProvider['twitter:image:alt'] =$property->getPropertyTitle();
                   $completeMetaTags[] = $metaTagProvider;
                   break;

           }
       }
        $finalTagList = array_merge( ...$completeMetaTags);
        foreach ($finalTagList as $key => $metaTagValue) {
            $metaTag = $this->metaTagManagerRegistry->getManagerForProperty($key);
            $metaTag->getProperty($key);
            $metaTag->addProperty($key, $metaTagValue);
        }
    }

    /**
     *
     * returns the url of the image
     * @param $property
     * @return string
     */
    public function getSharingImage($property)
    {
        $imageUrl = '';
        $dimensions = [
            'width' => $this->settings['realestate']['metaTags']['image']['dimensions']['width'],
            'height' => $this->settings['realestate']['metaTags']['image']['dimensions']['height']
        ];
        if (count($property->getAttachmentsRel())>0)
        {
            foreach ($property->getAttachmentsRel() as $attachment)
            {
                if ($attachment->getIsSharingImage())
                {
                    $imagePath = $attachment->getFile()->getOriginalResource()->getOriginalFile()->getPublicUrl();
                    $processedImage = $this->imageService->applyProcessingInstructions(
                        $this->imageService->getImage($imagePath, null, false), $dimensions);
                    $imageUrl = $this->request->getBaseUri().trim($this->imageService->getImageUri($processedImage),'/');
                    break;
                }
                $imageUrl = '';
            }
        }
        else {
            $imageUrl = '';
        }
        return $imageUrl;
    }
}
