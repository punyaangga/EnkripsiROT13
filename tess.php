<?php

$string = 'Qriv Snwne Jngv  ';
echo "Plainteks: $string<br/>";
//enkripsi
$enkripsi = str_rot13($string);
echo "Setelah di enkrip: ".$enkripsi."<br/>";
 
//dekripsi
$dekripsi = str_rot13($enkripsi);
echo "Setelah didekrip: ".$dekripsi."<br/>";
 

?>