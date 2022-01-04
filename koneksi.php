<?php
$user="ridwan_123";
$pass="123";
$database="LOCALHOST/XE";

$con = oci_connect($user, $pass, $database);
if($con){
	echo "koneksi suskses";

}
else{ 
	$err = oci_error();
echo "Gagal". $err['text'];
}
?>