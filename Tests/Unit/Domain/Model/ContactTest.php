<?php
namespace Ifabrik\IfabRealEstate\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author ifabrik GmbH <info@ifababrik.de>
 */
class ContactTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Ifabrik\IfabRealEstate\Domain\Model\Contact
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Ifabrik\IfabRealEstate\Domain\Model\Contact();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getEmployeeNumberReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getEmployeeNumber()
        );
    }

    /**
     * @test
     */
    public function setEmployeeNumberForStringSetsEmployeeNumber()
    {
        $this->subject->setEmployeeNumber('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'employeeNumber',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForStringSetsName()
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'name',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSurnameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getSurname()
        );
    }

    /**
     * @test
     */
    public function setSurnameForStringSetsSurname()
    {
        $this->subject->setSurname('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'surname',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTitle()
        );
    }

    /**
     * @test
     */
    public function setTitleForStringSetsTitle()
    {
        $this->subject->setTitle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'title',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCentralEmailReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getCentralEmail()
        );
    }

    /**
     * @test
     */
    public function setCentralEmailForStringSetsCentralEmail()
    {
        $this->subject->setCentralEmail('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'centralEmail',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDirectEmailReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDirectEmail()
        );
    }

    /**
     * @test
     */
    public function setDirectEmailForStringSetsDirectEmail()
    {
        $this->subject->setDirectEmail('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'directEmail',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPrivateEmailReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPrivateEmail()
        );
    }

    /**
     * @test
     */
    public function setPrivateEmailForStringSetsPrivateEmail()
    {
        $this->subject->setPrivateEmail('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'privateEmail',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCentralTelReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getCentralTel()
        );
    }

    /**
     * @test
     */
    public function setCentralTelForStringSetsCentralTel()
    {
        $this->subject->setCentralTel('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'centralTel',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDirectTelReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDirectTel()
        );
    }

    /**
     * @test
     */
    public function setDirectTelForStringSetsDirectTel()
    {
        $this->subject->setDirectTel('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'directTel',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPrivateTelReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPrivateTel()
        );
    }

    /**
     * @test
     */
    public function setPrivateTelForStringSetsPrivateTel()
    {
        $this->subject->setPrivateTel('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'privateTel',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getFaxReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getFax()
        );
    }

    /**
     * @test
     */
    public function setFaxForStringSetsFax()
    {
        $this->subject->setFax('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'fax',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getMobilePhoneReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getMobilePhone()
        );
    }

    /**
     * @test
     */
    public function setMobilePhoneForStringSetsMobilePhone()
    {
        $this->subject->setMobilePhone('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'mobilePhone',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getOnlineConcentReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getOnlineConcent()
        );
    }

    /**
     * @test
     */
    public function setOnlineConcentForBoolSetsOnlineConcent()
    {
        $this->subject->setOnlineConcent(true);

        self::assertAttributeEquals(
            true,
            'onlineConcent',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPoBoxReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPoBox()
        );
    }

    /**
     * @test
     */
    public function setPoBoxForStringSetsPoBox()
    {
        $this->subject->setPoBox('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'poBox',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPoZipReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPoZip()
        );
    }

    /**
     * @test
     */
    public function setPoZipForStringSetsPoZip()
    {
        $this->subject->setPoZip('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'poZip',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPoAreaReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPoArea()
        );
    }

    /**
     * @test
     */
    public function setPoAreaForStringSetsPoArea()
    {
        $this->subject->setPoArea('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'poArea',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getImageReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getImage()
        );
    }

    /**
     * @test
     */
    public function setImageForFileReferenceSetsImage()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setImage($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'image',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getContactAddressRelReturnsInitialValueForContactAddress()
    {
        self::assertEquals(
            null,
            $this->subject->getContactAddressRel()
        );
    }

    /**
     * @test
     */
    public function setContactAddressRelForContactAddressSetsContactAddressRel()
    {
        $contactAddressRelFixture = new \Ifabrik\IfabRealEstate\Domain\Model\ContactAddress();
        $this->subject->setContactAddressRel($contactAddressRelFixture);

        self::assertAttributeEquals(
            $contactAddressRelFixture,
            'contactAddressRel',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getGenderRelReturnsInitialValueForGender()
    {
        self::assertEquals(
            null,
            $this->subject->getGenderRel()
        );
    }

    /**
     * @test
     */
    public function setGenderRelForGenderSetsGenderRel()
    {
        $genderRelFixture = new \Ifabrik\IfabRealEstate\Domain\Model\Gender();
        $this->subject->setGenderRel($genderRelFixture);

        self::assertAttributeEquals(
            $genderRelFixture,
            'genderRel',
            $this->subject
        );
    }
}
