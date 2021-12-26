<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit799ac33be3b633b24fafde67d2919732
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TableauDefilant\\' => 16,
        ),
        'C' => 
        array (
            'Cadre\\' => 6,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TableauDefilant\\' => 
        array (
            0 => __DIR__ . '/..' . '/bernarthomas/tableaudefilant',
        ),
        'Cadre\\' => 
        array (
            0 => __DIR__ . '/..' . '/bernarthomas/cadre',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit799ac33be3b633b24fafde67d2919732::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit799ac33be3b633b24fafde67d2919732::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit799ac33be3b633b24fafde67d2919732::$classMap;

        }, null, ClassLoader::class);
    }
}
