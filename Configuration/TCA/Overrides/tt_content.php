<?php
/**
 * License: This file is part of the package ifabrik/ifab-sitepackage.
 * For the full copyright and license information, please read the
 * license file that was distributed with this source code.
 *
 * @copyright 2022 i-fabrik GmbH
 * @author    Ralph Kropp
 */

defined('TYPO3') or die();

(static function() {
    $pluginSignature = 'ifabrealestate_ifabrealestate';

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
        'IfabRealestate',
        'Ifabrealestate',
        'ifabrik Real Estate'
    );
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:ifab_realestate/Configuration/FlexForms/flexform_ifabrealestate.xml');

    $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
    $GLOBALS['TBE_STYLES']['skins']['backend']['stylesheetDirectories']['ifab_realestate'] = 'EXT:ifab_realestate/Resources/Public/Backend/Css/';

    // define BackendRenderer
    $GLOBALS['TCA']['tt_content']['types']['list']['previewRenderer'] = Ifabrik\IfabRealestate\Backend\Preview\BackendPreviewRenderer::class;

})();

