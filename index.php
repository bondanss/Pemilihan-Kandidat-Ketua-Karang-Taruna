<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Program Penentuan Kandidat Karang Taruna</title>
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
                        <a class="active-menu"  href="index.php"><i class="fa fa-dashboard fa-3x"></i> Data Calon Kandidat</a>
                    </li>
                     <li>
                        <a  href="ui.php"><i class="fa fa-desktop fa-3x"></i> Data Kriteria</a>
                    </li>
                    <li  >
                        <a  href="form.php"><i class="fa fa-edit fa-3x"></i> Form Kandidat </a>

                    </li>	
	
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Data Calon Kandidat</h2>   
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
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                           
                                            <th>ID Kandidat</th>
                                            <th>Nama</th>
                                            <th>Domisili</th>
                                            <th>Tinggal</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Absensi</th>
                                            <th>Kedisiplinan</th>
                                            <th>Usia</th>
                                            <th>Kerapian</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    include 'koneksi.php';
                                    //$no = 1;
                                    $data = mysqli_query($koneksi,"select * from kandidat");
                                    while($d = mysqli_fetch_array($data)){
                                        ?>
                                        <tr>
                                            
                                            <td><?php echo $d['id_kandidat']; ?></td>
                                            <td><?php echo $d['nama_kandidat']; ?></td>
                                            <td><?php echo $d['domisili']; ?></td>
                                            <td><?php echo $d['tinggal']; ?></td>
                                            <td><?php echo $d['jenis_kelamin']; ?></td>
                                            <td><?php echo $d['absensi']; ?></td>
                                            <td><?php echo $d['kedisiplinan']; ?></td>
                                            <td><?php echo $d['usia']; ?></td>
                                            <td><?php echo $d['kerapian']; ?></td>
                                            <td><center>
                                                <a href="edit_form.php?id_kandidat=<?php echo $d['id_kandidat']; ?>" class="btn btn-primary btn-xs">EDIT</a>
                                                <a href="hapus_kandidat.php?id_kandidat=<?php echo $d['id_kandidat']; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Anda yakin ingin menghapus?');">HAPUS</a>
                                              
                                            </center>
                                            </td>
                                        </tr>

            <?php 
            }
        ?>
                                                

                                    </tbody>
                                    
                                </table>
                            </div>
                            <a href="konversi.php" class="btn btn-info btn-lg">Konversi</a>


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

