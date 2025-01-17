<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit53f52e4a4496b2afd2600cf2128f12a4
{
    public static $files = array (
        '9b38cf48e83f5d8f60375221cd213eee' => __DIR__ . '/..' . '/phpstan/phpstan/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Heliostat\\StatAnalys\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Heliostat\\StatAnalys\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit53f52e4a4496b2afd2600cf2128f12a4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit53f52e4a4496b2afd2600cf2128f12a4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit53f52e4a4496b2afd2600cf2128f12a4::$classMap;

        }, null, ClassLoader::class);
    }
}
