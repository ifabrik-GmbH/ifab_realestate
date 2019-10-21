<?php

$tableName= "tx_ifabrealestate_domain_model_contactaddress";

// Lebel
$GLOBALS['TCA'][$tableName]['ctrl']['label']           = 'street';
$GLOBALS['TCA'][$tableName]['ctrl']['label_alt']       = 'address_number, area, zip';
$GLOBALS['TCA'][$tableName]['ctrl']['label_alt_force'] = 1;
