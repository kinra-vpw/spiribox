<?php

namespace SpiriBox\Spiribox\Tests\Unit\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2016 Michel Blumenstein <michel@kinra.de>, kinra | vpw
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Test case for class \SpiriBox\Spiribox\Domain\Model\Quote.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Michel Blumenstein <michel@kinra.de>
 */
class QuoteTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
	/**
	 * @var \SpiriBox\Spiribox\Domain\Model\Quote
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = new \SpiriBox\Spiribox\Domain\Model\Quote();
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getUsernameReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getUsername()
		);
	}

	/**
	 * @test
	 */
	public function setUsernameForStringSetsUsername()
	{
		$this->subject->setUsername('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'username',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getUserlastnameReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getUserlastname()
		);
	}

	/**
	 * @test
	 */
	public function setUserlastnameForStringSetsUserlastname()
	{
		$this->subject->setUserlastname('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'userlastname',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getOrtReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getOrt()
		);
	}

	/**
	 * @test
	 */
	public function setOrtForStringSetsOrt()
	{
		$this->subject->setOrt('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'ort',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getVerbandReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getVerband()
		);
	}

	/**
	 * @test
	 */
	public function setVerbandForStringSetsVerband()
	{
		$this->subject->setVerband('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'verband',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTextReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getText()
		);
	}

	/**
	 * @test
	 */
	public function setTextForStringSetsText()
	{
		$this->subject->setText('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'text',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getBibelstelleReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getBibelstelle()
		);
	}

	/**
	 * @test
	 */
	public function setBibelstelleForStringSetsBibelstelle()
	{
		$this->subject->setBibelstelle('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'bibelstelle',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getUserAlterReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setUserAlterForIntSetsUserAlter()
	{	}

	/**
	 * @test
	 */
	public function getEmailReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getEmail()
		);
	}

	/**
	 * @test
	 */
	public function setEmailForStringSetsEmail()
	{
		$this->subject->setEmail('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'email',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getKategorieReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setKategorieForIntSetsKategorie()
	{	}

	/**
	 * @test
	 */
	public function getUseUploadedFileReturnsInitialValueForFileReference()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getUseUploadedFile()
		);
	}

	/**
	 * @test
	 */
	public function setUseUploadedFileForFileReferenceSetsUseUploadedFile()
	{
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setUseUploadedFile($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'useUploadedFile',
			$this->subject
		);
	}
}
