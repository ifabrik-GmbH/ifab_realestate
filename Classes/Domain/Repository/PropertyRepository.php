<?php

namespace Ifabrik\IfabRealestate\Domain\Repository;


use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Object\ObjectManager;
use TYPO3\CMS\Extbase\Persistence\Exception\InvalidQueryException;
use TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings;
use TYPO3\CMS\Extbase\Persistence\QueryResultInterface;
use TYPO3\CMS\Extbase\Persistence\Repository;

/***
 *
 *  (c) 2019 ifabrik GmbH <info@ifababrik.de>, ifabrik GmbH
 *
 ***/

/**
 * The repository for Properties
 */
class PropertyRepository extends Repository
{
    /**
     * initialize a query setting which allows to get all the properties without checking the PID.
     */
    public function initializeObject()
    {
        $querySettings = $this->objectManager->get(Typo3QuerySettings::class);
        $querySettings->setRespectStoragePage(false);
    }

    /**
     * returns a list of properties that are ready to be released.
     *
     * @param int $limit
     * @return QueryResultInterface|array
     */
    public function findAllAvailableProperties($limit = null)
    {
        $query = $this->createQuery();
        $query->matching($query->equals('propertyRelease', 1));
        if ($limit !== null) {
            $query->setLimit($limit);
        }
        return $query->execute();
    }

    /**
     * returns a list of properties defined by search parameters.
     *
     * @param array $searchParameter
     * @param int $limit
     * @return QueryResultInterface|array
     * @throws InvalidQueryException
     */
    public function searchResults($searchParameter, $limit = null)
    {
        $query = $this->createQuery();
        $query->getQuerySettings()->setRespectStoragePage(false);


        if (!empty($searchParameter)) {
            $constraints = [];
            if (!empty($searchParameter['marketingMethods'])) {
                $constraints[] = $query->equals('marketingMethodRel.uid', $searchParameter['marketingMethods']);
            }
            if (!empty($searchParameter['area'])) {
                $objectManager = GeneralUtility::makeInstance(ObjectManager::class);
                $addressRespoitory = $objectManager->get(AddressRepository::class);

                $addresses = $addressRespoitory->findSelectedAddresses($searchParameter['area']);


                $addressesId = array(0);

                foreach ($addresses as $address) {
                    $addressesId[] = $address->getUid();
                }
                $constraints[] = $query->in('addressRel', $addressesId);
            }
            if (!empty($searchParameter['propertyNature'])) {
                $constraints[] = $query->equals('propertyNatureRel.uid', $searchParameter['propertyNature']);
            }
            if (!empty($searchParameter['maxColdRent'])) {
                $constraints[] = $query->lessThanOrEqual('coldRent', $searchParameter['maxColdRent']);
            }
            if (!empty($searchParameter['minSurface'])) {
                $constraints[] = $query->greaterThanOrEqual('livingSpace', $searchParameter['minSurface']);
            }
            if (!empty($searchParameter['rooms'])) {
                $constraints[] = $query->greaterThanOrEqual('numberOfRooms', $searchParameter['rooms']);
            }

        }

        if (!empty($constraints)) {
            $query->matching(
                $query->logicalAnd($constraints)
            );

            if ($limit !== null) {
                $query->setLimit($limit);
            }

            return $query->execute();
        } else {
            return null;
        }

    }
}
