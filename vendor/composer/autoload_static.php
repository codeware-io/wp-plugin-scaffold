<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit66e9f6835ffc70bc84cf3629beaf91e3
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PIC\\GF\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PIC\\GF\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib/classes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit66e9f6835ffc70bc84cf3629beaf91e3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit66e9f6835ffc70bc84cf3629beaf91e3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
