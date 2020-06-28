<?php
$koneksi = mysqli_connect("localhost","root","","native");
// $hasil =mysqli_query($koneksi,)
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>