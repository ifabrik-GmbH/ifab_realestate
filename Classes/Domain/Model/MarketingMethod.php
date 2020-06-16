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
 * MarketingMethod
 */
class MarketingMethod extends AbstractEntity
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
