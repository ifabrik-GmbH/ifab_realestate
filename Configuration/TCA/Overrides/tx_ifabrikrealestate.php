<?php

// Hide the pages field and recursive dropdown
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['IfabRealestate_ifabrealestate'] = 'recursive,select_key,pages';

// Hide tables
$GLOBALS['TCA']['tx_ifabrealestate_domain_model_attachments']['ctrl']['hideTable'] = true;
$GLOBALS['TCA']['tx_ifabrealestate_domain_model_attachmentgroupvalue']['ctrl']['hideTable'] = true;
$GLOBALS['TCA']['tx_ifabrealestate_domain_model_propertytypevalue']['ctrl']['hideTable'] = true;
$GLOBALS['TCA']['tx_ifabrealestate_domain_model_propertyactionvalue']['ctrl']['hideTable'] = true;
$GLOBALS['TCA']['tx_ifabrealestate_domain_model_propertyactionattribute']['ctrl']['hideTable'] = true;
$GLOBALS['TCA']['tx_ifabrealestate_domain_model_propertyaction']['ctrl']['hideTable'] = true;

// Change icons
$GLOBALS['TCA']["tx_ifabrealestate_domain_model_address"]['ctrl']['iconfile'] = "EXT:ifab_realestate/Resources/Public/Icons/address.svg";
$GLOBALS['TCA']["tx_ifabrealestate_domain_model_attachmentgroup"]['ctrl']['iconfile'] = "EXT:ifab_realestate/Resources/Public/Icons/attachmentype.svg";
$GLOBALS['TCA']["tx_ifabrealestate_domain_model_attachmentgroupvalue"]['ctrl']['iconfile'] = "EXT:ifab_realestate/Resources/Public/Icons/attachmentype.svg";
$GLOBALS['TCA']["tx_ifabrealestate_domain_model_attachments"]['ctrl']['iconfile'] = "EXT:ifab_realestate/Resources/Public/Icons/attachments.svg";
$GLOBALS['TCA']["tx_ifabrealestate_domain_model_bathroomtype"]['ctrl']['iconfile'] = "EXT:ifab_realestate/Resources/Public/Icons/bathroom.svg";
$GLOBALS['TCA']["tx_ifabrealestate_domain_model_contact"]['ctrl']['iconfile'] = "EXT:ifab_realestate/Resources/Public/Icons/contact.svg";
$GLOBALS['TCA']["tx_ifabrealestate_domain_model_contactaddress"]['ctrl']['iconfile'] = "EXT:ifab_realestate/Resources/Public/Icons/address.svg";
$GLOBALS['TCA']["tx_ifabrealestate_domain_model_elevatortype"]['ctrl']['iconfile'] = "EXT:ifab_realestate/Resources/Public/Icons/elevator.svg";
$GLOBALS['TCA']["tx_ifabrealestate_domain_model_firingtype"]['ctrl']['iconfile'] = "EXT:ifab_realestate/Resources/Public/Icons/fire.svg";
$GLOBALS['TCA']["tx_ifabrealestate_domain_model_floortype"]['ctrl']['iconfile'] = "EXT:ifab_realestate/Resources/Public/Icons/floor.svg";
$GLOBALS['TCA']["tx_ifabrealestate_domain_model_gender"]['ctrl']['iconfile'] = "EXT:ifab_realestate/Resources/Public/Icons/gender.svg";
$GLOBALS['TCA']["tx_ifabrealestate_domain_model_heattype"]['ctrl']['iconfile'] = "EXT:ifab_realestate/Resources/Public/Icons/heat.svg";
$GLOBALS['TCA']["tx_ifabrealestate_domain_model_kitchentype"]['ctrl']['iconfile'] = "EXT:ifab_realestate/Resources/Public/Icons/kitchen.svg";
$GLOBALS['TCA']["tx_ifabrealestate_domain_model_marketingmethod"]['ctrl']['iconfile'] = "EXT:ifab_realestate/Resources/Public/Icons/marketingmethod.svg";
$GLOBALS['TCA']["tx_ifabrealestate_domain_model_parking"]['ctrl']['iconfile'] = "EXT:ifab_realestate/Resources/Public/Icons/parking.svg";
$GLOBALS['TCA']["tx_ifabrealestate_domain_model_property"]['ctrl']['iconfile'] = "EXT:ifab_realestate/Resources/Public/Icons/property.svg";
$GLOBALS['TCA']["tx_ifabrealestate_domain_model_propertynature"]['ctrl']['iconfile'] = "EXT:ifab_realestate/Resources/Public/Icons/propertydet.svg";
$GLOBALS['TCA']["tx_ifabrealestate_domain_model_propertytype"]['ctrl']['iconfile'] = "EXT:ifab_realestate/Resources/Public/Icons/propertydet.svg";
$GLOBALS['TCA']["tx_ifabrealestate_domain_model_propertytypevalue"]['ctrl']['iconfile'] = "EXT:ifab_realestate/Resources/Public/Icons/propertydet.svg";
$GLOBALS['TCA']["tx_ifabrealestate_domain_model_propertyusage"]['ctrl']['iconfile'] = "EXT:ifab_realestate/Resources/Public/Icons/propertydet.svg";
$GLOBALS['TCA']["tx_ifabrealestate_domain_model_propertyactionvalue"]['ctrl']['iconfile'] = "EXT:ifab_realestate/Resources/Public/Icons/propertydet.svg";
$GLOBALS['TCA']["tx_ifabrealestate_domain_model_propertyactionattribute"]['ctrl']['iconfile'] = "EXT:ifab_realestate/Resources/Public/Icons/propertydet.svg";
$GLOBALS['TCA']["tx_ifabrealestate_domain_model_propertyaction"]['ctrl']['iconfile'] = "EXT:ifab_realestate/Resources/Public/Icons/propertydet.svg";
