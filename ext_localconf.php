<?php
/**
 * License: This file is part of the package ifabrik/ifab_realestate.
 * For the full copyright and license information, please read the
 * license file that was distributed with this source code.
 *
 * @copyright 2019 i-fabrik GmbH
 * @author    Aristeidis Karavas
 */

defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Ifabrik.IfabRealestate',
            'Ifabrealestate',
            [
                'Property' => 'list, show, search, searchResults, ajax',
                'Ajax' => 'ajaxResults',
            ],
            // non-cacheable actions
            [
                'Property' => 'list, show, search, searchResults, ajax',
                'Ajax' => 'ajaxResults',
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
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'Realestates',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:ifab_realestate/Resources/Public/Icons/realestate.svg']
			);
		
    }
);
