<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>

    <?php

    $estudiantes = [
        "Juan" => [4.5, 4, 4.8],
        "Ana" => [4.2, 4.8, 4.5],
        "Carlos" => [3.6, 4.5, 4],
        "Maria" => [4.9, 4.3, 3.4]
    ];

    $promedios = [];
    $mejorPromedio = 0;
    $mejorEstudiante = "";


    foreach ($estudiantes as $nombre => $calificaciones) {
        $promedio = array_sum($calificaciones) / count($calificaciones);
        $promedios[$nombre] = $promedio;

        if ($promedio > $mejorPromedio) {
            $mejorPromedio = $promedio;
            $mejorEstudiante = $nombre;
        }
    }

    echo "$mejorEstudiante  =>  Promedio: $mejorPromedio\n";
    ?>

</body>
</html>