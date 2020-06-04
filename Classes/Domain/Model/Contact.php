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

use TYPO3\CMS\Extbase\Domain\Model\FileReference;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

/**
 * Contact
 */
class Contact extends AbstractEntity
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
     * The unique employee number if present.
     *
     * @var string
     */
    protected $employeeNumber = '';

    /**
     * The name of the employee
     *
     * @var string
     */
    protected $name = '';

    /**
     * The surname of the employee
     *
     * @var string
     */
    protected $surname = '';

    /**
     * The title of the employee
     *
     * @var string
     */
    protected $title = '';

    /**
     * The central email of the employee
     *
     * @var string
     */
    protected $centralEmail = '';

    /**
     * The direct email of the employee
     *
     * @var string
     */
    protected $directEmail = '';

    /**
     * The private email of the employee
     *
     * @var string
     */
    protected $privateEmail = '';

    /**
     * The central telephone of the employee
     *
     * @var string
     */
    protected $centralTel = '';

    /**
     * The direct telephone of the employee
     *
     * @var string
     */
    protected $directTel = '';

    /**
     * The private telephone of the employee
     *
     * @var string
     */
    protected $privateTel = '';

    /**
     * The fax of the employee
     *
     * @var string
     */
    protected $fax = '';

    /**
     * The mobile phone of the employee
     *
     * @var string
     */
    protected $mobilePhone = '';

    /**
     * Employee's concent if his address should be visible to the website or not.
     *
     * @var bool
     */
    protected $hideAddress = false;

    /**
     * The post office of the contact
     *
     * @var string
     */
    protected $poBox = '';

    /**
     * The post office ZIP of the contact
     *
     * @var string
     */
    protected $poZip = '';

    /**
     * The post office area of the contact
     *
     * @var string
     */
    protected $poArea = '';

    /**
     * The image of the employee
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $image = null;

    /**
     * Select the address of the current contact
     *
     * @var \Ifabrik\IfabRealestate\Domain\Model\ContactAddress
     */
    protected $contactAddressRel = null;

    /**
     * Select the address of the current contact
     *
     * @var \Ifabrik\IfabRealestate\Domain\Model\Gender
     */
    protected $genderRel = null;

    /**
     * Returns the employeeNumber
     *
     * @return string $employeeNumber
     */
    public function getEmployeeNumber()
    {
        return $this->employeeNumber;
    }

    /**
     * Sets the employeeNumber
     *
     * @param string $employeeNumber
     * @return void
     */
    public function setEmployeeNumber($employeeNumber)
    {
        $this->employeeNumber = $employeeNumber;
    }

    /**
     * Returns the name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the surname
     *
     * @return string $surname
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Sets the surname
     *
     * @param string $surname
     * @return void
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    /**
     * Returns the title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Returns the centralEmail
     *
     * @return string $centralEmail
     */
    public function getCentralEmail()
    {
        return $this->centralEmail;
    }

    /**
     * Sets the centralEmail
     *
     * @param string $centralEmail
     * @return void
     */
    public function setCentralEmail($centralEmail)
    {
        $this->centralEmail = $centralEmail;
    }

    /**
     * Returns the directEmail
     *
     * @return string $directEmail
     */
    public function getDirectEmail()
    {
        return $this->directEmail;
    }

    /**
     * Sets the directEmail
     *
     * @param string $directEmail
     * @return void
     */
    public function setDirectEmail($directEmail)
    {
        $this->directEmail = $directEmail;
    }

    /**
     * Returns the privateEmail
     *
     * @return string $privateEmail
     */
    public function getPrivateEmail()
    {
        return $this->privateEmail;
    }

    /**
     * Sets the privateEmail
     *
     * @param string $privateEmail
     * @return void
     */
    public function setPrivateEmail($privateEmail)
    {
        $this->privateEmail = $privateEmail;
    }

    /**
     * Returns the centralTel
     *
     * @return string $centralTel
     */
    public function getCentralTel()
    {
        return $this->centralTel;
    }

    /**
     * Sets the centralTel
     *
     * @param string $centralTel
     * @return void
     */
    public function setCentralTel($centralTel)
    {
        $this->centralTel = $centralTel;
    }

    /**
     * Returns the directTel
     *
     * @return string $directTel
     */
    public function getDirectTel()
    {
        return $this->directTel;
    }

    /**
     * Sets the directTel
     *
     * @param string $directTel
     * @return void
     */
    public function setDirectTel($directTel)
    {
        $this->directTel = $directTel;
    }

    /**
     * Returns the privateTel
     *
     * @return string $privateTel
     */
    public function getPrivateTel()
    {
        return $this->privateTel;
    }

    /**
     * Sets the privateTel
     *
     * @param string $privateTel
     * @return void
     */
    public function setPrivateTel($privateTel)
    {
        $this->privateTel = $privateTel;
    }

    /**
     * Returns the fax
     *
     * @return string $fax
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Sets the fax
     *
     * @param string $fax
     * @return void
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
    }

    /**
     * Returns the mobilePhone
     *
     * @return string $mobilePhone
     */
    public function getMobilePhone()
    {
        return $this->mobilePhone;
    }

    /**
     * Sets the mobilePhone
     *
     * @param string $mobilePhone
     * @return void
     */
    public function setMobilePhone($mobilePhone)
    {
        $this->mobilePhone = $mobilePhone;
    }

    /**
     * Returns the hideAddress
     *
     * @return bool $hideAddress
     */
    public function getHideAddress()
    {
        return $this->hideAddress;
    }

    /**
     * Returns the boolean state of hideAddress
     *
     * @return bool
     */
    public function isHideAddress()
    {
        return $this->hideAddress;
    }

    /**
     * Sets the hideAddress
     *
     * @param bool $hideAddress
     * @return void
     */
    public function setHideAddress($hideAddress)
    {
        $this->hideAddress = $hideAddress;
    }

    /**
     * Returns the poBox
     *
     * @return string $poBox
     */
    public function getPoBox()
    {
        return $this->poBox;
    }

    /**
     * Sets the poBox
     *
     * @param string $poBox
     * @return void
     */
    public function setPoBox($poBox)
    {
        $this->poBox = $poBox;
    }

    /**
     * Returns the poZip
     *
     * @return string $poZip
     */
    public function getPoZip()
    {
        return $this->poZip;
    }

    /**
     * Sets the poZip
     *
     * @param string $poZip
     * @return void
     */
    public function setPoZip($poZip)
    {
        $this->poZip = $poZip;
    }

    /**
     * Returns the poArea
     *
     * @return string $poArea
     */
    public function getPoArea()
    {
        return $this->poArea;
    }

    /**
     * Sets the poArea
     *
     * @param string $poArea
     * @return void
     */
    public function setPoArea($poArea)
    {
        $this->poArea = $poArea;
    }

    /**
     * Returns the contactAddressRel
     *
     * @return \Ifabrik\IfabRealestate\Domain\Model\ContactAddress $contactAddressRel
     */
    public function getContactAddressRel()
    {
        return $this->contactAddressRel;
    }

    /**
     * Sets the contactAddressRel
     *
     * @param \Ifabrik\IfabRealestate\Domain\Model\ContactAddress $contactAddressRel
     * @return void
     */
    public function setContactAddressRel(ContactAddress $contactAddressRel)
    {
        $this->contactAddressRel = $contactAddressRel;
    }

    /**
     * Returns the image
     *
     * @return FileReference $image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Sets the image
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     * @return void
     */
    public function setImage(FileReference $image)
    {
        $this->image = $image;
    }

    /**
     * Returns the genderRel
     *
     * @return \Ifabrik\IfabRealestate\Domain\Model\Gender $genderRel
     */
    public function getGenderRel()
    {
        return $this->genderRel;
    }

    /**
     * Sets the genderRel
     *
     * @param \Ifabrik\IfabRealestate\Domain\Model\Gender $genderRel
     * @return void
     */
    public function setGenderRel(Gender $genderRel)
    {
        $this->genderRel = $genderRel;
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
