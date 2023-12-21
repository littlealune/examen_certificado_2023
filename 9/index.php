<?php
$numero= rand(1,15);
switch ($numero) {
    case 1:
        $mes = "Enero";
        break;
    case 2:
        $mes = "Febrero";
        break;
    case 3:
        $mes = "Marzo";
        break;
    case 4:
        $mes = "Abril";
        break;
    case 5:
        $mes = "Mayo";
        break;
    case 6:
        $mes = "Junio";
        break;
    case 7:
        $mes = "Julio";
        break;
    case 8:
        $mes = "Agosto";
        break;
    case 9:
        $mes = "Septiembre";
        break;
    case 10:
        $mes = "Octubre";
        break;
    case 11:
        $mes = "Noviembre";
        break;
    case 12:
        $mes = "Diciembre";
        break;
    default:
        $mes = null;
        break;
}
switch ($mes) {
    case "Enero":
    case "Marzo":
    case "Mayo":
    case "Julio":
    case "Agosto":
    case "Octubre":
    case "Diciembre":
        $dia = 31;
        break;
    case "Abril":
    case "Junio":
    case "Septiembre":
    case "Noviembre":
        $dia = 30;
        break;
    case "Febrero":
        $dia = "28 o 29";
        break;
    case null:
        $dia = null;
        break;
}
$texto="$numero-Mes no válido";
if($mes != null){
    $texto = "$numero-$mes. $dia días";
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
    <title>Ejercicio 9</title>
</head>
<body>

<a style="%;color:darkblue;size:2rem" href="./../index.php">Volver</a>
<fieldset>

    <legend>Meses</legend>
    <h1>
        <?=$texto?>
    </h1>

</fieldset>

</body>
</html>

