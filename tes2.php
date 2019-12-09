
<?php
//Session
//session_start();

//proses
$plainteks=001;
$kunci=110;
//$plainteks=$_POST['plainteks'];
//$kunci=$_POST['kunci'];
$enkripsi = $plainteks XOR $kunci;
$dekripsi = $kunci XOR $plainteks;
echo "Plainteks: $plainteks<br/>";
echo "Kunci : $kunci <br>";
echo "Setelah di enkrip = $enkripsi<br>";
echo "Setelah di dekrip = $dekripsi";

/**if (!empty($enkripsi) && !empty($dekripsi)) {
	$_SESSION["Test"] = true;
	$_SESSION["NilaiEnkrip"] = $enkripsi;
	$_SESSION["NilaiDekrip"] = $dekripsi;
	header("location:index.php");
}else{
	$_SESSION["Test"] = false;
	header("location:index.php");
}**/

?>