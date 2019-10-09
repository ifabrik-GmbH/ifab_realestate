<?php
namespace Ifabrik\IfabRealEstate\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author ifabrik GmbH <info@ifababrik.de>
 */
class AddressTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Ifabrik\IfabRealEstate\Domain\Model\Address
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Ifabrik\IfabRealEstate\Domain\Model\Address();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getStreetReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getStreet()
        );
    }

    /**
     * @test
     */
    public function setStreetForStringSetsStreet()
    {
        $this->subject->setStreet('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'street',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getNumberReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getNumber()
        );
    }

    /**
     * @test
     */
    public function setNumberForStringSetsNumber()
    {
        $this->subject->setNumber('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'number',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAreaReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getArea()
        );
    }

    /**
     * @test
     */
    public function setAreaForStringSetsArea()
    {
        $this->subject->setArea('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'area',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getZipReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getZip()
        );
    }

    /**
     * @test
     */
    public function setZipForStringSetsZip()
    {
        $this->subject->setZip('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'zip',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getStateReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getState()
        );
    }

    /**
     * @test
     */
    public function setStateForStringSetsState()
    {
        $this->subject->setState('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'state',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCountryReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getCountry()
        );
    }

    /**
     * @test
     */
    public function setCountryForStringSetsCountry()
    {
        $this->subject->setCountry('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'country',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getMunicipalityCodeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getMunicipalityCode()
        );
    }

    /**
     * @test
     */
    public function setMunicipalityCodeForStringSetsMunicipalityCode()
    {
        $this->subject->setMunicipalityCode('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'municipalityCode',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSubdistrictReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getSubdistrict()
        );
    }

    /**
     * @test
     */
    public function setSubdistrictForStringSetsSubdistrict()
    {
        $this->subject->setSubdistrict('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'subdistrict',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getRegionalAdditionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getRegionalAddition()
        );
    }

    /**
     * @test
     */
    public function setRegionalAdditionForStringSetsRegionalAddition()
    {
        $this->subject->setRegionalAddition('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'regionalAddition',
            $this->subject
        );
    }
}
