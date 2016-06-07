<?php

/*
 * Jonnyalexbh
 * @Descripcion: configuración
 */

/*
 * Configuración para: Error reporting, util para mostrar un mayor detalle los errores, pero sólo 
 * mostrar los minimos en producción
 */

define('ENVIRONMENT', 'development');

if (ENVIRONMENT == 'development' || ENVIRONMENT == 'dev') {
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
}

/*
 * Auto-detectar la URL de aplicaciones
 */

define('URL_PUBLIC_FOLDER', 'public');
define('URL_PROTOCOL', 'http://');
define('URL_DOMAIN', $_SERVER['HTTP_HOST']);
define('URL_SUB_FOLDER', str_replace(URL_PUBLIC_FOLDER, '', dirname($_SERVER['SCRIPT_NAME'])));
define('URL', URL_PROTOCOL . URL_DOMAIN . URL_SUB_FOLDER);

/*
 * Configuración para: Base de datos
 * Este es el lugar donde se definen las constantes de la BD, tipo de base de datos, etc.
 */

define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'php-mvc');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_CHARSET', 'utf8');
