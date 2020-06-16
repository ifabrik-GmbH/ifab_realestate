<?php
/**
 * License: This file is part of the package ifabrik/ifab_realestate.
 * For the full copyright and license information, please read the
 * license file that was distributed with this source code.
 *
 * @copyright concept & creation by ifabrik.de, Leipzig
 * @author    Aristeidis Karavas
 */

namespace Ifabrik\IfabRealestate\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Repository;

/**
 * The repository for ContactAddresses
 */
class ContactAddressRepository extends Repository
{
    /**
     * @param $object
     * @return array|\TYPO3\CMS\Extbase\Persistence\QueryResultInterface|null
     */
    public function findByAddress($object)
    {
        $query = $this->createQuery();
        $query->getQuerySettings()->setRespectStoragePage(FALSE);
        $query->matching(
            $query->logicalAnd(
                [
                    $query->equals('street', $object['strasse']),
                    $query->equals('zip', $object['plz']),
                    $query->equals('area', $object['ort']),
                    $query->equals('addressNumber', $object['hausnummer'])
                ]
            )
        );

        return $query->execute();
    }
}
