<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInited6b0910b93bbab86f8a3eca865315b8
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'CloudTables\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'CloudTables\\' => 
        array (
            0 => __DIR__ . '/..' . '/cloudtables/client',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInited6b0910b93bbab86f8a3eca865315b8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInited6b0910b93bbab86f8a3eca865315b8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInited6b0910b93bbab86f8a3eca865315b8::$classMap;

        }, null, ClassLoader::class);
    }
}
