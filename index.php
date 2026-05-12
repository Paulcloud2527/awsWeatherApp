<?php
// Forza la visualizzazione degli errori (utile per il debugging)
ini_set('display_errors', 1);
error_reporting(E_ALL);

$citta = "Rome";
// Usiamo un timeout per evitare che la pagina carichi all'infinito se il servizio meteo è lento
$ctx = stream_context_create(array('http'=>array('timeout' => 5)));
$meteo = file_get_contents("https://wttr.in/" . $citta . "?T0", false, $ctx);

echo "<html><head><meta charset='UTF-8'><title>Meteo Roma</title></head>";
echo "<body style='background: #1a1a1a; color: #00ff00; font-family: monospace; padding: 50px; text-align: center;'>";
echo "<h1>[ AWS EC2 WEATHER TERMINAL ]</h1>";
echo "<div style='display: inline-block; border: 2px solid #00ff00; padding: 20px; background: black;'>";
echo "<pre style='text-align: left;'>";
echo $meteo ? $meteo : "Errore nel recupero dati meteo";
echo "</pre></div>";
echo "<p style='color: #888;'>Target: " . $citta . " | Source: " . $_SERVER['SERVER_ADDR'] . "</p>";
echo "</body></html>";
?>
