<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>

    <?php

    $empleados = [
        "Pedro" => ["salario" => 50000000, "fecha_contratacion" => "2019-01-15", "departamento" => "Ventas"],
        "Lucia" => ["salario" => 60000000, "fecha_contratacion" => "2018-03-12", "departamento" => "Marketing"],
        "Miguel" => ["salario" => 55000000, "fecha_contratacion" => "2020-07-01", "departamento" => "IT"]
    ];

    foreach ($empleados as $nombre => $info) {
        echo "$nombre, Salario: {$info['salario']}";
        echo "<br>";
    }
    ?>

</body>
</html>