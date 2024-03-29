<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_attachmentgroupvalue',
        'label' => 'value_rel',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'sortBy' => 'sorting',
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
        'searchFields' => 'value',
        'iconfile' => 'EXT:ifab_realestate/Resources/Public/Icons/tx_ifabrealestate_domain_model_attachmentgroupvalue.gif'
    ],
    'palettes' => [
        'palette_0' => [
            'showitem' => 'attachment_group_rel, value_rel,'
        ]
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, --palette--;;palette_0, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'language',
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_ifabrealestate_domain_model_attachmentgroupvalue',
                'foreign_table_where' => 'AND {#tx_ifabrealestate_domain_model_attachmentgroupvalue}.{#pid}=###CURRENT_PID### AND {#tx_ifabrealestate_domain_model_attachmentgroupvalue}.{#sys_language_uid} IN (-1,0)',
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
        'value_rel' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_attachmentgroupvalue.value',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_ifabrealestate_domain_model_attachmentgroupvaluerel',
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'attachment_group_rel' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_attachmentgroupvalue.attachment_group_rel',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_ifabrealestate_domain_model_attachmentgroup',
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'import_status' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:import_status',
            'config' => [
                'type' => 'check',
                'items' => [
                    [
                    	'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:import_status_title', ''
					],
                ],
            ]
        ],
        'is_imported' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:is_imported',
            'config' => [
                'type' => 'check',
                'items' => [
                    [
                    	'', ''
					],
                ],
            ]
        ],
        'attachments' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
    ],
];
