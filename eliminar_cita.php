<?php
include_once("Class/sqlite.php");
include_once("functions.php");

// Abrimos la base de datos
$db = new SQLite3('dbAgenda.db') or die('Unable to open database');

$delete = <<<sql
DELETE FROM citas WHERE id = {$_GET['id']}
sql;

$r = $db->exec($delete);
if(!$r) {
    generar_log("Ocurrio un error en el archivo 'eliminar_cita.php' al procesar la consulta DELETE.");
    echo "<p class='alert alert-danger'><strong style='color:red'>ERROR:</strong> No se ha podido eliminar a esta cita. Verificar el <strong><a href='Logs/log.txt'>Logs</a></strong> en su archivo de proyecto.</p>";
    return;
}
$db->close();

header("Location: index.php");
