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

    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

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
<?php
include_once "koneksi.php";
?>

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
            <!-- /.navbar-top-links -->

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
                                    <h1 class="page-header"></h1>
                                </div>
                                <!-- /.col-lg-12 -->
                            </div>

                        <div class="panel panel-default">
                                <div class="panel-heading">
                                   <p align='left'><font size="5">pilihlah gejala sesuai kondisi saat ini : </Font> </p>
                                </div>
                       </div>
                       <?php
//              if (isset($_POST['submit'])) {
                //object database class
                //$db_object = new database();

                // koneksi database
// include 'koneksi.php';
//
// // menangkap data yang di kirim dari form
// $nama=$_POST['nama'];
//   $nohp=$_POST['nohp'];
//     $tekanan_darah_sistolik=$_POST['tekanan_darah_sistolik'];
//       $tekanan_darah_diastolik=$_POST['tekanan_darah_diastolik'];
//         $kenaikan_berat_badan=$_POST['kenaikan_berat_badan'];
//           $usia_kehamilan=$_POST['usia_kehamilan'];
//             $usia_ibu=$_POST['usia_ibu'];
//               $edema=$_POST['edema'];
//                 $proteinuria=$_POST['proteinuria'];
//
// // menginput data ke database
// mysqli_query($koneksi,"insert into hasildiagnosa values('','$nama','$nohp','$tekanan_darah_sistolik','$tekanan_darah_diastolik','$usia_kehamilan','$usia_ibu','$edema','$proteinuria')");

// mengalihkan halaman kembali ke index.php
// header("location:hasiltree.php");



                                // $sql_in_jawaban = "INSERT INTO jawaban_kuisioner
                                //                     (id_user, id_siswa, id_soal, jawaban)
                                //                     VALUES " . $value_sql_to_in;
                                // $db_object->db_query($sql_in_jawaban);
                                //
                                // //simpan ke data uji
                                // $sql_data_uji = "INSERT INTO hasildiagnosa "
                                //         . "(nama, no_hp, tds, tdd, kbb, uk, ui, edema, proteinuria) "
                                //         . " VALUES "
                                //         . "('".$nama."', '".$nohp."', '".$tekanan_darah_sistolik."'"
                                //         . ", '".$tekanan_darah_diastolik."', '".$kenaikan_berat_badan."', '".$usia_kehamilan."'"
                                //         . ", '".$usia_ibu."', '".$edema."', '".$proteinuria."')";
                                // $db_object->db_query($sql_data_uji);


              // }
              //   ?>
              <form method=POST action='proses_diagnosa.php'>
	             <table>

              <div class="panel-body">
                <div class="row">
                  <div class="col-lg-5">
                    <form role="form">

                      <div class="form-group">
                    		<label for="nama" class="control-label">Nama</label>
                    		<input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Anda">
                      </div>

                      <div class="form-group">
                        <label for="nohp" class="control-label">No. Handphone</label>
                        <input type="text" class="form-control" name="nohp" placeholder="Masukkan No.Handphone">
                      </div>

                      <div class="form-group">
                        <label>Tekanan Darah Sistolik</label>
                        <select class="form-control" name='tekanan_darah_sistolik' type='text'>
                          <option value='normal'>Normal (110 mmHg - 139 mmHg)</option>
                          <option value='tinggi'>Tinggi (>=140 mmHg)</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label>Tekanan Darah Diastolik</label>
                        <select class="form-control" name='tekanan_darah_diastolik' type='text'>
                          <option value='normal'>Normal (60 mmHg - 89 mmHg)</option>
                          <option value='tinggi'>Tinggi (>= 90 mmHg)</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label>Kenaikan Berat Badan</label>
                        <select class="form-control" name='kenaikan_berat_badan' type='text'>
                          <option value='normal'>Normal (<=2kg/Bln)</option>
                          <option value='tinggi'>Tinggi (>2kg/Bln)</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-lg-5">
                      <div class="form-group">
                        <label>Usia Kehamilan</label>
                        <select class="form-control" name='usia_kehamilan' type='text'>
                          <option value='trimester1'>Trimester 1 (1-12 minggu)</option>
                          <option value='trimester2'>Trimester 2 (13-28 minggu)</option>
                          <option value='trimester3'>Trimester 3 (29-37 minggu)</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label>Usia Ibu</label>
                        <select class="form-control" name='usia_ibu' type='text'>
                          <option value='muda'> Terlalu Muda ( < 20 tahun) </option>
                          <option value='ideal'> Ideal ( 21-35 tahun) </option>
                          <option value='tua'> Terlalu Tua (> 36 tahun) </option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label>Edema</label>
                        <select class="form-control" name='edema' type='text'>
                          <option value='iya'>bengkak kaki/jari tangan/muka</option>
                          <option value='tidak'>Tidak Ada Edema</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label>Proteinuria</label>
                        <select class="form-control" name='proteinuria' type='text'>
                          <option value='negatif'>negatif(0)</option>
                          <option value='positif'>positif(+1, +2)</option>
                        </select>
                      </div>

                      <div class="form-group"> <!-- Submit Button -->
                        <input name="submit" type="submit" value="Submit" class="btn btn-primary" ></input>
                      </div>

                    </form>
                  </div>
                </div>
              </div>

</html>
