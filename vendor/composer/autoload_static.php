<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit06b5905aa4a79fd68162c814915a1e6b
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Luchaninov\\CsvFileLoader\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Luchaninov\\CsvFileLoader\\' => 
        array (
            0 => __DIR__ . '/..' . '/luchaninov/csv-file-loader/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit06b5905aa4a79fd68162c814915a1e6b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit06b5905aa4a79fd68162c814915a1e6b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
