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

        <font size="4"><a class="tombol" href="riwayat.php">Lihat Semua Data</a></font>


        <form action="prosesriwayat.php" method="post">
        </br>
        	<div class="form-group"> <!-- Thn partus -->
        		<label for="partus" class="control-label">Tahun Partus</label>
        		<input type="text" class="form-control" name="partus" placeholder="Tahun Kelahiran Sebelumnya">
        	</div>

        	<div class="form-group"> <!-- JK -->
        		<label for="jk" class="control-label">Jenis Kelamin</label>
        		<input type="text" class="form-control" name="jk" placeholder="Jenis Kelamin kelahiran Sebelumnya">
        	</div>

        	<div class="form-group"> <!-- BBL -->
        		<label for="bbl" class="control-label">Berat Badan Lahir(kg)</label>
        		<input type="text" class="form-control" name="bbl" placeholder="Berat Badan bayi Kelahiran Sebelumnya">
        	</div>

        	<div class="form-group"> <!-- Penolong -->
        		<label for="penolong" class="control-label">Penolong</label>
        		<input type="text" class="form-control" name="penolong" placeholder="Penolong Persalinan">
        	</div>

        	<div class="form-group"> <!-- JP -->
        		<label for="jp" class="control-label">Jenis Persalinan</label>
        		<input type="text" class="form-control" name="jp" placeholder="Normal atau Operasi">
        	</div>

          <div class="form-group"> <!-- UK -->
        		<label for="uk" class="control-label">Usia Kehamilan(minggu)</label>
        		<input type="text" class="form-control" name="uk" placeholder="Usia Kehamilan">
        	</div>

          <div class="form-group"> <!-- keadaan saat Persalinan -->
        		<label for="keadaan_bersalin" class="control-label">Keadaan saat bersalin dan nifas</label>
        		<input type="text" class="form-control" name="keadaan" placeholder="Sehat atau pendarahan atau kejang">
        	</div>

          <div class="form-group"> <!-- Laktasi -->
        		<label for="laktasi" class="control-label">Laktasi</label>
        		<input type="text" class="form-control" name="laktasi" placeholder="Menyusui atau tidak">
        	</div>

        	<div class="form-group"> <!-- Submit Button -->
        		<input type="submit" class="btn btn-primary" name="riwayat"></input>
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
