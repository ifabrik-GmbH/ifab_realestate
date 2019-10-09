<?php
namespace Ifabrik\IfabRealEstate\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author ifabrik GmbH <info@ifababrik.de>
 */
class PropertyTypeValueTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Ifabrik\IfabRealEstate\Domain\Model\PropertyTypeValue
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Ifabrik\IfabRealEstate\Domain\Model\PropertyTypeValue();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getValueReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getValue()
        );
    }

    /**
     * @test
     */
    public function setValueForStringSetsValue()
    {
        $this->subject->setValue('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'value',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getObjektarttypeRelationReturnsInitialValueForPropertyType()
    {
        self::assertEquals(
            null,
            $this->subject->getObjektarttypeRelation()
        );
    }

    /**
     * @test
     */
    public function setObjektarttypeRelationForPropertyTypeSetsObjektarttypeRelation()
    {
        $objektarttypeRelationFixture = new \Ifabrik\IfabRealestate\Domain\Model\PropertyType();
        $this->subject->setObjektarttypeRelation($objektarttypeRelationFixture);

        self::assertAttributeEquals(
            $objektarttypeRelationFixture,
            'objektarttypeRelation',
            $this->subject
        );
    }
}
