<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit563bab632a24e2377ce3872108c2b717
{
    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'HelloWorld' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit563bab632a24e2377ce3872108c2b717::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
