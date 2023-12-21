<?php
$opcion = $_POST['submit'] ?? null;
$operador = $_POST['operador'] ?? null;
$numero1 = $_POST['op1'] ?? 0;
$numero2 = $_POST['op2'] ?? 0;

switch ($opcion){
    case "Operar":
        $resultado = match($operador){
            "+" => (int)$numero1+(int)$numero2,
            "-" => (int)$numero1-(int)$numero2,
            "*" => (int)$numero1*(int)$numero2,
            "/" => (int)$numero1/(int)$numero2
        };
        break;
    default:
        $resultado = "";
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
    <title>Ejercicio 5</title>
    <link rel="stylesheet" href="./../estilo.css">
</head>
<body>

<a style="%;color:darkblue;size:2rem" href="./../index.php">Volver</a>

<fieldset>
    <legend>Calculadora</legend>
    <form method="post" action="index.php">
    <input type="text" name="op1" id="" placeholder="Operador 1">
    <select name="operador" id="">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="text" name="op2" id="" placeholder="Operador 2">
    <input type="submit" value="Operar" name="submit">
    </form>
</fieldset>
<h1>
<?=$resultado?>
</h1>
</body>
</html>

