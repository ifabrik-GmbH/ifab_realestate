<?php
/**
 * License: This file is part of the package ifabrik/ifab_realestate.
 * For the full copyright and license information, please read the
 * license file that was distributed with this source code.
 *
 * @copyright 2019 i-fabrik GmbH
 * @author    Aristeidis Karavas
 */

$EM_CONF[$_EXTKEY] = [
    'title' => 'Ifabrik Real Estate',
    'description' => '',
    'category' => 'plugin',
    'author' => 'ifabrik GmbH',
    'author_email' => 'info@ifababrik.de',
    'state' => 'beta',
    'uploadfolder' => 1,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-9.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
