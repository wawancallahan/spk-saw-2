<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb957491138ea84c60d69b7b59aaa24d2
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Models\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/models',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb957491138ea84c60d69b7b59aaa24d2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb957491138ea84c60d69b7b59aaa24d2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb957491138ea84c60d69b7b59aaa24d2::$classMap;

        }, null, ClassLoader::class);
    }
}
