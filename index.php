<?php
include_once('Class/sqlite.php');

// Instanciamos la clase en la variable DB
$db = new SQLite3('dbAgenda.db') or die('No se ha podido conectar a la base de datos.');

// Query para obtener los datos
$query =<<<sql
SELECT * FROM citas;
sql;

// Ejecutamos el query
$result = $db->query('SELECT * FROM citas') or die('Fallo el Query');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Citas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>
<body>

<div class="container mt-5">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4"><i class="fas fa-calendar-day fa-x2"></i> Registro de Citas</h1>
            <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
    </div>
</div>

<div class="container ">

    <div class="row justify-content-md-center">
        <div class="col col-md-12">
            <a href="#" class="btn btn-success" id="btnNuevaCita" style="width:100%"><i class="fas fa-plus"></i> Registrar nueva cita</a>
        </div>
    </div>


    <div class="row justify-content-md-center">
    <?php while ($row = $result->fetchArray()){ ?>

        <div class="col col-md-3 m-3">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="Assets/Images/miniatura.jpeg" alt="Cita Registrada">
                <div class="card-body">
                    <h5 class="card-title"><?= $row['NOMBRE'] ?></h5>
                    <p class="card-text"><?= $row['NOTA'] ?></p>
                    <a href="#?<?= $row['id'] ?>" id="btnDelete" class="btn btn-danger col col-md-12"><i class="fas fa-trash"></i></a>
                </div>
            </div>
        </div>

    <?php }; ?>
    </div>
</div>

    

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="Assets/js/scripts.js"></script>
</body>
</html>