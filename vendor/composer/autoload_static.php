<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf765f71ffda34f309da04dd817498d22
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Cr0\\YoghPlugin\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Cr0\\YoghPlugin\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf765f71ffda34f309da04dd817498d22::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf765f71ffda34f309da04dd817498d22::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf765f71ffda34f309da04dd817498d22::$classMap;

        }, null, ClassLoader::class);
    }
}
