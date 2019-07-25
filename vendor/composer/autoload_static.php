<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4bed2418e87072dc1124abcdad4bd744
{
    public static $files = array (
        'd7f4f7522f962c095f835c50e6136087' => __DIR__ . '/..' . '/hprose/hprose/src/init.php',
    );

    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Hprose\\' => 7,
        ),
        'G' => 
        array (
            'Grpc\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Hprose\\' => 
        array (
            0 => __DIR__ . '/..' . '/hprose/hprose/src/Hprose',
        ),
        'Grpc\\' => 
        array (
            0 => __DIR__ . '/..' . '/grpc/grpc/src/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4bed2418e87072dc1124abcdad4bd744::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4bed2418e87072dc1124abcdad4bd744::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
