<?php
/**
 * License: This file is part of the package ifabrik/ifab_realestate.
 * For the full copyright and license information, please read the
 * license file that was distributed with this source code.
 *
 * @copyright concept & creation by ifabrik.de, Leipzig
 * @author    Aristeidis Karavas
 */

$EM_CONF[$_EXTKEY] = [
    'title' => 'ifabrik Real Estate',
    'description' => 'This extension offers the possibility to create publications of real estate such as apartments, houses, garages etc. It provides numerous object properties for definition, all of which can be displayed in the FrontEnd. Using an Ajax search, the real estate objects can be displayed and sorted. An integration of the objects via an automatic OpenImmo import is also possible since the extension is based on the OpenImmo structure.',
    'category' => 'plugin',
    'author' => 'ifabrik GmbH',
    'author_email' => 'info@ifabrik.de',
    'state' => 'stable',
    'uploadfolder' => 1,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.4',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-9.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
