<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <style type="text/css">
        body{
            background-color: #B7950B;
            text-align: center;
            font-family: monospace;
            color: white;
            font-size: 25px;
        }
    </style>
</head>
<body>
    <?php
    $telefonos = [
    ['Modelo' => 'Iphone 16', 'precio' => 28499],
    ['Modelo' => 'SAMSUNG S24 Ultra', 'precio' => 33999],
    ['Modelo' => 'HUAWEI Nova 10 Pro ', 'precio' => 23513],
    ['Modelo' => 'Oppo Reno 9 Pro', 'precio' => 2350],
    ['Modelo' => 'Motorola edge 40 Ultra', 'precio' => 8600],
];

uasort($telefonos, function($a, $b) {
    return $a['precio'] <=> $b['precio'];
});

echo "Sueldos de empleados: <br>";
foreach ($telefonos as $telefono) {
    echo "El precio de " . $telefono['Modelo'] . " es: $" . $telefono['Modelo'] . "<br>";
}

echo "<p>";

array_push($telefonos, ['Modelo' => 'Iphone 15', 'precio' => 25348 ]);
array_push($telefonos, ['Modelo' => 'SAMSUNG Galaxy Note 9', 'precio' => 6227]);

uasort($telefonos, function($a, $b) {
    return $a['precio'] <=> $b['precio'];
});

echo "precio total: <br>";
foreach ($telefonos as $telefono) {
    echo "El precio del modelo " . $telefono['Modelo'] . " es: $" . $telefono['precio'] . "<br>";
}
    ?>

</body>
</html>