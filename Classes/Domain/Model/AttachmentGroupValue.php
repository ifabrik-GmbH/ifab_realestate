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

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

/**
 * attachmentGroupRel
 */
class AttachmentGroupValue extends AbstractEntity
{

    /**
     * value
     *
     * @var \Ifabrik\IfabRealestate\Domain\Model\Attachmentgroupvaluerel
     */
    protected $valueRel = '';

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
     * attachmentGroupRel
     *
     * @var \Ifabrik\IfabRealestate\Domain\Model\AttachmentGroup
     */
    protected $attachmentGroupRel = null;

    /**
     * Returns the value
     *
     * @return \Ifabrik\IfabRealestate\Domain\Model\Attachmentgroupvaluerel $valueRel
     */
    public function getValueRel()
    {
        return $this->valueRel;
    }

    /**
     * Sets the value
     *
     * @param \Ifabrik\IfabRealestate\Domain\Model\Attachmentgroupvaluerel $valueRel
     * @return void
     */
    public function setValueRel(Attachmentgroupvaluerel $valueRel)
    {
        $this->valueRel = $valueRel;
    }

    /**
     * Returns the attachmentGroupRel
     *
     * @return \Ifabrik\IfabRealestate\Domain\Model\AttachmentGroup $attachmentGroupRel
     */
    public function getAttachmentGroupRel()
    {
        return $this->attachmentGroupRel;
    }

    /**
     * Sets the $attachmentGroupRel
     *
     * @param \Ifabrik\IfabRealestate\Domain\Model\AttachmentGroup $attachmentGroupRel
     * @return void
     */
    public function setAttachmentGroupRel(AttachmentGroup $attachmentGroupRel)
    {
        $this->attachmentGroupRel = $attachmentGroupRel;
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
