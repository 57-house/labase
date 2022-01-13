<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6418d6ddb6e582f78efa0280018ff38b
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Router\\' => 7,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Router\\' => 
        array (
            0 => __DIR__ . '/../..' . '/web',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6418d6ddb6e582f78efa0280018ff38b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6418d6ddb6e582f78efa0280018ff38b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}