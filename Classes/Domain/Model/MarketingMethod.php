<?php
namespace Ifabrik\IfabRealestate\Domain\Model;


/***
 *
 *  (c) 2019 ifabrik GmbH <info@ifababrik.de>, ifabrik GmbH
 *
 ***/
/**
 * MarketingMethod
 */
class MarketingMethod extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * The name of the marketing method.
     * For example:
     * Buy
     * Rent
     * Leasing
     * 
     * @var string
     */
    protected $name = '';

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
}