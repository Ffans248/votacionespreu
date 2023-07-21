<?php

$ResultMister = ["Martín", "Lizardo", "Germán", "Hector"];
$VotosTotales = [5000, 1500, 8000, 5102];

$respuesta = [
    "etiquetas" => $etiquetas,
    "datos" => $datosVentas,
];
echo json_encode($respuesta);
