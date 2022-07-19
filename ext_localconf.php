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

use Ifabrik\IfabRealestate\Controller\PropertyController;
use Ifabrik\IfabRealestate\Controller\AjaxController;

(function() {

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'IfabRealestate',
        'Ifabrealestate',
        [
            PropertyController::class => 'list, show, search, searchResults, ajax',
            AjaxController::class => 'ajaxResults',
        ],
        // non-cacheable actions
        [
            PropertyController::class => 'list, show, search, searchResults, ajax',
            AjaxController::class => 'ajaxResults',
        ]
    );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    ifabrealestate {
                        iconIdentifier = Realestates
                        title = LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifab_realestate_ifabrealestate.name
                        description = LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifab_realestate_ifabrealestate.description
                        tt_content_defValues {
                            CType = list
                            list_type = ifabrealestate_ifabrealestate
                        }
                    }
                }
                show = *
            }
             web_list {
                tableDisplayOrder {
                    tx_ifabrealestate_domain_model_property.before = *
                    tx_ifabrealestate_domain_model_contact.after = tx_ifabrealestate_domain_model_property
                    tx_ifabrealestate_domain_model_address.after = tx_ifabrealestate_domain_model_contact
                    tx_ifabrealestate_domain_model_contactaddress.after = tx_ifabrealestate_domain_model_address
                }
            }
        }'
    );

}) ();
