<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit10f9f0a71c3a6c9ce0a29a49f230ad7a
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit10f9f0a71c3a6c9ce0a29a49f230ad7a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit10f9f0a71c3a6c9ce0a29a49f230ad7a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit10f9f0a71c3a6c9ce0a29a49f230ad7a::$classMap;

        }, null, ClassLoader::class);
    }
}