<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit78c236d29f02e5e176869cf18330e21e
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Inc\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Inc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/include',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit78c236d29f02e5e176869cf18330e21e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit78c236d29f02e5e176869cf18330e21e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit78c236d29f02e5e176869cf18330e21e::$classMap;

        }, null, ClassLoader::class);
    }
}