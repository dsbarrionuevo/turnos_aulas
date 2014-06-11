<?php

/*
 * Archivo de configuración.
 */
//Configurar aplicación
header('Content-Type: text/html; charset=utf-8');
if (basename($_SERVER['PHP_SELF']) == 'config.php') {
    die('Acceso incorrecto a la aplicación.');
}
//Definir variables de configuración
$G_Config = array(
    'debug' => true, //debe ser true para el momento de desarrollo, pero DEBE SER FALSE PARA LOS USUARIOS
    'default_timezone' => 'America/Argentina/Cordoba',
    #Configuración de la Base de Datos
    'db_host' => 'localhost',
    'db_user' => 'root',
    'db_pass' => '',
    'db_name' => 'isfd'
);
$debug_mode = $G_Config['debug'];
//--
//No Cache
header('Expires: Sat, 26 Jul 1997 05:00:00 GMT');
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', false);
header('Pragma: no-cache');
//--
//Dependiendo de la configuración establezco si se mostrarán o no los errores.
if ($G_Config['debug']) {
    error_reporting(E_ALL | E_STRICT);
} else {
    error_reporting(0);
}
//--
//Rutas
$G_AppPath = dirname(__FILE__);
$G_TemplatePath = $G_AppPath . '/tmpl';
$G_UploadPath = $G_AppPath . '/data/uploads';
$G_SrcPath = $G_AppPath . '/src';
$G_ClassesPath = $G_SrcPath . '/classes';
$G_FunctionsPath = $G_SrcPath . '/functions';
$G_IncludesPath = $G_SrcPath . '/includes';
$G_WebPath = 'http://' . $_SERVER['HTTP_HOST'] . '/turnos_aulas';
$G_WebPathActual = $G_WebPath . rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$G_CssPath = $G_WebPath . '/css';
$G_JsPath = $G_WebPath . '/js';
$G_ResPath = $G_WebPath . '/res';
$G_ImagesWebPath = $G_WebPath . '/res/images';
//--
//La función date necesita que se le configure el timezone
date_default_timezone_set($G_Config['default_timezone']);

//--
//Funciones que voy a necesitar
//require_once $G_FunctionsPath . '/misc.func.php';
//require_once $G_FunctionsPath . '/validar.func.php';

//--
/*function __autoload($class_name) {
    global $G_ClassesPath;
    require_once "{$G_ClassesPath}/" . strtolower($class_name) . '.class.php';
}*/

//Conexión a la Base de Datos.-
//$conexion = new MySQL($G_Config['db_name'], $G_Config['db_user'], $G_Config['db_pass'], $G_Config['db_host']);
//para la sesion
//require_once $G_IncludesPath . '/session_start.inc.php';
//require_once 'general.php';
