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
