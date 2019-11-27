<?php
/**
 * License: This file is part of the package ifabrik/ifab_realestate.
 * For the full copyright and license information, please read the
 * license file that was distributed with this source code.
 *
 * @copyright 2019 i-fabrik GmbH
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
     * objektarttypeRelation
     *
     * @var \Ifabrik\IfabRealestate\Domain\Model\PropertyType
     */
    protected $objektarttypeRelation = null;

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
}
