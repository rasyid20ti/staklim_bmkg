<?php

$data = file_get_contents("https://data.bmkg.go.id/DataMKG/TEWS/autogempa.json");
$json = json_decode($data, TRUE);

$waktu =  $json['Infogempa']['gempa']['Tanggal'] . ", " . $json['Infogempa']['gempa']['Jam'];
$magnitudo = $json['Infogempa']['gempa']['Magnitude'];
$kedalaman = $json['Infogempa']['gempa']['Kedalaman'];
$lokasi = $json['Infogempa']['gempa']['Lintang'] . " - " . $json['Infogempa']['gempa']['Bujur'] ;
$wilayah = $json['Infogempa']['gempa']['Wilayah'];
$potensi = $json['Infogempa']['gempa']['Potensi'];
$potensi = $json['Infogempa']['gempa']['Potensi'];
$dirasakan = $json['Infogempa']['gempa']['Dirasakan'];
$gambar = "https://data.bmkg.go.id/DataMKG/TEWS/" . $json['Infogempa']['gempa']['Shakemap'];
?>