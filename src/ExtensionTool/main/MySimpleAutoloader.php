<?php
/**
 * https://www.php.net/manual/en/language.oop5.autoload.php
 * Simple autoloader, so we don't need Composer just for this.
 */
class Autoloader
{
    public static function register()
    {
        spl_autoload_register(function ($class) {
//hinzufügen von application, um alle Klassen innerhalb application zu laden
                //realpath entfernt trailing directory separator, deshalb anhängen
            $classRoot = realpath(__DIR__ . '/../') . '/';
            $file = str_replace('\\', DIRECTORY_SEPARATOR, $class).'.php';
            $file = $classRoot . $file;

            if (file_exists($file)) {
                require $file;
                return true;
            }
            return false;
        });
    }
}
Autoloader::register();