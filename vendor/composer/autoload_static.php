<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9374d6e705f4886ebb4b41c0f8d234a5
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9374d6e705f4886ebb4b41c0f8d234a5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9374d6e705f4886ebb4b41c0f8d234a5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9374d6e705f4886ebb4b41c0f8d234a5::$classMap;

        }, null, ClassLoader::class);
    }
}
