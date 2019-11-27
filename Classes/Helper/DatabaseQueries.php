<?php
/**
 * License: This file is part of the package ifabrik/ifab_realestate.
 * For the full copyright and license information, please read the
 * license file that was distributed with this source code.
 *
 * @copyright 2019 i-fabrik GmbH
 * @author    Aristeidis Karavas
 */

namespace Ifabrik\IfabRealestate\Helper;

use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class DatabaseQueries
{

    /**
     * finds the cheapest property in order to display the value on the search form
     *
     * @return mixed
     */
    public static function findCheapestProperty()
    {
        $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getConnectionForTable('tx_ifabrealestate_domain_model_property')->createQueryBuilder();
        $getMinPrice = $queryBuilder
            ->addSelectLiteral('MIN(CAST(' . $queryBuilder->quoteIdentifier('cold_rent') . ' AS DECIMAL (10,2))) as minprice')
            ->from('tx_ifabrealestate_domain_model_property')
            ->execute()
            ->fetch(0);

        return $getMinPrice['minprice'];
    }

    /**
     * finds the most expensive property in order to display the value on the search form
     *
     * @return mixed
     */
    public static function findMostExpensiveProperty()
    {
        $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getConnectionForTable('tx_ifabrealestate_domain_model_property')->createQueryBuilder();
        $getMaxPrice = $queryBuilder
            ->addSelectLiteral('MAX(CAST(' . $queryBuilder->quoteIdentifier('cold_rent') . ' AS DECIMAL (10,2))) as maxprice')
            ->from('tx_ifabrealestate_domain_model_property')
            ->execute()
            ->fetch(0);

        return $getMaxPrice['maxprice'];
    }

    /**
     * gets all the marketing methods in order to display them in the search form
     *
     * @return mixed
     */
    public static function findMarketingMethods()
    {
        $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getConnectionForTable('tx_ifabrealestate_domain_model_marketingmethod')->createQueryBuilder();
        $getMarketingMethods = $queryBuilder
            ->select('uid', 'name')
            ->from('tx_ifabrealestate_domain_model_marketingmethod')
            ->execute()
            ->fetchAll();

        return $getMarketingMethods;
    }

    /**
     * gets all the property natures in order to display them in the search form
     *
     * @return mixed
     */
    public static function findPropertyNature()
    {
        $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getConnectionForTable('tx_ifabrealestate_domain_model_propertynature')->createQueryBuilder();
        $getPropertyNature = $queryBuilder
            ->select('uid', 'name')
            ->from('tx_ifabrealestate_domain_model_propertynature')
            ->execute()
            ->fetchAll();

        return $getPropertyNature;
    }

    /**
     * finds the smallest property in order to display the value on the search form
     *
     * @return mixed
     */
    public static function findMinSurface()
    {
        $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getConnectionForTable('tx_ifabrealestate_domain_model_property')->createQueryBuilder();
        $getMinSurface = $queryBuilder
            ->addSelectLiteral('MIN(CAST(' . $queryBuilder->quoteIdentifier('living_space') . ' AS DECIMAL (10,2))) as livingSpace')
            ->from('tx_ifabrealestate_domain_model_property')
            ->execute()
            ->fetch(0);

        return $getMinSurface['livingSpace'];
    }
}