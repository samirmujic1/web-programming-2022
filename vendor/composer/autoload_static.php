<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita4ab67402343bca2112c2cd8889c8415
{
    public static $files = array (
        'fc73bab8d04e21bcdda37ca319c63800' => __DIR__ . '/..' . '/mikecao/flight/flight/autoload.php',
        '5b7d984aab5ae919d3362ad9588977eb' => __DIR__ . '/..' . '/mikecao/flight/flight/Flight.php',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInita4ab67402343bca2112c2cd8889c8415::$classMap;

        }, null, ClassLoader::class);
    }
}
