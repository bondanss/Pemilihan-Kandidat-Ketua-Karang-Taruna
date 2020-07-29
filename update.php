<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id_kandidat'];
$nama = $_POST['nama_kandidat'];
$dom = $_POST['domisili'];
$tinggal = $_POST['tinggal'];
$jk = $_POST['jenis_kelamin'];
$absensi = $_POST['absensi'];
$kedisiplinan = $_POST['kedisiplinan'];
$usia = $_POST['usia'];
$kerapian = $_POST['kerapian'];
 
// update data ke database
mysqli_query($koneksi,"UPDATE kandidat SET id_kandidat='$id', nama_kandidat='$nama', domisili='$dom', tinggal='$tinggal', jenis_kelamin='$jk', absensi='$absensi', kedisiplinan='$kedisiplinan', usia='$usia', kerapian='$kerapian' where id_kandidat='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>