<?php 
include_once("../functions.php");

// Class SQLITE con el nombre dbAgenda.db para la base de datos local
class SqliteDatabase extends SQLite3 {
    public function __construct() {
        $this->open('dbAgenda.db');
    }
}

// Instanciamos la clase en la variable DB
$db = new SQLite3('dbAgenda.db') or die('Unable to open database');

if(!$db){
    echo "<p class='alert alert-danger'><strong style='color:red'>ERROR:</strong> Ocurrio un error al crear la base de datos. Verificar el codigo de su proyecto donde se genera la base de datos.</p>";
    return;
}

// Creacion de tablas necesarias en la base de datos
// TABLA CITAS
$query =<<<sql
CREATE TABLE if not exists citas
(id INTEGER PRIMARY KEY AUTOINCREMENT,
NOMBRE text,
FECHA text,
NOTA text);
sql;

$r = $db->exec($query);

if(!$r) {
    generar_log("02/10/2000", "No se ha podido procesar el query que esta en el archivo sqlite.php");
    echo "<p class='alert alert-danger'><strong style='color:red'>ERROR:</strong> No se ha podido crear las tablas correspondientes. Verificar el <strong><a href='Logs/log.txt'>Logs</a></strong> en su archivo de proyecto.</p>";
    return;
}
$db->close();
// *************************************************************

?>