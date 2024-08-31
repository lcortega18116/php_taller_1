<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>

    <?php

    $productos = [
        "Samsung S23" => ["precio" => 1000, "detalles" => ["disponibilidad" => true, "reseñas" => 4.5]],
        "Samsung Y23" => ["precio" => 700, "detalles" => ["disponibilidad" => false, "reseñas" => 4.7]],
        "Samsung Note 21" => ["precio" => 300, "detalles" => ["disponibilidad" => true, "reseñas" => 4.3]]
    ];


    foreach ($productos as $nombre => $info) {
        if ($info['detalles']['disponibilidad']) {
            echo "$nombre, Precio: {$info['precio']}";
            echo "<br>";
        }
    }
    ?>

</body>
</html>