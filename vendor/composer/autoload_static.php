<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc93d76fcaa9f2d083c18df51f6075608
{
    public static $prefixLengthsPsr4 = array (
        'l' => 
        array (
            'loadclass\\user\\' => 15,
            'loadclass\\factory\\' => 18,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'loadclass\\user\\' => 
        array (
            0 => __DIR__ . '/../..' . '/loadclass/user',
        ),
        'loadclass\\factory\\' => 
        array (
            0 => __DIR__ . '/../..' . '/loadclass/factory',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc93d76fcaa9f2d083c18df51f6075608::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc93d76fcaa9f2d083c18df51f6075608::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
