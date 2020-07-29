<?php
// koneksi database
include 'koneksi.php';
 
mysqli_query($koneksi,"TRUNCATE TABLE konversi");
mysqli_query($koneksi,"TRUNCATE TABLE hasil");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>