<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite69e44c33f47bbf346dab01e67ab6f02
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        'a4a119a56e50fbb293281d9a48007e0e' => __DIR__ . '/..' . '/symfony/polyfill-php80/bootstrap.php',
        '07d7f1a47144818725fd8d91a907ac57' => __DIR__ . '/..' . '/laminas/laminas-diactoros/src/functions/create_uploaded_file.php',
        'da94ac5d3ca7d2dbab84ce561ce72bfd' => __DIR__ . '/..' . '/laminas/laminas-diactoros/src/functions/marshal_headers_from_sapi.php',
        '3d97c8dcdfba8cb85d3b34f116bb248b' => __DIR__ . '/..' . '/laminas/laminas-diactoros/src/functions/marshal_method_from_sapi.php',
        'e6f3bc6883e449ab367280b34158c05b' => __DIR__ . '/..' . '/laminas/laminas-diactoros/src/functions/marshal_protocol_version_from_sapi.php',
        'de95e0ac670b27c84ef8c5ac41fc1b34' => __DIR__ . '/..' . '/laminas/laminas-diactoros/src/functions/normalize_server.php',
        'b6c2870932b0250c10334a86dcb33c7f' => __DIR__ . '/..' . '/laminas/laminas-diactoros/src/functions/normalize_uploaded_files.php',
        'd02cf21124526632320d6f20b1bbf905' => __DIR__ . '/..' . '/laminas/laminas-diactoros/src/functions/parse_cookie_header.php',
        '253c157292f75eb38082b5acb06f3f01' => __DIR__ . '/..' . '/nikic/fast-route/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Php80\\' => 23,
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Ctype\\' => 23,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Http\\Server\\' => 16,
            'Psr\\Http\\Message\\' => 17,
            'PhpOption\\' => 10,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'L' => 
        array (
            'Laminas\\HttpHandlerRunner\\' => 26,
            'Laminas\\Diactoros\\' => 18,
        ),
        'G' => 
        array (
            'GrahamCampbell\\ResultType\\' => 26,
        ),
        'F' => 
        array (
            'FastRoute\\' => 10,
        ),
        'D' => 
        array (
            'Dotenv\\' => 7,
        ),
        'A' => 
        array (
            'App\\Controller\\' => 15,
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Php80\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php80',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'Psr\\Http\\Server\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-server-handler/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-factory/src',
            1 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'PhpOption\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpoption/phpoption/src/PhpOption',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'Laminas\\HttpHandlerRunner\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-httphandlerrunner/src',
        ),
        'Laminas\\Diactoros\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-diactoros/src',
        ),
        'GrahamCampbell\\ResultType\\' => 
        array (
            0 => __DIR__ . '/..' . '/graham-campbell/result-type/src',
        ),
        'FastRoute\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/fast-route/src',
        ),
        'Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/phpdotenv/src',
        ),
        'App\\Controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Controller',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Attribute' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Attribute.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'PhpToken' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/PhpToken.php',
        'Stringable' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Stringable.php',
        'UnhandledMatchError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/UnhandledMatchError.php',
        'ValueError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/ValueError.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite69e44c33f47bbf346dab01e67ab6f02::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite69e44c33f47bbf346dab01e67ab6f02::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite69e44c33f47bbf346dab01e67ab6f02::$classMap;

        }, null, ClassLoader::class);
    }
}
