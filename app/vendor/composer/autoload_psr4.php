<?php

// autoload_psr4.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Slim\\' => array($vendorDir . '/slim/slim/Slim'),
    'Psr\\Http\\Message\\' => array($vendorDir . '/psr/http-factory/src', $vendorDir . '/psr/http-message/src'),
    'Psr\\Container\\' => array($vendorDir . '/psr/container/src'),
    'OAuth2Server\\' => array($baseDir . '/src'),
    'League\\OAuth2\\Server\\' => array($baseDir . '/../src'),
    'League\\Event\\' => array($vendorDir . '/league/event/src'),
    'Lcobucci\\JWT\\' => array($vendorDir . '/lcobucci/jwt/src'),
    'Laminas\\ZendFrameworkBridge\\' => array($vendorDir . '/laminas/laminas-zendframework-bridge/src'),
    'Laminas\\Diactoros\\' => array($vendorDir . '/laminas/laminas-diactoros/src'),
    'FastRoute\\' => array($vendorDir . '/nikic/fast-route/src'),
    'Defuse\\Crypto\\' => array($vendorDir . '/defuse/php-encryption/src'),
);
