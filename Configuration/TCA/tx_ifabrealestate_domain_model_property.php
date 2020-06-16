<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property',
        'label' => 'property_title',
        'tstamp' => 'tstamp',
        'sortBy' => 'sorting',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'floor,total_floors,apartment_number,extra_property_nature,purchase,purchase_price_net,purchase_price_gross,net_cold_rent,cold_rent,rent_with_heat,additional_costs,heating_costs,flat_rate_rent,rent_price_per_qm,purchase_price_per_qm,guarantee_price,guarantee_price_text,living_space,usable_area,total_size,load_area,storage_area,sales_area,free_area,office_area,office_part_area,number_of_rooms,number_of_bedrooms,number_of_bathrooms,number_of_balconies,number_of_terraces,number_of_logia,construction_year,construction_age,epart,expiration_date,energy_consum_value,primary_energy_source,electricity_value,heat_value,value_class,creation_date,creation_year,building,property_title,property_location,property_equipment,property_description,addition_information,property_text,available_from,pets,internal_property_number,external_property_number,open_immo_id',
        'iconfile' => 'EXT:ifab_realestate/Resources/Public/Icons/tx_ifabrealestate_domain_model_property.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, floor, total_floors, apartment_number, extra_property_nature, purchase, purchase_price_net, purchase_price_gross, net_cold_rent, cold_rent, rent_with_heat, additional_costs, heating_costs, flat_rate_rent, rent_price_per_qm, purchase_price_per_qm, guarantee_price, guarantee_price_text, living_space, usable_area, total_size, load_area, storage_area, sales_area, free_area, office_area, office_part_area, number_of_rooms, number_of_bedrooms, number_of_bathrooms, number_of_balconies, number_of_terraces, number_of_logia, wg_suitable, fireplace, clima, construction_year, construction_age, epart, expiration_date, energy_consum_value, primary_energy_source, electricity_value, heat_value, value_class, creation_date, creation_year, building, property_title, property_location, property_equipment, property_description, addition_information, property_text, available_from, property_release, pets, internal_property_number, external_property_number, open_immo_id, property_usage_rel, marketing_method_rel, property_nature_rel, property_type_value_rel, address_rel, contact_rel, bathroom_rel, kitchen_rel, floor_rel, heat_rel, elevator_rel, parking_rel, firing_rel, attachments_rel',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, floor, total_floors, apartment_number, extra_property_nature, purchase, purchase_price_net, purchase_price_gross, net_cold_rent, cold_rent, rent_with_heat, additional_costs, heating_costs, flat_rate_rent, rent_price_per_qm, purchase_price_per_qm, guarantee_price, guarantee_price_text, living_space, usable_area, total_size, load_area, storage_area, sales_area, free_area, office_area, office_part_area, number_of_rooms, number_of_bedrooms, number_of_bathrooms, number_of_balconies, number_of_terraces, number_of_logia, wg_suitable, fireplace, clima, construction_year, construction_age, epart, expiration_date, energy_consum_value, primary_energy_source, electricity_value, heat_value, value_class, creation_date, creation_year, building, property_title, property_location, property_equipment, property_description, addition_information, property_text, available_from, property_release, pets, internal_property_number, external_property_number, open_immo_id, property_usage_rel, marketing_method_rel, property_nature_rel, property_type_value_rel, address_rel, contact_rel, bathroom_rel, kitchen_rel, floor_rel, heat_rel, elevator_rel, parking_rel, firing_rel, attachments_rel, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_ifabrealestate_domain_model_property',
                'foreign_table_where' => 'AND {#tx_ifabrealestate_domain_model_property}.{#pid}=###CURRENT_PID### AND {#tx_ifabrealestate_domain_model_property}.{#sys_language_uid} IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                        'invertStateDisplay' => true
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],
        'floor' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.floor',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'total_floors' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.total_floors',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'apartment_number' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.apartment_number',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'extra_property_nature' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.extra_property_nature',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'purchase' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.purchase',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'purchase_price_net' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.purchase_price_net',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'purchase_price_gross' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.purchase_price_gross',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'net_cold_rent' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.net_cold_rent',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'cold_rent' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.cold_rent',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'rent_with_heat' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.rent_with_heat',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'additional_costs' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.additional_costs',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'heating_costs' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.heating_costs',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'flat_rate_rent' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.flat_rate_rent',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'rent_price_per_qm' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.rent_price_per_qm',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'purchase_price_per_qm' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.purchase_price_per_qm',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'guarantee_price' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.guarantee_price',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'guarantee_price_text' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.guarantee_price_text',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'living_space' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.living_space',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'usable_area' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.usable_area',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'total_size' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.total_size',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'load_area' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.load_area',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'storage_area' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.storage_area',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'sales_area' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.sales_area',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'free_area' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.free_area',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'office_area' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.office_area',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'office_part_area' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.office_part_area',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'number_of_rooms' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.number_of_rooms',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'number_of_bedrooms' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.number_of_bedrooms',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'number_of_bathrooms' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.number_of_bathrooms',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'number_of_balconies' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.number_of_balconies',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'number_of_terraces' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.number_of_terraces',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'number_of_logia' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.number_of_logia',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'wg_suitable' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.wg_suitable',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
                'default' => 0,
            ]
        ],
        'fireplace' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.fireplace',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
                'default' => 0,
            ]
        ],
        'clima' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.clima',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
                'default' => 0,
            ]
        ],
        'construction_year' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.construction_year',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'construction_age' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.construction_age',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'epart' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.epart',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'expiration_date' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.expiration_date',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'energy_consum_value' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.energy_consum_value',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'primary_energy_source' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.primary_energy_source',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'electricity_value' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.electricity_value',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'heat_value' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.heat_value',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'value_class' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.value_class',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'creation_date' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.creation_date',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'creation_year' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.creation_year',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'building' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.building',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'property_title' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.property_title',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'property_location' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.property_location',
            'config' => [
                'type' => 'text',
                'enableRichtext' => true,
            ],
        ],
        'property_equipment' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.property_equipment',
            'config' => [
                'type' => 'text',
                'enableRichtext' => true,
            ],
        ],
        'property_description' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.property_description',
            'config' => [
                'type' => 'text',
                'enableRichtext' => true,
            ],
        ],
        'addition_information' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.addition_information',
            'config' => [
                'type' => 'text',
                'enableRichtext' => true,
            ],
        ],
        'property_text' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.property_text',
            'config' => [
                'type' => 'text',
                'enableRichtext' => false,
            ],
        ],
        'available_from' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.available_from',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'property_release' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.property_release',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
                'default' => 0,
            ]
        ],
        'pets' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.pets',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
                'default' => 0,
            ]
        ],
        'internal_property_number' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.internal_property_number',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'external_property_number' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.external_property_number',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'open_immo_id' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.open_immo_id',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'property_usage_rel' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.property_usage_rel',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_ifabrealestate_domain_model_propertyusage',
                'MM' => 'tx_ifabrealestate_property_propertyusage_mm',
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 0,
                'fieldControl' => [
                    'editPopup' => [
                        'disabled' => false,
                    ],
                    'addRecord' => [
                        'disabled' => false,
                    ],
                    'listModule' => [
                        'disabled' => true,
                    ],
                ],
            ],
        ],
        'marketing_method_rel' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.marketing_method_rel',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_ifabrealestate_domain_model_marketingmethod',
                'MM' => 'tx_ifabrealestate_property_marketingmethod_mm',
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 0,
                'fieldControl' => [
                    'editPopup' => [
                        'disabled' => false,
                    ],
                    'addRecord' => [
                        'disabled' => false,
                    ],
                    'listModule' => [
                        'disabled' => true,
                    ],
                ],
            ],
        ],
        'property_nature_rel' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.property_nature_rel',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_ifabrealestate_domain_model_propertynature',
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'property_type_value_rel' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.property_type_value_rel',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_ifabrealestate_domain_model_propertytypevalue',
                'foreign_field' => 'property',
                'maxitems' => 9999,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],
        ],
        'property_action_rel' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.property_action_rel',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_ifabrealestate_domain_model_propertyaction',
                'foreign_field' => 'property',
                'maxitems' => 9999,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],
        ],
        'address_rel' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.address_rel',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_ifabrealestate_domain_model_address',
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'contact_rel' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.contact_rel',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_ifabrealestate_domain_model_contact',
                'MM' => 'tx_ifabrealestate_property_contact_mm',
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 0,
                'fieldControl' => [
                    'editPopup' => [
                        'disabled' => false,
                    ],
                    'addRecord' => [
                        'disabled' => false,
                    ],
                    'listModule' => [
                        'disabled' => true,
                    ],
                ],
            ],
        ],
        'bathroom_rel' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.bathroom_rel',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_ifabrealestate_domain_model_bathroomtype',
                'MM' => 'tx_ifabrealestate_property_bathroomtype_mm',
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 0,
                'fieldControl' => [
                    'editPopup' => [
                        'disabled' => false,
                    ],
                    'addRecord' => [
                        'disabled' => false,
                    ],
                    'listModule' => [
                        'disabled' => true,
                    ],
                ],
            ],
        ],
        'kitchen_rel' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.kitchen_rel',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_ifabrealestate_domain_model_kitchentype',
                'MM' => 'tx_ifabrealestate_property_kitchentype_mm',
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 0,
                'fieldControl' => [
                    'editPopup' => [
                        'disabled' => false,
                    ],
                    'addRecord' => [
                        'disabled' => false,
                    ],
                    'listModule' => [
                        'disabled' => true,
                    ],
                ],
            ],
        ],
        'floor_rel' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.floor_rel',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_ifabrealestate_domain_model_floortype',
                'MM' => 'tx_ifabrealestate_property_floortype_mm',
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 0,
                'fieldControl' => [
                    'editPopup' => [
                        'disabled' => false,
                    ],
                    'addRecord' => [
                        'disabled' => false,
                    ],
                    'listModule' => [
                        'disabled' => true,
                    ],
                ],
            ],
        ],
        'heat_rel' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.heat_rel',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_ifabrealestate_domain_model_heattype',
                'MM' => 'tx_ifabrealestate_property_heattype_mm',
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 0,
                'fieldControl' => [
                    'editPopup' => [
                        'disabled' => false,
                    ],
                    'addRecord' => [
                        'disabled' => false,
                    ],
                    'listModule' => [
                        'disabled' => true,
                    ],
                ],
            ],
        ],
        'elevator_rel' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.elevator_rel',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_ifabrealestate_domain_model_elevatortype',
                'MM' => 'tx_ifabrealestate_property_elevatortype_mm',
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 0,
                'fieldControl' => [
                    'editPopup' => [
                        'disabled' => false,
                    ],
                    'addRecord' => [
                        'disabled' => false,
                    ],
                    'listModule' => [
                        'disabled' => true,
                    ],
                ],
            ],
        ],
        'parking_rel' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.parking_rel',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_ifabrealestate_domain_model_parking',
                'MM' => 'tx_ifabrealestate_property_parking_mm',
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 0,
                'fieldControl' => [
                    'editPopup' => [
                        'disabled' => false,
                    ],
                    'addRecord' => [
                        'disabled' => false,
                    ],
                    'listModule' => [
                        'disabled' => true,
                    ],
                ],
            ],
        ],
        'firing_rel' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.firing_rel',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_ifabrealestate_domain_model_firingtype',
                'MM' => 'tx_ifabrealestate_property_firingtype_mm',
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 0,
                'fieldControl' => [
                    'editPopup' => [
                        'disabled' => false,
                    ],
                    'addRecord' => [
                        'disabled' => false,
                    ],
                    'listModule' => [
                        'disabled' => true,
                    ],
                ],
            ],

        ],
        'import_status' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:import_status',
            'config' => [
                'type' => 'check',
                'items' => [
                    ['LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:import_status_title', ''],
                ],
            ]
        ],
        'is_imported' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:is_imported',
            'config' => [
                'type' => 'check',
                'items' => [
                    ['', ''],
                ],
            ]
        ],
        'attachments_rel' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_property.attachments_rel',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_ifabrealestate_domain_model_attachments',
                'foreign_field' => 'property',
                'foreign_sortby' => 'sorting_property',
                'maxitems' => 9999,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],
        ],
    ],
];
