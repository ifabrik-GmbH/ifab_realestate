<?php
/**
 * License: This file is part of the package ifabrik/ifab_realestate.
 * For the full copyright and license information, please read the
 * license file that was distributed with this source code.
 *
 * @copyright 2019 i-fabrik GmbH
 * @author    Aristeidis Karavas
 */

namespace Ifabrik\IfabRealestate\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Exception\InvalidQueryException;
use TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings;
use TYPO3\CMS\Extbase\Persistence\QueryResultInterface;
use TYPO3\CMS\Extbase\Persistence\Repository;

/**
 * The repository for Addresses
 */
class AddressRepository extends Repository
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
     * returns a list of properties defined by the address search parameter.
     *
     * @param array $searchParameter
     * @return QueryResultInterface|array
     * @throws InvalidQueryException
     */
    public function findSelectedAddresses($searchParameter)
    {
        $query = $this->createQuery();
        $query->getQuerySettings()->setRespectStoragePage(false);
        $constrains = array();
        $trimmedParameter = trim($searchParameter);
        $subjectParameter = explode(' ', $trimmedParameter);
        $subjectConstrains = array();
        foreach ($subjectParameter as $subject) {
            $subjectConstrains[] =
                $query->logicalOr(
                    [
                        $query->like('street', '%' . $subject . '%'),
                        $query->like('address_number', '%' . $subject . '%'),
                        $query->like('area', '%' . $subject . '%'),
                        $query->like('zip', '%' . $subject . '%')
                    ]
                );
        }

        if (count($subjectConstrains) > 1) {
            $constrains[] = $query->logicalOr($subjectConstrains);
        } else {
            $constrains[] = $subjectConstrains[0];
        }

        if (!empty($constrains)) {
            $query->matching(
                $query->logicalAnd($constrains)
            );
            return $query->execute();
        } else {
            return null;
        }
    }
}
