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

        <font size="4"><a class="tombol" href="datapasien.php">Lihat Semua Data</a></font>  


        <form action="proses_datapasien.php" method="post">
        </br>
        	<div class="form-group"> <!-- Thn partus -->
        		<label for="nama_ibu" class="control-label">Nama Ibu</label>
        		<input type="text" class="form-control" name="nama_ibu" placeholder="Masukkan Nama Lengkap">
        	</div>

        	<div class="form-group"> <!-- JK -->
        		<label for="umur_ibu" class="control-label">Umur (th)</label>
        		<input type="text" class="form-control" name="umur_ibu" placeholder="Umur">
        	</div>

        	<div class="form-group"> <!-- BBL -->
        		<label for="agama_ibu" class="control-label">Agama</label>
        		<input type="text" class="form-control" name="agama_ibu" placeholder="Agama">
        	</div>

        	<div class="form-group"> <!-- Penolong -->
        		<label for="pendidikan_ibu" class="control-label">Pendidikan</label>
        		<input type="text" class="form-control" name="pendidikan_ibu" placeholder="Pendidikan terakhir">
        	</div>

        	<div class="form-group"> <!-- JP -->
        		<label for="pekerjaan_ibu" class="control-label">Pekerjaan</label>
        		<input type="text" class="form-control" name="pekerjaan_ibu" placeholder="Pekerjaan">
        	</div>

          <div class="form-group"> <!-- UK -->
        		<label for="alamat_ibu" class="control-label">Alamat</label>
        		<input type="text" class="form-control" name="alamat_ibu" placeholder="Alamat Lengkap">
        	</div>

          <div class="form-group"> <!-- keadaan saat Persalinan -->
        		<label for="no_telp_ibu" class="control-label">No. Telp/Hp</label>
        		<input type="text" class="form-control" name="no_telp_ibu" placeholder="No Telepon/Handphone">
        	</div>

          <div class="form-group"> <!-- Laktasi -->
        		<label for="haid_terakhir" class="control-label">Hari Pertama Haid Terakhir</label>
        		<input type="text" class="form-control" name="haid_terakhir" placeholder="Hari Pertama Haid Terakhir">
        	</div>

          <div class="form-group"> <!-- Laktasi -->
        		<label for="tafsiran_persalinan" class="control-label">Hari Tafsiran Persalinan</label>
        		<input type="text" class="form-control" name="tafsiran_persalinan" placeholder="Hari Tafsiran Persalinan">
        	</div>

          <div class="form-group"> <!-- Laktasi -->
        		<label for="kehamilan_direncanakan" class="control-label">Kehamilan Direncanakan</label>
        		<input type="text" class="form-control" name="kehamilan_direncanakan" placeholder="Kehamilan Direncanakan">
        	</div>

          <div class="form-group"> <!-- Laktasi -->
        		<label for="kontrol_sebelumnya" class="control-label">Kontrol Sebelumnya</label>
        		<input type="text" class="form-control" name="kontrol_sebelumnya" placeholder="Kontrol Sebelumnya">
        	</div>

          <div class="form-group"> <!-- Laktasi -->
        		<label for="transportasi" class="control-label">Transportasi</label>
        		<input type="text" class="form-control" name="transportasi" placeholder="Transportasi">
        	</div>

          <div class="form-group"> <!-- Laktasi -->
        		<label for="golongan_darah" class="control-label">Golongan Darah</label>
        		<input type="text" class="form-control" name="golongan_darah" placeholder="Golongan Darah">
        	</div>

          <div class="form-group"> <!-- Laktasi -->
        		<label for="lila" class="control-label">Lila(cm)</label>
        		<input type="text" class="form-control" name="lila" placeholder="Lila">
        	</div>

          <div class="form-group"> <!-- Laktasi -->
        		<label for="tb" class="control-label">Tinggi Badan(cm)</label>
        		<input type="text" class="form-control" name="tb" placeholder="Tinggi Badan">
        	</div>

          <div class="form-group"> <!-- Laktasi -->
        		<label for="berat_badan" class="control-label">Berat Badan Sebelum Hamil(kg)</label>
        		<input type="text" class="form-control" name="berat_badan" placeholder="Berat Badan Sebelum Hamil">
        	</div>

          <div class="form-group">
            <label>Riwayat Penyakit yang diderita Ibu</label>
            <select class="form-control" name='riwayat_penyakit' type='text'>
              <option value='Kardiovaskuler'>Kardiovaskuler</option>
              <option value='hipertensi'>Hipertensi</option>
              <option value='Asma'>Asma</option>
              <option value='dm'>DM</option>
              <option value='tbc'>TBC</option>
              <option value='hepatitis'>Hepatitis</option>
              <option value='pms'>PMS</option>
              <option value='epilepsy'>Epilepsy</option>
              <option value='kembar'>Kembar</option>
              <option value='myoma'>Myoma</option>
              <option value='kista'>Kista</option>
              <option value='penyakit_jiwa'>Penyakit Jiwa</option>
              <option value="tidak_ada">Tidak Ada</option>
            </select>
          </div>

          <div class="form-group"> <!-- Laktasi -->
            <label for="riwayat_alergi" class="control-label">Riwayat Alergi</label>
            <input type="text" class="form-control" name="riwayat_alergi" placeholder="Riwayat Alergi">
          </div>

          <div class="form-group"> <!-- Laktasi -->
            <label for="riwayat_kontrasepsi" class="control-label">Riwayat Kontrasepsi</label>
            <input type="text" class="form-control" name="riwayat_kontrasepsi" placeholder="Riwayat Kontrasepsi">
          </div>

          <div class="form-group"> <!-- Laktasi -->
            <label for="nama_bapak" class="control-label">Nama Bapak</label>
            <input type="text" class="form-control" name="nama_bapak" placeholder="Nama Bapak">
          </div>

          <div class="form-group"> <!-- Laktasi -->
            <label for="umur_bapak" class="control-label">Umur(th)</label>
            <input type="text" class="form-control" name="umur_bapak" placeholder="Umur Bapak">
          </div>

          <div class="form-group"> <!-- Laktasi -->
            <label for="agama_bapak" class="control-label">Agama</label>
            <input type="text" class="form-control" name="agama_bapak" placeholder="Agama">
          </div>

          <div class="form-group"> <!-- Laktasi -->
            <label for="pendidikan_bapak" class="control-label">Pendidikan</label>
            <input type="text" class="form-control" name="pendidikan_bapak" placeholder="Pendidikan">
          </div>

          <div class="form-group"> <!-- Laktasi -->
            <label for="pekerjaan_bapak" class="control-label">Pekerjaan</label>
            <input type="text" class="form-control" name="pekerjaan_bapak" placeholder="Pekerjaan">
          </div>

          <div class="form-group"> <!-- Laktasi -->
            <label for="alamat_bapak" class="control-label">ALamat</label>
            <input type="text" class="form-control" name="alamat_bapak" placeholder="Alamat Bapak">
          </div>

          <div class="form-group"> <!-- Laktasi -->
            <label for="no_telp_bapak" class="control-label">No. Telp/Hp</label>
            <input type="text" class="form-control" name="no_telp_bapak" placeholder="No Telepon/Handphone">
          </div>

          <div class="form-group"> <!-- Laktasi -->
            <label for="riwayat_perkawinan" class="control-label">Riwayat Perkawinan</label>
            <input type="text" class="form-control" name="riwayat_perkawinan" placeholder="Riwayat Perkawinan">
          </div>

          <div class="form-group"> <!-- Laktasi -->
            <label for="lama_perkawinan" class="control-label">lama Perkawinan</label>
            <input type="text" class="form-control" name="lama_perkawinan" placeholder="Lama Perkawinan">
          </div>

        	<div class="form-group"> <!-- Submit Button -->
        		<input type="submit" class="btn btn-primary" name="data_pasien"></input>
        	</div>

        </form>

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
