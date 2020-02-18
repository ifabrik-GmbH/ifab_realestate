<?php

$tableName = 'tx_ifabrealestate_domain_model_property';

// Lebel
$GLOBALS['TCA'][$tableName]['ctrl']['label'] = 'property_title';
$GLOBALS['TCA'][$tableName]['ctrl']['label_alt'] = 'internal_property_number, external_property_number, open_immo_id';
$GLOBALS['TCA'][$tableName]['ctrl']['label_alt_force'] = 1;

// Palettes
$GLOBALS['TCA'][$tableName]['palettes'] = [
    'property_palette_100' => [
        'showitem' =>
            'sys_language_uid, l10n_parent, l10n_diffsource,'
    ],
    'property_palette_0' => [
        'showitem' =>
            'internal_property_number, external_property_number, open_immo_id,'
    ],
    'property_palette_1' => [
        'showitem' =>
            'cold_rent, additional_costs, rent_with_heat,'
    ],
    'property_palette_2' => [
        'showitem' =>
            'guarantee_price, guarantee_price_text,'
    ],
    'property_palette_3' => [
        'showitem' =>
            'purchase, purchase_price_net, purchase_price_gross,'
    ],
    'property_palette_4' => [
        'showitem' =>
            'apartment_number, floor, total_floors,'
    ],
    'property_palette_5' => [
        'showitem' =>
            'living_space, number_of_rooms, number_of_bedrooms, number_of_bathrooms,'
    ],
    'property_palette_6' => [
        'showitem' =>
            'usable_area, total_size, load_area, storage_area,'
    ],
    'property_palette_7' => [
        'showitem' =>
            'sales_area, free_area, office_area, office_part_area,'
    ],
    'property_palette_8' => [
        'showitem' =>
            'wg_suitable, fireplace, clima,'
    ],
    'property_palette_9' => [
        'showitem' =>
            'number_of_balconies, number_of_terraces, number_of_logia,'
    ],
    'property_palette_10' => [
        'showitem' =>
            'epart, creation_date, expiration_date, creation_year,'
    ],
    'property_palette_11' => [
        'showitem' =>
            'energy_consum_value, heat_value, electricity_value,'
    ],
    'property_palette_12' => [
        'showitem' =>
            'primary_energy_source, value_class,'
    ],
];

// Tabs
$GLOBALS['TCA'][$tableName]['types'][1] = [
    'showitem' => '
	    --div--;LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tab_general, 
	        --palette--;;property_palette_100,
            --palette--;;property_palette_0, property_title, path_segment, property_text, property_description, property_equipment, property_location, addition_information,
        --div--;LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tab_property_category, 
            property_usage_rel, marketing_method_rel, property_nature_rel, property_type_value_rel,
        --div--;LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tab_prices, 
            --palette--;LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:palette_renting;property_palette_1,
            --palette--;;property_palette_2, heating_costs, rent_price_per_qm,
            --palette--;LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:palette_buying;property_palette_3, purchase_price_per_qm,
        --div--;LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tab_location, 
            address_rel,
            --palette--;;property_palette_4, 
        --div--;LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tab_surfaces,
            --palette--;;property_palette_5, 
            --palette--;;property_palette_6, 
            --palette--;;property_palette_7, 
            --palette--;;property_palette_9, 
        --div--;LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tab_equipment,
            --palette--;;property_palette_8, 
            bathroom_rel ,firing_rel, kitchen_rel, floor_rel, heat_rel, elevator_rel, parking_rel,
        --div--;LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tab_contact,
            contact_rel,
        --div--;LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tab_attachments,
            attachments_rel,
        --div--;LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tab_energy,
            --palette--;;property_palette_10, 
            --palette--;;property_palette_11, 
            --palette--;;property_palette_12, 
        --div--;LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tab_management,
            property_release, available_from, pets,
	'
];

// gender
$GLOBALS['TCA'][$tableName]['columns']['address_rel'] = [
    'exclude' => 0,
    'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.address_rel',
    'config' => [
        'type' => 'select',
        'renderType' => 'selectSingle',
        'items' => [
            ['LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:select_empty', ''],
        ],
        'foreign_table' => 'tx_ifabrealestate_domain_model_address',
    ],
];

$GLOBALS['TCA'][$tableName]['columns']['path_segment'] = [
    'exclude' => 0,
    'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.path_segment',
    'config' => [
        'type' => 'slug',
        'size' => 50,
        'generatorOptions' => [
            'fields' => ['uid','property_title'],
            'fieldSeparator' => '-',
            'replacements' => [
                '/' => '-'
            ],
        ],
        'fallbackCharacter' => '-',
        'eval' => 'uniqueInSite',
        'default' => ''
    ],
];
