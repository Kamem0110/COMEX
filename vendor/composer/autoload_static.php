<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitefddafef4968cf2dec5745d6d0fb9afa
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Pedro\\Comex\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Pedro\\Comex\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitefddafef4968cf2dec5745d6d0fb9afa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitefddafef4968cf2dec5745d6d0fb9afa::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitefddafef4968cf2dec5745d6d0fb9afa::$classMap;

        }, null, ClassLoader::class);
    }
}