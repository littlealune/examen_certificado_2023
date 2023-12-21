<?php

$opcion = $_POST['submit'] ?? null;
switch ($opcion){
    case "Genera Password":
        $password="";
        for($i = 0; $i < 8 ; $i++){
            $password.=chr(rand(65,127));
        }
        break;
    default:
        $password = "";
        break;
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 4</title>
    <link rel="stylesheet" href="./../estilo.css">
</head>
<body>

<a style="%;color:darkblue;size:2rem" href="./../index.php">Volver</a>

<fieldset style="width:40%;margin: 20%;background: darkkhaki ">
    <legend>Acciones</legend>
<form action="index.php" method="post">
    <input type="submit" value="Genera Password" name="submit">
</form>
<h2><?=$password?></h2>
</fieldset>
</body>
</html>

