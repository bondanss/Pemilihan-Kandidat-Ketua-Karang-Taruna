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
                        <a  href="index.php"><i class="fa fa-dashboard fa-3x"></i> Data Calon Kandidat</a>
                    </li>
                      <li>
                        <a  href="ui.php"><i class="fa fa-desktop fa-3x"></i> Data Kriteria</a>
                    </li>
                    <li  >
                        <a href="form.php"><i class="fa fa-edit fa-3x"></i> Form Kandidat </a>
                    </li>				
					
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Ubah Data Calon Kandidat</h2>   
                        <h5>Selamat Datang!</h5> 
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Ubah Data Calon Kandidat
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>Ubah Data Calon Kandidat</h3>
                                    <?php
                                        include 'koneksi.php';
                                        $id_kandidat = @$_GET['id_kandidat'];
                                        $data = mysqli_query($koneksi,"select * from kandidat where id_kandidat='$id_kandidat'");
                                        while($d = mysqli_fetch_array($data)){
                                        ?>
                                    <form action="update.php" method="POST" role="form">

                                        <input type="hidden" name="id_kandidat" value="<?php echo $d['id_kandidat']; ?>">
                                        <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <input name="nama_kandidat" class="form-control" value="<?php echo $d['nama_kandidat']; ?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>Alamat Domisili</label>
                                            <textarea name="domisili" class="form-control" rows="3"><?php echo $d['domisili']; ?></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label>Alamat Tinggal</label>
                                            <textarea name="tinggal" class="form-control" rows="3"><?php echo $d['tinggal']; ?></textarea>
                                            
                                        </div>
                                         <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <select name="jenis_kelamin" class="form-control" value="<?php echo $d['jenis_kelamin']; ?>">
                                                <option>Laki - laki</option>
                                                <option>Perempuan</option>
                                               
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Absensi</label>
                                            <input name="absensi" class="form-control" value="<?php echo $d['absensi']; ?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>Kedisiplinan</label>
                                            <select name="kedisiplinan" class="form-control" value="<?php echo $d['kedisiplinan']; ?>">
                                                <option>Sangat Disiplin</option>
                                                <option>Cukup Disiplin</option>
                                                <option>Kurang Disiplin</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Usia</label>
                                            <input name="usia" class="form-control" value="<?php echo $d['usia']; ?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>Kerapian</label>
                                            <select name="kerapian" class="form-control" value="<?php echo $d['kerapian']; ?>">
                                                <option>Sangat Rapi</option>
                                                <option>Cukup Rapi</option>
                                                <option>Kurang Rapi</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-default">Submit </button>
                                        <a href="index.php" class="btn btn-primary">Batal</a>
                                            </form>
                                        </div>
<?php
}
?>
                                      

                                        
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
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
