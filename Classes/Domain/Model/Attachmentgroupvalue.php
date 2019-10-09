<?php
namespace Ifabrik\IfabRealestate\Domain\Model;


/***
 *
 *  (c) 2019 ifabrik GmbH <info@ifababrik.de>, ifabrik GmbH
 *
 ***/
/**
 * attachmentGroupRel
 */
class Attachmentgroupvalue extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * value
     * 
     * @var string
     */
    protected $value = '';

    /**
     * attachmentGroupRel
     * 
     * @var \Ifabrik\IfabRealestate\Domain\Model\Attachmentgroup
     */
    protected $attachmentGroupRel = null;

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
     * Returns the attachmentGroupRel
     * 
     * @return \Ifabrik\IfabRealestate\Domain\Model\Attachmentgroup $attachmentGroupRel
     */
    public function getAttachmentGroupRel()
    {
        return $this->attachmentGroupRel;
    }

    /**
     * Sets the $attachmentGroupRel
     * 
     * @param \Ifabrik\IfabRealestate\Domain\Model\Attachmentgroup $attachmentGroupRel
     * @return void
     */
    public function setAttachmentGroupRel(\Ifabrik\IfabRealestate\Domain\Model\Attachmentgroup $attachmentGroupRel)
    {
        $this->attachmentGroupRel = $attachmentGroupRel;
    }
}
