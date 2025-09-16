<?php
/**
 * @package       extenduser
 * @category      module
 * @author        OXID eSales AG
 * @link          http://www.oxid-esales.com/en/
 * @licenses      GNU GENERAL PUBLIC LICENSE. More info can be found in LICENSE file.
 * @copyright (C) OXID e-Sales, 2003-2017
 */

/**
 * Metadata version
 */
$sMetadataVersion = '2.1';

/**
 * Module information
 */
$aModule = [
    'id' => 'oeextenduser',
    'title' => [
        'de' => 'OXID Benutzerformularerweiterung Beispiel',
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
        \OxidEsales\Eshop\Application\Model\User\UserUpdatableFields::class => \OxidEsales\ExtendUser\Model\UserUpdatableFields::class
    ],
    'events' => [
        'onActivate' => \OxidEsales\ExtendUser\Core\ModuleEvents::class.'::onActivate'
    ],
];
