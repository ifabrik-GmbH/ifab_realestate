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

use TYPO3\CMS\Extbase\Mvc\View\JsonView;

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
    public function injectPropertyRepository(
        \Ifabrik\IfabRealestate\Domain\Repository\PropertyRepository $propertyRepository
    ) {
        $this->propertyRepository = $propertyRepository;
    }

    /**
     *
     * action list gives back the amount of found properties
     *
     * @return void
     * @throws \TYPO3\CMS\Extbase\Persistence\Exception\InvalidQueryException
     */
    public function ajaxResultsAction(): void
    {
        $args = $this->request->getArguments();
        $searchArguments = $args['search'];

        $getSearchedProperties = $this->propertyRepository->searchResults($searchArguments);
        if ($getSearchedProperties !== null) {
            $results = count($getSearchedProperties);
        } else {
            $results = 0;
        }
        $count = $results;

        $this->view->setVariablesToRender(['count']);
        $this->view->assign('count', $count);
    }
}
