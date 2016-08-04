<?php
namespace SpiriBox\Spiribox\Domain\Model;

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
 * Quote
 */
class Quote extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * username
     *
     * @var string
     * @validate NotEmpty, Alphanumeric
     */
    protected $username = '';
    
    /**
     * userlastname
     *
     * @var string
     * @validate Alphanumeric
     */
    protected $userlastname = '';
    
    /**
     * ort
     *
     * @var string
     * @validate NotEmpty, Alphanumeric
     */
    protected $ort = '';
    
    /**
     * verband
     *
     * @var string
     * @validate Text
     */
    protected $verband = '';
    
    /**
     * text
     *
     * @var string
     * @validate NotEmpty, Text, StringLength(minimum=2,maximum=250)
     */
    protected $text = '';
    
    /**
     * bibelstelle
     *
     * @var string
     * @validate Text
     */
    protected $bibelstelle = '';
    
    /**
     * userAlter
     *
     * @var int
     * @validate NotEmpty, Number
     */
    protected $userAlter = '';
    
    /**
     * email
     *
     * @var string
     * @validate NotEmpty, EmailAddress
     */
    protected $email = '';
    
    /**
     * kategorie
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\Category
     * @validate NotEmpty
     */
    protected $kategorie;
    
    /**
     * useUploadedFile
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @validate NotEmpty
     */
    protected $useUploadedFile = null;
    
    /**
     * Returns the text
     *
     * @return string $text
     */
    public function getText()
    {
        return $this->text;
    }
    
    /**
     * Sets the text
     *
     * @param string $text
     * @return void
     */
    public function setText($text)
    {
        $this->text = $text;
    }
    
    /**
     * Returns the email
     *
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }
    
    /**
     * Sets the email
     *
     * @param string $email
     * @return void
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
    
    /**
     * Returns the username
     *
     * @return string username
     */
    public function getUsername()
    {
        return $this->username;
    }
    
    /**
     * Sets the username
     *
     * @param string $username
     * @return void
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }
    
    /**
     * Returns the userlastname
     *
     * @return string userlastname
     */
    public function getUserlastname()
    {
        return $this->userlastname;
    }
    
    /**
     * Sets the userlastname
     *
     * @param string $userlastname
     * @return void
     */
    public function setUserlastname($userlastname)
    {
        $this->userlastname = $userlastname;
    }
    
    /**
     * Returns the ort
     *
     * @return string ort
     */
    public function getOrt()
    {
        return $this->ort;
    }
    
    /**
     * Sets the ort
     *
     * @param string $ort
     * @return void
     */
    public function setOrt($ort)
    {
        $this->ort = $ort;
    }
    
    /**
     * Returns the verband
     *
     * @return string verband
     */
    public function getVerband()
    {
        return $this->verband;
    }
    
    /**
     * Sets the verband
     *
     * @param string $verband
     * @return void
     */
    public function setVerband($verband)
    {
        $this->verband = $verband;
    }
    
    /**
     * Returns the bibelstelle
     *
     * @return string bibelstelle
     */
    public function getBibelstelle()
    {
        return $this->bibelstelle;
    }
    
    /**
     * Sets the bibelstelle
     *
     * @param string $bibelstelle
     * @return void
     */
    public function setBibelstelle($bibelstelle)
    {
        $this->bibelstelle = $bibelstelle;
    }
    
    /**
     * Returns the userAlter
     *
     * @return int userAlter
     */
    public function getUserAlter()
    {
        return $this->userAlter;
    }
    
    /**
     * Sets the userAlter
     *
     * @param string $userAlter
     * @return void
     */
    public function setUserAlter($userAlter)
    {
        $this->userAlter = $userAlter;
    }
    
    /**
     * Returns the kategorie
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\Category $kategorie
     */
    public function getKategorie()
    {
        return $this->kategorie;
    }
    
    /**
     * Sets the kategorie
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\Category $kategorie
     * @return void
     */
    public function setKategorie($kategorie)
    {
        $this->kategorie = $kategorie;
    }
    
    /**
     * Returns the useUploadedFile
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $useUploadedFile
     */
    public function getUseUploadedFile()
    {
        return $this->useUploadedFile;
    }
    
    
    /**
     * Sets the useUploadedFile
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $useUploadedFile
     * @return void
     */
    public function setUseUploadedFile($useUploadedFile)
    {
        $this->useUploadedFile = $useUploadedFile;
    }

}