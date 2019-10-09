<?php
namespace Ifabrik\IfabRealEstate\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author ifabrik GmbH <info@ifababrik.de>
 */
class PropertyTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Ifabrik\IfabRealEstate\Domain\Model\Property
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Ifabrik\IfabRealEstate\Domain\Model\Property();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getFloorReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getFloor()
        );
    }

    /**
     * @test
     */
    public function setFloorForStringSetsFloor()
    {
        $this->subject->setFloor('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'floor',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTotalFloorsReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTotalFloors()
        );
    }

    /**
     * @test
     */
    public function setTotalFloorsForStringSetsTotalFloors()
    {
        $this->subject->setTotalFloors('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'totalFloors',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getApartmentNumberReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getApartmentNumber()
        );
    }

    /**
     * @test
     */
    public function setApartmentNumberForStringSetsApartmentNumber()
    {
        $this->subject->setApartmentNumber('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'apartmentNumber',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getExtraPropertyNatureReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getExtraPropertyNature()
        );
    }

    /**
     * @test
     */
    public function setExtraPropertyNatureForStringSetsExtraPropertyNature()
    {
        $this->subject->setExtraPropertyNature('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'extraPropertyNature',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPurchaseReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPurchase()
        );
    }

    /**
     * @test
     */
    public function setPurchaseForStringSetsPurchase()
    {
        $this->subject->setPurchase('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'purchase',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPurchasePriceNetReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPurchasePriceNet()
        );
    }

    /**
     * @test
     */
    public function setPurchasePriceNetForStringSetsPurchasePriceNet()
    {
        $this->subject->setPurchasePriceNet('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'purchasePriceNet',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPurchasePriceGrossReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPurchasePriceGross()
        );
    }

    /**
     * @test
     */
    public function setPurchasePriceGrossForStringSetsPurchasePriceGross()
    {
        $this->subject->setPurchasePriceGross('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'purchasePriceGross',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getNetColdRentReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getNetColdRent()
        );
    }

    /**
     * @test
     */
    public function setNetColdRentForStringSetsNetColdRent()
    {
        $this->subject->setNetColdRent('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'netColdRent',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getColdRentReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getColdRent()
        );
    }

    /**
     * @test
     */
    public function setColdRentForStringSetsColdRent()
    {
        $this->subject->setColdRent('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'coldRent',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getRentWithHeatReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getRentWithHeat()
        );
    }

    /**
     * @test
     */
    public function setRentWithHeatForStringSetsRentWithHeat()
    {
        $this->subject->setRentWithHeat('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'rentWithHeat',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAdditionalCostsReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAdditionalCosts()
        );
    }

    /**
     * @test
     */
    public function setAdditionalCostsForStringSetsAdditionalCosts()
    {
        $this->subject->setAdditionalCosts('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'additionalCosts',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getHeatingCostsReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getHeatingCosts()
        );
    }

    /**
     * @test
     */
    public function setHeatingCostsForStringSetsHeatingCosts()
    {
        $this->subject->setHeatingCosts('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'heatingCosts',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getFlatRateRentReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getFlatRateRent()
        );
    }

    /**
     * @test
     */
    public function setFlatRateRentForStringSetsFlatRateRent()
    {
        $this->subject->setFlatRateRent('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'flatRateRent',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getRentPricePerQmReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getRentPricePerQm()
        );
    }

    /**
     * @test
     */
    public function setRentPricePerQmForStringSetsRentPricePerQm()
    {
        $this->subject->setRentPricePerQm('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'rentPricePerQm',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPurchasePricePerQmReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPurchasePricePerQm()
        );
    }

    /**
     * @test
     */
    public function setPurchasePricePerQmForStringSetsPurchasePricePerQm()
    {
        $this->subject->setPurchasePricePerQm('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'purchasePricePerQm',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getGuaranteePriceReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getGuaranteePrice()
        );
    }

    /**
     * @test
     */
    public function setGuaranteePriceForStringSetsGuaranteePrice()
    {
        $this->subject->setGuaranteePrice('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'guaranteePrice',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getGuaranteePriceTextReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getGuaranteePriceText()
        );
    }

    /**
     * @test
     */
    public function setGuaranteePriceTextForStringSetsGuaranteePriceText()
    {
        $this->subject->setGuaranteePriceText('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'guaranteePriceText',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getLivingSpaceReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getLivingSpace()
        );
    }

    /**
     * @test
     */
    public function setLivingSpaceForStringSetsLivingSpace()
    {
        $this->subject->setLivingSpace('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'livingSpace',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getUsableAreaReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getUsableArea()
        );
    }

    /**
     * @test
     */
    public function setUsableAreaForStringSetsUsableArea()
    {
        $this->subject->setUsableArea('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'usableArea',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTotalSizeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTotalSize()
        );
    }

    /**
     * @test
     */
    public function setTotalSizeForStringSetsTotalSize()
    {
        $this->subject->setTotalSize('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'totalSize',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getLoadAreaReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getLoadArea()
        );
    }

    /**
     * @test
     */
    public function setLoadAreaForStringSetsLoadArea()
    {
        $this->subject->setLoadArea('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'loadArea',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getStorageSreaReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getStorageSrea()
        );
    }

    /**
     * @test
     */
    public function setStorageSreaForStringSetsStorageSrea()
    {
        $this->subject->setStorageSrea('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'storageSrea',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSalesAreaReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getSalesArea()
        );
    }

    /**
     * @test
     */
    public function setSalesAreaForStringSetsSalesArea()
    {
        $this->subject->setSalesArea('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'salesArea',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getFreeAreaReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getFreeArea()
        );
    }

    /**
     * @test
     */
    public function setFreeAreaForStringSetsFreeArea()
    {
        $this->subject->setFreeArea('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'freeArea',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getOfficeAreaReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getOfficeArea()
        );
    }

    /**
     * @test
     */
    public function setOfficeAreaForStringSetsOfficeArea()
    {
        $this->subject->setOfficeArea('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'officeArea',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getOfficePartAreaReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getOfficePartArea()
        );
    }

    /**
     * @test
     */
    public function setOfficePartAreaForStringSetsOfficePartArea()
    {
        $this->subject->setOfficePartArea('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'officePartArea',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getNumberOfRoomsReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getNumberOfRooms()
        );
    }

    /**
     * @test
     */
    public function setNumberOfRoomsForStringSetsNumberOfRooms()
    {
        $this->subject->setNumberOfRooms('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'numberOfRooms',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getNumberOfBedroomsReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getNumberOfBedrooms()
        );
    }

    /**
     * @test
     */
    public function setNumberOfBedroomsForStringSetsNumberOfBedrooms()
    {
        $this->subject->setNumberOfBedrooms('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'numberOfBedrooms',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getNumberOfBathroomsReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getNumberOfBathrooms()
        );
    }

    /**
     * @test
     */
    public function setNumberOfBathroomsForStringSetsNumberOfBathrooms()
    {
        $this->subject->setNumberOfBathrooms('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'numberOfBathrooms',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getNumberOfBalconiesReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getNumberOfBalconies()
        );
    }

    /**
     * @test
     */
    public function setNumberOfBalconiesForStringSetsNumberOfBalconies()
    {
        $this->subject->setNumberOfBalconies('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'numberOfBalconies',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getNumberOfTerracesReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getNumberOfTerraces()
        );
    }

    /**
     * @test
     */
    public function setNumberOfTerracesForStringSetsNumberOfTerraces()
    {
        $this->subject->setNumberOfTerraces('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'numberOfTerraces',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getNumberOfLogiaReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getNumberOfLogia()
        );
    }

    /**
     * @test
     */
    public function setNumberOfLogiaForStringSetsNumberOfLogia()
    {
        $this->subject->setNumberOfLogia('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'numberOfLogia',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getWgSuitableReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getWgSuitable()
        );
    }

    /**
     * @test
     */
    public function setWgSuitableForBoolSetsWgSuitable()
    {
        $this->subject->setWgSuitable(true);

        self::assertAttributeEquals(
            true,
            'wgSuitable',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getFireplaceReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getFireplace()
        );
    }

    /**
     * @test
     */
    public function setFireplaceForBoolSetsFireplace()
    {
        $this->subject->setFireplace(true);

        self::assertAttributeEquals(
            true,
            'fireplace',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getClimaReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getClima()
        );
    }

    /**
     * @test
     */
    public function setClimaForBoolSetsClima()
    {
        $this->subject->setClima(true);

        self::assertAttributeEquals(
            true,
            'clima',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getConstructionYearReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getConstructionYear()
        );
    }

    /**
     * @test
     */
    public function setConstructionYearForStringSetsConstructionYear()
    {
        $this->subject->setConstructionYear('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'constructionYear',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getConstructionAgeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getConstructionAge()
        );
    }

    /**
     * @test
     */
    public function setConstructionAgeForStringSetsConstructionAge()
    {
        $this->subject->setConstructionAge('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'constructionAge',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getEpartReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getEpart()
        );
    }

    /**
     * @test
     */
    public function setEpartForStringSetsEpart()
    {
        $this->subject->setEpart('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'epart',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getExpirationDateReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getExpirationDate()
        );
    }

    /**
     * @test
     */
    public function setExpirationDateForStringSetsExpirationDate()
    {
        $this->subject->setExpirationDate('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'expirationDate',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getEnergyConsumValueReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getEnergyConsumValue()
        );
    }

    /**
     * @test
     */
    public function setEnergyConsumValueForStringSetsEnergyConsumValue()
    {
        $this->subject->setEnergyConsumValue('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'energyConsumValue',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPrimaryEnergySourceReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPrimaryEnergySource()
        );
    }

    /**
     * @test
     */
    public function setPrimaryEnergySourceForStringSetsPrimaryEnergySource()
    {
        $this->subject->setPrimaryEnergySource('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'primaryEnergySource',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getElectricityValueReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getElectricityValue()
        );
    }

    /**
     * @test
     */
    public function setElectricityValueForStringSetsElectricityValue()
    {
        $this->subject->setElectricityValue('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'electricityValue',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getHeatValueReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getHeatValue()
        );
    }

    /**
     * @test
     */
    public function setHeatValueForStringSetsHeatValue()
    {
        $this->subject->setHeatValue('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'heatValue',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getValueClassReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getValueClass()
        );
    }

    /**
     * @test
     */
    public function setValueClassForStringSetsValueClass()
    {
        $this->subject->setValueClass('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'valueClass',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCreationDateReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getCreationDate()
        );
    }

    /**
     * @test
     */
    public function setCreationDateForStringSetsCreationDate()
    {
        $this->subject->setCreationDate('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'creationDate',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCreationYearReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getCreationYear()
        );
    }

    /**
     * @test
     */
    public function setCreationYearForStringSetsCreationYear()
    {
        $this->subject->setCreationYear('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'creationYear',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getBuildingReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getBuilding()
        );
    }

    /**
     * @test
     */
    public function setBuildingForStringSetsBuilding()
    {
        $this->subject->setBuilding('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'building',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPropertTitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPropertTitle()
        );
    }

    /**
     * @test
     */
    public function setPropertTitleForStringSetsPropertTitle()
    {
        $this->subject->setPropertTitle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'propertTitle',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPropertyLocationReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPropertyLocation()
        );
    }

    /**
     * @test
     */
    public function setPropertyLocationForStringSetsPropertyLocation()
    {
        $this->subject->setPropertyLocation('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'propertyLocation',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPropertyEquipmentReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPropertyEquipment()
        );
    }

    /**
     * @test
     */
    public function setPropertyEquipmentForStringSetsPropertyEquipment()
    {
        $this->subject->setPropertyEquipment('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'propertyEquipment',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPropertyDescriptionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPropertyDescription()
        );
    }

    /**
     * @test
     */
    public function setPropertyDescriptionForStringSetsPropertyDescription()
    {
        $this->subject->setPropertyDescription('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'propertyDescription',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAdditionInformationReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAdditionInformation()
        );
    }

    /**
     * @test
     */
    public function setAdditionInformationForStringSetsAdditionInformation()
    {
        $this->subject->setAdditionInformation('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'additionInformation',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPropertyTextReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPropertyText()
        );
    }

    /**
     * @test
     */
    public function setPropertyTextForStringSetsPropertyText()
    {
        $this->subject->setPropertyText('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'propertyText',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAvailableFromReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAvailableFrom()
        );
    }

    /**
     * @test
     */
    public function setAvailableFromForStringSetsAvailableFrom()
    {
        $this->subject->setAvailableFrom('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'availableFrom',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPropertyReleaseReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getPropertyRelease()
        );
    }

    /**
     * @test
     */
    public function setPropertyReleaseForBoolSetsPropertyRelease()
    {
        $this->subject->setPropertyRelease(true);

        self::assertAttributeEquals(
            true,
            'propertyRelease',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPetsReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPets()
        );
    }

    /**
     * @test
     */
    public function setPetsForStringSetsPets()
    {
        $this->subject->setPets('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'pets',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getInternalPropertyNumberReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getInternalPropertyNumber()
        );
    }

    /**
     * @test
     */
    public function setInternalPropertyNumberForStringSetsInternalPropertyNumber()
    {
        $this->subject->setInternalPropertyNumber('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'internalPropertyNumber',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getExternalPropertyNumberReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getExternalPropertyNumber()
        );
    }

    /**
     * @test
     */
    public function setExternalPropertyNumberForStringSetsExternalPropertyNumber()
    {
        $this->subject->setExternalPropertyNumber('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'externalPropertyNumber',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getOpenImmoIdReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getOpenImmoId()
        );
    }

    /**
     * @test
     */
    public function setOpenImmoIdForStringSetsOpenImmoId()
    {
        $this->subject->setOpenImmoId('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'openImmoId',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPropertyUsageRelReturnsInitialValueForPropertyUsage()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getPropertyUsageRel()
        );
    }

    /**
     * @test
     */
    public function setPropertyUsageRelForObjectStorageContainingPropertyUsageSetsPropertyUsageRel()
    {
        $propertyUsageRel = new \Ifabrik\IfabRealEstate\Domain\Model\PropertyUsage();
        $objectStorageHoldingExactlyOnePropertyUsageRel = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOnePropertyUsageRel->attach($propertyUsageRel);
        $this->subject->setPropertyUsageRel($objectStorageHoldingExactlyOnePropertyUsageRel);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOnePropertyUsageRel,
            'propertyUsageRel',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addPropertyUsageRelToObjectStorageHoldingPropertyUsageRel()
    {
        $propertyUsageRel = new \Ifabrik\IfabRealEstate\Domain\Model\PropertyUsage();
        $propertyUsageRelObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $propertyUsageRelObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($propertyUsageRel));
        $this->inject($this->subject, 'propertyUsageRel', $propertyUsageRelObjectStorageMock);

        $this->subject->addPropertyUsageRel($propertyUsageRel);
    }

    /**
     * @test
     */
    public function removePropertyUsageRelFromObjectStorageHoldingPropertyUsageRel()
    {
        $propertyUsageRel = new \Ifabrik\IfabRealEstate\Domain\Model\PropertyUsage();
        $propertyUsageRelObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $propertyUsageRelObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($propertyUsageRel));
        $this->inject($this->subject, 'propertyUsageRel', $propertyUsageRelObjectStorageMock);

        $this->subject->removePropertyUsageRel($propertyUsageRel);
    }

    /**
     * @test
     */
    public function getMarketingMethodRelReturnsInitialValueForMarketingMethod()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getMarketingMethodRel()
        );
    }

    /**
     * @test
     */
    public function setMarketingMethodRelForObjectStorageContainingMarketingMethodSetsMarketingMethodRel()
    {
        $marketingMethodRel = new \Ifabrik\IfabRealEstate\Domain\Model\MarketingMethod();
        $objectStorageHoldingExactlyOneMarketingMethodRel = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneMarketingMethodRel->attach($marketingMethodRel);
        $this->subject->setMarketingMethodRel($objectStorageHoldingExactlyOneMarketingMethodRel);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneMarketingMethodRel,
            'marketingMethodRel',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addMarketingMethodRelToObjectStorageHoldingMarketingMethodRel()
    {
        $marketingMethodRel = new \Ifabrik\IfabRealEstate\Domain\Model\MarketingMethod();
        $marketingMethodRelObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $marketingMethodRelObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($marketingMethodRel));
        $this->inject($this->subject, 'marketingMethodRel', $marketingMethodRelObjectStorageMock);

        $this->subject->addMarketingMethodRel($marketingMethodRel);
    }

    /**
     * @test
     */
    public function removeMarketingMethodRelFromObjectStorageHoldingMarketingMethodRel()
    {
        $marketingMethodRel = new \Ifabrik\IfabRealEstate\Domain\Model\MarketingMethod();
        $marketingMethodRelObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $marketingMethodRelObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($marketingMethodRel));
        $this->inject($this->subject, 'marketingMethodRel', $marketingMethodRelObjectStorageMock);

        $this->subject->removeMarketingMethodRel($marketingMethodRel);
    }

    /**
     * @test
     */
    public function getPropertyNatureRelReturnsInitialValueForPropertyNature()
    {
        self::assertEquals(
            null,
            $this->subject->getPropertyNatureRel()
        );
    }

    /**
     * @test
     */
    public function setPropertyNatureRelForPropertyNatureSetsPropertyNatureRel()
    {
        $propertyNatureRelFixture = new \Ifabrik\IfabRealEstate\Domain\Model\PropertyNature();
        $this->subject->setPropertyNatureRel($propertyNatureRelFixture);

        self::assertAttributeEquals(
            $propertyNatureRelFixture,
            'propertyNatureRel',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPropertyTypeValueRelReturnsInitialValueForPropertyTypeValue()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getPropertyTypeValueRel()
        );
    }

    /**
     * @test
     */
    public function setPropertyTypeValueRelForObjectStorageContainingPropertyTypeValueSetsPropertyTypeValueRel()
    {
        $propertyTypeValueRel = new \Ifabrik\IfabRealEstate\Domain\Model\PropertyTypeValue();
        $objectStorageHoldingExactlyOnePropertyTypeValueRel = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOnePropertyTypeValueRel->attach($propertyTypeValueRel);
        $this->subject->setPropertyTypeValueRel($objectStorageHoldingExactlyOnePropertyTypeValueRel);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOnePropertyTypeValueRel,
            'propertyTypeValueRel',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addPropertyTypeValueRelToObjectStorageHoldingPropertyTypeValueRel()
    {
        $propertyTypeValueRel = new \Ifabrik\IfabRealEstate\Domain\Model\PropertyTypeValue();
        $propertyTypeValueRelObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $propertyTypeValueRelObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($propertyTypeValueRel));
        $this->inject($this->subject, 'propertyTypeValueRel', $propertyTypeValueRelObjectStorageMock);

        $this->subject->addPropertyTypeValueRel($propertyTypeValueRel);
    }

    /**
     * @test
     */
    public function removePropertyTypeValueRelFromObjectStorageHoldingPropertyTypeValueRel()
    {
        $propertyTypeValueRel = new \Ifabrik\IfabRealEstate\Domain\Model\PropertyTypeValue();
        $propertyTypeValueRelObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $propertyTypeValueRelObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($propertyTypeValueRel));
        $this->inject($this->subject, 'propertyTypeValueRel', $propertyTypeValueRelObjectStorageMock);

        $this->subject->removePropertyTypeValueRel($propertyTypeValueRel);
    }

    /**
     * @test
     */
    public function getAddressRelReturnsInitialValueForAddress()
    {
        self::assertEquals(
            null,
            $this->subject->getAddressRel()
        );
    }

    /**
     * @test
     */
    public function setAddressRelForAddressSetsAddressRel()
    {
        $addressRelFixture = new \Ifabrik\IfabRealEstate\Domain\Model\Address();
        $this->subject->setAddressRel($addressRelFixture);

        self::assertAttributeEquals(
            $addressRelFixture,
            'addressRel',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getContactRelReturnsInitialValueForContact()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getContactRel()
        );
    }

    /**
     * @test
     */
    public function setContactRelForObjectStorageContainingContactSetsContactRel()
    {
        $contactRel = new \Ifabrik\IfabRealEstate\Domain\Model\Contact();
        $objectStorageHoldingExactlyOneContactRel = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneContactRel->attach($contactRel);
        $this->subject->setContactRel($objectStorageHoldingExactlyOneContactRel);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneContactRel,
            'contactRel',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addContactRelToObjectStorageHoldingContactRel()
    {
        $contactRel = new \Ifabrik\IfabRealEstate\Domain\Model\Contact();
        $contactRelObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $contactRelObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($contactRel));
        $this->inject($this->subject, 'contactRel', $contactRelObjectStorageMock);

        $this->subject->addContactRel($contactRel);
    }

    /**
     * @test
     */
    public function removeContactRelFromObjectStorageHoldingContactRel()
    {
        $contactRel = new \Ifabrik\IfabRealEstate\Domain\Model\Contact();
        $contactRelObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $contactRelObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($contactRel));
        $this->inject($this->subject, 'contactRel', $contactRelObjectStorageMock);

        $this->subject->removeContactRel($contactRel);
    }

    /**
     * @test
     */
    public function getBathroomRelReturnsInitialValueForBathroomType()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getBathroomRel()
        );
    }

    /**
     * @test
     */
    public function setBathroomRelForObjectStorageContainingBathroomTypeSetsBathroomRel()
    {
        $bathroomRel = new \Ifabrik\IfabRealEstate\Domain\Model\BathroomType();
        $objectStorageHoldingExactlyOneBathroomRel = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneBathroomRel->attach($bathroomRel);
        $this->subject->setBathroomRel($objectStorageHoldingExactlyOneBathroomRel);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneBathroomRel,
            'bathroomRel',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addBathroomRelToObjectStorageHoldingBathroomRel()
    {
        $bathroomRel = new \Ifabrik\IfabRealEstate\Domain\Model\BathroomType();
        $bathroomRelObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $bathroomRelObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($bathroomRel));
        $this->inject($this->subject, 'bathroomRel', $bathroomRelObjectStorageMock);

        $this->subject->addBathroomRel($bathroomRel);
    }

    /**
     * @test
     */
    public function removeBathroomRelFromObjectStorageHoldingBathroomRel()
    {
        $bathroomRel = new \Ifabrik\IfabRealEstate\Domain\Model\BathroomType();
        $bathroomRelObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $bathroomRelObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($bathroomRel));
        $this->inject($this->subject, 'bathroomRel', $bathroomRelObjectStorageMock);

        $this->subject->removeBathroomRel($bathroomRel);
    }

    /**
     * @test
     */
    public function getKitchenRelReturnsInitialValueForKitchenType()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getKitchenRel()
        );
    }

    /**
     * @test
     */
    public function setKitchenRelForObjectStorageContainingKitchenTypeSetsKitchenRel()
    {
        $kitchenRel = new \Ifabrik\IfabRealEstate\Domain\Model\KitchenType();
        $objectStorageHoldingExactlyOneKitchenRel = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneKitchenRel->attach($kitchenRel);
        $this->subject->setKitchenRel($objectStorageHoldingExactlyOneKitchenRel);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneKitchenRel,
            'kitchenRel',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addKitchenRelToObjectStorageHoldingKitchenRel()
    {
        $kitchenRel = new \Ifabrik\IfabRealEstate\Domain\Model\KitchenType();
        $kitchenRelObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $kitchenRelObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($kitchenRel));
        $this->inject($this->subject, 'kitchenRel', $kitchenRelObjectStorageMock);

        $this->subject->addKitchenRel($kitchenRel);
    }

    /**
     * @test
     */
    public function removeKitchenRelFromObjectStorageHoldingKitchenRel()
    {
        $kitchenRel = new \Ifabrik\IfabRealEstate\Domain\Model\KitchenType();
        $kitchenRelObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $kitchenRelObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($kitchenRel));
        $this->inject($this->subject, 'kitchenRel', $kitchenRelObjectStorageMock);

        $this->subject->removeKitchenRel($kitchenRel);
    }

    /**
     * @test
     */
    public function getFloorRelReturnsInitialValueForFloorType()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getFloorRel()
        );
    }

    /**
     * @test
     */
    public function setFloorRelForObjectStorageContainingFloorTypeSetsFloorRel()
    {
        $floorRel = new \Ifabrik\IfabRealEstate\Domain\Model\FloorType();
        $objectStorageHoldingExactlyOneFloorRel = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneFloorRel->attach($floorRel);
        $this->subject->setFloorRel($objectStorageHoldingExactlyOneFloorRel);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneFloorRel,
            'floorRel',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addFloorRelToObjectStorageHoldingFloorRel()
    {
        $floorRel = new \Ifabrik\IfabRealEstate\Domain\Model\FloorType();
        $floorRelObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $floorRelObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($floorRel));
        $this->inject($this->subject, 'floorRel', $floorRelObjectStorageMock);

        $this->subject->addFloorRel($floorRel);
    }

    /**
     * @test
     */
    public function removeFloorRelFromObjectStorageHoldingFloorRel()
    {
        $floorRel = new \Ifabrik\IfabRealEstate\Domain\Model\FloorType();
        $floorRelObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $floorRelObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($floorRel));
        $this->inject($this->subject, 'floorRel', $floorRelObjectStorageMock);

        $this->subject->removeFloorRel($floorRel);
    }

    /**
     * @test
     */
    public function getHeatRelReturnsInitialValueForHeatType()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getHeatRel()
        );
    }

    /**
     * @test
     */
    public function setHeatRelForObjectStorageContainingHeatTypeSetsHeatRel()
    {
        $heatRel = new \Ifabrik\IfabRealEstate\Domain\Model\HeatType();
        $objectStorageHoldingExactlyOneHeatRel = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneHeatRel->attach($heatRel);
        $this->subject->setHeatRel($objectStorageHoldingExactlyOneHeatRel);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneHeatRel,
            'heatRel',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addHeatRelToObjectStorageHoldingHeatRel()
    {
        $heatRel = new \Ifabrik\IfabRealEstate\Domain\Model\HeatType();
        $heatRelObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $heatRelObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($heatRel));
        $this->inject($this->subject, 'heatRel', $heatRelObjectStorageMock);

        $this->subject->addHeatRel($heatRel);
    }

    /**
     * @test
     */
    public function removeHeatRelFromObjectStorageHoldingHeatRel()
    {
        $heatRel = new \Ifabrik\IfabRealEstate\Domain\Model\HeatType();
        $heatRelObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $heatRelObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($heatRel));
        $this->inject($this->subject, 'heatRel', $heatRelObjectStorageMock);

        $this->subject->removeHeatRel($heatRel);
    }

    /**
     * @test
     */
    public function getElevatorRelReturnsInitialValueForElevatorType()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getElevatorRel()
        );
    }

    /**
     * @test
     */
    public function setElevatorRelForObjectStorageContainingElevatorTypeSetsElevatorRel()
    {
        $elevatorRel = new \Ifabrik\IfabRealEstate\Domain\Model\ElevatorType();
        $objectStorageHoldingExactlyOneElevatorRel = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneElevatorRel->attach($elevatorRel);
        $this->subject->setElevatorRel($objectStorageHoldingExactlyOneElevatorRel);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneElevatorRel,
            'elevatorRel',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addElevatorRelToObjectStorageHoldingElevatorRel()
    {
        $elevatorRel = new \Ifabrik\IfabRealEstate\Domain\Model\ElevatorType();
        $elevatorRelObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $elevatorRelObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($elevatorRel));
        $this->inject($this->subject, 'elevatorRel', $elevatorRelObjectStorageMock);

        $this->subject->addElevatorRel($elevatorRel);
    }

    /**
     * @test
     */
    public function removeElevatorRelFromObjectStorageHoldingElevatorRel()
    {
        $elevatorRel = new \Ifabrik\IfabRealEstate\Domain\Model\ElevatorType();
        $elevatorRelObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $elevatorRelObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($elevatorRel));
        $this->inject($this->subject, 'elevatorRel', $elevatorRelObjectStorageMock);

        $this->subject->removeElevatorRel($elevatorRel);
    }

    /**
     * @test
     */
    public function getParkingRelReturnsInitialValueForParking()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getParkingRel()
        );
    }

    /**
     * @test
     */
    public function setParkingRelForObjectStorageContainingParkingSetsParkingRel()
    {
        $parkingRel = new \Ifabrik\IfabRealEstate\Domain\Model\Parking();
        $objectStorageHoldingExactlyOneParkingRel = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneParkingRel->attach($parkingRel);
        $this->subject->setParkingRel($objectStorageHoldingExactlyOneParkingRel);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneParkingRel,
            'parkingRel',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addParkingRelToObjectStorageHoldingParkingRel()
    {
        $parkingRel = new \Ifabrik\IfabRealEstate\Domain\Model\Parking();
        $parkingRelObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $parkingRelObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($parkingRel));
        $this->inject($this->subject, 'parkingRel', $parkingRelObjectStorageMock);

        $this->subject->addParkingRel($parkingRel);
    }

    /**
     * @test
     */
    public function removeParkingRelFromObjectStorageHoldingParkingRel()
    {
        $parkingRel = new \Ifabrik\IfabRealEstate\Domain\Model\Parking();
        $parkingRelObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $parkingRelObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($parkingRel));
        $this->inject($this->subject, 'parkingRel', $parkingRelObjectStorageMock);

        $this->subject->removeParkingRel($parkingRel);
    }

    /**
     * @test
     */
    public function getFiringRelReturnsInitialValueForFiringType()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getFiringRel()
        );
    }

    /**
     * @test
     */
    public function setFiringRelForObjectStorageContainingFiringTypeSetsFiringRel()
    {
        $firingRel = new \Ifabrik\IfabRealEstate\Domain\Model\FiringType();
        $objectStorageHoldingExactlyOneFiringRel = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneFiringRel->attach($firingRel);
        $this->subject->setFiringRel($objectStorageHoldingExactlyOneFiringRel);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneFiringRel,
            'firingRel',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addFiringRelToObjectStorageHoldingFiringRel()
    {
        $firingRel = new \Ifabrik\IfabRealEstate\Domain\Model\FiringType();
        $firingRelObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $firingRelObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($firingRel));
        $this->inject($this->subject, 'firingRel', $firingRelObjectStorageMock);

        $this->subject->addFiringRel($firingRel);
    }

    /**
     * @test
     */
    public function removeFiringRelFromObjectStorageHoldingFiringRel()
    {
        $firingRel = new \Ifabrik\IfabRealEstate\Domain\Model\FiringType();
        $firingRelObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $firingRelObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($firingRel));
        $this->inject($this->subject, 'firingRel', $firingRelObjectStorageMock);

        $this->subject->removeFiringRel($firingRel);
    }

    /**
     * @test
     */
    public function getAttachmentsRelReturnsInitialValueForAttachments()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getAttachmentsRel()
        );
    }

    /**
     * @test
     */
    public function setAttachmentsRelForObjectStorageContainingAttachmentsSetsAttachmentsRel()
    {
        $attachmentsRel = new \Ifabrik\IfabRealEstate\Domain\Model\Attachments();
        $objectStorageHoldingExactlyOneAttachmentsRel = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneAttachmentsRel->attach($attachmentsRel);
        $this->subject->setAttachmentsRel($objectStorageHoldingExactlyOneAttachmentsRel);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneAttachmentsRel,
            'attachmentsRel',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addAttachmentsRelToObjectStorageHoldingAttachmentsRel()
    {
        $attachmentsRel = new \Ifabrik\IfabRealEstate\Domain\Model\Attachments();
        $attachmentsRelObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $attachmentsRelObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($attachmentsRel));
        $this->inject($this->subject, 'attachmentsRel', $attachmentsRelObjectStorageMock);

        $this->subject->addAttachmentsRel($attachmentsRel);
    }

    /**
     * @test
     */
    public function removeAttachmentsRelFromObjectStorageHoldingAttachmentsRel()
    {
        $attachmentsRel = new \Ifabrik\IfabRealEstate\Domain\Model\Attachments();
        $attachmentsRelObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $attachmentsRelObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($attachmentsRel));
        $this->inject($this->subject, 'attachmentsRel', $attachmentsRelObjectStorageMock);

        $this->subject->removeAttachmentsRel($attachmentsRel);
    }
}
