<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7707fd1766b6f684c148c526fdfdda19
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'C' => 
        array (
            'CF\\' => 3,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'CF\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
            1 => __DIR__ . '/..' . '/cloudflare/cloudflare-plugin-backend/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'C' => 
        array (
            'CloudFlare\\' => 
            array (
                0 => __DIR__ . '/..' . '/cloudflare/cf-ip-rewrite/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7707fd1766b6f684c148c526fdfdda19::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7707fd1766b6f684c148c526fdfdda19::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit7707fd1766b6f684c148c526fdfdda19::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
