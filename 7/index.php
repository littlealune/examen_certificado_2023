<?php

$numero = rand();

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
<h1>
    <?php

    echo "Número: $numero. Octal: ".decoct($numero).". Binario: ".decbin($numero).". Hexadecimal: ".dechex($numero).".";

    ?>
</h1>
</body>
</html>

