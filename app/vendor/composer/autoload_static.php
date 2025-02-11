<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite73dc694c94f11008ed6105762724fa7
{
    public static $files = array (
        'ad155f8f1cf0d418fe49e248db8c661b' => __DIR__ . '/..' . '/react/promise/src/functions_include.php',
        '253c157292f75eb38082b5acb06f3f01' => __DIR__ . '/..' . '/nikic/fast-route/src/functions.php',
        'c4e03ecd470d2a87804979c0a8152284' => __DIR__ . '/..' . '/react/async/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'React\\Stream\\' => 13,
            'React\\Socket\\' => 13,
            'React\\Promise\\' => 14,
            'React\\Http\\' => 11,
            'React\\EventLoop\\' => 16,
            'React\\Dns\\' => 10,
            'React\\Cache\\' => 12,
            'React\\Async\\' => 12,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
        'M' => 
        array (
            'My\\Topadm\\' => 10,
            'My\\Service\\' => 11,
            'My\\Columns\\' => 11,
        ),
        'F' => 
        array (
            'Flex\\Banana\\Utils\\' => 18,
            'Flex\\Banana\\Traits\\' => 19,
            'Flex\\Banana\\Interfaces\\' => 23,
            'Flex\\Banana\\Classes\\' => 20,
            'Flex\\Banana\\Adapters\\' => 21,
            'Fig\\Http\\Message\\' => 17,
            'FastRoute\\' => 10,
        ),
        'E' => 
        array (
            'Evenement\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'React\\Stream\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/stream/src',
        ),
        'React\\Socket\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/socket/src',
        ),
        'React\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/promise/src',
        ),
        'React\\Http\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/http/src',
        ),
        'React\\EventLoop\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/event-loop/src',
        ),
        'React\\Dns\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/dns/src',
        ),
        'React\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/cache/src',
        ),
        'React\\Async\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/async/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'My\\Topadm\\' => 
        array (
            0 => __DIR__ . '/../..' . '/topadm',
        ),
        'My\\Service\\' => 
        array (
            0 => __DIR__ . '/../..' . '/service',
        ),
        'My\\Columns\\' => 
        array (
            0 => __DIR__ . '/../..' . '/columns',
        ),
        'Flex\\Banana\\Utils\\' => 
        array (
            0 => __DIR__ . '/..' . '/apmsoft/flexphp-banana/utils',
        ),
        'Flex\\Banana\\Traits\\' => 
        array (
            0 => __DIR__ . '/..' . '/apmsoft/flexphp-banana/traits',
        ),
        'Flex\\Banana\\Interfaces\\' => 
        array (
            0 => __DIR__ . '/..' . '/apmsoft/flexphp-banana/interfaces',
        ),
        'Flex\\Banana\\Classes\\' => 
        array (
            0 => __DIR__ . '/..' . '/apmsoft/flexphp-banana/classes',
        ),
        'Flex\\Banana\\Adapters\\' => 
        array (
            0 => __DIR__ . '/..' . '/apmsoft/flexphp-banana/adapters',
        ),
        'Fig\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/fig/http-message-util/src',
        ),
        'FastRoute\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/fast-route/src',
        ),
        'Evenement\\' => 
        array (
            0 => __DIR__ . '/..' . '/evenement/evenement/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite73dc694c94f11008ed6105762724fa7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite73dc694c94f11008ed6105762724fa7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite73dc694c94f11008ed6105762724fa7::$classMap;

        }, null, ClassLoader::class);
    }
}
