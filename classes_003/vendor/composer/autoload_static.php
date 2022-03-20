<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit479f71c8b3515413f5e5bcc38eefefd3
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'ExampleApp\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ExampleApp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit479f71c8b3515413f5e5bcc38eefefd3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit479f71c8b3515413f5e5bcc38eefefd3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit479f71c8b3515413f5e5bcc38eefefd3::$classMap;

        }, null, ClassLoader::class);
    }
}