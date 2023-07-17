<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit10f9f0a71c3a6c9ce0a29a49f230ad7a
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit10f9f0a71c3a6c9ce0a29a49f230ad7a', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit10f9f0a71c3a6c9ce0a29a49f230ad7a', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit10f9f0a71c3a6c9ce0a29a49f230ad7a::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
