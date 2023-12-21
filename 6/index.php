<?php
$opcion = $_POST['submit'] ?? "Ninguno";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./../estilo.css">
</head>
<body>

<a style="%;color:darkblue;size:2rem" href="./../index.php">Volver</a>
<fieldset>
    <legend>Opciones</legend>
    <form action="index.php" method="post">
    <input type="submit" value="Ver" name="submit">
    <input type="submit" value="Insertar" name="submit">
    <input type="submit" value="Borrar" name="submit">
    <input type="submit" value="Consultar" name="submit">
    <input type="submit" value="Editar" name="submit">
    </form>
</fieldset>
<h1>
    <?=$opcion?>
</h1>
</body>
</html>

