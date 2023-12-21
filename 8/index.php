<?php
$productos = [
    'lechuga' =>
                ['unidades' => 200,
                 'precio' => 0.90],
    'tomates' =>
                ['unidades' => 2000,
                 'precio' => 2.15],
    'cebollas' =>
                ['unidades' => 3200,
                 'precio' => 0.49],
    'fresas' =>
               ['unidades' => 4800,
                'precio' => 4.50],
    'manzanas' =>
               ['unidades' => 2500,
                'precio' => 2.10],
];

$texto = "";
foreach ($productos as $producto=>$contenido){
    if($contenido['unidades']>2000 AND $contenido['precio']>2.10){
        $texto.= "Producto: $producto. Unidades: {$contenido['unidades']}. Precio {$contenido['precio']}<br/>";
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
</head>
<body>

<a style="%;color:darkblue;size:2rem" href="./../index.php">Volver</a>
<h1>
    <?=$texto?>
</h1>

</body>
</html>

