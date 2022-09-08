<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit74680d3ac1c4eacc3b6adbdf3bf607c7
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/src/Twilio',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit74680d3ac1c4eacc3b6adbdf3bf607c7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit74680d3ac1c4eacc3b6adbdf3bf607c7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit74680d3ac1c4eacc3b6adbdf3bf607c7::$classMap;

        }, null, ClassLoader::class);
    }
}
