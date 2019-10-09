<?php
namespace Ifabrik\IfabRealEstate\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author ifabrik GmbH <info@ifababrik.de>
 */
class ContactAddressTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Ifabrik\IfabRealEstate\Domain\Model\ContactAddress
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Ifabrik\IfabRealEstate\Domain\Model\ContactAddress();
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
}
