<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticIniteb66b8b7ee49841678748a4529742fa2
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'ExemploPDOMySQL\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ExemploPDOMySQL\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticIniteb66b8b7ee49841678748a4529742fa2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticIniteb66b8b7ee49841678748a4529742fa2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticIniteb66b8b7ee49841678748a4529742fa2::$classMap;

        }, null, ClassLoader::class);
    }
}
