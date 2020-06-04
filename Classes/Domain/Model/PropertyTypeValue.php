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
class PropertyTypeValue extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * The property type value.
     *
     * @var string
     */
    protected $value = '';

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
     * objektarttypeRelation
     *
     * @var \Ifabrik\IfabRealestate\Domain\Model\PropertyType
     */
    protected $objektarttypeRelation = null;
    /**
     * propertytypevaluerel
     *
     * @var \Ifabrik\IfabRealestate\Domain\Model\Propertytypevaluerel
     */
    protected $propertytypevaluerel = null;

    /**
     * property
     * @var int
     */
    protected $property = null;

    /**
     * Returns the value
     *
     * @return string $value
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets the value
     *
     * @param string $value
     * @return void
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * Returns the property
     *
     * @return string $property
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * Sets the property
     *
     * @param string $property
     * @return void
     */
    public function setProperty($property)
    {
        $this->property = $property;
    }

    /**
     * Returns the objektarttypeRelation
     *
     * @return \Ifabrik\IfabRealestate\Domain\Model\PropertyType $objektarttypeRelation
     */
    public function getObjektarttypeRelation()
    {
        return $this->objektarttypeRelation;
    }

    /**
     * Sets the objektarttypeRelation
     *
     * @param \Ifabrik\IfabRealestate\Domain\Model\PropertyType $objektarttypeRelation
     * @return void
     */
    public function setObjektarttypeRelation(PropertyType $objektarttypeRelation)
    {
        $this->objektarttypeRelation = $objektarttypeRelation;
    }

    /**
     * Returns the propertytypevaluerel
     *
     * @return \Ifabrik\IfabRealestate\Domain\Model\Propertytypevaluerel $propertytypevaluerel
     */
    public function getPropertytypevaluerel()
    {
        return $this->propertytypevaluerel;
    }

    /**
     * Sets the propertytypevaluerel
     *
     * @param \Ifabrik\IfabRealestate\Domain\Model\Propertytypevaluerel $propertytypevaluerel
     * @return void
     */
    public function setPropertytypevaluerel(Propertytypevaluerel $propertytypevaluerel)
    {
        $this->propertytypevaluerel = $propertytypevaluerel;
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
