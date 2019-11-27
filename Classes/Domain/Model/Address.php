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
 * Address
 */
class Address extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * The name of the street
     *
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $street = '';

    /**
     * The number of the building
     *
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $addressNumber = '';

    /**
     * The area in which the address is located.
     *
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $area = '';

    /**
     * The ZIP code of the address
     *
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $zip = '';

    /**
     * The state in which the address is located.
     *
     * @var string
     */
    protected $state = '';

    /**
     * The country in which the address is located.
     *
     * @var string
     */
    protected $country = '';

    /**
     * The municipality code in which the address is located.
     *
     * @var string
     */
    protected $municipalityCode = '';

    /**
     * The subdistrict code in which the address is located.
     *
     * @var string
     */
    protected $subdistrict = '';

    /**
     * The additional region in which the address is located.
     *
     * @var string
     */
    protected $regionalAddition = '';

    /**
     * Returns the street
     *
     * @return string $street
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Sets the street
     *
     * @param string $street
     * @return void
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * Returns the addressNumber
     *
     * @return string $addressNumber
     */
    public function getAddressNumber()
    {
        return $this->addressNumber;
    }

    /**
     * Sets the addressNumber
     *
     * @param string $addressNumber
     * @return void
     */
    public function setAddressNumber($addressNumber)
    {
        $this->addressNumber = $addressNumber;
    }

    /**
     * Returns the area
     *
     * @return string $area
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Sets the area
     *
     * @param string $area
     * @return void
     */
    public function setArea($area)
    {
        $this->area = $area;
    }

    /**
     * Returns the zip
     *
     * @return string $zip
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Sets the zip
     *
     * @param string $zip
     * @return void
     */
    public function setZip($zip)
    {
        $this->zip = $zip;
    }

    /**
     * Returns the state
     *
     * @return string $state
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Sets the state
     *
     * @param string $state
     * @return void
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * Returns the country
     *
     * @return string $country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets the country
     *
     * @param string $country
     * @return void
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * Returns the municipalityCode
     *
     * @return string $municipalityCode
     */
    public function getMunicipalityCode()
    {
        return $this->municipalityCode;
    }

    /**
     * Sets the municipalityCode
     *
     * @param string $municipalityCode
     * @return void
     */
    public function setMunicipalityCode($municipalityCode)
    {
        $this->municipalityCode = $municipalityCode;
    }

    /**
     * Returns the subdistrict
     *
     * @return string $subdistrict
     */
    public function getSubdistrict()
    {
        return $this->subdistrict;
    }

    /**
     * Sets the subdistrict
     *
     * @param string $subdistrict
     * @return void
     */
    public function setSubdistrict($subdistrict)
    {
        $this->subdistrict = $subdistrict;
    }

    /**
     * Returns the regionalAddition
     *
     * @return string $regionalAddition
     */
    public function getRegionalAddition()
    {
        return $this->regionalAddition;
    }

    /**
     * Sets the regionalAddition
     *
     * @param string $regionalAddition
     * @return void
     */
    public function setRegionalAddition($regionalAddition)
    {
        $this->regionalAddition = $regionalAddition;
    }
}
