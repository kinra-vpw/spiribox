<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'SpiriBox.' . $_EXTKEY,
	'List',
	'SpiriBox Listenansicht'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'SpiriBox.' . $_EXTKEY,
	'Random',
	'SpiriBox Zufallsansicht'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'SpiriBox.' . $_EXTKEY,
	'Form',
	'SpiriBox Formular'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::makeCategorizable(
        'SpiriBox',
        'tx_spiribox_domain_model_quote',
        'kategorie',
        array()
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'SpiriBox');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_spiribox_domain_model_quote', 'EXT:spiribox/Resources/Private/Language/locallang_csh_tx_spiribox_domain_model_quote.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_spiribox_domain_model_quote');