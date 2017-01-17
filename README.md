# PHP Autoload library

[![Latest Stable Version](https://poser.pugx.org/josantonius/autoload/v/stable)](https://packagist.org/packages/josantonius/autoload) [![Total Downloads](https://poser.pugx.org/josantonius/autoload/downloads)](https://packagist.org/packages/josantonius/autoload) [![Latest Unstable Version](https://poser.pugx.org/josantonius/autoload/v/unstable)](https://packagist.org/packages/josantonius/autoload) [![License](https://poser.pugx.org/josantonius/autoload/license)](https://packagist.org/packages/josantonius/autoload)

[Spanish version](README-ES.md)

Automatic loading of classes.

---

- [Installation](#installation)
- [Requirements](#requirements)
- [Quick Start and Examples](#quick-start-and-examples)
- [Available Methods](#available-methods)
- [Usage](#usage)
- [Tests](#tests)
- [Exception Handler](#exception-handler)
- [Contribute](#contribute)
- [Repository](#repository)
- [Author](#author)
- [Licensing](#licensing)

---

### Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

To install PHP Autoload library, simply:

    $ composer require Josantonius/Autoload

### Requirements

This library is supported by PHP versions 7.0 or higher and is compatible with HHVM versions 3.0 or higher.

To use this library in HHVM (HipHop Virtual Machine) you will have to activate the scalar types. Add the following line "hhvm.php7.scalar_types = true" in your "/etc/hhvm/php.ini".

### Quick Start and Examples

To use this class, simply:

```php
require __DIR__ . '/vendor/autoload.php';
```
### Available Methods

Available methods in this library:

```php
Autoload::autoloadClass();
```
### Usage

Example of use for this library:

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use resources\TestClass;

print_r(TestClass::init()); /* Response from the test class. */
```

### Tests 

To use the [test](tests) class, simply:

```php
<?php
$loader = require __DIR__ . '/vendor/autoload.php';

$loader->addPsr4('Josantonius\\Autoload\\Tests\\', __DIR__ . '/vendor/josantonius/autoload/tests');

use Josantonius\Autoload\Tests\AutoloadTest;

```
Available test methods in this library:

```php
AutoloadTest::testAutoloadClass();
```

### Exception Handler

This library uses [exception handler](src/Exception) that you can customize.
### Contribute
1. Check for open issues or open a new issue to start a discussion around a bug or feature.
1. Fork the repository on GitHub to start making your changes.
1. Write one or more tests for the new feature or that expose the bug.
1. Make code changes to implement the feature or fix the bug.
1. Send a pull request to get your changes merged and published.

This is intended for large and long-lived objects.

### Repository

All files in this repository were created and uploaded automatically with [Reposgit Creator](https://github.com/Josantonius/BASH-Reposgit).

### Author

Maintained by [Josantonius](https://github.com/Josantonius/).

### Licensing

This project is licensed under **MIT license**. See the [LICENSE](LICENSE) file for more info.