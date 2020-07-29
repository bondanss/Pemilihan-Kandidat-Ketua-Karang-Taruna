<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hasil Konversi</title>
    <link rel="shortcut icon" href="img/kt-icon.png">
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SPK Karang Taruna</a> 
            </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                <li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
                    </li>
                
                    
                    <li>
                        <a  href="index.php"><i class="fa fa-dashboard fa-3x"></i> Data Calon Kandidat</a>
                    </li>
                     <li>
                        <a  href="ui.php"><i class="fa fa-desktop fa-3x"></i> Data Kriteria</a>
                    </li>
                    <li  >
                        <a  href="form.php"><i class="fa fa-edit fa-3x"></i> Form Kandidat </a>
                    </li>
                           <li  >
                        <a class="active-menu"  href="konversi.php"><i class="fa fa-bar-chart-o fa-3x"></i> Konversi</a>
                    </li>
                                   
                 
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Proses Konversi</h2>   
                        <h5>Selamat Datang!</h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                <div class="col-md-12">
                    <div class="jumbotron">
                        <h1>Selamat Datang</h1>
                        <p>di Halaman SPK Penentuan Kandidat Karang Taruna Kelurahan Kramatjati</p>
                        
                    </div>
                </div>
            </div>
                 <!-- /. ROW  -->
                <hr />                
                 <!-- /. ROW  -->
                <div class="row"> 
                    
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
               
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Tabel Data Calon Kandidat Karang Taruna Kelurahan Kramatjati
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">

                                        <h3> Hasil Konversi </h3>
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Alternatif</th>
                                            <th>Usia</th>
                                            <th>Domisili</th>
                                            <th>Absensi</th>
                                            <th>Kedisiplinan</th>
                                            <th>Kerapian</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    include 'koneksi.php';
                                    $no = 1;
                                    $data = mysqli_query($koneksi,"SELECT * FROM kandidat "); //mengambil data kandidat
                                    while($d = mysqli_fetch_array($data)){

                                    //menkonversi nilai yang diambil dari database
                                    
                                    $id_kandidat = $d['id_kandidat'];
                                    //convert domisili
                                    if ($d['domisili'] != $d['tinggal']) 
                                    {
                                        $domisiliKonversi = 0;
                                    } 
                                    elseif($d['domisili'] == $d['tinggal'])
                                    {
                                        $domisiliKonversi = 1;
                                    }

                                    //convert absensi
                                    if ($d['absensi'] <= 5) 
                                    {
                                        $absensiKonversi = 1;
                                    } 
                                    elseif($d['absensi'] > 5 && $d['absensi'] <= 15)
                                    {
                                        $absensiKonversi = 3;
                                    }
                                    elseif($d['absensi'] > 15)
                                    {
                                        $absensiKonversi = 5;
                                    }

                                    //convert kedisiplinan
                                    if ($d['kedisiplinan'] == "Sangat Disiplin") 
                                    {
                                        $kedisiplinanKonversi = 5;
                                    } 
                                    elseif($d['kedisiplinan'] == "Cukup Disiplin")
                                    {
                                        $kedisiplinanKonversi = 3;
                                    }
                                    elseif($d['kedisiplinan'] == "Kurang Disiplin")
                                    {
                                        $kedisiplinanKonversi = 1;
                                    }

                                    //convert usia
                                    if ($d['usia'] <= 20) 
                                    {
                                        $usiaKonversi = 3;
                                    } 
                                    elseif($d['usia'] > 20 && $d['usia'] <= 30)
                                    {
                                        $usiaKonversi = 5;
                                    }
                                    elseif($d['usia'] > 30)
                                    {
                                        $usiaKonversi = 1;
                                    }

                                    //convert kerapian
                                    if ($d['kerapian'] == "Sangat Rapi") 
                                    {
                                        $kerapianKonversi = 5;
                                    } 
                                    elseif($d['kerapian'] == "Cukup Rapi")
                                    {
                                        $kerapianKonversi = 3;
                                    }
                                    elseif($d['kerapian'] == "Kurang Rapi")
                                    {
                                        $kerapianKonversi = 1;
                                    }
                                    


                                        ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $d['nama_kandidat']; ?></td>
                                            <td><?php echo $usiaKonversi; ?></td>
                                            <td><?php echo $domisiliKonversi; ?></td>
                                            <td><?php echo $absensiKonversi; ?></td>
                                            <td><?php echo $kedisiplinanKonversi; ?></td>
                                            <td><?php echo $kerapianKonversi; ?></td>
                                        </tr>
            <?php 
            mysqli_query($koneksi, "INSERT INTO konversi VALUES ('$id_kandidat', '$usiaKonversi', '$domisiliKonversi', '$absensiKonversi', '$kedisiplinanKonversi', '$kerapianKonversi')");
            }
        ?>

                                    </tbody> 
                                </table>
                            </div>
                             <h3> Menentukan MAX dan MIN </h3>
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Usia</th>
                                            <th>Domisili</th>
                                            <th>Absensi</th>
                                            <th>Kedisiplinan</th>
                                            <th>Kerapian</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    include 'koneksi.php';
                                    $no = 1;
                                    $data = mysqli_query($koneksi,"SELECT MAX(con_usia) as Usia, MAX(con_wilayah) as Wilayah, MIN(con_absensi) as Absensi, MAX(con_kedisiplinan) as Kedisiplinan, MAX(con_kerapian) as Kerapian FROM konversi");
                                    while($d = mysqli_fetch_array($data)){
                                       ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $d['Usia']; ?></td>
                                            <td><?php echo $d['Wilayah']; ?></td>
                                            <td><?php echo $d['Absensi']; ?></td>
                                            <td><?php echo $d['Kedisiplinan']; ?></td>
                                            <td><?php echo $d['Kerapian']; ?></td>
                                        </tr>
            <?php 
            }
        ?>  
                        </tbody> 
                        </table>
                        <h3> Normalisasi </h3>
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Alternatif</th>
                                            <th>Usia</th>
                                            <th>Domisili</th>
                                            <th>Absensi</th>
                                            <th>Kedisiplinan</th>
                                            <th>Kerapian</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    include 'koneksi.php';
                                    $no = 1;
                                    $conMax = mysqli_query($koneksi,"SELECT 
                                        MAX(konversi.con_usia) as Usia, 
                                        MAX(konversi.con_wilayah) as Wilayah, 
                                        MIN(konversi.con_absensi) as Absensi, 
                                        MAX(konversi.con_kedisiplinan) as Kedisiplinan, 
                                        MAX(konversi.con_kerapian) as Kerapian
                                        FROM konversi INNER JOIN kandidat
                                        ON konversi.id_kandidat = kandidat.id_kandidat");
                                    $max = mysqli_fetch_array($conMax);

                                    $data = mysqli_query($koneksi, "SELECT konversi.*, kandidat.nama_kandidat FROM konversi INNER JOIN kandidat ON konversi.id_kandidat = kandidat.id_kandidat");
                                    while($d = mysqli_fetch_array($data)){
                                       ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $d['nama_kandidat']; ?></td>
                                            <td><?php echo $d['con_usia'] / $max['Usia']; ?></td>
                                            <td><?php echo $d['con_wilayah'] / $max['Wilayah'] ;?></td>
                                            <td><?php echo $max['Absensi'] / $d['con_absensi'] ;?></td>
                                            <td><?php echo $d['con_kedisiplinan'] / $max['Kedisiplinan'] ;?></td>
                                            <td><?php echo $d['con_kerapian'] / $max['Kerapian']; ?></td>
                                        </tr>
            <?php 
            }
        ?>  
                                    </tbody>
                                </table>

                                <h3> Ranking </h3>
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Alternatif</th>
                                            <th>Nilai</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    include 'koneksi.php';
                                    $no = 1;
                                    $conMax = mysqli_query($koneksi,"SELECT MAX(con_usia) as Usia, MAX(con_wilayah) as Wilayah, MIN(con_absensi) as Absensi, MAX(con_kedisiplinan) as Kedisiplinan, MAX(con_kerapian) as Kerapian 
                                        FROM konversi
                                        ");
                                    $max = mysqli_fetch_array($conMax);

                                    $bobot = array(0.30, 0.20, 0.20, 0.15, 0.15);

                                    $data = mysqli_query($koneksi, "SELECT konversi.*, kandidat.nama_kandidat 
                                                                    FROM konversi
                                                                    INNER JOIN kandidat
                                                                    ON konversi.id_kandidat=kandidat.id_kandidat");
                                    while($d = mysqli_fetch_array($data))
                                    {                              

                                            $tanggal = date("Y/m/d");           
                                            $id_kandidat = $d['id_kandidat'];
                                            $ranking = round(
                                                                (($d['con_usia']/$max['Usia'])*$bobot[0]) + 
                                                                (($d['con_wilayah']/$max['Wilayah'])* $bobot[1]) + 
                                                                (($max['Absensi'] / $d['con_absensi'])* $bobot[2]) + 
                                                                (($d['con_kedisiplinan']/$max['Kedisiplinan'])* $bobot[3]) + 
                                                                (($d['con_kerapian']/$max['Kerapian'])* $bobot[4]),3);

                                    mysqli_query($koneksi, "INSERT INTO hasil VALUES ('$tanggal', '$ranking', '$id_kandidat')");
                                    } 
                                ?>

                                <?php

                                    $data2 = mysqli_query($koneksi, "SELECT hasil.*, kandidat.nama_kandidat FROM hasil INNER JOIN kandidat ON hasil.id_kandidat=kandidat.id_kandidat ORDER BY ranking desc");
                                    while($d2 = mysqli_fetch_array($data2)){
                                       ?>
                                     <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $d2['nama_kandidat']; ?></td>
                                            <td><?php echo $d2['ranking'] ;?></td>
                                        </tr>
            <?php 
        }
        ?>  
                                    </tbody>
                                </table>
                                <a href="reset.php" class="btn btn-danger btn-lg">Selesai</a>

                        </div>
                    </div>
                    
                    </div>
                </div>
                 <!-- /. ROW  -->
                      
                    
                    </div>
                </div>     
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>

