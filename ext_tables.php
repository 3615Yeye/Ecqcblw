<?php
defined('TYPO3_MODE') || die('Access denied.');

/*
call_user_func(
    function($extKey)
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Yeye.Ecqcblw',
            'Ecqcblw',
            'Est-ce que c\&#039;est bientôt le week-end'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extKey, 'Configuration/TypoScript', 'Ecqcblw');

    },
    $_EXTKEY
);
 */
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
        $_EXTKEY,
        'Pi1',
        'Ecqcblw'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Ecqcblw configuration');
