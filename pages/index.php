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

                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <p align='center'>DEFINISI PENYAKIT PREEKLAMPSIA DAN VARIABEL GEJALA</p>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <ul class="timeline">
                                <li>
                                    <div class="timeline-badge"><i class="fa fa-check"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Definisi Preeklampsia</h4>
                                            <p><small class="text-muted"><i class="fa fa-clock-o"></i> Sumber( buku Ilmu Kebidanan Yayasan Bina Pustaka Sarwono Prawirohardjo 1999)</small>
                                            </p>
                                        </div>
                                        <div class="timeline-body">
                                            <p align='justify'>Preeklampsia ialah penyakit dengan tanda-tanda hipertensi, edema dan proteinuria yang timbul karena kehamilan. Penyakit ini umumnya tejadi dalam triwulan ke-3 kehamilan, tetapi dapat terjadi sebelumnya</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-badge warning"><i class="fa fa-check"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Tekanan Darah Sistolik</h4>
                                            <p><small class="text-muted"><i class="fa fa-clock-o"></i> Sumber( buku Ilmu Kebidanan Yayasan Bina Pustaka Sarwono Prawirohardjo 1999)</small>
                                        </div>
                                        <div class="timeline-body">
                                            <p align="justify">Tekanan darah sistolik 140mmHg atau lebih dengan interval pemeriksaan 6 jam termasuk dalam preeklampsia ringan sedangkan preeklampsia berat apabila tekanan darah sistolik mencapai 160 mmHg atau lebih.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-badge danger"><i class="fa fa-check"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Tekanan Darah Diastolik</h4>
                                            <p><small class="text-muted"><i class="fa fa-clock-o"></i> Sumber( buku Ilmu Kebidanan Yayasan Bina Pustaka Sarwono Prawirohardjo 1999)</small>
                                        </div>
                                        <div class="timeline-body">
                                            <p align="justify">Tekanan darah diastolik 90mmHg atau lebih dengan interval pemeriksaan 6 jam termasuk dalam golongan preeklampsia ringan sedangkan tekanan darah diastolik 110mmHg atau lebih dapat digolongkan preeklampsia berat.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                  <div class="timeline-badge danger"><i class="fa fa-check"></i>
                                  </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Kenaikan Berat Badan</h4>
                                            <p><small class="text-muted"><i class="fa fa-clock-o"></i> Sumber( buku Ilmu Kebidanan Yayasan Bina Pustaka Sarwono Prawirohardjo 1999)</small>
                                        </div>
                                        <div class="timeline-body">
                                            <p align='justify'>Kenaikan berat badan ½ kg setiap minggu dalam kehamilan masih dapat dianggap normal, tetapi bila kenaikan 1 kg seminggu beberapa kali, hal ini perlu menimbulkan kewaspadaan terhadap timbulnya preeklampsia.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-badge info"><i class="fa fa-check"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Usia Kehamilan</h4>
                                            <p><small class="text-muted"><i class="fa fa-clock-o"></i> Sumber( buku Ilmu Kebidanan Yayasan Bina Pustaka Sarwono Prawirohardjo 1999)</small>
                                        </div>
                                        <div class="timeline-body">
                                            <p align='justify'> Preeklampsia umumnya terjadi pada trimester 3 atau sebelumnya</p>

                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                <div class="timeline-badge info"><i class="fa fa-check"></i>
                                </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Usia Ibu</h4>
                                            <p><small class="text-muted"><i class="fa fa-clock-o"></i> Sumber( buku Ilmu Kebidanan Yayasan Bina Pustaka Sarwono Prawirohardjo 1999)</small>
                                        </div>
                                        <div class="timeline-body">
                                            <p align='justify'>pada usia dibawah 20 tahun bukan  masa yang baik karena organ-organ reporduksi belum sempurna. Sedangkan untuk usia 35 tahun lebih memiliki resiko mengalami komplikasi selama kehamilan juga meningkat. Resiko mengalami tekanan darah tinggi saat kehamilan meningkat 2 kali lipat</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-badge info"><i class="fa fa-check"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Edema</h4>
                                            <p><small class="text-muted"><i class="fa fa-clock-o"></i> Sumber( buku Ilmu Kebidanan Yayasan Bina Pustaka Sarwono Prawirohardjo 1999)</small>
                                        </div>
                                        <div class="timeline-body">
                                            <p align='justify'> Edema ialah penimbunan cairan secara umum dan berlebihan dalam jaringan tubuh, dan biasanya dapat diketahui dari kenaikan berat badan serta pembengkakan kaki, jari tangan dan muka</p>

                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-badge success"><i class="fa fa-check"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">proteinuria</h4>
                                            <p><small class="text-muted"><i class="fa fa-clock-o"></i> Sumber( buku Ilmu Kebidanan Yayasan Bina Pustaka Sarwono Prawirohardjo 1999)</small>
                                        </div>
                                        <div class="timeline-body">
                                            <p align='justify'>Proteinuria berarti konsentrasi protein dalam air kencing yang melebihi 0,3 g/liter dalam air kencing 24 jam atau pemeriksaan kualitatif menunjukkan 1 atau 2+ atau 1g/liter atau lebih dalam air kencing yang dikeluarkan dengan kateter atau proteinuria timbul lebih lambat daripada hipertensi dan kenaika berat badan</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
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
