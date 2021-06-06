<?php
include_once('Class/sqlite.php');
include_once('functions.php');

// Generador de Logs
function generar_log($fecha, $error_message){
    $logFile = fopen("Logs/log.txt", 'a') or die("Error creando archivo");
    fwrite($logFile, "\n".$fecha . "-" . $error_message) or die("Error escribiendo en el archivo");
    fclose($logFile);
}