<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb8abdd35a6e9a6d9dbd715ad1d1df042
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Resty\\' => 6,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'O' => 
        array (
            'OpenStackStorage\\' => 17,
        ),
        'K' => 
        array (
            'Katzgrau\\KLogger\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Resty\\' => 
        array (
            0 => __DIR__ . '/..' . '/resty/resty/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'OpenStackStorage\\' => 
        array (
            0 => __DIR__ . '/..' . '/endeveit/open-stack-storage/src',
        ),
        'Katzgrau\\KLogger\\' => 
        array (
            0 => __DIR__ . '/..' . '/katzgrau/klogger/src',
        ),
    );

    public static $classMap = array (
        'Katzgrau\\KLogger\\Logger' => __DIR__ . '/..' . '/katzgrau/klogger/src/Logger.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb8abdd35a6e9a6d9dbd715ad1d1df042::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb8abdd35a6e9a6d9dbd715ad1d1df042::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb8abdd35a6e9a6d9dbd715ad1d1df042::$classMap;

        }, null, ClassLoader::class);
    }
}
