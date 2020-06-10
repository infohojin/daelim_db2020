<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8cd9337e770e5c634cc8d9e44eb7acfe
{
    public static $files = array (
        'a6e27c98c00945ead28d695037bfc102' => __DIR__ . '/..' . '/jiny/mysql/src/Helpers/Helper.php',
        '9f2ca8d9a238e4c80d25576e2bfa4cb3' => __DIR__ . '/../..' . '/Modules/helper.php',
    );

    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Modules\\' => 8,
        ),
        'J' => 
        array (
            'Jiny\\Mysql\\' => 11,
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
        'Jiny\\Mysql\\' => 
        array (
            0 => __DIR__ . '/..' . '/jiny/mysql/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8cd9337e770e5c634cc8d9e44eb7acfe::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8cd9337e770e5c634cc8d9e44eb7acfe::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
