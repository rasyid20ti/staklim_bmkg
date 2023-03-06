<?php
header('Content-Type: application/json; charset=utf-8');

date_default_timezone_set("Asia/Jakarta");

$tz = 'Asia/Jakarta';
$dt = new DateTime("now", new DateTimeZone($tz));
$timestamp = $dt->format('G');
// $timestamp = '07';

$kodeCuaca = array(
    0 => "Cerah",
    1 => "Cerah Berawan",
    2 => "Cerah Berawan",
    3 => "Berawan",
    4 => "Berawan Tebal",
    5 => "Udara Kabur",
    100 => "Cerah",
    101 => "Cerah Berawan",
    102 => "Cerah Berawan",
    103 => "Berawan",
    104 => "Berawan Tebal",
    10 => "Asap",
    45 => "Berkabut",
    60 => "Hujan Ringan",
    61 => "Hujan Sedang",
    63 => "Hujan Lebat",
    80 => "Hujan Lokal",
    95 => "Hujan Petir",
    97 => "Hujan Petir"
);

    //Jika script tidak jalan, mungkin harus ganti url ini
    $xml_string = file_get_contents("http://data.bmkg.go.id/datamkg/MEWS/DigitalForecast/DigitalForecast-Riau.xml");
    $xml = simplexml_load_string($xml_string);
    //Ubah array ke Json Structure String
    $json = json_encode($xml);
    //hapus @
    $json = str_replace('"@attributes"','"attributes"',$json);
    //Kembalikan menjadi Json, kayanya kerja 2x yah :D
    $array = json_decode($json,TRUE);

    //Masuk ke objek area
    $areas = $array['forecast']['area'];

    
    if(count($areas)>0){
        foreach($areas as $area){
            // $i = 0;
            $idWilayah = $area['attributes']['id'];
            $kecamatan = $area['name'][0];
                // echo '[';
                $arKec[] = $kecamatan;
                // echo json_encode($arKec[$i]);
                // echo $kecamatan . '<br>';

            //parsing ramalan cuaca, data lain tidak diambil seperti arah angin
            $params = $area['parameter'];
            if(is_array($params) && count($params)>0){
                foreach($params as $param){
                    //Jika data cuaca
                    if($param['attributes']['id']=='weather'){
                        // Tambahkan ke database
                        $times = $param['timerange'];
                        foreach($times as $tm){
                            $jam = $tm['attributes']['datetime'];
                            $y = substr($jam,0,4);
                            $m = substr($jam,4,2);
                            $d = substr($jam,6,2);
                            $h = substr($jam,8,2);
                            $i = substr($jam,10,2);
                            $value = (is_array($tm['value']))?$tm['value'][0]:$tm['value'];
                            $d1 = date('d');

                            // Script perkiraan disetting dengan Jam.
                            if($timestamp >= 06 && $timestamp <= 11) {
                                if($d1 == $d && $h == '12') {
                                    $kodeCuaca1[] = $value;
                                    $cuaca[] = $kodeCuaca[$value];
                                }
                            }
                            if($timestamp >= 12 && $timestamp <= 17) {
                                if($d1 == $d && $h == '18') {
                                    $kodeCuaca1[] = $value;
                                    $cuaca[] = $kodeCuaca[$value];
                                }
                            }
                            if($timestamp >= 18 && $timestamp <= 23) {
                                if($d1 == $d && $h == '00') {
                                    $kodeCuaca1[] = $value;
                                    $cuaca[] = $kodeCuaca[$value];
                                }
                            }
                            if($timestamp >= 00 && $timestamp <= 05) {
                                if($d1 == $d && $h == '06') {
                                    $kodeCuaca1[] = $value;
                                    $cuaca[] = $kodeCuaca[$value];
                                }
                            }
                            // if($timestamp == '07') {
                            //     if($d1 == $d && $h == '12') {
                            //     $kodeCuaca1[] = $value;
                            //     $cuaca[] = $kodeCuaca[$value];
                            //     }
                            // }
                            // if ($timestamp == '17') {
                            //     if($d1 == $d && $h == '18') {
                            //         $kodeCuaca1[] = $value;
                            //         $cuaca[] = $kodeCuaca[$value];
                            //         }
                            // }
                        }

                    //Jika data kelembaban
                    }else if($param['attributes']['id']=='hu'){
                        //Tambahkan ke database
                        $times = $param['timerange'];
                        foreach($times as $tm){
                            $jam = $tm['attributes']['datetime'];
                            $y = substr($jam,0,4);
                            $m = substr($jam,4,2);
                            $d = substr($jam,6,2);
                            $h = substr($jam,8,2);
                            $i = substr($jam,10,2);
                            $value = (is_array($tm['value']))?$tm['value'][0]:$tm['value'];
                            $d1 = date('d');
                            // Script perkiraan disetting dengan Jam.
                            if($timestamp >= 06 && $timestamp <= 11) {
                                if($d1 == $d && $h == '12') {
                                    $humidity[] =  $value;
                                }
                            }
                            if($timestamp >= 12 && $timestamp <= 17) {
                                if($d1 == $d && $h == '18') {
                                    $humidity[] =  $value;
                                }
                            }
                            if($timestamp >= 18 && $timestamp <= 23) {
                                if($d1 == $d && $h == '00') {
                                    $humidity[] =  $value;
                                }
                            }
                            if($timestamp >= 00 && $timestamp <= 05) {
                                if($d1 == $d && $h == '06') {
                                    $humidity[] =  $value;
                                }
                            }
                            // if($d1 == $d && $h == '12') {
                            //     $humidity[] =  $value;
                            //     // echo json_encode($humidity);
                            // }
                        }
                    //Jika data Temperatur
                    }else if($param['attributes']['id']=='t'){
                        //Tambahkan ke database
                        $times = $param['timerange'];
                        foreach($times as $tm){
                            $jam = $tm['attributes']['datetime'];
                            $y = substr($jam,0,4);
                            $m = substr($jam,4,2);
                            $d = substr($jam,6,2);
                            $h = substr($jam,8,2);
                            $i = substr($jam,10,2);
                            $value = $tm['value'];
                            $d1 = date('d');
                            
                            // Script perkiraan disetting dengan Jam.
                            if($timestamp >= 06 && $timestamp <= 11) {
                                if($d1 == $d && $h == '12') {
                                    $temperatur[] = $value[0];
                                }
                            }
                            if($timestamp >= 12 && $timestamp <= 17) {
                                if($d1 == $d && $h == '18') {
                                    $temperatur[] = $value[0];
                                }
                            }
                            if($timestamp >= 18 && $timestamp <= 23) {
                                if($d1 == $d && $h == '00') {
                                    $temperatur[] = $value[0];
                                }
                            }
                            if($timestamp >= 00 && $timestamp <= 05) {
                                if($d1 == $d && $h == '06') {
                                    $temperatur[] = $value[0];
                                }
                            }

                            // if($timestamp == '07') {
                            //     if($d1 == $d && $h == '12') {
                            //     $temperatur[] = $value[0];
                            //     }
                            // }
                            // if($timestamp == '17') {
                            //     if($d1 == $d && $h == '18') {
                            //     $temperatur[] = $value[0];
                            //     }
                            // }
                        }
                    }
                }//foreach($params as $param){
            }//if(count($params)>0){
                $i++;
        }//foreach($areas as $area){
    }//if(count($areas)>0){
        
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

        $d = date('d');
        $m = $bulan_array[date('n')];
        $y = date('Y');

        $dateUpdate = $d . ' ' . $m . ' ' . $y;

    // if($timestamp == '07') {
    //     $jam1 = '12:00';
    //     $bg = 'cerah-berawan-siang';
    // }
    // if($timestamp == '17') {
    //     $jam1 = '18:00';
    //     $bg = 'cerah-berawan-malam';
    // }

    // Script perkiraan disetting dengan Jam.
    if($timestamp >= 06 && $timestamp <= 11) {
            $jam1 = '12:00';
            $bg = 'cerah-berawan-siang';
    }
    if($timestamp >= 12 && $timestamp <= 17) {
            $jam1 = '18:00';
            $bg = 'cerah-berawan-malam';
    }
    if($timestamp >= 18 && $timestamp <= 23) {
            $jam1 = '00:00';
            $bg = 'cerah-berawan-malam';
    }
    if($timestamp >= 00 && $timestamp <= 05) {
            $jam1 = '06:00';
            $bg = 'cerah-berawan-malam';
    }
$output_array[] = array('dataUpdate' => $dateUpdate,'kecamatan' => $arKec, 'humidity' => $humidity, 'kodeCuaca' => $kodeCuaca1, 'cuaca' => $cuaca, 'temperatur' => $temperatur, 'jamCuaca' => $jam1, 'background' => $bg);

file_put_contents('/var/www/html/web-staklim-kampar/application/views/api/cuaca.json', json_encode($output_array));
// echo json_encode($output_array);
file_put_contents('/var/www/html/web-staklim-kampar/cuaca.log', 'Prakiraan Cuaca Berhasil di Update pada ' . date('d-m-y H:i:s'));

?>
