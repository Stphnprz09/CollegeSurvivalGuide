<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0346d7ef8d4869b8d41a6299823fd776
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'C' => 
        array (
            'Csguide\\Perez\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Csguide\\Perez\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit0346d7ef8d4869b8d41a6299823fd776::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0346d7ef8d4869b8d41a6299823fd776::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0346d7ef8d4869b8d41a6299823fd776::$classMap;

        }, null, ClassLoader::class);
    }
}
