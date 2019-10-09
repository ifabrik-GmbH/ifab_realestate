<?php
namespace Ifabrik\IfabRealestate\Domain\Model;


/***
 *
 *  (c) 2019 ifabrik GmbH <info@ifababrik.de>, ifabrik GmbH
 *
 ***/
/**
 * Attachments
 */
class Attachments extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * file
     * 
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @cascade remove
     */
    protected $file = null;

    /**
     * attachmentGroupValueRel
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ifabrik\IfabRealestate\Domain\Model\Attachmentgroupvalue>
     * @cascade remove
     */
    protected $attachmentGroupValueRel = null;

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
        $this->attachmentGroupValueRel = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
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
    public function setFile(\TYPO3\CMS\Extbase\Domain\Model\FileReference $file)
    {
        $this->file = $file;
    }

    /**
     * Adds a attachmentGroupValueRel
     * 
     * @param \Ifabrik\IfabRealestate\Domain\Model\Attachmentgroupvalue $attachmentTypeValueRel
     * @return void
     */
    public function addAttachmentGroupValueRel(\Ifabrik\IfabRealestate\Domain\Model\Attachmentgroupvalue $attachmentGroupValueRel)
    {
        $this->attachmentGroupValueRel->attach($attachmentGroupValueRel);
    }

    /**
     * Removes a attachmentGroupValueRel
     * 
     * @param \Ifabrik\IfabRealestate\Domain\Model\Attachmentgroupvalue $attachmentTypeValueRelToRemove The AttachmentTypeValue to be removed
     * @return void
     */
    public function removeAttachmentGroupValueRel(\Ifabrik\IfabRealestate\Domain\Model\Attachmentgroupvalue $attachmentGroupValueRelToRemove)
    {
        $this->attachmentGroupValueRel->detach($attachmentGroupValueRelToRemove);
    }

    /**
     * Returns the attachmentTypeValueRel
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ifabrik\IfabRealestate\Domain\Model\Attachmentgroupvalue> $attachmentGroupValueRel
     */
    public function getAttachmentGroupValueRel()
    {
        return $this->attachmentGroupValueRel;
    }

    /**
     * Sets the attachmentGroupValueRel
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ifabrik\IfabRealestate\Domain\Model\Attachmentgroupvalue> $attachmentGroupValueRel
     * @return void
     */
    public function setAttachmentGroupValueRel(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $attachmentGroupValueRel)
    {
        $this->attachmentGroupValueRel = $attachmentGroupValueRel;
    }
}
