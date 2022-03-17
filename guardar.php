<?php

require 'config/conexion.php';

$db = new Database();
$correcto = false;

if(isset($_POST['id'])){



}else{

$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
//echo $nombre, $precio;

$sql = 'INSERT INTO productos(nombre, precio) VALUES(:nombre, :precio)';
$respuesta = $db->mysql->prepare($sql);

$respuesta->execute([
    ':nombre' => $nombre,
    ':precio' => $precio,
]);

if($respuesta){
    $correcto = true;
}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="py-3"> 
    <main class="container">
        <div class="row">
            <div class="col">
                <?php if($correcto){ ?>
                    <h3>Registro guardado</h3>
                    <?php } else {?>
                    <h3>Error al guardar</h3>
                    <?php  } ?>
                    <a class="btn btn-secondary" href="index.php" >Atrás</a>
            </div>
        </div>
    </main>
</body>
</html>