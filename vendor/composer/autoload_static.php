<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0e1b3f9507652e32d6bfcc254a57df24
{
    public static $files = array (
        '9f2ca8d9a238e4c80d25576e2bfa4cb3' => __DIR__ . '/../..' . '/Modules/helper.php',
    );

    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Modules\\' => 8,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Modules\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Modules',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0e1b3f9507652e32d6bfcc254a57df24::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0e1b3f9507652e32d6bfcc254a57df24::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}