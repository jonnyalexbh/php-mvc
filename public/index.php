<?php

/*
 * Jonnyalexbh
 * @Descripcion: index
 */

define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);     // D:\xampp\htdocs\mvc\
define('APP', ROOT . 'application' . DIRECTORY_SEPARATOR);  // D:\xampp\htdocs\mvc\application\

/* load composer */
if (file_exists(ROOT . 'vendor/autoload.php')) {
    require ROOT . 'vendor/autoload.php';
} else {
    echo "<h2>Por favor, instalar a través de composer.json</h2>";
    echo "<p>Una vez instalado composer navegar al directorio de trabajo desde linea de comandos
     e introduzca 'composer update'</p>";
    exit;
}

// aplicación de la carga de configuración (informe de errores, etc.)
require APP . 'config/config.php';

// clase de carga para la aplicación
require APP . 'core/application.php';
require APP . 'core/controller.php';

// iniciar la aplicación
$app = new Application();
