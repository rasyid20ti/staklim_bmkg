<?php
function get_web_page( $url )
{
   $options = array(
     CURLOPT_RETURNTRANSFER => true,
     CURLOPT_HEADER => false,
     CURLOPT_FOLLOWLOCATION => true,
     CURLOPT_ENCODING => "",
     CURLOPT_USERAGENT => "spider",
     CURLOPT_AUTOREFERER => true,
     CURLOPT_CONNECTTIMEOUT => 120,
     CURLOPT_TIMEOUT => 120,
     CURLOPT_MAXREDIRS => 10,
     CURLOPT_SSL_VERIFYPEER => false
   );
   $ch = curl_init( $url );
   curl_setopt_array( $ch, $options );
   $content = curl_exec( $ch );
   $err = curl_errno( $ch );
   $errmsg = curl_error( $ch );
   $header = curl_getinfo( $ch );
   curl_close( $ch );
   return $content;
}
$code = get_web_page("https://bmkg.go.id/cuaca/prakiraan-cuaca-indonesia.bmkg?Prov=26&NamaProv=Riau");
$pecah = explode('<div class="owl-peringatan-dini">', $code);
$final_table = explode('</div>', $pecah[1]);
$data = $final_table[0];
// echo $data;

$output_array[] = array('pdini' => $data);
file_put_contents('/var/www/html/web-staklim-kampar/application/views/api/peringatanDini.json', json_encode($output_array));

file_put_contents('/var/www/html/web-staklim-kampar/peringatandini.log', 'Peringatan Dini Berhasil di Update pada ' . date('d-m-y H:i:s'));

?>