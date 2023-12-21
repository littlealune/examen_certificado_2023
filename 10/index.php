<?php

$clicks = $_POST['clicks'] ?? array();
$texto="";
if(isset($_POST['submit'])){
    $nombre = htmlspecialchars($_POST['nombre']);
    if($nombre!="") {
        $clicksNombre = 0;
        for ($i = 0; $i<sizeof($clicks);$i++){
            if(strcasecmp($nombre,$clicks[$i]['nombre'])){
                $clicksNombre = $clicks[$i]['clicks'];
                $clicks[$i] = array('nombre' -> $nombre, 'clicks' -> $clicksNombre + 1);
            }
        }
        if($clicksNombre != 0){
            $clicks[$nombre] = array('nombre' -> $nombre, 'clicks' -> $clicksNombre + 1);
        }else {
            $clicksNombre++;
            $texto = "Hola de nuevo, $nombre. Clicks totales: $clicksNombre";
            $clicks[$nombre] = $nombre -> $clicksNombre ;
        }
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./../estilo.css">
    <title>Ejercicio 10</title>
</head>
<body>

<a style="%;color:darkblue;size:2rem" href="./../index.php">Volver</a>
<fieldset>
    <legend>Datos de click</legend>
    <form method="post" action="index.php">
    <label for="">Nombre</label>
    <input type="text" name="nombre" id=""><br />
    <input type="submit" value="Haz click" name="submit">
    <input type="hidden" value="<?=$clicks?>" name="clicks">
    </form>
    <h1><?=$texto?></h1>

</fieldset>

</body>
</html>

