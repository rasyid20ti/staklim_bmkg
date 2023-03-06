<?php
function base64url_encode($data) {
  return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
}

function base64url_decode($data) {
  return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT));
}


$link = '12';
$encode = base64url_encode($link);
$decode = base64url_decode($encode);

echo "Aslinya: " . $link . "\n";
echo "Encoding: " . $encode . "\n";
echo "Deskripsi: " . $decode . "\n";
?>