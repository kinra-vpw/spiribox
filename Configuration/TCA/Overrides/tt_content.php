<?php

// Einbindung PageID und max. Statements für Plugin Random der Extension Spiribox
$pluginSignatureRandom = 'spiribox_random';

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignatureRandom] = 'pi_flexform';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    $pluginSignatureRandom,
    'FILE:EXT:spiribox/Configuration/FlexForms/FF_Spiribox_Random.xml'
);

// Einbindung PageID und Mailadresse für Plugin Form der Extension Spiribox
$pluginSignatureForm = 'spiribox_form';

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignatureForm] = 'pi_flexform';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    $pluginSignatureForm,
    'FILE:EXT:spiribox/Configuration/FlexForms/FF_Spiribox_Form.xml'
);

// Einbindung PageID für Plugin List der Extension Spiribox
$pluginSignatureList = 'spiribox_list';

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignatureList] = 'pi_flexform';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    $pluginSignatureList,
    'FILE:EXT:spiribox/Configuration/FlexForms/FF_Spiribox_List.xml'
);