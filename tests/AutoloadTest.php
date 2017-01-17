<?php 
/**
 * Automatic loading of classes.
 * 
 * @category   JST
 * @package    Autoload
 * @subpackage AutoloadTest
 * @author     Josantonius - info@josantonius.com
 * @copyright  Copyright (c) 2017 JST PHP Framework
 * @license    https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @version    1.0.0
 * @link       https://github.com/Josantonius/PHP-Autoload
 * @since      File available since 1.0.0 - Update: 2017-01-17
 */

namespace Josantonius\Autoload\Tests;

use Josantonius\Autoload\Autoload;

/**
 * Tests class for Autoload library.
 *
 * @since 1.0.0
 */
class AutoloadTest {

	/**
	 * Autoload of classes.
     *
     * @since 1.0.0
	 */
	public static function testAutoloadClass() { 

		use resources\TestClass;

		print_r(TestClass::init());
	}
}
