<?php 
$koneksi = mysqli_connect("localhost","root","","dss_kartar");
 
// Check connection
if (mysqli_connect_errno()){
  echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>