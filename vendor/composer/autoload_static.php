<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0243ed523d9da6c1f8a7bae21a0a7d8c
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mohuishou\\ImageOCR\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mohuishou\\ImageOCR\\' => 
        array (
            0 => __DIR__ . '/..' . '/mohuishou/image-ocr',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0243ed523d9da6c1f8a7bae21a0a7d8c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0243ed523d9da6c1f8a7bae21a0a7d8c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
