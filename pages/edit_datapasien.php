<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Smartmom</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>


    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="admin.php">HOME</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">

                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>

                    </ul>
                    <!-- /.dropdown-Logout -->


            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="datapasien.php"><i class="fa-table fa-fw"></i> Rekam Data Pasien</a>
                        </li>
                        <li>
                            <a href="riwayat.php"><i class="fa fa-table fa-fw"></i> Riwayat Kehamilan</a>
                        </li>
                        <li>
                            <a href="hasildiagnosa.php"><i class="fa fa-table fa-fw"></i> Hasil diagnosa</a>
                        </li>
                      </ul>

        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Riwayat Kehamilan</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

        <font size="4"><a href="datapasien.php">Lihat Semua Data</a></font>
      </br>
      <h3> Edit Data</h3>

<?php
include 'koneksi.php';
$id         = $_GET['id'];
$datapasien    = mysqli_query($koneksi, "select * from datapasien where kd_datapasien='$id'");
while ($row = mysqli_fetch_array($datapasien)) {
// membuat data jurusan menjadi dinamis dalam bentuk array
?>

        <form action="proses_editdatapasien.php" method="post">

          <div class="form-group"> <!-- Thn partus -->
        		<label for="nama_ibu" class="control-label">Nama Ibu</label>
            <input type="hidden" name="kd_datapasien" value="<?php echo $row['kd_datapasien']; ?>">
        		<input type="text" class="form-control" name="nama_ibu" placeholder="Masukkan Nama Lengkap" value="<?php echo $row['nama_ibu'];?>">
        	</div>

        	<div class="form-group"> <!-- JK -->
        		<label for="umur_ibu" class="control-label">Umur</label>
        		<input type="text" class="form-control" name="umur_ibu" placeholder="Umur" value="<?php echo $row['umur_ibu'];?>">
        	</div>

        	<div class="form-group"> <!-- BBL -->
        		<label for="agama_ibu" class="control-label">Agama</label>
        		<input type="text" class="form-control" name="agama_ibu" placeholder="Agama" value="<?php echo $row['agama_ibu'];?>">
        	</div>

        	<div class="form-group"> <!-- Penolong -->
        		<label for="pendidikan_ibu" class="control-label">Pendidikan</label>
        		<input type="text" class="form-control" name="pendidikan_ibu" placeholder="Pendidikan terakhir" value="<?php echo $row['pendidikan_ibu'];?>">
        	</div>

        	<div class="form-group"> <!-- JP -->
        		<label for="pekerjaan_ibu" class="control-label">Pekerjaan</label>
        		<input type="text" class="form-control" name="pekerjaan_ibu" placeholder="Pekerjaan" value="<?php echo $row['pekerjaan_ibu'];?>">
        	</div>

          <div class="form-group"> <!-- UK -->
        		<label for="alamat_ibu" class="control-label">ALamat</label>
        		<input type="text" class="form-control" name="alamat_ibu" placeholder="Alamat Lengkap" value="<?php echo $row['alamat_ibu'];?>">
        	</div>

          <div class="form-group"> <!-- keadaan saat Persalinan -->
        		<label for="no_telp_ibu" class="control-label">No. Telp/Hp</label>
        		<input type="text" class="form-control" name="no_telp_ibu" placeholder="No Telepon/Handphone" value="<?php echo $row['telepon_ibu'];?>">
        	</div>

          <div class="form-group"> <!-- Laktasi -->
        		<label for="haid_terakhir" class="control-label">Hari Pertama Haid Terakhir</label>
        		<input type="text" class="form-control" name="haid_terakhir" placeholder="Hari Pertama Haid Terakhir" value="<?php echo $row['pertama_haid'];?>">
        	</div>

          <div class="form-group"> <!-- Laktasi -->
        		<label for="tafsiran_persalinan" class="control-label">Hari Tafsiran Persalinan</label>
        		<input type="text" class="form-control" name="tafsiran_persalinan" placeholder="Hari Tafsiran Persalinan" value="<?php echo $row['tafsiran_persalinan'];?>">
        	</div>

          <div class="form-group"> <!-- Laktasi -->
        		<label for="kehamilan_direncanakan" class="control-label">Kehamilan Direncanakan</label>
        		<input type="text" class="form-control" name="kehamilan_direncanakan" placeholder="Kehamilan Direncanakan" value="<?php echo $row['hamil_direncanakan'];?>">
        	</div>

          <div class="form-group"> <!-- Laktasi -->
        		<label for="kontrol_sebelumnya" class="control-label">Kontrol Sebelumnya</label>
        		<input type="text" class="form-control" name="kontrol_sebelumnya" placeholder="Kontrol Sebelumnya" value="<?php echo $row['kontrol'];?>">
        	</div>

          <div class="form-group"> <!-- Laktasi -->
        		<label for="transportasi" class="control-label">Transportasi</label>
        		<input type="text" class="form-control" name="transportasi" placeholder="Transportasi" value="<?php echo $row['transportasi'];?>">
        	</div>

          <div class="form-group"> <!-- Laktasi -->
        		<label for="golongan_darah" class="control-label">Golongan Darah</label>
        		<input type="text" class="form-control" name="golongan_darah" placeholder="Golongan Darah" value="<?php echo $row['gol_darah'];?>">
        	</div>

          <div class="form-group"> <!-- Laktasi -->
        		<label for="lila" class="control-label">Lila</label>
        		<input type="text" class="form-control" name="lila" placeholder="Lila" value="<?php echo $row['lila'];?>">
        	</div>

          <div class="form-group"> <!-- Laktasi -->
        		<label for="tb" class="control-label">Tinggi Badan</label>
        		<input type="text" class="form-control" name="tb" placeholder="Tinggi Badan" value="<?php echo $row['tb'];?>">
        	</div>

          <div class="form-group"> <!-- Laktasi -->
        		<label for="berat_badan" class="control-label">Berat Badan Sebelum Hamil</label>
        		<input type="text" class="form-control" name="berat_badan" placeholder="Berat Badan Sebelum Hamil" value="<?php echo $row['berat_badan'];?>">
        	</div>

          <div class="form-group">
            <label>Riwayat Penyakit yang diderita Ibu</label>
            	<input type="text" class="form-control" name="riwayat_penyakit" placeholder="riwayat penyakit" value="<?php echo $row['riwayat_penyakit'];?>">
          </div>

          <div class="form-group"> <!-- Laktasi -->
            <label for="riwayat_alergi" class="control-label">Riwayat Alergi</label>
            <input type="text" class="form-control" name="riwayat_alergi" placeholder="Riwayat Alergi" value="<?php echo $row['riwayat_alergi'];?>">
          </div>

          <div class="form-group"> <!-- Laktasi -->
            <label for="riwayat_kontrasepsi" class="control-label">Riwayat Kontrasepsi</label>
            <input type="text" class="form-control" name="riwayat_kontrasepsi" placeholder="Riwayat Kontrasepsi" value="<?php echo $row['riwayat_kontrasepsi'];?>">
          </div>

          <div class="form-group"> <!-- Laktasi -->
            <label for="nama_bapak" class="control-label">Nama Bapak</label>
            <input type="text" class="form-control" name="nama_bapak" placeholder="Nama Bapak" value="<?php echo $row['nama_bapak'];?>">
          </div>

          <div class="form-group"> <!-- Laktasi -->
            <label for="umur_bapak" class="control-label">Umur</label>
            <input type="text" class="form-control" name="umur_bapak" placeholder="Umur Bapak" value="<?php echo $row['umur_bapak'];?>">
          </div>

          <div class="form-group"> <!-- Laktasi -->
            <label for="agama_bapak" class="control-label">Agama</label>
            <input type="text" class="form-control" name="agama_bapak" placeholder="Agama" value="<?php echo $row['agama_bapak'];?>">
          </div>

          <div class="form-group"> <!-- Laktasi -->
            <label for="pendidikan_bapak" class="control-label">Pendidikan</label>
            <input type="text" class="form-control" name="pendidikan_bapak" placeholder="Pendidikan" value="<?php echo $row['pendidikan_bapak'];?>">
          </div>

          <div class="form-group"> <!-- Laktasi -->
            <label for="pekerjaan_bapak" class="control-label">Pekerjaan</label>
            <input type="text" class="form-control" name="pekerjaan_bapak" placeholder="Pekerjaan" value="<?php echo $row['pekerjaan_bapak'];?>">
          </div>

          <div class="form-group"> <!-- Laktasi -->
            <label for="alamat_bapak" class="control-label">ALamat</label>
            <input type="text" class="form-control" name="alamat_bapak" placeholder="Alamat Bapak" value="<?php echo $row['alamat_bapak'];?>">
          </div>

          <div class="form-group"> <!-- Laktasi -->
            <label for="no_telp_bapak" class="control-label">No. Telp/Hp</label>
            <input type="text" class="form-control" name="no_telp_bapak" placeholder="No Telepon/Handphone" value="<?php echo $row['telepon_bapak'];?>">
          </div>

          <div class="form-group"> <!-- Laktasi -->
            <label for="riwayat_perkawinan" class="control-label">Riwayat Perkawinan</label>
            <input type="text" class="form-control" name="riwayat_perkawinan" placeholder="Riwayat Perkawinan" value="<?php echo $row['riwayat_perkawinan'];?>">
          </div>

          <div class="form-group"> <!-- Laktasi -->
            <label for="lama_perkawinan" class="control-label">lama Perkawinan</label>
            <input type="text" class="form-control" name="lama_perkawinan" placeholder="Lama Perkawinan" value="<?php echo $row['lama_perkawinan'];?>">
          </div>

        	<div class="form-group"> <!-- Submit Button -->
        		<input type="submit" class="btn btn-primary" name="data_pasien"></input>
        	</div>

        </form>
      <?php } ?>


            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
