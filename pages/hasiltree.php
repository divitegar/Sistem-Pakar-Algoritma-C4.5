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
                <a class="navbar-brand" href="index.php">HOME</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">

                        <li class="divider"></li>
                        <li><a href="login.php"><i class="fa fa-sign-out fa-fw"></i> Login</a>
                        </li>

                    </ul>
                    <!-- /.dropdown-Logout -->


            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">


                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>

                        <li>
                            <a href="diagnosa.php"><i class="fa fa-table fa-fw"></i> Penentuan Diagnosa</a>
                        </li>


        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <font size="4"><a class="tombol" href="diagnosa.php">kembali ke halaman awal</a></font>

  <h3>hasil diagnosa</h3>
  <table border="1" class="table">
    <tr>
      <th>No</th>
      <th>nama</th>
      <th>No Telepon</th>
      <th>Tekanan Darah Sistolik</th>
      <th>Tekanan Darah Diastolik</th>
      <th>Kenaikan Berat Badan</th>
      <th>Usia Kehamilan</th>
      <th>Usia Ibu</th>
      <th>Edema</th>
      <th>Proteinuria</th>
      <th>hasil diagnosa</th>
      <th>opsi</th>
    </tr>
    <?php
    include "koneksi.php";
    $query_mysql = mysqli_query($koneksi,"SELECT * FROM hasildiagnosa order by kd_hasil")or die(mysql_error());
    $nomor = 1;
    while($data = mysqli_fetch_array($query_mysql)){
    ?>

    <tr>
      <td><?php echo $nomor++; ?></td>
      <td><?php echo $data['nama']; ?></td>
      <td><?php echo $data['no_hp']; ?></td>
      <td><?php echo $data['tds']; ?></td>
      <td><?php echo $data['tdd']; ?></td>
      <td><?php echo $data['kbb']; ?></td>
      <td><?php echo $data['uk']; ?></td>
      <td><?php echo $data['ui']; ?></td>
      <td><?php echo $data['edema']; ?></td>
      <td><?php echo $data['proteinuria']; ?></td>
      <td><?php echo $data['hasil_diagnosa']; ?></td>

      <td>
        <a class="solusi" href="hasil_solusi.php">Solusi</a>

      </td>
    </tr>
    <?php } ?>
  </table>


                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->

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
