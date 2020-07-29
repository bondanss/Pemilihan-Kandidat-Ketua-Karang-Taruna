<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama_kandidat = $_POST['nama_kandidat'];
$domisili = $_POST['domisili'];
$tinggal = $_POST['tinggal'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$absensi = $_POST['absensi'];
$kedisiplinan = $_POST['kedisiplinan'];
$usia = $_POST['usia'];
$kerapian = $_POST['kerapian'];

$query = "SELECT max(id_kandidat) as maxKode FROM kandidat";
$hasil = mysqli_query($koneksi,$query);
$data = mysqli_fetch_array($hasil);
$kodeKandidat = $data['maxKode'];
 
// mengambil angka atau bilangan dalam kode anggota terbesar,
// dengan cara mengambil substring mulai dari karakter ke-1 diambil 6 karakter
// misal 'BRG001', akan diambil '001'
// setelah substring bilangan diambil lantas dicasting menjadi integer
$noUrut = (int) substr($kodeKandidat, 3, 3);
 
// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
$noUrut++;
 
// membentuk kode anggota baru
// perintah sprintf("%03s", $noUrut); digunakan untuk memformat string sebanyak 3 karakter
// misal sprintf("%03s", 12); maka akan dihasilkan '012'
// atau misal sprintf("%03s", 1); maka akan dihasilkan string '001'
$char = "K";
$kodeKandidat = $char . sprintf("%03s", $noUrut);
//echo $kodeKandidat;

if ($tinggal == "") 
{
	$tinggal = $domisili;# code...
}
 
// menginput data ke database
mysqli_query($koneksi,"insert into kandidat values('$kodeKandidat','$nama_kandidat','$domisili','$tinggal', '$jenis_kelamin', '$absensi', '$kedisiplinan', '$usia', '$kerapian')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>