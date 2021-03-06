<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit78b0eb64a37d0639034f11cdd82e9989
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit78b0eb64a37d0639034f11cdd82e9989::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit78b0eb64a37d0639034f11cdd82e9989::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit78b0eb64a37d0639034f11cdd82e9989::$classMap;

        }, null, ClassLoader::class);
    }
}
