<?php
defined('TYPO3') || die();

call_user_func(function () {
    /**
     * Extension key
     */
    $extensionKey = 'ifab_realestate';

    /**
     * Add default TypoScript (constants and setup)
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        'ifabrik Real Estate'
    );

    $GLOBALS['TBE_STYLES']['skins']['backend']['stylesheetDirectories']['ifab_realestate'] = 'EXT:ifab_realestate/Resources/Public/Backend/Css/';

});