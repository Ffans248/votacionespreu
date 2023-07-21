<?php
include('conexion.php');

// Obtener votos para Mister
$sql1 = $conn->query("SELECT count(*) as votos FROM mister WHERE id=1");
if ($rowMartin = $sql1->fetch_array()) {
    $votosMartin = (int)$rowMartin['votos'];
} else {
    $votosMartin = 0;
}

$sql2 = $conn->query("SELECT count(*) as votos FROM mister WHERE id=2");
if ($rowLizardo = $sql2->fetch_array()) {
    $votosLizardo = (int)$rowLizardo['votos'];
} else {
    $votosLizardo = 0;
}

$sql3 = $conn->query("SELECT count(*) as votos FROM mister WHERE id=3");
if ($rowGerman = $sql3->fetch_array()) {
    $votosGerman = (int)$rowGerman['votos'];
} else {
    $votosGerman = 0;
}

$sql4 = $conn->query("SELECT count(*) as votos FROM mister WHERE id=4");
if ($rowSmaylin = $sql4->fetch_array()) {
    $votosSmaylin = (int)$rowSmaylin['votos'];
} else {
    $votosSmaylin = 0;
}

$sql5 = $conn->query("SELECT count(*) as votos FROM mister WHERE id=5");
if ($rowJan = $sql5->fetch_array()) {
    $votosJan = (int)$rowJan['votos'];
} else {
    $votosJan = 0;
}

$sql6 = $conn->query("SELECT count(*) as votos FROM mister WHERE id=6");
if ($rowHenrry = $sql6->fetch_array()) {
    $votosHenrry = (int)$rowHenrry['votos'];
} else {
    $votosHenrry = 0;
}

// Etiquetas y datos de votos para Mister
$etiquetasMister = ["Martín", "Lizardo", "Germán", "Smaylin", "Jan", "Henrry"];
$datosDoughnutMister = [$votosMartin, $votosLizardo, $votosGerman, $votosSmaylin, $votosJan, $votosHenrry];

// Obtener votos para Miss
// Repite el proceso similar para calcular los votos de Miss y almacenarlos en variables

// Etiquetas y datos de votos para Miss
$etiquetasMiss = ["Suceily", "Meredith", "Mayri", "Andrea", "Anggie", "Nancy"];
$datosDoughnutMiss = [/*... completar con los votos para los candidatos de Miss...*/];

// Respuesta final en formato JSON con los datos de Mister y Miss
$respuestaMister = [
    "etiquetas" => $etiquetasMister,
    "datos" => $datosDoughnutMister,
];

$respuestaMiss = [
    "etiquetas" => $etiquetasMiss,
    "datos" => $datosDoughnutMiss,
];

// Convertir los arreglos de respuesta a formato JSON y enviarlos como respuesta
header('Content-Type: application/json');
echo json_encode(["mister" => $respuestaMister, "miss" => $respuestaMiss]);
?>
