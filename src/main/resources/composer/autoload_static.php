<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita285fc111a01c7cefeecf203edd657ef
{
    public static $files = array (
        '800196073909aa5a35e71b8a8265de59' => __DIR__ . '/..' . '/jaxon-php/jaxon-core/src/start.php',
    );

    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MatthiasMullie\\PathConverter\\' => 29,
            'MatthiasMullie\\Minify\\' => 22,
        ),
        'J' => 
        array (
            'Jaxon\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MatthiasMullie\\PathConverter\\' => 
        array (
            0 => __DIR__ . '/..' . '/matthiasmullie/path-converter/src',
        ),
        'MatthiasMullie\\Minify\\' => 
        array (
            0 => __DIR__ . '/..' . '/matthiasmullie/minify/src',
        ),
        'Jaxon\\' => 
        array (
            0 => __DIR__ . '/..' . '/jaxon-php/jaxon-core/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/src',
            ),
        ),
    );

    public static $classMap = array (
        'Latte\\CompileException' => __DIR__ . '/..' . '/latte/latte/src/Latte/exceptions.php',
        'Latte\\Compiler' => __DIR__ . '/..' . '/latte/latte/src/Latte/Compiler.php',
        'Latte\\Engine' => __DIR__ . '/..' . '/latte/latte/src/Latte/Engine.php',
        'Latte\\Helpers' => __DIR__ . '/..' . '/latte/latte/src/Latte/Helpers.php',
        'Latte\\HtmlNode' => __DIR__ . '/..' . '/latte/latte/src/Latte/HtmlNode.php',
        'Latte\\ILoader' => __DIR__ . '/..' . '/latte/latte/src/Latte/ILoader.php',
        'Latte\\IMacro' => __DIR__ . '/..' . '/latte/latte/src/Latte/IMacro.php',
        'Latte\\Loaders\\FileLoader' => __DIR__ . '/..' . '/latte/latte/src/Latte/Loaders/FileLoader.php',
        'Latte\\Loaders\\StringLoader' => __DIR__ . '/..' . '/latte/latte/src/Latte/Loaders/StringLoader.php',
        'Latte\\MacroNode' => __DIR__ . '/..' . '/latte/latte/src/Latte/MacroNode.php',
        'Latte\\MacroTokens' => __DIR__ . '/..' . '/latte/latte/src/Latte/MacroTokens.php',
        'Latte\\Macros\\BlockMacros' => __DIR__ . '/..' . '/latte/latte/src/Latte/Macros/BlockMacros.php',
        'Latte\\Macros\\BlockMacrosRuntime' => __DIR__ . '/..' . '/latte/latte/src/Latte/Macros/BlockMacrosRuntime.php',
        'Latte\\Macros\\CoreMacros' => __DIR__ . '/..' . '/latte/latte/src/Latte/Macros/CoreMacros.php',
        'Latte\\Macros\\MacroSet' => __DIR__ . '/..' . '/latte/latte/src/Latte/Macros/MacroSet.php',
        'Latte\\Object' => __DIR__ . '/..' . '/latte/latte/src/Latte/Object.php',
        'Latte\\Parser' => __DIR__ . '/..' . '/latte/latte/src/Latte/Parser.php',
        'Latte\\PhpWriter' => __DIR__ . '/..' . '/latte/latte/src/Latte/PhpWriter.php',
        'Latte\\RegexpException' => __DIR__ . '/..' . '/latte/latte/src/Latte/exceptions.php',
        'Latte\\RuntimeException' => __DIR__ . '/..' . '/latte/latte/src/Latte/exceptions.php',
        'Latte\\Runtime\\CachingIterator' => __DIR__ . '/..' . '/latte/latte/src/Latte/Runtime/CachingIterator.php',
        'Latte\\Runtime\\Filters' => __DIR__ . '/..' . '/latte/latte/src/Latte/Runtime/Filters.php',
        'Latte\\Runtime\\Html' => __DIR__ . '/..' . '/latte/latte/src/Latte/Runtime/Html.php',
        'Latte\\Runtime\\IHtmlString' => __DIR__ . '/..' . '/latte/latte/src/Latte/Runtime/IHtmlString.php',
        'Latte\\Template' => __DIR__ . '/..' . '/latte/latte/src/Latte/Template.php',
        'Latte\\Token' => __DIR__ . '/..' . '/latte/latte/src/Latte/Token.php',
        'Latte\\TokenIterator' => __DIR__ . '/..' . '/latte/latte/src/Latte/TokenIterator.php',
        'Latte\\Tokenizer' => __DIR__ . '/..' . '/latte/latte/src/Latte/Tokenizer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita285fc111a01c7cefeecf203edd657ef::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita285fc111a01c7cefeecf203edd657ef::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInita285fc111a01c7cefeecf203edd657ef::$prefixesPsr0;
            $loader->classMap = ComposerStaticInita285fc111a01c7cefeecf203edd657ef::$classMap;

        }, null, ClassLoader::class);
    }
}