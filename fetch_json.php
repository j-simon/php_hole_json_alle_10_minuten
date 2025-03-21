<?php
$url = "https://jsonplaceholder.typicode.com/todos/1";
$response = file_get_contents($url);
$data = json_decode($response, true);

// Füge aktuellen Timestamp hinzu
$data['fetched_at'] = date('Y-m-d H:i:s');

file_put_contents("output.json", json_encode($data, JSON_PRETTY_PRINT));

echo "JSON erfolgreich gespeichert in output.json mit Timestamp\n";
?>
