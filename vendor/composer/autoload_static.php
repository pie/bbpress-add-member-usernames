<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit325a44265dc2dac6455212c5008379d8
{
    public static $files = array (
        'd05ecc14ff93fd612a81ec7e8ab4c2c9' => __DIR__ . '/..' . '/yahnis-elsts/plugin-update-checker/load-v5p4.php',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit325a44265dc2dac6455212c5008379d8::$classMap;

        }, null, ClassLoader::class);
    }
}