<?php
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_kandidat = $_GET['id_kandidat'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from kandidat where id_kandidat='$id_kandidat'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>