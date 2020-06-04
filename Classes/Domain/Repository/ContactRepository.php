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
 * The repository for Contacts
 */
class ContactRepository extends Repository
{
    /**
     * @param $email
     * @param $surname
     * @param $name
     * @return array|\TYPO3\CMS\Extbase\Persistence\QueryResultInterface
     */
    public function findByFields($email, $surname, $name)
    {
        $query = $this->createQuery();
        $query->getQuerySettings()->setRespectStoragePage(FALSE);
        $query->matching(
            $query->logicalAnd(
                [
                    $query->equals('directEmail', $email),
                    $query->equals('name', $name),
                    $query->equals('surname', $surname),
                ]
            )
        );

        return $query->execute();
    }
}
