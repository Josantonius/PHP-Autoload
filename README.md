# PHP Autoload library

[![Latest Stable Version](https://poser.pugx.org/josantonius/autoload/v/stable)](https://packagist.org/packages/josantonius/autoload) [![Total Downloads](https://poser.pugx.org/josantonius/autoload/downloads)](https://packagist.org/packages/josantonius/autoload) [![Latest Unstable Version](https://poser.pugx.org/josantonius/autoload/v/unstable)](https://packagist.org/packages/josantonius/autoload) [![License](https://poser.pugx.org/josantonius/autoload/license)](https://packagist.org/packages/josantonius/autoload)

[Versión en español](README-ES.md)

Automatic loading of classes.

---

- [Installation](#installation)
- [Requirements](#requirements)
- [Quick Start and Examples](#quick-start-and-examples)
- [Available Methods](#available-methods)
- [Usage](#usage)
- [Exception Handler](#exception-handler)
- [Contribute](#contribute)
- [Repository](#repository)
- [License](#license)
- [Copyright](#copyright)

---

### Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

To install PHP Autoload library, simply:

    $ composer require Josantonius/Autoload

The previous command will only install the necessary files, if you prefer to download the entire source code (including tests, vendor folder, exceptions not used, docs...) you can use:

    $ composer require Josantonius/Autoload --prefer-source

Or you can also clone the complete repository with Git:

	$ git clone https://github.com/Josantonius/PHP-Autoload.git

### Requirements

This library is supported by PHP versions 5.6 or higher and is compatible with HHVM versions 3.0 or higher.

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

### License

This project is licensed under **MIT license**. See the [LICENSE](LICENSE) file for more info.

### Copyright

2017 Josantonius, [josantonius.com](https://josantonius.com/)

If you find it useful, let me know :wink:

You can contact me on [Twitter](https://twitter.com/Josantonius) or through my [email](mailto:hello@josantonius.com).