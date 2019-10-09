<?php
namespace Ifabrik\IfabRealestate\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author ifabrik GmbH <info@ifababrik.de>
 */
class AttachmentTypeValueTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Ifabrik\IfabRealestate\Domain\Model\Attachmentgroupvalue
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Ifabrik\IfabRealestate\Domain\Model\Attachmentgroupvalue();
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
    public function getAttachmentTypeRelReturnsInitialValueForAttachmentType()
    {
        self::assertEquals(
            null,
            $this->subject->getAttachmentTypeRel()
        );
    }

    /**
     * @test
     */
    public function setAttachmentTypeRelForAttachmentTypeSetsAttachmentTypeRel()
    {
        $attachmentTypeRelFixture = new \Ifabrik\IfabRealestate\Domain\Model\Attachmentgroup();
        $this->subject->setAttachmentTypeRel($attachmentTypeRelFixture);

        self::assertAttributeEquals(
            $attachmentTypeRelFixture,
            'attachmentTypeRel',
            $this->subject
        );
    }
}
