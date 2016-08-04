<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'SpiriBox.' . $_EXTKEY,
	'List',
	array(
		'Quote' => 'list',
		
	),
	// non-cacheable actions
	array(
		'Quote' => '',
		
	)
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'SpiriBox.' . $_EXTKEY,
	'Random',
	array(
		'Quote' => 'random',
		
	),
	// non-cacheable actions
	array(
		'Quote' => 'random',
		
	)
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'SpiriBox.' . $_EXTKEY,
	'Form',
	array(
		'Quote' => 'new, create, confirm',
		
	),
	// non-cacheable actions
	array(
		'Quote' => '',
		
	)
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::makeCategorizable(
        'SpiriBox',
        'tx_spiribox_domain_model_quote',
        'kategorie',
        array()
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter('SpiriBox\\Spiribox\\Property\\TypeConverter\\UploadedFileReferenceConverter');