<?php
namespace Ifabrik\IfabRealestate\Domain\Model;


/***
 *
 *  (c) 2019 ifabrik GmbH <info@ifababrik.de>, ifabrik GmbH
 *
 ***/
/**
 * Create a new property
 */
class Property extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * Indicates the floor number on which the current  apartment is located.
     * 
     * @var string
     */
    protected $floor = '';

    /**
     * Indicates the number of floors of the whole building
     * 
     * @var string
     */
    protected $totalFloors = '';

    /**
     * Indicates the apartment number
     * 
     * @var string
     */
    protected $apartmentNumber = '';

    /**
     * Describes the extra nature of the property. For example: with furniture
     * 
     * @var string
     */
    protected $extraPropertyNature = '';

    /**
     * The full price for the property purchase
     * 
     * @var string
     */
    protected $purchase = '';

    /**
     * Indicates the net price for the property
     * 
     * @var string
     */
    protected $purchasePriceNet = '';

    /**
     * Indicates the gross price for the property
     * 
     * @var string
     */
    protected $purchasePriceGross = '';

    /**
     * Indicates the net cold rent price for the property
     * 
     * @var string
     */
    protected $netColdRent = '';

    /**
     * Indicates the cold rent price for the property
     * 
     * @var string
     */
    protected $coldRent = '';

    /**
     * Indicates the rent including heating  price for the property
     * 
     * @var string
     */
    protected $rentWithHeat = '';

    /**
     * Indicates the additional costs for the property
     * 
     * @var string
     */
    protected $additionalCosts = '';

    /**
     * Indicates the heating costs for the property
     * 
     * @var string
     */
    protected $heatingCosts = '';

    /**
     * Indicates the flat rent costs for the property
     * 
     * @var string
     */
    protected $flatRateRent = '';

    /**
     * Indicates the rent price per quadrat meter for the property
     * 
     * @var string
     */
    protected $rentPricePerQm = '';

    /**
     * Indicates the purchase price per quadrat meter for the property
     * 
     * @var string
     */
    protected $purchasePricePerQm = '';

    /**
     * Indicates the guarantee price for the property
     * 
     * @var string
     */
    protected $guaranteePrice = '';

    /**
     * Indicates the amount of months for the guarantee price
     * 
     * @var string
     */
    protected $guaranteePriceText = '';

    /**
     * Indicates the living space of the property
     * 
     * @var string
     */
    protected $livingSpace = '';

    /**
     * Indicates the usableArea of the property
     * 
     * @var string
     */
    protected $usableArea = '';

    /**
     * Indicates the total size of the property
     * 
     * @var string
     */
    protected $totalSize = '';

    /**
     * Indicates the load area of the property
     * 
     * @var string
     */
    protected $loadArea = '';

    /**
     * Indicates the storage area of the property
     * 
     * @var string
     */
    protected $storageArea = '';

    /**
     * Indicates the sales area of the property
     * 
     * @var string
     */
    protected $salesArea = '';

    /**
     * Indicates the free area of the property
     * 
     * @var string
     */
    protected $freeArea = '';

    /**
     * officeArea
     * 
     * @var string
     */
    protected $officeArea = '';

    /**
     * officePartArea
     * 
     * @var string
     */
    protected $officePartArea = '';

    /**
     * numberOfRooms
     * 
     * @var string
     */
    protected $numberOfRooms = '';

    /**
     * numberOfBedrooms
     * 
     * @var string
     */
    protected $numberOfBedrooms = '';

    /**
     * numberOfBathrooms
     * 
     * @var string
     */
    protected $numberOfBathrooms = '';

    /**
     * numberOfBalconies
     * 
     * @var string
     */
    protected $numberOfBalconies = '';

    /**
     * numberOfTerraces
     * 
     * @var string
     */
    protected $numberOfTerraces = '';

    /**
     * numberOfLogia
     * 
     * @var string
     */
    protected $numberOfLogia = '';

    /**
     * wgSuitable
     * 
     * @var bool
     */
    protected $wgSuitable = false;

    /**
     * fireplace
     * 
     * @var bool
     */
    protected $fireplace = false;

    /**
     * clima
     * 
     * @var bool
     */
    protected $clima = false;

    /**
     * constructionYear
     * 
     * @var string
     */
    protected $constructionYear = '';

    /**
     * constructionAge
     * 
     * @var string
     */
    protected $constructionAge = '';

    /**
     * epart
     * 
     * @var string
     */
    protected $epart = '';

    /**
     * expirationDate
     * 
     * @var string
     */
    protected $expirationDate = '';

    /**
     * energyConsumValue
     * 
     * @var string
     */
    protected $energyConsumValue = '';

    /**
     * primaryEnergySource
     * 
     * @var string
     */
    protected $primaryEnergySource = '';

    /**
     * electricityValue
     * 
     * @var string
     */
    protected $electricityValue = '';

    /**
     * heatValue
     * 
     * @var string
     */
    protected $heatValue = '';

    /**
     * valueClass
     * 
     * @var string
     */
    protected $valueClass = '';

    /**
     * creationDate
     * 
     * @var string
     */
    protected $creationDate = '';

    /**
     * creationYear
     * 
     * @var string
     */
    protected $creationYear = '';

    /**
     * building
     * 
     * @var string
     */
    protected $building = '';

    /**
     * propertyTitle
     * 
     * @var string
     */
    protected $propertyTitle = '';

    /**
     * propertyLocation
     * 
     * @var string
     */
    protected $propertyLocation = '';

    /**
     * propertyEquipment
     * 
     * @var string
     */
    protected $propertyEquipment = '';

    /**
     * propertyDescription
     * 
     * @var string
     */
    protected $propertyDescription = '';

    /**
     * additionInformation
     * 
     * @var string
     */
    protected $additionInformation = '';

    /**
     * propertyText
     * 
     * @var string
     */
    protected $propertyText = '';

    /**
     * availableFrom
     * 
     * @var string
     */
    protected $availableFrom = '';

    /**
     * propertyRelease
     * 
     * @var bool
     */
    protected $propertyRelease = false;

    /**
     * pets
     *
     * @var bool
     */
    protected $pets = false;

    /**
     * internalPropertyNumber
     * 
     * @var string
     */
    protected $internalPropertyNumber = '';

    /**
     * externalPropertyNumber
     * 
     * @var string
     */
    protected $externalPropertyNumber = '';

    /**
     * openImmoId
     * 
     * @var string
     */
    protected $openImmoId = '';

    /**
     * Select the usage of this property
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ifabrik\IfabRealestate\Domain\Model\PropertyUsage>
     */
    protected $propertyUsageRel = null;

    /**
     * Select the marketing method of this property
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ifabrik\IfabRealestate\Domain\Model\MarketingMethod>
     */
    protected $marketingMethodRel = null;

    /**
     * Select the nature of the property
     * 
     * @var \Ifabrik\IfabRealestate\Domain\Model\PropertyNature
     */
    protected $propertyNatureRel = null;

    /**
     * Define the exact nature of the property
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ifabrik\IfabRealestate\Domain\Model\PropertyTypeValue>
     * @cascade remove
     */
    protected $propertyTypeValueRel = null;

    /**
     * Select the address in which the property is located.
     * 
     * @var \Ifabrik\IfabRealestate\Domain\Model\Address
     */
    protected $addressRel = null;

    /**
     * Select the contacts who manage this property.
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ifabrik\IfabRealestate\Domain\Model\Contact>
     */
    protected $contactRel = null;

    /**
     * Select the contacts who manage this property.
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ifabrik\IfabRealestate\Domain\Model\BathroomType>
     */
    protected $bathroomRel = null;

    /**
     * Select the contacts who manage this property.
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ifabrik\IfabRealestate\Domain\Model\KitchenType>
     */
    protected $kitchenRel = null;

    /**
     * Select the contacts who manage this property.
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ifabrik\IfabRealestate\Domain\Model\FloorType>
     */
    protected $floorRel = null;

    /**
     * Select the contacts who manage this property.
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ifabrik\IfabRealestate\Domain\Model\HeatType>
     */
    protected $heatRel = null;

    /**
     * Select the contacts who manage this property.
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ifabrik\IfabRealestate\Domain\Model\ElevatorType>
     */
    protected $elevatorRel = null;

    /**
     * Select the contacts who manage this property.
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ifabrik\IfabRealestate\Domain\Model\Parking>
     */
    protected $parkingRel = null;

    /**
     * Select the contacts who manage this property.
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ifabrik\IfabRealestate\Domain\Model\FiringType>
     */
    protected $firingRel = null;

    /**
     * Select the contacts who manage this property.
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ifabrik\IfabRealestate\Domain\Model\Attachments>
     * @cascade remove
     */
    protected $attachmentsRel = null;

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
        $this->propertyUsageRel = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->marketingMethodRel = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->propertyTypeValueRel = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->contactRel = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->bathroomRel = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->kitchenRel = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->floorRel = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->heatRel = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->elevatorRel = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->parkingRel = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->firingRel = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->attachmentsRel = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the floor
     * 
     * @return string $floor
     */
    public function getFloor()
    {
        return $this->floor;
    }

    /**
     * Sets the floor
     * 
     * @param string $floor
     * @return void
     */
    public function setFloor($floor)
    {
        $this->floor = $floor;
    }

    /**
     * Returns the totalFloors
     * 
     * @return string $totalFloors
     */
    public function getTotalFloors()
    {
        return $this->totalFloors;
    }

    /**
     * Sets the totalFloors
     * 
     * @param string $totalFloors
     * @return void
     */
    public function setTotalFloors($totalFloors)
    {
        $this->totalFloors = $totalFloors;
    }

    /**
     * Returns the apartmentNumber
     * 
     * @return string $apartmentNumber
     */
    public function getApartmentNumber()
    {
        return $this->apartmentNumber;
    }

    /**
     * Sets the apartmentNumber
     * 
     * @param string $apartmentNumber
     * @return void
     */
    public function setApartmentNumber($apartmentNumber)
    {
        $this->apartmentNumber = $apartmentNumber;
    }

    /**
     * Returns the extraPropertyNature
     * 
     * @return string $extraPropertyNature
     */
    public function getExtraPropertyNature()
    {
        return $this->extraPropertyNature;
    }

    /**
     * Sets the extraPropertyNature
     * 
     * @param string $extraPropertyNature
     * @return void
     */
    public function setExtraPropertyNature($extraPropertyNature)
    {
        $this->extraPropertyNature = $extraPropertyNature;
    }

    /**
     * Adds a PropertyUsage
     * 
     * @param \Ifabrik\IfabRealestate\Domain\Model\PropertyUsage $propertyUsageRel
     * @return void
     */
    public function addPropertyUsageRel(\Ifabrik\IfabRealestate\Domain\Model\PropertyUsage $propertyUsageRel)
    {
        $this->propertyUsageRel->attach($propertyUsageRel);
    }

    /**
     * Removes a PropertyUsage
     * 
     * @param \Ifabrik\IfabRealestate\Domain\Model\PropertyUsage $propertyUsageRelToRemove The PropertyUsage to be removed
     * @return void
     */
    public function removePropertyUsageRel(\Ifabrik\IfabRealestate\Domain\Model\PropertyUsage $propertyUsageRelToRemove)
    {
        $this->propertyUsageRel->detach($propertyUsageRelToRemove);
    }

    /**
     * Returns the propertyUsageRel
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ifabrik\IfabRealestate\Domain\Model\PropertyUsage> $propertyUsageRel
     */
    public function getPropertyUsageRel()
    {
        return $this->propertyUsageRel;
    }

    /**
     * Sets the propertyUsageRel
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ifabrik\IfabRealestate\Domain\Model\PropertyUsage> $propertyUsageRel
     * @return void
     */
    public function setPropertyUsageRel(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $propertyUsageRel)
    {
        $this->propertyUsageRel = $propertyUsageRel;
    }

    /**
     * Adds a MarketingMethod
     * 
     * @param \Ifabrik\IfabRealestate\Domain\Model\MarketingMethod $marketingMethodRel
     * @return void
     */
    public function addMarketingMethodRel(\Ifabrik\IfabRealestate\Domain\Model\MarketingMethod $marketingMethodRel)
    {
        $this->marketingMethodRel->attach($marketingMethodRel);
    }

    /**
     * Removes a MarketingMethod
     * 
     * @param \Ifabrik\IfabRealestate\Domain\Model\MarketingMethod $marketingMethodRelToRemove The MarketingMethod to be removed
     * @return void
     */
    public function removeMarketingMethodRel(\Ifabrik\IfabRealestate\Domain\Model\MarketingMethod $marketingMethodRelToRemove)
    {
        $this->marketingMethodRel->detach($marketingMethodRelToRemove);
    }

    /**
     * Returns the marketingMethodRel
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ifabrik\IfabRealestate\Domain\Model\MarketingMethod> $marketingMethodRel
     */
    public function getMarketingMethodRel()
    {
        return $this->marketingMethodRel;
    }

    /**
     * Sets the marketingMethodRel
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ifabrik\IfabRealestate\Domain\Model\MarketingMethod> $marketingMethodRel
     * @return void
     */
    public function setMarketingMethodRel(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $marketingMethodRel)
    {
        $this->marketingMethodRel = $marketingMethodRel;
    }

    /**
     * Returns the propertyNatureRel
     * 
     * @return \Ifabrik\IfabRealestate\Domain\Model\PropertyNature $propertyNatureRel
     */
    public function getPropertyNatureRel()
    {
        return $this->propertyNatureRel;
    }

    /**
     * Sets the propertyNatureRel
     * 
     * @param \Ifabrik\IfabRealestate\Domain\Model\PropertyNature $propertyNatureRel
     * @return void
     */
    public function setPropertyNatureRel(\Ifabrik\IfabRealestate\Domain\Model\PropertyNature $propertyNatureRel)
    {
        $this->propertyNatureRel = $propertyNatureRel;
    }

    /**
     * Adds a PropertyTypeValue
     * 
     * @param \Ifabrik\IfabRealestate\Domain\Model\PropertyTypeValue $propertyTypeValueRel
     * @return void
     */
    public function addPropertyTypeValueRel(\Ifabrik\IfabRealestate\Domain\Model\PropertyTypeValue $propertyTypeValueRel)
    {
        $this->propertyTypeValueRel->attach($propertyTypeValueRel);
    }

    /**
     * Removes a PropertyTypeValue
     * 
     * @param \Ifabrik\IfabRealestate\Domain\Model\PropertyTypeValue $propertyTypeValueRelToRemove The PropertyTypeValue to be removed
     * @return void
     */
    public function removePropertyTypeValueRel(\Ifabrik\IfabRealestate\Domain\Model\PropertyTypeValue $propertyTypeValueRelToRemove)
    {
        $this->propertyTypeValueRel->detach($propertyTypeValueRelToRemove);
    }

    /**
     * Returns the propertyTypeValueRel
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ifabrik\IfabRealestate\Domain\Model\PropertyTypeValue> $propertyTypeValueRel
     */
    public function getPropertyTypeValueRel()
    {
        return $this->propertyTypeValueRel;
    }

    /**
     * Sets the propertyTypeValueRel
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ifabrik\IfabRealestate\Domain\Model\PropertyTypeValue> $propertyTypeValueRel
     * @return void
     */
    public function setPropertyTypeValueRel(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $propertyTypeValueRel)
    {
        $this->propertyTypeValueRel = $propertyTypeValueRel;
    }

    /**
     * Returns the addressRel
     * 
     * @return \Ifabrik\IfabRealestate\Domain\Model\Address $addressRel
     */
    public function getAddressRel()
    {
        return $this->addressRel;
    }

    /**
     * Sets the addressRel
     * 
     * @param \Ifabrik\IfabRealestate\Domain\Model\Address $addressRel
     * @return void
     */
    public function setAddressRel(\Ifabrik\IfabRealestate\Domain\Model\Address $addressRel)
    {
        $this->addressRel = $addressRel;
    }

    /**
     * Adds a Contact
     * 
     * @param \Ifabrik\IfabRealestate\Domain\Model\Contact $contactRel
     * @return void
     */
    public function addContactRel(\Ifabrik\IfabRealestate\Domain\Model\Contact $contactRel)
    {
        $this->contactRel->attach($contactRel);
    }

    /**
     * Removes a Contact
     * 
     * @param \Ifabrik\IfabRealestate\Domain\Model\Contact $contactRelToRemove The Contact to be removed
     * @return void
     */
    public function removeContactRel(\Ifabrik\IfabRealestate\Domain\Model\Contact $contactRelToRemove)
    {
        $this->contactRel->detach($contactRelToRemove);
    }

    /**
     * Returns the contactRel
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ifabrik\IfabRealestate\Domain\Model\Contact> $contactRel
     */
    public function getContactRel()
    {
        return $this->contactRel;
    }

    /**
     * Sets the contactRel
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ifabrik\IfabRealestate\Domain\Model\Contact> $contactRel
     * @return void
     */
    public function setContactRel(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $contactRel)
    {
        $this->contactRel = $contactRel;
    }

    /**
     * Returns the purchase
     * 
     * @return string $purchase
     */
    public function getPurchase()
    {
        return $this->purchase;
    }

    /**
     * Sets the purchase
     * 
     * @param string $purchase
     * @return void
     */
    public function setPurchase($purchase)
    {
        $this->purchase = $purchase;
    }

    /**
     * Returns the purchasePriceNet
     * 
     * @return string $purchasePriceNet
     */
    public function getPurchasePriceNet()
    {
        return $this->purchasePriceNet;
    }

    /**
     * Sets the purchasePriceNet
     * 
     * @param string $purchasePriceNet
     * @return void
     */
    public function setPurchasePriceNet($purchasePriceNet)
    {
        $this->purchasePriceNet = $purchasePriceNet;
    }

    /**
     * Returns the purchasePriceGross
     * 
     * @return string $purchasePriceGross
     */
    public function getPurchasePriceGross()
    {
        return $this->purchasePriceGross;
    }

    /**
     * Sets the purchasePriceGross
     * 
     * @param string $purchasePriceGross
     * @return void
     */
    public function setPurchasePriceGross($purchasePriceGross)
    {
        $this->purchasePriceGross = $purchasePriceGross;
    }

    /**
     * Returns the netColdRent
     * 
     * @return string $netColdRent
     */
    public function getNetColdRent()
    {
        return $this->netColdRent;
    }

    /**
     * Sets the netColdRent
     * 
     * @param string $netColdRent
     * @return void
     */
    public function setNetColdRent($netColdRent)
    {
        $this->netColdRent = $netColdRent;
    }

    /**
     * Returns the coldRent
     * 
     * @return string $coldRent
     */
    public function getColdRent()
    {
        return $this->coldRent;
    }

    /**
     * Sets the coldRent
     * 
     * @param string $coldRent
     * @return void
     */
    public function setColdRent($coldRent)
    {
        $this->coldRent = $coldRent;
    }

    /**
     * Returns the rentWithHeat
     * 
     * @return string $rentWithHeat
     */
    public function getRentWithHeat()
    {
        return $this->rentWithHeat;
    }

    /**
     * Sets the rentWithHeat
     * 
     * @param string $rentWithHeat
     * @return void
     */
    public function setRentWithHeat($rentWithHeat)
    {
        $this->rentWithHeat = $rentWithHeat;
    }

    /**
     * Returns the additionalCosts
     * 
     * @return string $additionalCosts
     */
    public function getAdditionalCosts()
    {
        return $this->additionalCosts;
    }

    /**
     * Sets the additionalCosts
     * 
     * @param string $additionalCosts
     * @return void
     */
    public function setAdditionalCosts($additionalCosts)
    {
        $this->additionalCosts = $additionalCosts;
    }

    /**
     * Returns the heatingCosts
     * 
     * @return string $heatingCosts
     */
    public function getHeatingCosts()
    {
        return $this->heatingCosts;
    }

    /**
     * Sets the heatingCosts
     * 
     * @param string $heatingCosts
     * @return void
     */
    public function setHeatingCosts($heatingCosts)
    {
        $this->heatingCosts = $heatingCosts;
    }

    /**
     * Returns the flatRateRent
     * 
     * @return string $flatRateRent
     */
    public function getFlatRateRent()
    {
        return $this->flatRateRent;
    }

    /**
     * Sets the flatRateRent
     * 
     * @param string $flatRateRent
     * @return void
     */
    public function setFlatRateRent($flatRateRent)
    {
        $this->flatRateRent = $flatRateRent;
    }

    /**
     * Returns the rentPricePerQm
     * 
     * @return string $rentPricePerQm
     */
    public function getRentPricePerQm()
    {
        return $this->rentPricePerQm;
    }

    /**
     * Sets the rentPricePerQm
     * 
     * @param string $rentPricePerQm
     * @return void
     */
    public function setRentPricePerQm($rentPricePerQm)
    {
        $this->rentPricePerQm = $rentPricePerQm;
    }

    /**
     * Returns the purchasePricePerQm
     * 
     * @return string $purchasePricePerQm
     */
    public function getPurchasePricePerQm()
    {
        return $this->purchasePricePerQm;
    }

    /**
     * Sets the purchasePricePerQm
     * 
     * @param string $purchasePricePerQm
     * @return void
     */
    public function setPurchasePricePerQm($purchasePricePerQm)
    {
        $this->purchasePricePerQm = $purchasePricePerQm;
    }

    /**
     * Returns the guaranteePrice
     * 
     * @return string $guaranteePrice
     */
    public function getGuaranteePrice()
    {
        return $this->guaranteePrice;
    }

    /**
     * Sets the guaranteePrice
     * 
     * @param string $guaranteePrice
     * @return void
     */
    public function setGuaranteePrice($guaranteePrice)
    {
        $this->guaranteePrice = $guaranteePrice;
    }

    /**
     * Returns the guaranteePriceText
     * 
     * @return string $guaranteePriceText
     */
    public function getGuaranteePriceText()
    {
        return $this->guaranteePriceText;
    }

    /**
     * Sets the guaranteePriceText
     * 
     * @param string $guaranteePriceText
     * @return void
     */
    public function setGuaranteePriceText($guaranteePriceText)
    {
        $this->guaranteePriceText = $guaranteePriceText;
    }

    /**
     * Returns the livingSpace
     * 
     * @return string $livingSpace
     */
    public function getLivingSpace()
    {
        return $this->livingSpace;
    }

    /**
     * Sets the livingSpace
     * 
     * @param string $livingSpace
     * @return void
     */
    public function setLivingSpace($livingSpace)
    {
        $this->livingSpace = $livingSpace;
    }

    /**
     * Returns the usableArea
     * 
     * @return string $usableArea
     */
    public function getUsableArea()
    {
        return $this->usableArea;
    }

    /**
     * Sets the usableArea
     * 
     * @param string $usableArea
     * @return void
     */
    public function setUsableArea($usableArea)
    {
        $this->usableArea = $usableArea;
    }

    /**
     * Returns the totalSize
     * 
     * @return string $totalSize
     */
    public function getTotalSize()
    {
        return $this->totalSize;
    }

    /**
     * Sets the totalSize
     * 
     * @param string $totalSize
     * @return void
     */
    public function setTotalSize($totalSize)
    {
        $this->totalSize = $totalSize;
    }

    /**
     * Returns the loadArea
     * 
     * @return string $loadArea
     */
    public function getLoadArea()
    {
        return $this->loadArea;
    }

    /**
     * Sets the loadArea
     * 
     * @param string $loadArea
     * @return void
     */
    public function setLoadArea($loadArea)
    {
        $this->loadArea = $loadArea;
    }

    /**
     * Returns the storageArea
     * 
     * @return string $storageArea
     */
    public function getStorageArea()
    {
        return $this->storageArea;
    }

    /**
     * Sets the storageArea
     * 
     * @param string $storageArea
     * @return void
     */
    public function setStorageArea($storageArea)
    {
        $this->storageArea = $storageArea;
    }

    /**
     * Returns the salesArea
     * 
     * @return string $salesArea
     */
    public function getSalesArea()
    {
        return $this->salesArea;
    }

    /**
     * Sets the salesArea
     * 
     * @param string $salesArea
     * @return void
     */
    public function setSalesArea($salesArea)
    {
        $this->salesArea = $salesArea;
    }

    /**
     * Returns the freeArea
     * 
     * @return string $freeArea
     */
    public function getFreeArea()
    {
        return $this->freeArea;
    }

    /**
     * Sets the freeArea
     * 
     * @param string $freeArea
     * @return void
     */
    public function setFreeArea($freeArea)
    {
        $this->freeArea = $freeArea;
    }

    /**
     * Returns the officeArea
     * 
     * @return string $officeArea
     */
    public function getOfficeArea()
    {
        return $this->officeArea;
    }

    /**
     * Sets the officeArea
     * 
     * @param string $officeArea
     * @return void
     */
    public function setOfficeArea($officeArea)
    {
        $this->officeArea = $officeArea;
    }

    /**
     * Returns the officePartArea
     * 
     * @return string $officePartArea
     */
    public function getOfficePartArea()
    {
        return $this->officePartArea;
    }

    /**
     * Sets the officePartArea
     * 
     * @param string $officePartArea
     * @return void
     */
    public function setOfficePartArea($officePartArea)
    {
        $this->officePartArea = $officePartArea;
    }

    /**
     * Returns the numberOfRooms
     * 
     * @return string $numberOfRooms
     */
    public function getNumberOfRooms()
    {
        return $this->numberOfRooms;
    }

    /**
     * Sets the numberOfRooms
     * 
     * @param string $numberOfRooms
     * @return void
     */
    public function setNumberOfRooms($numberOfRooms)
    {
        $this->numberOfRooms = $numberOfRooms;
    }

    /**
     * Returns the numberOfBedrooms
     * 
     * @return string $numberOfBedrooms
     */
    public function getNumberOfBedrooms()
    {
        return $this->numberOfBedrooms;
    }

    /**
     * Sets the numberOfBedrooms
     * 
     * @param string $numberOfBedrooms
     * @return void
     */
    public function setNumberOfBedrooms($numberOfBedrooms)
    {
        $this->numberOfBedrooms = $numberOfBedrooms;
    }

    /**
     * Returns the numberOfBathrooms
     * 
     * @return string $numberOfBathrooms
     */
    public function getNumberOfBathrooms()
    {
        return $this->numberOfBathrooms;
    }

    /**
     * Sets the numberOfBathrooms
     * 
     * @param string $numberOfBathrooms
     * @return void
     */
    public function setNumberOfBathrooms($numberOfBathrooms)
    {
        $this->numberOfBathrooms = $numberOfBathrooms;
    }

    /**
     * Returns the numberOfBalconies
     * 
     * @return string $numberOfBalconies
     */
    public function getNumberOfBalconies()
    {
        return $this->numberOfBalconies;
    }

    /**
     * Sets the numberOfBalconies
     * 
     * @param string $numberOfBalconies
     * @return void
     */
    public function setNumberOfBalconies($numberOfBalconies)
    {
        $this->numberOfBalconies = $numberOfBalconies;
    }

    /**
     * Returns the numberOfTerraces
     * 
     * @return string $numberOfTerraces
     */
    public function getNumberOfTerraces()
    {
        return $this->numberOfTerraces;
    }

    /**
     * Sets the numberOfTerraces
     * 
     * @param string $numberOfTerraces
     * @return void
     */
    public function setNumberOfTerraces($numberOfTerraces)
    {
        $this->numberOfTerraces = $numberOfTerraces;
    }

    /**
     * Returns the numberOfLogia
     * 
     * @return string $numberOfLogia
     */
    public function getNumberOfLogia()
    {
        return $this->numberOfLogia;
    }

    /**
     * Sets the numberOfLogia
     * 
     * @param string $numberOfLogia
     * @return void
     */
    public function setNumberOfLogia($numberOfLogia)
    {
        $this->numberOfLogia = $numberOfLogia;
    }

    /**
     * Returns the wgSuitable
     * 
     * @return bool $wgSuitable
     */
    public function getWgSuitable()
    {
        return $this->wgSuitable;
    }

    /**
     * Sets the wgSuitable
     * 
     * @param bool $wgSuitable
     * @return void
     */
    public function setWgSuitable($wgSuitable)
    {
        $this->wgSuitable = $wgSuitable;
    }

    /**
     * Returns the boolean state of wgSuitable
     * 
     * @return bool
     */
    public function isWgSuitable()
    {
        return $this->wgSuitable;
    }

    /**
     * Adds a BathroomType
     * 
     * @param \Ifabrik\IfabRealestate\Domain\Model\BathroomType $bathroomRel
     * @return void
     */
    public function addBathroomRel(\Ifabrik\IfabRealestate\Domain\Model\BathroomType $bathroomRel)
    {
        $this->bathroomRel->attach($bathroomRel);
    }

    /**
     * Removes a BathroomType
     * 
     * @param \Ifabrik\IfabRealestate\Domain\Model\BathroomType $bathroomRelToRemove The BathroomType to be removed
     * @return void
     */
    public function removeBathroomRel(\Ifabrik\IfabRealestate\Domain\Model\BathroomType $bathroomRelToRemove)
    {
        $this->bathroomRel->detach($bathroomRelToRemove);
    }

    /**
     * Returns the bathroomRel
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ifabrik\IfabRealestate\Domain\Model\BathroomType> $bathroomRel
     */
    public function getBathroomRel()
    {
        return $this->bathroomRel;
    }

    /**
     * Sets the bathroomRel
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ifabrik\IfabRealestate\Domain\Model\BathroomType> $bathroomRel
     * @return void
     */
    public function setBathroomRel(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $bathroomRel)
    {
        $this->bathroomRel = $bathroomRel;
    }

    /**
     * Adds a KitchenType
     * 
     * @param \Ifabrik\IfabRealestate\Domain\Model\KitchenType $kitchenRel
     * @return void
     */
    public function addKitchenRel(\Ifabrik\IfabRealestate\Domain\Model\KitchenType $kitchenRel)
    {
        $this->kitchenRel->attach($kitchenRel);
    }

    /**
     * Removes a KitchenType
     * 
     * @param \Ifabrik\IfabRealestate\Domain\Model\KitchenType $kitchenRelToRemove The KitchenType to be removed
     * @return void
     */
    public function removeKitchenRel(\Ifabrik\IfabRealestate\Domain\Model\KitchenType $kitchenRelToRemove)
    {
        $this->kitchenRel->detach($kitchenRelToRemove);
    }

    /**
     * Returns the kitchenRel
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ifabrik\IfabRealestate\Domain\Model\KitchenType> $kitchenRel
     */
    public function getKitchenRel()
    {
        return $this->kitchenRel;
    }

    /**
     * Sets the kitchenRel
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ifabrik\IfabRealestate\Domain\Model\KitchenType> $kitchenRel
     * @return void
     */
    public function setKitchenRel(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $kitchenRel)
    {
        $this->kitchenRel = $kitchenRel;
    }

    /**
     * Returns the fireplace
     * 
     * @return bool $fireplace
     */
    public function getFireplace()
    {
        return $this->fireplace;
    }

    /**
     * Sets the fireplace
     * 
     * @param bool $fireplace
     * @return void
     */
    public function setFireplace($fireplace)
    {
        $this->fireplace = $fireplace;
    }

    /**
     * Returns the boolean state of fireplace
     * 
     * @return bool
     */
    public function isFireplace()
    {
        return $this->fireplace;
    }

    /**
     * Returns the clima
     * 
     * @return bool $clima
     */
    public function getClima()
    {
        return $this->clima;
    }

    /**
     * Sets the clima
     * 
     * @param bool $clima
     * @return void
     */
    public function setClima($clima)
    {
        $this->clima = $clima;
    }

    /**
     * Returns the boolean state of clima
     * 
     * @return bool
     */
    public function isClima()
    {
        return $this->clima;
    }

    /**
     * Adds a FloorType
     * 
     * @param \Ifabrik\IfabRealestate\Domain\Model\FloorType $floorRel
     * @return void
     */
    public function addFloorRel(\Ifabrik\IfabRealestate\Domain\Model\FloorType $floorRel)
    {
        $this->floorRel->attach($floorRel);
    }

    /**
     * Removes a FloorType
     * 
     * @param \Ifabrik\IfabRealestate\Domain\Model\FloorType $floorRelToRemove The FloorType to be removed
     * @return void
     */
    public function removeFloorRel(\Ifabrik\IfabRealestate\Domain\Model\FloorType $floorRelToRemove)
    {
        $this->floorRel->detach($floorRelToRemove);
    }

    /**
     * Returns the floorRel
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ifabrik\IfabRealestate\Domain\Model\FloorType> $floorRel
     */
    public function getFloorRel()
    {
        return $this->floorRel;
    }

    /**
     * Sets the floorRel
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ifabrik\IfabRealestate\Domain\Model\FloorType> $floorRel
     * @return void
     */
    public function setFloorRel(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $floorRel)
    {
        $this->floorRel = $floorRel;
    }

    /**
     * Adds a HeatType
     * 
     * @param \Ifabrik\IfabRealestate\Domain\Model\HeatType $heatRel
     * @return void
     */
    public function addHeatRel(\Ifabrik\IfabRealestate\Domain\Model\HeatType $heatRel)
    {
        $this->heatRel->attach($heatRel);
    }

    /**
     * Removes a HeatType
     * 
     * @param \Ifabrik\IfabRealestate\Domain\Model\HeatType $heatRelToRemove The HeatType to be removed
     * @return void
     */
    public function removeHeatRel(\Ifabrik\IfabRealestate\Domain\Model\HeatType $heatRelToRemove)
    {
        $this->heatRel->detach($heatRelToRemove);
    }

    /**
     * Returns the heatRel
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ifabrik\IfabRealestate\Domain\Model\HeatType> $heatRel
     */
    public function getHeatRel()
    {
        return $this->heatRel;
    }

    /**
     * Sets the heatRel
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ifabrik\IfabRealestate\Domain\Model\HeatType> $heatRel
     * @return void
     */
    public function setHeatRel(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $heatRel)
    {
        $this->heatRel = $heatRel;
    }

    /**
     * Adds a ElevatorType
     * 
     * @param \Ifabrik\IfabRealestate\Domain\Model\ElevatorType $elevatorRel
     * @return void
     */
    public function addElevatorRel(\Ifabrik\IfabRealestate\Domain\Model\ElevatorType $elevatorRel)
    {
        $this->elevatorRel->attach($elevatorRel);
    }

    /**
     * Removes a ElevatorType
     * 
     * @param \Ifabrik\IfabRealestate\Domain\Model\ElevatorType $elevatorRelToRemove The ElevatorType to be removed
     * @return void
     */
    public function removeElevatorRel(\Ifabrik\IfabRealestate\Domain\Model\ElevatorType $elevatorRelToRemove)
    {
        $this->elevatorRel->detach($elevatorRelToRemove);
    }

    /**
     * Returns the elevatorRel
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ifabrik\IfabRealestate\Domain\Model\ElevatorType> $elevatorRel
     */
    public function getElevatorRel()
    {
        return $this->elevatorRel;
    }

    /**
     * Sets the elevatorRel
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ifabrik\IfabRealestate\Domain\Model\ElevatorType> $elevatorRel
     * @return void
     */
    public function setElevatorRel(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $elevatorRel)
    {
        $this->elevatorRel = $elevatorRel;
    }

    /**
     * Adds a Parking
     * 
     * @param \Ifabrik\IfabRealestate\Domain\Model\Parking $parkingRel
     * @return void
     */
    public function addParkingRel(\Ifabrik\IfabRealestate\Domain\Model\Parking $parkingRel)
    {
        $this->parkingRel->attach($parkingRel);
    }

    /**
     * Removes a Parking
     * 
     * @param \Ifabrik\IfabRealestate\Domain\Model\Parking $parkingRelToRemove The Parking to be removed
     * @return void
     */
    public function removeParkingRel(\Ifabrik\IfabRealestate\Domain\Model\Parking $parkingRelToRemove)
    {
        $this->parkingRel->detach($parkingRelToRemove);
    }

    /**
     * Returns the parkingRel
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ifabrik\IfabRealestate\Domain\Model\Parking> $parkingRel
     */
    public function getParkingRel()
    {
        return $this->parkingRel;
    }

    /**
     * Sets the parkingRel
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ifabrik\IfabRealestate\Domain\Model\Parking> $parkingRel
     * @return void
     */
    public function setParkingRel(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $parkingRel)
    {
        $this->parkingRel = $parkingRel;
    }

    /**
     * Returns the constructionYear
     * 
     * @return string $constructionYear
     */
    public function getConstructionYear()
    {
        return $this->constructionYear;
    }

    /**
     * Sets the constructionYear
     * 
     * @param string $constructionYear
     * @return void
     */
    public function setConstructionYear($constructionYear)
    {
        $this->constructionYear = $constructionYear;
    }

    /**
     * Returns the constructionAge
     * 
     * @return string $constructionAge
     */
    public function getConstructionAge()
    {
        return $this->constructionAge;
    }

    /**
     * Sets the constructionAge
     * 
     * @param string $constructionAge
     * @return void
     */
    public function setConstructionAge($constructionAge)
    {
        $this->constructionAge = $constructionAge;
    }

    /**
     * Returns the epart
     * 
     * @return string $epart
     */
    public function getEpart()
    {
        return $this->epart;
    }

    /**
     * Sets the epart
     * 
     * @param string $epart
     * @return void
     */
    public function setEpart($epart)
    {
        $this->epart = $epart;
    }

    /**
     * Returns the expirationDate
     * 
     * @return string $expirationDate
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * Sets the expirationDate
     * 
     * @param string $expirationDate
     * @return void
     */
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;
    }

    /**
     * Returns the energyConsumValue
     * 
     * @return string $energyConsumValue
     */
    public function getEnergyConsumValue()
    {
        return $this->energyConsumValue;
    }

    /**
     * Sets the energyConsumValue
     * 
     * @param string $energyConsumValue
     * @return void
     */
    public function setEnergyConsumValue($energyConsumValue)
    {
        $this->energyConsumValue = $energyConsumValue;
    }

    /**
     * Returns the primaryEnergySource
     * 
     * @return string $primaryEnergySource
     */
    public function getPrimaryEnergySource()
    {
        return $this->primaryEnergySource;
    }

    /**
     * Sets the primaryEnergySource
     * 
     * @param string $primaryEnergySource
     * @return void
     */
    public function setPrimaryEnergySource($primaryEnergySource)
    {
        $this->primaryEnergySource = $primaryEnergySource;
    }

    /**
     * Returns the electricityValue
     * 
     * @return string $electricityValue
     */
    public function getElectricityValue()
    {
        return $this->electricityValue;
    }

    /**
     * Sets the electricityValue
     * 
     * @param string $electricityValue
     * @return void
     */
    public function setElectricityValue($electricityValue)
    {
        $this->electricityValue = $electricityValue;
    }

    /**
     * Returns the heatValue
     * 
     * @return string $heatValue
     */
    public function getHeatValue()
    {
        return $this->heatValue;
    }

    /**
     * Sets the heatValue
     * 
     * @param string $heatValue
     * @return void
     */
    public function setHeatValue($heatValue)
    {
        $this->heatValue = $heatValue;
    }

    /**
     * Adds a FiringType
     * 
     * @param \Ifabrik\IfabRealestate\Domain\Model\FiringType $firingRel
     * @return void
     */
    public function addFiringRel(\Ifabrik\IfabRealestate\Domain\Model\FiringType $firingRel)
    {
        $this->firingRel->attach($firingRel);
    }

    /**
     * Removes a FiringType
     * 
     * @param \Ifabrik\IfabRealestate\Domain\Model\FiringType $firingRelToRemove The FiringType to be removed
     * @return void
     */
    public function removeFiringRel(\Ifabrik\IfabRealestate\Domain\Model\FiringType $firingRelToRemove)
    {
        $this->firingRel->detach($firingRelToRemove);
    }

    /**
     * Returns the firingRel
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ifabrik\IfabRealestate\Domain\Model\FiringType> $firingRel
     */
    public function getFiringRel()
    {
        return $this->firingRel;
    }

    /**
     * Sets the firingRel
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ifabrik\IfabRealestate\Domain\Model\FiringType> $firingRel
     * @return void
     */
    public function setFiringRel(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $firingRel)
    {
        $this->firingRel = $firingRel;
    }

    /**
     * Returns the valueClass
     * 
     * @return string $valueClass
     */
    public function getValueClass()
    {
        return $this->valueClass;
    }

    /**
     * Sets the valueClass
     * 
     * @param string $valueClass
     * @return void
     */
    public function setValueClass($valueClass)
    {
        $this->valueClass = $valueClass;
    }

    /**
     * Returns the creationDate
     * 
     * @return string $creationDate
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Sets the creationDate
     * 
     * @param string $creationDate
     * @return void
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;
    }

    /**
     * Returns the creationYear
     * 
     * @return string $creationYear
     */
    public function getCreationYear()
    {
        return $this->creationYear;
    }

    /**
     * Sets the creationYear
     * 
     * @param string $creationYear
     * @return void
     */
    public function setCreationYear($creationYear)
    {
        $this->creationYear = $creationYear;
    }

    /**
     * Returns the building
     * 
     * @return string $building
     */
    public function getBuilding()
    {
        return $this->building;
    }

    /**
     * Sets the building
     * 
     * @param string $building
     * @return void
     */
    public function setBuilding($building)
    {
        $this->building = $building;
    }

    /**
     * Returns the propertyTitle
     * 
     * @return string $propertyTitle
     */
    public function getPropertyTitle()
    {
        return $this->propertyTitle;
    }

    /**
     * Sets the propertyTitle
     * 
     * @param string $propertyTitle
     * @return void
     */
    public function setPropertyTitle($propertyTitle)
    {
        $this->propertyTitle = $propertyTitle;
    }

    /**
     * Returns the propertyLocation
     * 
     * @return string $propertyLocation
     */
    public function getPropertyLocation()
    {
        return $this->propertyLocation;
    }

    /**
     * Sets the propertyLocation
     * 
     * @param string $propertyLocation
     * @return void
     */
    public function setPropertyLocation($propertyLocation)
    {
        $this->propertyLocation = $propertyLocation;
    }

    /**
     * Returns the propertyEquipment
     * 
     * @return string $propertyEquipment
     */
    public function getPropertyEquipment()
    {
        return $this->propertyEquipment;
    }

    /**
     * Sets the propertyEquipment
     * 
     * @param string $propertyEquipment
     * @return void
     */
    public function setPropertyEquipment($propertyEquipment)
    {
        $this->propertyEquipment = $propertyEquipment;
    }

    /**
     * Returns the propertyDescription
     * 
     * @return string $propertyDescription
     */
    public function getPropertyDescription()
    {
        return $this->propertyDescription;
    }

    /**
     * Sets the propertyDescription
     * 
     * @param string $propertyDescription
     * @return void
     */
    public function setPropertyDescription($propertyDescription)
    {
        $this->propertyDescription = $propertyDescription;
    }

    /**
     * Returns the additionInformation
     * 
     * @return string $additionInformation
     */
    public function getAdditionInformation()
    {
        return $this->additionInformation;
    }

    /**
     * Sets the additionInformation
     * 
     * @param string $additionInformation
     * @return void
     */
    public function setAdditionInformation($additionInformation)
    {
        $this->additionInformation = $additionInformation;
    }

    /**
     * Returns the propertyText
     * 
     * @return string $propertyText
     */
    public function getPropertyText()
    {
        return $this->propertyText;
    }

    /**
     * Sets the propertyText
     * 
     * @param string $propertyText
     * @return void
     */
    public function setPropertyText($propertyText)
    {
        $this->propertyText = $propertyText;
    }

    /**
     * Returns the availableFrom
     * 
     * @return string $availableFrom
     */
    public function getAvailableFrom()
    {
        return $this->availableFrom;
    }

    /**
     * Sets the availableFrom
     * 
     * @param string $availableFrom
     * @return void
     */
    public function setAvailableFrom($availableFrom)
    {
        $this->availableFrom = $availableFrom;
    }

    /**
     * Returns the propertyRelease
     * 
     * @return bool $propertyRelease
     */
    public function getPropertyRelease()
    {
        return $this->propertyRelease;
    }

    /**
     * Sets the propertyRelease
     * 
     * @param bool $propertyRelease
     * @return void
     */
    public function setPropertyRelease($propertyRelease)
    {
        $this->propertyRelease = $propertyRelease;
    }

    /**
     * Returns the boolean state of propertyRelease
     * 
     * @return bool
     */
    public function isPropertyRelease()
    {
        return $this->propertyRelease;
    }


    /**
     * Returns the pets
     *
     * @return bool $pets
     */
    public function getPets()
    {
        return $this->pets;
    }

    /**
     * Sets the pets
     *
     * @param bool $pets
     * @return void
     */
    public function setPets($pets)
    {
        $this->pets = $pets;
    }

    /**
     * Returns the boolean state of pets
     *
     * @return bool
     */
    public function isPets()
    {
        return $this->pets;
    }

    /**
     * Returns the internalPropertyNumber
     * 
     * @return string $internalPropertyNumber
     */
    public function getInternalPropertyNumber()
    {
        return $this->internalPropertyNumber;
    }

    /**
     * Sets the internalPropertyNumber
     * 
     * @param string $internalPropertyNumber
     * @return void
     */
    public function setInternalPropertyNumber($internalPropertyNumber)
    {
        $this->internalPropertyNumber = $internalPropertyNumber;
    }

    /**
     * Returns the externalPropertyNumber
     * 
     * @return string $externalPropertyNumber
     */
    public function getExternalPropertyNumber()
    {
        return $this->externalPropertyNumber;
    }

    /**
     * Sets the externalPropertyNumber
     * 
     * @param string $externalPropertyNumber
     * @return void
     */
    public function setExternalPropertyNumber($externalPropertyNumber)
    {
        $this->externalPropertyNumber = $externalPropertyNumber;
    }

    /**
     * Returns the openImmoId
     * 
     * @return string $openImmoId
     */
    public function getOpenImmoId()
    {
        return $this->openImmoId;
    }

    /**
     * Sets the openImmoId
     * 
     * @param string $openImmoId
     * @return void
     */
    public function setOpenImmoId($openImmoId)
    {
        $this->openImmoId = $openImmoId;
    }

    /**
     * Adds a Attachments
     * 
     * @param \Ifabrik\IfabRealestate\Domain\Model\Attachments $attachmentsRel
     * @return void
     */
    public function addAttachmentsRel(\Ifabrik\IfabRealestate\Domain\Model\Attachments $attachmentsRel)
    {
        $this->attachmentsRel->attach($attachmentsRel);
    }

    /**
     * Removes a Attachments
     * 
     * @param \Ifabrik\IfabRealestate\Domain\Model\Attachments $attachmentsRelToRemove The Attachments to be removed
     * @return void
     */
    public function removeAttachmentsRel(\Ifabrik\IfabRealestate\Domain\Model\Attachments $attachmentsRelToRemove)
    {
        $this->attachmentsRel->detach($attachmentsRelToRemove);
    }

    /**
     * Returns the attachmentsRel
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ifabrik\IfabRealestate\Domain\Model\Attachments> $attachmentsRel
     */
    public function getAttachmentsRel()
    {
        return $this->attachmentsRel;
    }

    /**
     * Sets the attachmentsRel
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ifabrik\IfabRealestate\Domain\Model\Attachments> $attachmentsRel
     * @return void
     */
    public function setAttachmentsRel(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $attachmentsRel)
    {
        $this->attachmentsRel = $attachmentsRel;
    }
}
