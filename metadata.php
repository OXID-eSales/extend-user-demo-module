<?php

/**
 * Copyright © . All rights reserved.
 * See LICENSE file for license details.
 */

declare(strict_types=1);

/**
 * Metadata version
 */
$sMetadataVersion = '2.1';

/**
 * Module information
 */
$aModule = [
    'id' => 'oe_extenduserform',
    'title' => [
        'de' => 'OXID Benutzerformular-Erweiterungsbeispiel',
        'en' => 'OXID User Form Extension Example',
    ],
    'description' => [
        'de' => 'Beispielmodule, um die Erweiterung eines Benutzerformulars zu demonstrieren.',
        'en' => 'Example module to demonstrate how to extend a user form.',
    ],
    'version' => '2.0.0',
    'author' => 'OXID eSales AG',
    'url' => 'http://www.oxid-esales.com',
    'email' => 'info@oxid-esales.com',
    'extend' => [
        \OxidEsales\Eshop\Application\Model\User\UserUpdatableFields::class => \OxidEsales\ExtendUser\Model\UserUpdatableFields::class,
    ],
];
