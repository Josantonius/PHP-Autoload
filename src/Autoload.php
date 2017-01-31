<?php
/**
 * Automatic loading of classes.
 * 
 * @category   JST
 * @package    Autoload
 * @subpackage Autoload
 * @author     Josantonius - info@josantonius.com
 * @copyright  Copyright (c) 2017 JST PHP Framework
 * @license    https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @version    1.1.0
 * @link       https://github.com/Josantonius/PHP-Autoload
 * @since      File available since 1.0.0 - Update: 2017-01-30
 */

namespace Josantonius\Autoload as Register;

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
	 * @uses autoloadClass() recive "NameSpace\ClassName" when they are instantiated
	 * @uses $file saves the file path of the class and if it exists it loads it.
	 * 
	 * @param string $class → class instantiated "NameSpace\ClassName"
     *
     * @throws AutoloadException → file was not found
	 * @return require file      → load the class file
	 */
	public static function autoloadClass($class) { 

	    $file = getcwd() . '/' . str_replace('\\', '/', $class) . '.php';

	    if (file_exists($file)) {

	        require_once $file;

	    } else { 

            throw new AutoloadException('File not found:' . $file, 615);
	    }   
	}
}

spl_autoload_register("Register\Autoload::autoloadClass");