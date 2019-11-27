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
     * file
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $file = null;

    /**
     * attachmentGroupValueRel
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ifabrik\IfabRealestate\Domain\Model\Attachmentgroupvalue>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
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
        Attachmentgroupvalue $attachmentGroupValueRel
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
        Attachmentgroupvalue $attachmentGroupValueRelToRemove
    ) {
        $this->attachmentGroupValueRel->detach($attachmentGroupValueRelToRemove);
    }

    /**
     * Returns the attachmentTypeValueRel
     *
     * @return ObjectStorage<\Ifabrik\IfabRealestate\Domain\Model\Attachmentgroupvalue> $attachmentGroupValueRel
     */
    public function getAttachmentGroupValueRel()
    {
        return $this->attachmentGroupValueRel;
    }

    /**
     * Sets the attachmentGroupValueRel
     *
     * @param ObjectStorage<\Ifabrik\IfabRealestate\Domain\Model\Attachmentgroupvalue> $attachmentGroupValueRel
     * @return void
     */
    public function setAttachmentGroupValueRel(ObjectStorage $attachmentGroupValueRel)
    {
        $this->attachmentGroupValueRel = $attachmentGroupValueRel;
    }
}
