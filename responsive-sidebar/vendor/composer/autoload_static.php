<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4589eaf0923edcabcbc040c34a15b29c
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'ResponsiveSidebar\\' => 18,
        ),
        'P' => 
        array (
            'Premmerce\\SDK\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ResponsiveSidebar\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Premmerce\\SDK\\' => 
        array (
            0 => __DIR__ . '/..' . '/premmerce/wordpress-sdk/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4589eaf0923edcabcbc040c34a15b29c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4589eaf0923edcabcbc040c34a15b29c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
