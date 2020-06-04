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
 * The repository for PropertyUsages
 */
class PropertyUsageRepository extends Repository
{
    /**
     * @param string $name
     *
     * @return array|\TYPO3\CMS\Extbase\Persistence\QueryResultInterface
     */
    public function findByName($name)
    {
        $query = $this->createQuery();
        $query->getQuerySettings()->setRespectStoragePage(FALSE);
        $query->matching(
            $query->logicalAnd(
                [
                    $query->equals('name', $name)
                ]
            )
        );
        return $query->execute()[0];
    }
}
