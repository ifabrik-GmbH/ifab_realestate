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
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

/**
 * Attachments
 */
class Attachments extends AbstractEntity
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
     * Attachment title
     *
     * @var string
     */
    protected $attachmentTitle = '';

    /**
     * Attachment format
     *
     * @var string
     */
    protected $attachmentFormat = '';

    /**
     * Attachment name
     *
     * @var string
     */
    protected $attachmentName = '';

    /**
     * property id
     *
     * @var int
     */
    protected $propertyId = '';

    /**
     * file
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $file = null;

    /**
     * attachmentGroupValueRel
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ifabrik\IfabRealestate\Domain\Model\AttachmentGroupValue>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $attachmentGroupValueRel = null;

    /**
     * isSharingImage
     *
     * @var bool
     */
    protected $isSharingImage = false;

    /**
     * __construct
     */
    public function __construct()
    {

        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->attachmentGroupValueRel = new ObjectStorage();
    }

    /**
     * Returns the file
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $file
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Sets the file
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $file
     * @return void
     */
    public function setFile(FileReference $file)
    {
        $this->file = $file;
    }

    /**
     * Adds a attachmentGroupValueRel
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\Attachmentgroupvalue $attachmentTypeValueRel
     * @return void
     */
    public function addAttachmentGroupValueRel(
        AttachmentGroupValue $attachmentGroupValueRel
    ) {
        $this->attachmentGroupValueRel->attach($attachmentGroupValueRel);
    }

    /**
     * Removes a attachmentGroupValueRel
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\Attachmentgroupvalue $attachmentTypeValueRelToRemove The AttachmentTypeValue to be removed
     * @return void
     */
    public function removeAttachmentGroupValueRel(
        AttachmentGroupValue $attachmentGroupValueRelToRemove
    ) {
        $this->attachmentGroupValueRel->detach($attachmentGroupValueRelToRemove);
    }

    /**
     * Returns the attachmentTypeValueRel
     *
     * @return ObjectStorage<\Ifabrik\IfabRealestate\Domain\Model\AttachmentGroupValue> $attachmentGroupValueRel
     */
    public function getAttachmentGroupValueRel()
    {
        return $this->attachmentGroupValueRel;
    }

    /**
     * Sets the attachmentGroupValueRel
     *
     * @param ObjectStorage<\Ifabrik\IfabRealestate\Domain\Model\AttachmentGroupValue> $attachmentGroupValueRel
     * @return void
     */
    public function setAttachmentGroupValueRel(ObjectStorage $attachmentGroupValueRel)
    {
        $this->attachmentGroupValueRel = $attachmentGroupValueRel;
    }

    /**
     * Returns the isSharingImage
     *
     * @return bool $isSharingImage
     */
    public function getIsSharingImage()
    {
        return $this->isSharingImage;
    }

    /**
     * Sets the isSharingImage
     *
     * @param bool $isSharingImage
     * @return void
     */
    public function setIsSharingImage($isSharingImage)
    {
        $this->isSharingImage = $isSharingImage;
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

    /**
     * Returns the attachmentTitle
     *
     * @return string $attachmentTitle
     */
    public function getAttachmentTitle()
    {
        return $this->attachmentTitle;
    }

    /**
     * Sets the attachmentTitle
     *
     * @param string $attachmentTitle
     * @return void
     */
    public function setAttachmentTitle($attachmentTitle)
    {
        $this->attachmentTitle = $attachmentTitle;
    }

    /**
     * Returns the attachmentFormat
     *
     * @return string $attachmentFormat
     */
    public function getAttachmentFormat()
    {
        return $this->attachmentFormat;
    }

    /**
     * Sets the attachmentFormat
     *
     * @param string $attachmentFormat
     * @return void
     */
    public function setAttachmentFormat($attachmentFormat)
    {
        $this->attachmentFormat = $attachmentFormat;
    }

    /**
     * Returns the attachmentName
     *
     * @return string $attachmentName
     */
    public function getAttachmentName()
    {
        return $this->attachmentName;
    }

    /**
     * Sets the attachmentName
     *
     * @param string $attachmentName
     * @return void
     */
    public function setAttachmentName($attachmentName)
    {
        $this->attachmentName = $attachmentName;
    }

    /**
     * Returns the propertyId
     *
     * @return int $propertyId
     */
    public function getPropertyId()
    {
        return $this->propertyId;
    }

    /**
     * Sets the propertyId
     *
     * @param int $propertyId
     * @return void
     */
    public function setPropertyId($propertyId)
    {
        $this->propertyId = $propertyId;
    }
}
