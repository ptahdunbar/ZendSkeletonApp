<?php
/**
 * Global configurations for this module.
 */
return [
    'service_manager' =>
    [
        'abstract_factories' =>
        [
            'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
            'Zend\Log\LoggerAbstractServiceFactory',
        ],
        'aliases' =>
        [
            'translator' => 'MvcTranslator',
        ],
    ],
    'translator' =>
    [
        'locale' => 'en_US',
        'translation_file_patterns' =>
        [
            [
                'type'     => 'phparray',
                'base_dir' => __DIR__ . '/../../language',
                'pattern'  => '%s.php',
            ],
        ],
    ],
];