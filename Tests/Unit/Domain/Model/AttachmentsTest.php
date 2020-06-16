<?php
namespace Ifabrik\IfabRealEstate\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author ifabrik GmbH <info@ifababrik.de>
 */
class AttachmentsTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Ifabrik\IfabRealEstate\Domain\Model\Attachments
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Ifabrik\IfabRealEstate\Domain\Model\Attachments();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getFileReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getFile()
        );
    }

    /**
     * @test
     */
    public function setFileForFileReferenceSetsFile()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setFile($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'file',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAttachmentTypeValueRelReturnsInitialValueForAttachmentTypeValue()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getAttachmentTypeValueRel()
        );
    }

    /**
     * @test
     */
    public function setAttachmentTypeValueRelForObjectStorageContainingAttachmentTypeValueSetsAttachmentTypeValueRel()
    {
        $attachmentTypeValueRel = new \Ifabrik\IfabRealEstate\Domain\Model\AttachmentGroupValue();
        $objectStorageHoldingExactlyOneAttachmentTypeValueRel = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneAttachmentTypeValueRel->attach($attachmentTypeValueRel);
        $this->subject->setAttachmentTypeValueRel($objectStorageHoldingExactlyOneAttachmentTypeValueRel);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneAttachmentTypeValueRel,
            'attachmentTypeValueRel',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addAttachmentTypeValueRelToObjectStorageHoldingAttachmentTypeValueRel()
    {
        $attachmentTypeValueRel = new \Ifabrik\IfabRealEstate\Domain\Model\AttachmentGroupValue();
        $attachmentTypeValueRelObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $attachmentTypeValueRelObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($attachmentTypeValueRel));
        $this->inject($this->subject, 'attachmentTypeValueRel', $attachmentTypeValueRelObjectStorageMock);

        $this->subject->addAttachmentTypeValueRel($attachmentTypeValueRel);
    }

    /**
     * @test
     */
    public function removeAttachmentTypeValueRelFromObjectStorageHoldingAttachmentTypeValueRel()
    {
        $attachmentTypeValueRel = new \Ifabrik\IfabRealEstate\Domain\Model\AttachmentGroupValue();
        $attachmentTypeValueRelObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $attachmentTypeValueRelObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($attachmentTypeValueRel));
        $this->inject($this->subject, 'attachmentTypeValueRel', $attachmentTypeValueRelObjectStorageMock);

        $this->subject->removeAttachmentTypeValueRel($attachmentTypeValueRel);
    }
}
