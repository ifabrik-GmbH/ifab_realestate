<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_contact',
        'label' => 'employee_number',
        'tstamp' => 'tstamp',
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
        'searchFields' => 'employee_number,name,surname,title,central_email,direct_email,private_email,central_tel,direct_tel,private_tel,fax,mobile_phone,po_box,po_zip,po_area',
        'iconfile' => 'EXT:ifab_realestate/Resources/Public/Icons/tx_ifabrealestate_domain_model_contact.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, employee_number, name, surname, title, central_email, direct_email, private_email, central_tel, direct_tel, private_tel, fax, mobile_phone, hide_address, po_box, po_zip, po_area, image, contact_address_rel, gender_rel',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, employee_number, name, surname, title, central_email, direct_email, private_email, central_tel, direct_tel, private_tel, fax, mobile_phone, hide_address, po_box, po_zip, po_area, image, contact_address_rel, gender_rel, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
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
                'foreign_table' => 'tx_ifabrealestate_domain_model_contact',
                'foreign_table_where' => 'AND {#tx_ifabrealestate_domain_model_contact}.{#pid}=###CURRENT_PID### AND {#tx_ifabrealestate_domain_model_contact}.{#sys_language_uid} IN (-1,0)',
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

        'employee_number' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_contact.employee_number',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'name' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_contact.name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'surname' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_contact.surname',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'title' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_contact.title',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'central_email' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_contact.central_email',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'nospace,email'
            ]
        ],
        'direct_email' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_contact.direct_email',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'nospace,email'
            ]
        ],
        'private_email' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_contact.private_email',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'nospace,email'
            ]
        ],
        'central_tel' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_contact.central_tel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'direct_tel' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_contact.direct_tel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'private_tel' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_contact.private_tel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'fax' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_contact.fax',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'mobile_phone' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_contact.mobile_phone',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'hide_address' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_contact.hide_address',
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
        'po_box' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_contact.po_box',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'po_zip' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_contact.po_zip',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'po_area' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_contact.po_area',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'image' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_contact.image',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'image',
                [
                    'appearance' => [
                        'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference'
                    ],
                    'foreign_types' => [
                        '0' => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ]
                    ],
                    'maxitems' => 1
                ],
                $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
            ),
        ],
        'contact_address_rel' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_contact.contact_address_rel',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_ifabrealestate_domain_model_contactaddress',
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'gender_rel' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ifab_realestate/Resources/Private/Language/locallang_db.xlf:tx_ifabrealestate_domain_model_contact.gender_rel',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_ifabrealestate_domain_model_gender',
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
    ],
];
