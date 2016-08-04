<?php
namespace SpiriBox\Spiribox\Controller;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2016 Michel Blumenstein <michel@kinra.de>, kinra | vpw
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
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
 * QuoteController
 */
class QuoteController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * quoteRepository
     *
     * @var \SpiriBox\Spiribox\Domain\Repository\QuoteRepository
     * @inject
     */
    protected $quoteRepository = NULL;
    
    /**
     * categoryRepository
     *
     * @var \TYPO3\CMS\Extbase\Domain\Repository\CategoryRepository
     * @inject
     */
    protected $categoryRepository = NULL;
    
    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $catuid = ($this->settings['quote']['catuid']) ?: NULL;
        $quotes = $this->quoteRepository->findByKategorie($catuid);
        $this->view->assign('quotes', $quotes);
    }
    
    /**
     * action zufall
     *
     * @return void
     */
    public function randomAction()
    {
        $catuid = ($this->settings['quote']['catuid']) ?: NULL;
        $limit = ($this->settings['quote']['max']) ?: NULL;
        $quotes = $this->quoteRepository->findRandom($limit, $catuid);
        $this->view->assign('quotes', $quotes);
    }
    
    /**
     * action show
     *
     * @param \SpiriBox\Spiribox\Domain\Model\Quote $quote
     * @return void
     */
    public function showAction(\SpiriBox\Spiribox\Domain\Model\Quote $quote)
    {
        $this->view->assign('quote', $quote);
    }
    
    /**
     * action new
     *
     * @return void
     */
    public function newAction()
    {
        $pcatid = $this->settings['quote']['pcatid'];
        $category = $this->categoryRepository->findByParent($pcatid);
        $this->view->assign( 'category', $category );
    }
    
    public function initializeCreateAction()
    {
        $this->setTypeConverterConfigurationForImageUpload('newQuote');
    }
    
    /**
     * action create
     *
     * @param \SpiriBox\Spiribox\Domain\Model\Quote $newQuote
	 * @param string $emptfield
	 * @validate $emptfield StringLength(minimum=0,maximum=0)
     * @return void
     */
    public function createAction(\SpiriBox\Spiribox\Domain\Model\Quote $newQuote, $emptfield)
    {
        $this->quoteRepository->add($newQuote);
        
        $mailfrom = \TYPO3\CMS\Core\Utility\MailUtility::getSystemFrom();
        $mailto = $this->settings['quote']['mailaddress'];
        $mailsubject = $this->settings['quote']['mailsubject'];
        $mailbody = $this->settings['quote']['mailbody'];
        
        $mail = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Core\\Mail\\MailMessage');
        $mail->setSubject($mailsubject);
        $mail->setFrom($mailfrom);
        $mail->setTo($mailto);
        $mail->setBody($mailbody);
        $mail->send();
        $this->redirect('confirm');
    }
    
    /**
     * action confirm
     * 
     * @return void
     */
    public function confirmAction()
    {
        
    }
    
    /**
     * action edit
     *
     * @param \SpiriBox\Spiribox\Domain\Model\Quote $quote
     * @ignorevalidation $quote
     * @return void
     */
    public function editAction(\SpiriBox\Spiribox\Domain\Model\Quote $quote)
    {
        $this->view->assign('quote', $quote);
    }
    
    /**
     * action update
     *
     * @param \SpiriBox\Spiribox\Domain\Model\Quote $quote
     * @return void
     */
    public function updateAction(\SpiriBox\Spiribox\Domain\Model\Quote $quote)
    {
        $this->addFlashMessage('The object was succesfully updated.', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->quoteRepository->update($quote);
        $this->redirect('list');
    }
    
    /**
     * action delete
     *
     * @param \SpiriBox\Spiribox\Domain\Model\Quote $quote
     * @return void
     */
    public function deleteAction(\SpiriBox\Spiribox\Domain\Model\Quote $quote)
    {
        $this->addFlashMessage('The object was succesfully deleted.', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->quoteRepository->remove($quote);
        $this->redirect('list');
    }
    
    protected function setTypeConverterConfigurationForImageUpload($argumentName)
    {
        $uploadConfiguration = array(
            \SpiriBox\Spiribox\Property\TypeConverter\UploadedFileReferenceConverter::CONFIGURATION_ALLOWED_FILE_EXTENSIONS => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
            \SpiriBox\Spiribox\Property\TypeConverter\UploadedFileReferenceConverter::CONFIGURATION_UPLOAD_FOLDER => '1:/user_upload/spiribox/',
        );
        $newExampleConfiguration = $this->arguments[$argumentName]->getPropertyMappingConfiguration();
        $newExampleConfiguration->forProperty('useUploadedFile')
            ->setTypeConverterOptions(
                'SpiriBox\\Spiribox\\Property\\TypeConverter\\UploadedFileReferenceConverter',
                $uploadConfiguration
            );
    }

}