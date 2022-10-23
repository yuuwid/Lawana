<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdac6923e96b38f35b893f8afe5f98514
{
    public static $files = array (
        'a4a119a56e50fbb293281d9a48007e0e' => __DIR__ . '/..' . '/symfony/polyfill-php80/bootstrap.php',
        '3a37ebac017bc098e9a86b35401e7a68' => __DIR__ . '/..' . '/mongodb/mongodb/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Php80\\' => 23,
        ),
        'P' => 
        array (
            'PDODB\\' => 6,
        ),
        'M' => 
        array (
            'Mongo\\' => 6,
            'MongoDB\\' => 8,
            'Models\\' => 7,
            'Middleware\\' => 11,
        ),
        'L' => 
        array (
            'Lawana\\View\\' => 12,
            'Lawana\\Utils\\' => 13,
            'Lawana\\Routing\\' => 15,
            'Lawana\\Model\\' => 13,
            'Lawana\\Middleware\\' => 18,
            'Lawana\\Message\\Layout\\' => 22,
            'Lawana\\Message\\' => 15,
            'Lawana\\Kernel\\' => 14,
            'Lawana\\Environment\\WFile\\' => 25,
            'Lawana\\Environment\\RFile\\' => 25,
            'Lawana\\Environment\\Options\\' => 27,
            'Lawana\\Environment\\Local\\' => 25,
            'Lawana\\Controller\\' => 18,
            'Lawana\\API\\' => 11,
        ),
        'J' => 
        array (
            'Jean85\\' => 7,
        ),
        'C' => 
        array (
            'Core\\Helpers\\' => 13,
            'Core\\' => 5,
            'Controllers\\' => 12,
        ),
        'A' => 
        array (
            'API\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Php80\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php80',
        ),
        'PDODB\\' => 
        array (
            0 => __DIR__ . '/..' . '/pdo',
        ),
        'Mongo\\' => 
        array (
            0 => __DIR__ . '/..' . '/mongo',
        ),
        'MongoDB\\' => 
        array (
            0 => __DIR__ . '/..' . '/mongodb/mongodb/src',
        ),
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Models',
        ),
        'Middleware\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Middleware',
        ),
        'Lawana\\View\\' => 
        array (
            0 => __DIR__ . '/..' . '/lawana/View',
        ),
        'Lawana\\Utils\\' => 
        array (
            0 => __DIR__ . '/..' . '/lawana/Utils',
        ),
        'Lawana\\Routing\\' => 
        array (
            0 => __DIR__ . '/..' . '/lawana/Routing',
        ),
        'Lawana\\Model\\' => 
        array (
            0 => __DIR__ . '/..' . '/lawana/Model',
        ),
        'Lawana\\Middleware\\' => 
        array (
            0 => __DIR__ . '/..' . '/lawana/Middleware',
        ),
        'Lawana\\Message\\Layout\\' => 
        array (
            0 => __DIR__ . '/..' . '/lawana/Message/Layout',
        ),
        'Lawana\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/lawana/Message',
        ),
        'Lawana\\Kernel\\' => 
        array (
            0 => __DIR__ . '/..' . '/lawana/Kernel',
        ),
        'Lawana\\Environment\\WFile\\' => 
        array (
            0 => __DIR__ . '/..' . '/lawana/Environment/WFile',
        ),
        'Lawana\\Environment\\RFile\\' => 
        array (
            0 => __DIR__ . '/..' . '/lawana/Environment/RFile',
        ),
        'Lawana\\Environment\\Options\\' => 
        array (
            0 => __DIR__ . '/..' . '/lawana/Environment/Options',
        ),
        'Lawana\\Environment\\Local\\' => 
        array (
            0 => __DIR__ . '/..' . '/lawana/Environment/Local',
        ),
        'Lawana\\Controller\\' => 
        array (
            0 => __DIR__ . '/..' . '/lawana/Controller',
        ),
        'Lawana\\API\\' => 
        array (
            0 => __DIR__ . '/..' . '/lawana/API',
        ),
        'Jean85\\' => 
        array (
            0 => __DIR__ . '/..' . '/jean85/pretty-package-versions/src',
        ),
        'Core\\Helpers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Core/Helpers',
        ),
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Core',
        ),
        'Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Controllers',
        ),
        'API\\' => 
        array (
            0 => __DIR__ . '/../..' . '/API',
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitdac6923e96b38f35b893f8afe5f98514::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdac6923e96b38f35b893f8afe5f98514::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdac6923e96b38f35b893f8afe5f98514::$classMap;

        }, null, ClassLoader::class);
    }
}
