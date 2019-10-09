<?php

$tableName= "tx_ifabrealestate_domain_model_contact";

// Lebel
$GLOBALS['TCA'][$tableName]['ctrl']['label']           = '';
$GLOBALS['TCA'][$tableName]['ctrl']['label_alt']       = 'title, surname, name, employee_number';
$GLOBALS['TCA'][$tableName]['ctrl']['label_alt_force'] = 1;
$GLOBALS['TCA'][$tableName]['ctrl']['thumbnail'] = 'image';

// Palettes
$GLOBALS['TCA'][$tableName]['palettes'] = [
    'contact_palette_100' => [
        'showitem'  =>
            'sys_language_uid, l10n_parent, l10n_diffsource,'
    ],
    'contact_palette_0' => [
        'showitem'  =>
            'title, name, surname,'
    ],
    'contact_palette_1' => [
        'showitem'  =>
            'central_email, direct_email, private_email,'
    ],
    'contact_palette_2' => [
        'showitem'  =>
            'central_tel, direct_tel, private_tel, mobile_phone,'
    ],
    'contact_palette_3' => [
        'showitem'  =>
            'po_box, po_zip, po_area,'
    ],
];

// Tabs
$GLOBALS['TCA'][$tableName]['types'][1] = [
    'showitem' => '
	    --div--;LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tab_general, 
	        --palette--;;contact_palette_100,employee_number, 
	        gender_rel,
            --palette--;;contact_palette_0,
        --div--;LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tab_communication, 
            --palette--;LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:palette_mails;contact_palette_1,
            --palette--;LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:palette_tel;contact_palette_2,
            fax,
        --div--;LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tab_address, 
            hide_address,
            contact_address_rel,
            --palette--;LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:palette_postoffice;contact_palette_3,
        --div--;LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tab_image, 
            image,
         
	'
];
$GLOBALS['TCA'][$tableName]['columns']['contact_address_rel'] = [
    'exclude' => true,
    'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_contact.contact_address_rel',
    'config' => [
        'type' => 'select',
        'renderType' => 'selectSingle',
        'items' => [
            [ 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:select_empty', '' ],
        ],
        'foreign_table' => 'tx_ifabrealestate_domain_model_contactaddress',
        'minitems' => 0,
        'maxitems' => 1,
    ],
];
