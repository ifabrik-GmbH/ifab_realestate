<?php
/**
 * License: This file is part of the package ifabrik/ifab_realestate.
 * For the full copyright and license information, please read the
 * license file that was distributed with this source code.
 *
 * @copyright concept & creation by ifabrik.de, Leipzig
 * @author    Aristeidis Karavas
 */

namespace Ifabrik\IfabRealestate\Domain\Model;

/**
 * PropertyTypeValue
 */
class PropertyAction extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * importStatus
     *
     * @var bool
     */
    protected $importStatus = false;

    /**
     * isImported
     *
     * @var bool
     */
    protected $isImported = false;

    /**
     * Select the nature of the property
     *
     * @var \Ifabrik\IfabRealestate\Domain\Model\PropertyActionValue
     */
    protected $propertyactionattributevalueRelation = null;

    /**
     * Select the nature of the property
     *
     * @var \Ifabrik\IfabRealestate\Domain\Model\PropertyActionAttribute
     */
    protected $propertyactionattributeRelation = null;

    /**
     * Returns the $propertyactionattributevalueRelation
     *
     * @return \Ifabrik\IfabRealestate\Domain\Model\PropertyActionValue $propertyactionattributevalueRelation
     */
    public function getPropertyactionattributevalueRelation()
    {
        return $this->propertyactionattributevalueRelation;
    }

    /**
     * Sets the $propertyactionattributevalueRelation
     *
     * @param \Ifabrik\IfabRealestate\Domain\Model\PropertyActionValue $propertyactionattributevalueRelation
     * @return void
     */
    public function setPropertyactionattributevalueRelation(PropertyActionValue $propertyactionattributevalueRelation)
    {
        $this->propertyactionattributevalueRelation = $propertyactionattributevalueRelation;
    }

    /**
     * Returns the $propertyactionattributeRelation
     *
     * @return \Ifabrik\IfabRealestate\Domain\Model\PropertyActionAttribute $propertyactionattributeRelation
     */
    public function getPropertyactionattributeRelation ()
    {
        return $this->propertyactionattributeRelation ;
    }

    /**
     * Sets the $propertyactionattributeRelation
     *
     * @param \Ifabrik\IfabRealestate\Domain\Model\PropertyActionAttribute $propertyactionattributeRelation
     * @return void
     */
    public function setPropertyactionattributeRelation (PropertyActionAttribute $propertyactionattributeRelation )
    {
        $this->propertyactionattributeRelation = $propertyactionattributeRelation;
    }

    /**
     * Returns the importStatus
     *
     * @return bool $importStatus
     */
    public function getImportStatus()
    {
        return $this->importStatus;
    }

    /**
     * Sets the importStatus
     *
     * @param bool $importStatus
     * @return void
     */
    public function setImportStatus($importStatus)
    {
        $this->importStatus = $importStatus;
    }

    /**
     * Returns the isImported
     *
     * @return bool $isImported
     */
    public function getIsImported()
    {
        return $this->isImported;
    }

    /**
     * Sets the isImported
     *
     * @param bool $isImported
     * @return void
     */
    public function setIsImported($isImported)
    {
        $this->isImported = $isImported;
    }
}
