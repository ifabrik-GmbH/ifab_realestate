<?php
/**
 * License: This file is part of the package ifabrik/ifab_realestate.
 * For the full copyright and license information, please read the
 * license file that was distributed with this source code.
 *
 * @copyright concept & creation by ifabrik.de, Leipzig
 * @author    Aristeidis Karavas
 */

defined('TYPO3') || die('Access denied.');

( function() {

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_ifabrealestate_domain_model_property', 'EXT:ifab_realestate/Resources/Private/Language/locallang_csh_tx_ifabrealestate_domain_model_property.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ifabrealestate_domain_model_property');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_ifabrealestate_domain_model_propertyusage', 'EXT:ifab_realestate/Resources/Private/Language/locallang_csh_tx_ifabrealestate_domain_model_propertyusage.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ifabrealestate_domain_model_propertyusage');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_ifabrealestate_domain_model_marketingmethod', 'EXT:ifab_realestate/Resources/Private/Language/locallang_csh_tx_ifabrealestate_domain_model_marketingmethod.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ifabrealestate_domain_model_marketingmethod');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_ifabrealestate_domain_model_propertynature', 'EXT:ifab_realestate/Resources/Private/Language/locallang_csh_tx_ifabrealestate_domain_model_propertynature.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ifabrealestate_domain_model_propertynature');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_ifabrealestate_domain_model_propertytypevalue', 'EXT:ifab_realestate/Resources/Private/Language/locallang_csh_tx_ifabrealestate_domain_model_propertytypevalue.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ifabrealestate_domain_model_propertytypevalue');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_ifabrealestate_domain_model_propertytype', 'EXT:ifab_realestate/Resources/Private/Language/locallang_csh_tx_ifabrealestate_domain_model_propertytype.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ifabrealestate_domain_model_propertytype');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_ifabrealestate_domain_model_address', 'EXT:ifab_realestate/Resources/Private/Language/locallang_csh_tx_ifabrealestate_domain_model_address.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ifabrealestate_domain_model_address');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_ifabrealestate_domain_model_contact', 'EXT:ifab_realestate/Resources/Private/Language/locallang_csh_tx_ifabrealestate_domain_model_contact.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ifabrealestate_domain_model_contact');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_ifabrealestate_domain_model_contactaddress', 'EXT:ifab_realestate/Resources/Private/Language/locallang_csh_tx_ifabrealestate_domain_model_contactaddress.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ifabrealestate_domain_model_contactaddress');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_ifabrealestate_domain_model_bathroomtype', 'EXT:ifab_realestate/Resources/Private/Language/locallang_csh_tx_ifabrealestate_domain_model_bathroomtype.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ifabrealestate_domain_model_bathroomtype');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_ifabrealestate_domain_model_kitchentype', 'EXT:ifab_realestate/Resources/Private/Language/locallang_csh_tx_ifabrealestate_domain_model_kitchentype.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ifabrealestate_domain_model_kitchentype');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_ifabrealestate_domain_model_floortype', 'EXT:ifab_realestate/Resources/Private/Language/locallang_csh_tx_ifabrealestate_domain_model_floortype.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ifabrealestate_domain_model_floortype');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_ifabrealestate_domain_model_heattype', 'EXT:ifab_realestate/Resources/Private/Language/locallang_csh_tx_ifabrealestate_domain_model_heattype.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ifabrealestate_domain_model_heattype');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_ifabrealestate_domain_model_elevatortype', 'EXT:ifab_realestate/Resources/Private/Language/locallang_csh_tx_ifabrealestate_domain_model_elevatortype.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ifabrealestate_domain_model_elevatortype');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_ifabrealestate_domain_model_parking', 'EXT:ifab_realestate/Resources/Private/Language/locallang_csh_tx_ifabrealestate_domain_model_parking.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ifabrealestate_domain_model_parking');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_ifabrealestate_domain_model_firingtype', 'EXT:ifab_realestate/Resources/Private/Language/locallang_csh_tx_ifabrealestate_domain_model_firingtype.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ifabrealestate_domain_model_firingtype');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_ifabrealestate_domain_model_attachments', 'EXT:ifab_realestate/Resources/Private/Language/locallang_csh_tx_ifabrealestate_domain_model_attachments.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ifabrealestate_domain_model_attachments');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_ifabrealestate_domain_model_attachmentgroup', 'EXT:ifab_realestate/Resources/Private/Language/locallang_csh_tx_ifabrealestate_domain_model_attachmentgroup.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ifabrealestate_domain_model_attachmentgroup');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_ifabrealestate_domain_model_attachmentgroupvalue', 'EXT:ifab_realestate/Resources/Private/Language/locallang_csh_tx_ifabrealestate_domain_model_attachmentgroupvalue.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ifabrealestate_domain_model_attachmentgroupvalue');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_ifabrealestate_domain_model_gender', 'EXT:ifab_realestate/Resources/Private/Language/locallang_csh_tx_ifabrealestate_domain_model_gender.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ifabrealestate_domain_model_gender');

}) ();

