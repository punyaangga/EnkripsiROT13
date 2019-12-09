<?php
//Session
session_start();

//proses
$plainteks=$_POST['plainteks'];
$string = $plainteks;
echo "Plainteks: $string<br/>";
//enkripsi
$enkripsi = str_rot13($string);
echo "Setelah di enkrip: ".$enkripsi."<br/>";
 
//dekripsi
$dekripsi = str_rot13($enkripsi);
echo "Setelah didekrip: ".$dekripsi."<br/>";

if (!empty($enkripsi) && !empty($dekripsi)) {
	$_SESSION["Test"] = true;
	$_SESSION["NilaiEnkrip"] = $enkripsi;
	$_SESSION["NilaiDekrip"] = $dekripsi;
	header("location:index.php");
}else{
	$_SESSION["Test"] = false;
	header("location:index.php");
}

?>