<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit510774ee5ab448d832676297d60238ab
{
    public static $files = array (
        '85dbcdbff51cd686e50d25a408386092' => __DIR__ . '/../..' . '/config/config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'models\\' => 7,
        ),
        'c' => 
        array (
            'core\\' => 5,
            'controllers\\' => 12,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/models',
        ),
        'core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/controllers',
        ),
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit510774ee5ab448d832676297d60238ab::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit510774ee5ab448d832676297d60238ab::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit510774ee5ab448d832676297d60238ab::$classMap;

        }, null, ClassLoader::class);
    }
}
