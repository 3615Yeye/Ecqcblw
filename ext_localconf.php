<?php
defined('TYPO3_MODE') || die('Access denied.');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Yeye.Ecqcblw',
    'Pi1',
    [
        'Ecqcblw' => 'weekend, ecqcblw'
    ],
    // non-cacheable actions
    [
        
    ]
);

$GLOBALS['TYPO3_CONF_VARS']['FE']['eID_include']['ecqcblw'] = "EXT:ecqcblw/Classes/Eid/EcqcblwEid.php";
