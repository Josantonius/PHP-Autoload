# PHP Autoload library

[![Latest Stable Version](https://poser.pugx.org/josantonius/autoload/v/stable)](https://packagist.org/packages/josantonius/autoload) [![Total Downloads](https://poser.pugx.org/josantonius/autoload/downloads)](https://packagist.org/packages/josantonius/autoload) [![Latest Unstable Version](https://poser.pugx.org/josantonius/autoload/v/unstable)](https://packagist.org/packages/josantonius/autoload) [![License](https://poser.pugx.org/josantonius/autoload/license)](https://packagist.org/packages/josantonius/autoload)

[English version](README.md)

Carga automática de clases.

---

- [Instalación](#instalación)
- [Requisitos](#requisitos)
- [Cómo empezar y ejemplos](#cómo-empezar-y-ejemplos)
- [Métodos disponibles](#métodos-disponibles)
- [Uso](#uso)
- [Tests](#tests)
- [Manejador de excepciones](#manejador-de-excepciones)
- [Contribuir](#contribuir)
- [Repositorio](#repositorio)
- [Licencia](#licencia)
- [Copyright](#copyright)

---

### Instalación 

La mejor forma de instalar esta extensión es a través de [composer](http://getcomposer.org/download/).

Para instalar PHP Autoload library, simplemente escribe:

    $ composer require Josantonius/Autoload

El comando anterior solamente instalará los archivos necesarios, si prefieres descargar todo el código, incluyendo tests, puedes utilizar:

    $ composer require Josantonius/Autoload --prefer-source

También puedes clonar el repositorio completo con Git:

	$ git clone https://github.com/Josantonius/PHP-Autoload.git

### Requisitos

Esta ĺibrería es soportada por versiones de PHP 5.6 o superiores y es compatible con versiones de HHVM 3.0 o superiores.

### Cómo empezar y ejemplos

Para utilizar esta librería, simplemente:

```php
require __DIR__ . '/vendor/autoload.php';
```
### Métodos disponibles

Métodos disponibles en esta librería:

```php
Autoload::autoloadClass();
```
### Uso

Ejemplo de uso para esta librería:

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use resources\TestClass;

print_r(TestClass::init()); /* Response from the test class. */
```

### Tests 

Para utilizar la clase de [pruebas](tests), simplemente:

```php
<?php
$loader = require __DIR__ . '/vendor/autoload.php';

$loader->addPsr4('Josantonius\\Autoload\\Tests\\', __DIR__ . '/vendor/josantonius/autoload/tests');

use Josantonius\Autoload\Tests\AutoloadTest;
```
Métodos de prueba disponibles en esta librería:

```php
AutoloadTest::testAutoloadClass();
```

### Manejador de excepciones

Esta librería utiliza [control de excepciones](src/Exception) que puedes personalizar a tu gusto.
### Contribuir
1. Comprobar si hay incidencias abiertas o abrir una nueva para iniciar una discusión en torno a un fallo o función.
1. Bifurca la rama del repositorio en GitHub para iniciar la operación de ajuste.
1. Escribe una o más pruebas para la nueva característica o expón el error.
1. Haz cambios en el código para implementar la característica o reparar el fallo.
1. Envía pull request para fusionar los cambios y que sean publicados.

Esto está pensado para proyectos grandes y de larga duración.

### Repositorio

Los archivos de este repositorio se crearon y subieron automáticamente con [Reposgit Creator](https://github.com/Josantonius/BASH-Reposgit).

### Autor

Mantenido por [Josantonius](https://github.com/Josantonius/).

### Licencia

Este proyecto está licenciado bajo la **licencia MIT**. Consulta el archivo [LICENSE](LICENSE) para más información.