<?php

$tableName= "tx_ifabrealestate_domain_model_address";

// Lebel
$GLOBALS['TCA'][$tableName]['ctrl']['label']           = 'street';
$GLOBALS['TCA'][$tableName]['ctrl']['label_alt']       = 'number, area, zip';
$GLOBALS['TCA'][$tableName]['ctrl']['label_alt_force'] = 1;