<?php
namespace SpiriBox\Spiribox\Tests\Unit\Controller;
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
 * Test case for class SpiriBox\Spiribox\Controller\QuoteController.
 *
 * @author Michel Blumenstein <michel@kinra.de>
 */
class QuoteControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{

	/**
	 * @var \SpiriBox\Spiribox\Controller\QuoteController
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = $this->getMock('SpiriBox\\Spiribox\\Controller\\QuoteController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllQuotesFromRepositoryAndAssignsThemToView()
	{

		$allQuotes = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$quoteRepository = $this->getMock('', array('findAll'), array(), '', FALSE);
		$quoteRepository->expects($this->once())->method('findAll')->will($this->returnValue($allQuotes));
		$this->inject($this->subject, 'quoteRepository', $quoteRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('quotes', $allQuotes);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenQuoteToView()
	{
		$quote = new \SpiriBox\Spiribox\Domain\Model\Quote();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('quote', $quote);

		$this->subject->showAction($quote);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenQuoteToQuoteRepository()
	{
		$quote = new \SpiriBox\Spiribox\Domain\Model\Quote();

		$quoteRepository = $this->getMock('', array('add'), array(), '', FALSE);
		$quoteRepository->expects($this->once())->method('add')->with($quote);
		$this->inject($this->subject, 'quoteRepository', $quoteRepository);

		$this->subject->createAction($quote);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenQuoteToView()
	{
		$quote = new \SpiriBox\Spiribox\Domain\Model\Quote();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('quote', $quote);

		$this->subject->editAction($quote);
	}

	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenQuoteInQuoteRepository()
	{
		$quote = new \SpiriBox\Spiribox\Domain\Model\Quote();

		$quoteRepository = $this->getMock('', array('update'), array(), '', FALSE);
		$quoteRepository->expects($this->once())->method('update')->with($quote);
		$this->inject($this->subject, 'quoteRepository', $quoteRepository);

		$this->subject->updateAction($quote);
	}

	/**
	 * @test
	 */
	public function deleteActionRemovesTheGivenQuoteFromQuoteRepository()
	{
		$quote = new \SpiriBox\Spiribox\Domain\Model\Quote();

		$quoteRepository = $this->getMock('', array('remove'), array(), '', FALSE);
		$quoteRepository->expects($this->once())->method('remove')->with($quote);
		$this->inject($this->subject, 'quoteRepository', $quoteRepository);

		$this->subject->deleteAction($quote);
	}
        
}
