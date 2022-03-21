<?php
# Versión del sistema
const VERSION = "prod";
const SO_UNIX = false;

# Credenciales para la conexión con la base de datos MySQL
const DB_HOST = 'localhost';
const DB_USER = 'root';
const DB_PASS = '';
const DB_NAME = 'dharma.prod';


# Algoritmos utilizados para la encriptación de credenciales
# para el registro y acceso de usuarios del sistema
const ALGORITMO_USER = 'crc32';
const ALGORITMO_PASS = 'sha512';
const ALGORITMO_FINAL = 'md5';


# Direcciones a recursos estáticos de interfaz gráfica
if (SO_UNIX == true) {
	define('URL_APP', "");
	define('URL_STATIC', "/static/template/");
} else {
	define('URL_APP', "/dharma");
	define('URL_STATIC', "/dharma/static/template/");
}

const TEMPLATE = "static/template.html";

# Configuración estática del sistema
const APP_TITTLE = "DHARMA";
const APP_VERSION = "v1.0.2";
const APP_ABREV = "Dharma";
const LOGIN_URI = "/usuario/login";
const DEFAULT_MODULE = "usuario";
const DEFAULT_ACTION = "panel";

# Directorio private del sistema
$url_private = "C:/appfiles/";
define('URL_PRIVATE', $url_private);
ini_set("include_path", URL_PRIVATE);

define('DOCUMENT_ROOT', $_SERVER['DOCUMENT_ROOT']);
ini_set('include_path', DOCUMENT_ROOT);

session_start();
$session_vars = array('login'=>false);
foreach($session_vars as $var=>$value) {
    if(!isset($_SESSION[$var])) $_SESSION[$var] = $value;
}
?>