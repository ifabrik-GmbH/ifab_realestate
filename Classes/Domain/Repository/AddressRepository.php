<?php
namespace Ifabrik\IfabRealestate\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings;

/***
 *
 *  (c) 2019 ifabrik GmbH <info@ifababrik.de>, ifabrik GmbH
 *
 ***/
/**
 * The repository for Addresses
 */
class AddressRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    public function initializeObject() {
        $querySettings =  $this->objectManager->get(Typo3QuerySettings::class);
        $querySettings->setRespectStoragePage(FALSE);
    }

    public function findSelectedAddresses($searchParameter)
    {
        $query = $this->createQuery();
        $query->getQuerySettings()->setRespectStoragePage(FALSE);
        $constrains = array();
        $trimmedParameter = trim($searchParameter);
        $subjectParameter = explode(' ', $trimmedParameter);
        $subjectConstrains = array();
        foreach ($subjectParameter as $subject)
        {
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

        if (count($subjectConstrains) > 1)
        {
            $constrains[] = $query->logicalOr($subjectConstrains);
        }
        else
        {
            $constrains[] = $subjectConstrains[0];
        }

        if (!empty($constrains))
        {
            $query->matching(
                $query->logicalAnd($constrains)
            );
            return $query->execute();
        }
        else {
            return null;
        }
    }
}
