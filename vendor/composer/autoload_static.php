<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit94e9d3b66c52a6ae5389b9f30258e01b
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '5255c38a0faeba867671b61dfda6d864' => __DIR__ . '/..' . '/paragonie/random_compat/lib/random.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Ctype\\' => 23,
        ),
        'R' => 
        array (
            'Ramsey\\Uuid\\' => 12,
        ),
        'I' => 
        array (
            'Instagram\\' => 10,
        ),
        'C' => 
        array (
            'Curl\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Ramsey\\Uuid\\' => 
        array (
            0 => __DIR__ . '/..' . '/ramsey/uuid/src',
        ),
        'Instagram\\' => 
        array (
            0 => __DIR__ . '/..' . '/liamcottle/instagram-sdk-php/src',
        ),
        'Curl\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-curl-class/php-curl-class/src/Curl',
        ),
    );

    public static $prefixesPsr0 = array (
        'J' => 
        array (
            'JsonMapper' => 
            array (
                0 => __DIR__ . '/..' . '/netresearch/jsonmapper/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit94e9d3b66c52a6ae5389b9f30258e01b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit94e9d3b66c52a6ae5389b9f30258e01b::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit94e9d3b66c52a6ae5389b9f30258e01b::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
