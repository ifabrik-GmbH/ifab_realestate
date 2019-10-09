<?php

namespace Ifabrik\IfabRealestate\Helper;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Database\ConnectionPool;


class DatabaseQueries
{
    public static function findCheapiestImmo()
    {
        $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getConnectionForTable('tx_ifabrealestate_domain_model_property')->createQueryBuilder();
        $getMinPrice = $queryBuilder
            ->addSelectLiteral('MIN(CAST(' . $queryBuilder->quoteIdentifier('cold_rent') . ' AS DECIMAL (10,2))) as minprice')
            ->from('tx_ifabrealestate_domain_model_property')
            ->execute()
            ->fetch(0);

        return $getMinPrice['minprice'];
    }

    public static function findMostExpensiveImmo()
    {
        $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getConnectionForTable('tx_ifabrealestate_domain_model_property')->createQueryBuilder();
        $getMaxPrice = $queryBuilder
            ->addSelectLiteral('MAX(CAST(' . $queryBuilder->quoteIdentifier('cold_rent') . ' AS DECIMAL (10,2))) as maxprice')
            ->from('tx_ifabrealestate_domain_model_property')
            ->execute()
            ->fetch(0);

        return $getMaxPrice['maxprice'];
    }

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