<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7cb7f2ea45e0cb17e7a6e849dfdb70de
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Grav\\Plugin\\Eventlist\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Grav\\Plugin\\Eventlist\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Grav\\Plugin\\EventlistPlugin' => __DIR__ . '/../..' . '/eventlist.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7cb7f2ea45e0cb17e7a6e849dfdb70de::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7cb7f2ea45e0cb17e7a6e849dfdb70de::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7cb7f2ea45e0cb17e7a6e849dfdb70de::$classMap;

        }, null, ClassLoader::class);
    }
}
