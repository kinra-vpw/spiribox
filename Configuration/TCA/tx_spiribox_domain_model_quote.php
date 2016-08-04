<?php
return array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:spiribox/Resources/Private/Language/locallang_db.xlf:tx_spiribox_domain_model_quote',
		'label' => 'username',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'username,userlastname,ort,verband,text,bibelstelle,user_alter,email,kategorie,use_uploaded_file,',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('spiribox') . 'Resources/Public/Icons/tx_spiribox_domain_model_quote.gif'
	),
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, username, userlastname, ort, verband, text, bibelstelle, user_alter, email, kategorie, use_uploaded_file',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, username, userlastname, ort, verband, text, bibelstelle, user_alter, email, kategorie, use_uploaded_file, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
	
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
				'type' => 'select',
				'renderType' => 'selectSingle',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'renderType' => 'selectSingle',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_spiribox_domain_model_quote',
				'foreign_table_where' => 'AND tx_spiribox_domain_model_quote.pid=###CURRENT_PID### AND tx_spiribox_domain_model_quote.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),

		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
	
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),

		'username' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:spiribox/Resources/Private/Language/locallang_db.xlf:tx_spiribox_domain_model_quote.username',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'userlastname' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:spiribox/Resources/Private/Language/locallang_db.xlf:tx_spiribox_domain_model_quote.userlastname',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'ort' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:spiribox/Resources/Private/Language/locallang_db.xlf:tx_spiribox_domain_model_quote.ort',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'verband' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:spiribox/Resources/Private/Language/locallang_db.xlf:tx_spiribox_domain_model_quote.verband',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'text' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:spiribox/Resources/Private/Language/locallang_db.xlf:tx_spiribox_domain_model_quote.text',
			'config' => array(
				'type' => 'input',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim,required'
			)
		),
		'bibelstelle' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:spiribox/Resources/Private/Language/locallang_db.xlf:tx_spiribox_domain_model_quote.bibelstelle',
			'config' => array(
				'type' => 'input',
				'cols' => 50,
				'rows' => 1,
				'eval' => 'trim'
			)
		),
		'user_alter' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:spiribox/Resources/Private/Language/locallang_db.xlf:tx_spiribox_domain_model_quote.user_alter',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			)
		),
		'email' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:spiribox/Resources/Private/Language/locallang_db.xlf:tx_spiribox_domain_model_quote.email',
			'config' => array(
				'type' => 'input',
				'size' => 6,
				'eval' => 'trim,required'
			)
		),
		'kategorie' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:spiribox/Resources/Private/Language/locallang_db.xlf:tx_spiribox_domain_model_quote.kategorie',
			'config' => array(
                            'foreign_match_fields' => array(
									'fieldname' => 'kategorie',
									'tablenames' => 'tx_spiribox_domain_model_quote',
									'table_local' => 'sys_category',
                                ),
                            'type' => 'select',
                            'minitems' => 0,
                            'maxitems' => 1,
                            )
                ),
		'use_uploaded_file' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:spiribox/Resources/Private/Language/locallang_db.xlf:tx_spiribox_domain_model_quote.use_uploaded_file',
			'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
				'useUploadedFile',
				array(
					'appearance' => array(
						'createNewRelationLinkTitle' => 'LLL:EXT:cms/locallang_ttc.xlf:use_uploaded_file.addFileReference'
					),
                                    	// custom configuration for displaying fields in the overlay/reference table
					// to use the imageoverlayPalette instead of the basicoverlayPalette
					'foreign_match_fields' => array(
						'fieldname' => 'use_uploaded_file',
						'tablenames' => 'tx_spiribox_domain_model_quote',
						'table_local' => 'sys_file',
					),
					'foreign_types' => array(
						'0' => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						),
						\TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						),
						\TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						),
						\TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						),
						\TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						),
						\TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						)
					),
				),
				$GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
			),
		),
		
	),
);