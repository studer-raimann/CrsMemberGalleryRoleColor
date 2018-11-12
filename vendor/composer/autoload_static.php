<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit62a96a7165ea031030464a508070b7d8
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'srag\\UNIBAS\\Plugins\\CrsMemberGalleryRoleColor\\' => 46,
            'srag\\RemovePluginDataConfirm\\' => 29,
            'srag\\DIC\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'srag\\UNIBAS\\Plugins\\CrsMemberGalleryRoleColor\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'srag\\RemovePluginDataConfirm\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src',
        ),
        'srag\\DIC\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/dic/src',
        ),
    );

    public static $classMap = array (
        'CrsMemberGalleryRoleColorConfirm' => __DIR__ . '/../..' . '/classes/uninstall/class.CrsMemberGalleryRoleColorConfirm.php',
        'ilCrsMemberGalleryRoleColorPlugin' => __DIR__ . '/../..' . '/classes/class.ilCrsMemberGalleryRoleColorPlugin.php',
        'ilCrsMemberGalleryRoleColorUIHookGUI' => __DIR__ . '/../..' . '/classes/class.ilCrsMemberGalleryRoleColorUIHookGUI.php',
        'srag\\DIC\\DICStatic' => __DIR__ . '/..' . '/srag/dic/src/DICStatic.php',
        'srag\\DIC\\DICStaticInterface' => __DIR__ . '/..' . '/srag/dic/src/DICStaticInterface.php',
        'srag\\DIC\\DICTrait' => __DIR__ . '/..' . '/srag/dic/src/DICTrait.php',
        'srag\\DIC\\DIC\\AbstractDIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/AbstractDIC.php',
        'srag\\DIC\\DIC\\DICInterface' => __DIR__ . '/..' . '/srag/dic/src/DIC/DICInterface.php',
        'srag\\DIC\\DIC\\LegacyDIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/LegacyDIC.php',
        'srag\\DIC\\DIC\\NewDIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/NewDIC.php',
        'srag\\DIC\\Exception\\DICException' => __DIR__ . '/..' . '/srag/dic/src/Exception/DICException.php',
        'srag\\DIC\\Plugin\\Plugin' => __DIR__ . '/..' . '/srag/dic/src/Plugin/Plugin.php',
        'srag\\DIC\\Plugin\\PluginInterface' => __DIR__ . '/..' . '/srag/dic/src/Plugin/PluginInterface.php',
        'srag\\DIC\\Plugin\\Pluginable' => __DIR__ . '/..' . '/srag/dic/src/Plugin/Pluginable.php',
        'srag\\DIC\\Version\\Version' => __DIR__ . '/..' . '/srag/dic/src/Version/Version.php',
        'srag\\DIC\\Version\\VersionInterface' => __DIR__ . '/..' . '/srag/dic/src/Version/VersionInterface.php',
        'srag\\RemovePluginDataConfirm\\AbstractPluginUninstallTrait' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/AbstractPluginUninstallTrait.php',
        'srag\\RemovePluginDataConfirm\\AbstractRemovePluginDataConfirm' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/AbstractRemovePluginDataConfirm.php',
        'srag\\RemovePluginDataConfirm\\PluginUninstallTrait' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/PluginUninstallTrait.php',
        'srag\\RemovePluginDataConfirm\\RemovePluginDataConfirmException' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/RemovePluginDataConfirmException.php',
        'srag\\RemovePluginDataConfirm\\RepositoryObjectPluginUninstallTrait' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/RepositoryObjectPluginUninstallTrait.php',
        'srag\\UNIBAS\\Plugins\\CrsMemberGalleryRoleColor\\Utils\\CrsMemberGalleryRoleColorTrait' => __DIR__ . '/../..' . '/src/Utils/CrsMemberGalleryRoleColorTrait.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit62a96a7165ea031030464a508070b7d8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit62a96a7165ea031030464a508070b7d8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit62a96a7165ea031030464a508070b7d8::$classMap;

        }, null, ClassLoader::class);
    }
}
