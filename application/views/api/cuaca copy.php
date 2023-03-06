<?php
$kodeCuaca = array(
    0 => "Cerah",
    1 => "Cerah Berawan",
    2 => "Cerah Berawan",
    3 => "Berawan",
    4 => "Berawan Tebal",
    5 => "Udara Kabur",
    10 => "Asap",
    45 => "Kabut",
    6 => "Hujan Ringan",
    61 => "Hujan Sedang",
    63 => "Hujan Lebat",
    80 => "Hujan Lokal",
    95 => "Hujan Petir",
    97 => "Hujan Petir"
);

$bulan_array = array(
    1 => 'Januari',
    2 => 'Februari',
    3 => 'Maret',
    4 => 'April',
    5 => 'Mei',
    6 => 'Juni',
    7 => 'Juli',
    8 => 'Agustus',
    9 => 'September',
    10 => 'Oktober',
    11 => 'November',
    12 => 'Desember',
);

$data = file_get_contents('http://w.aguspakpahan.com/perkiraan-cuaca/Riau');
$json = json_decode($data, TRUE);
// $json = json_decode($getData, TRUE);

$areas = $json['data'];

// $dataUpdate = $json['issue']['day'] . " " . $bulan_array[$json['issue']['month']] . " " . $json['issue']['year'];
$dataUpdate = "25 Oktober 2022";

for($i=0; $i<=11; $i++){
    $daerah[$i] = $json['data'][$i]['nama_daerah'];
    $humidity[$i] = $json['data'][$i]['parameter'][0]['nilai'][4]['value'];
    $temperatur[$i] = $json['data'][$i]['parameter'][5]['nilai'][4]['value'][0];
    $codeCuaca[$i] = $json['data'][$i]['parameter'][6]['nilai'][4]['value'][0];
    $cuaca[$i] = $kodeCuaca[$codeCuaca[$i]];
}

?>