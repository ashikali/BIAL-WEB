<?php


$arrConfig['basePath'] = '/var/www/html';
$arrConfig['theme'] = 'default'; //theme personal para los modulos esencialmente
$arrConfig['mainTheme'] = load_theme($arrConfig['basePath']."/"); //theme para la parte plantilla principal de Issabel (se usa para la inclusion de los css)
$arrConfig['defaultMenu'] = 'config';
$arrConfig['language'] = 'en';
$arrConfig['cadena_dsn'] = "mysql://asterisk:asterisk@ivrdb/call_center";

?>
