<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1b193d1f56ca867f3d98f660c6aaae49
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1b193d1f56ca867f3d98f660c6aaae49::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1b193d1f56ca867f3d98f660c6aaae49::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1b193d1f56ca867f3d98f660c6aaae49::$classMap;

        }, null, ClassLoader::class);
    }
}