<?php

namespace Ifabrik\IfabRealestate\Domain\Model;


use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

/***
 *
 *  (c) 2019 ifabrik GmbH <info@ifababrik.de>, ifabrik GmbH
 *
 ***/

/**
 * Parking
 */
class Parking extends AbstractEntity
{

    /**
     * name
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
