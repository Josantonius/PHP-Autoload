<?php
/**
 * Automatic loading of classes.
 * 
 * @author     Josantonius - hello@josantonius.com
 * @copyright  Copyright (c) 2017
 * @license    https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link       https://github.com/Josantonius/PHP-Autoload
 * @since      1.0.0
 */

namespace Josantonius\Autoload;

use Josantonius\Autoload\Exception\AutoloadException;

/**
 * Class load handler.
 *
 * @since 1.0.0
 */
class Autoload {

    /**
     * Autoload of classes.
     *
     * @since 1.0.0
     *
     * @uses autoloadClass() recive "NameSpace\ClassName"
     * @uses $file saves file path of the class and if it exists it loads it.
     * 
     * @param string $class → class instantiated "NameSpace\ClassName"
     *
     * @throws AutoloadException → file was not found
     * @return require file      → load the class file
     */
    public static function autoloadClass($class) { 

        $file = getcwd() . '/' . str_replace('\\', '/', $class) . '.php';

        if (file_exists($file)) {

            return require_once $file;
        }

        throw new AutoloadException('File not found:' . $file, 615);
    }
}

spl_autoload_register("Josantonius\Autoload\Autoload::autoloadClass");