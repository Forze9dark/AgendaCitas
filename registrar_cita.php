<?php
include_once("Class/sqlite.php");

// Obtenemos los valores enviados desde el formulario de registro y lo almacenamos en un array
$data = array(
    'nombre' => $_POST['pa_nombre'],
    'fecha' => $_POST['pa_fecha'],
    'nota' => $_POST['pa_notas']
);

$db = new SQLite3('dbAgenda.db') or die('Unable to open database');
$insert = <<<sql
INSERT INTO citas (id, NOMBRE, FECHA, NOTA)
VALUES (null,'{$data['nombre']}', '{$data['fecha']}', '{$data['nota']}');
sql;

$r = $db->exec($insert);
if(!$r) {
    generar_log("02/10/2000", "No se ha podido procesar el query que esta en el archivo sqlite.php");
    echo "<p class='alert alert-danger'><strong style='color:red'>ERROR:</strong> No se ha podido registra la cita con el paciente {$data['nombre']}. Verificar el <strong><a href='Logs/log.txt'>Logs</a></strong> en su archivo de proyecto.</p>";
    return;
}
$db->close();

header("Location: index.php");

?>