<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit45d702032fc4a7f26e34d6c16ed6b28d
{
    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/src',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4 = ComposerStaticInit45d702032fc4a7f26e34d6c16ed6b28d::$fallbackDirsPsr4;

        }, null, ClassLoader::class);
    }
}
