<?php
require_once 'build.class.php';
$resolvers = array(
    'providers',
    'addons',
    'rename_htaccess',
    'remove_changelog',
    'cache_options',
    'client_config',
    'template',
    'tvs',
    'resources',
    'settings',
    'set_start_year',
    'fix_translit',
    'content_type',
    'manager_customisation'
);
$addons = array(
    array('name' => '', 'packages' => array(
            'simpleUpdater' => '2.1.4-rc',
            'FormIt' => '4.2.1-pl',
            'ClientConfig' => '2.1.0-pl',
            'TinyMCE Rich Text Editor' => '1.2.1-pl',
            'Collections' => '3.6.0-pl',
            'Console' => '2.2.2-pl',
            'MIGX' => '2.12.0-pl',
            'translit' => '1.0.0-beta',
            'VersionX' => '2.2.1-pl'
        )),
    array('name' => 'modstore.pro', 'packages' => array(
            'Ace' => '1.8.0-pl',
            'autoRedirector' => '1.0.0-rc',
            'pdoTools' => '2.12.1-pl',
            'Localizator' => '1.0.7-beta',
            'AjaxForm' => '1.1.9-pl',
            'MinifyX' => '1.7.0-pl',
            'phpThumbOn' => '1.3.5-beta',
            'frontendManager' => '1.1.1-beta',
            'FastUploadTV' => '1.0.1-pl',
            'logRotation' => '1.0.0-beta',
            'controlErrorLog' => '1.3.1-pl'
        )),
);
$builder = new siteBuilder('site', '1.5.3', 'pl', $resolvers, $addons);
$builder->build();
