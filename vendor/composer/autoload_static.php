<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit287bd385b3dd6d22423afb085f486683
{
    public static $files = array (
        '3b8917db03326d681357c850b801cda9' => __DIR__ . '/..' . '/primakurzy/hello-php/src/hello.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'G' => 
        array (
            'Gumlet\\' => 7,
        ),
        'E' => 
        array (
            'Endroid\\QrCode\\' => 15,
        ),
        'D' => 
        array (
            'DASPRiD\\Enum\\' => 13,
        ),
        'B' => 
        array (
            'BaconQrCode\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Gumlet\\' => 
        array (
            0 => __DIR__ . '/..' . '/gumlet/php-image-resize/lib',
        ),
        'Endroid\\QrCode\\' => 
        array (
            0 => __DIR__ . '/..' . '/endroid/qr-code/src',
        ),
        'DASPRiD\\Enum\\' => 
        array (
            0 => __DIR__ . '/..' . '/dasprid/enum/src',
        ),
        'BaconQrCode\\' => 
        array (
            0 => __DIR__ . '/..' . '/bacon/bacon-qr-code/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit287bd385b3dd6d22423afb085f486683::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit287bd385b3dd6d22423afb085f486683::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit287bd385b3dd6d22423afb085f486683::$classMap;

        }, null, ClassLoader::class);
    }
}