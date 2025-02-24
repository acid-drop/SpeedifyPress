<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitce59211e3f8bc5ed28f57056eb88342b
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Wa72\\Url\\' => 9,
        ),
        'U' => 
        array (
            'UPRESS\\' => 7,
        ),
        'M' => 
        array (
            'MatthiasMullie\\PathConverter\\' => 29,
            'MatthiasMullie\\Minify\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Wa72\\Url\\' => 
        array (
            0 => __DIR__ . '/..' . '/wa72/url/src/Wa72/Url',
        ),
        'UPRESS\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'MatthiasMullie\\PathConverter\\' => 
        array (
            0 => __DIR__ . '/..' . '/matthiasmullie/path-converter/src',
        ),
        'MatthiasMullie\\Minify\\' => 
        array (
            0 => __DIR__ . '/..' . '/matthiasmullie/minify/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'simplehtmldom\\Debug' => __DIR__ . '/..' . '/simplehtmldom/simplehtmldom/Debug.php',
        'simplehtmldom\\HtmlDocument' => __DIR__ . '/..' . '/simplehtmldom/simplehtmldom/HtmlDocument.php',
        'simplehtmldom\\HtmlNode' => __DIR__ . '/..' . '/simplehtmldom/simplehtmldom/HtmlNode.php',
        'simplehtmldom\\HtmlWeb' => __DIR__ . '/..' . '/simplehtmldom/simplehtmldom/HtmlWeb.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitce59211e3f8bc5ed28f57056eb88342b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitce59211e3f8bc5ed28f57056eb88342b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitce59211e3f8bc5ed28f57056eb88342b::$classMap;

        }, null, ClassLoader::class);
    }
}
