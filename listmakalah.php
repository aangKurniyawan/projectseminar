<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Seminar Nasional</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            <a class="navbar-brand topnav" href="index.html">
              <img src="img/logo.jpg" width="80px" height="30px" ></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="papers.html">Call For Pappers</a>
                    </li>
                    <li>
                        <a href="biaya.html">Info Biaya</a>
                    </li>
                    <li>
                        <a href="pembicara.html">Pembicara</a>
                    </li>
                    <li>
                        <a href="jadwal.html">Jadwal</a>
                    </li>
                    <li>
                        <a href="tanggalpenting.html">Tanggal Penting</a>
                    </li>
                    <li>
                        <a href="registrasi.html">Registrasi</a>
                    </li>
                    <li>
                        <a href="login.html">Login</a>
                    </li>
                    <li>
                        <a href="listmakalah.php">List Makalah(Old)</a>
                    </li>
                    <li>
                        <a href="bantuan.html">Bantuan</a>
                    </li>
                    <li>
                        <a href="kontak.html">Kontak</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav><br><br><br><br><br>
    <a  name="services"></a>
    <div class="content-section-a">

        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-6">
                    <h4>Info Biaya</h4>
                    <hr>
                    <h2><p align="left">Daftar Kegiatan</p></h2>
                    <hr>
                    <div class="clearfix"></div>

                    <form id="form3" method="POSt" action="" >
                    <select name="tahun">
                      <?php
                    echo "<option>------</option>";
                    for($thn=2015;$thn<=2017;$thn++){
                    echo "<option value=".$thn.">".$thn."</option>";
                    }?>
                  </select>
                  <input type="submit" value="submit" name="submit"></form>
                    <?php
                    if(isset($_POST['submit']))
                    {
                      $tahun=$_POST['tahun'];
                      echo $tahun;
                      if($tahun == 2015){
                        ?>
                    <br> <br> <table class="table table-bordered table-responsive">
                          <tr>
                            <th>Makalah</th>
                            <th>Penulis</th>
                          </tr>
                          <tr>
                            <td>
                              Perancangan Sistem Inventaris Tanah Berbasis Webgis untuk Pemerintah
<br><br>
Abstraksi :
Inventarisasi tanah menjadi penting bagi pemerintah daerah, dimana saat ini pemerintah daerah masih menginventarisir dengan proses manual. Tata kelola seperti itu bisa menimbulkan permasalahan, konflik kepemilikan dan saling klaim antara masyarakat dengan pemerintah. Dengan membangun sisten inventaris tanah
                            </td>
                            <td width="20%">Taufan Harry Prasetyo</td>
                          </tr>
                          <tr>
                            <td>ANALISIS FAKTOR-FAKTOR YANG MEMPENGARUHI PENGGUNAAN SISTEM INFORMASI PADA TIGA UKM INDUSTRI KAIN TENUN SONGKET KOTA PALEMBANG
<br><br>
Abstraksi :
Pemanfaatan dan penggunaan Sistem Informasi (SI)pada usaha kecil menengah (UKM) merupakan hal yangmenarik untuk diketahui. Sistem informasi tersebutdisebutkan sebagai penggerak pembangunan yangmemegang peranan penting untuk pertumbuhan dankelanjutan pada suatu organisasi bisnis</td>
                            <td>Harry Sapoetra</td>
                          </tr>
                        </table>
                        <?php
                      }else if($tahun == 2016){?>
                        <br><br> <table class="table table-bordered table-responsive">
                          <tr>
                            <th>Makalah</th>
                            <th>Penulis</th>
                          </tr>
                          <tr>
                            <td>
PERANCANGAN SISTEM GEOGRAFI INDORMASI SISTEM<br><br>
Abstraksi :
Inventarisasi tanah menjadi penting bagi pemerintah daerah, dimana saat ini pemerintah daerah masih menginventarisir dengan proses manual. Tata kelola seperti itu bisa menimbulkan permasalahan, konflik kepemilikan dan saling klaim antara masyarakat dengan pemerintah. Dengan membangun sisten inventaris tanah
                            </td>
                            <td width="20%">Chandra Hermawan</td>
                          </tr>
                          <tr>
                            <td>
                              SISTEM INFORMASI NAVIGASI PARIWISATA BERBASIS WEB DAN ANDROID PADA DINAS KEBUDAYAAN PARIWISATA KOTA PALOPO
<br><br>
                              Abstraksi :
                              Kota Palopo merupakan salah satu daerah tujuan wisata yang mempunyai berbagai macam wisata yang menarik di Pulau Sulawesi khususnya di Sulawesi Selatan. Kebanyakan wisatawan berkunjung ke Kota Palopo untuk melihat kebudayaan dan tempat wisata yang alami dan terjaga keasriannya. Hal tersebut terus
                              <td>Ahamd Marzuki</td>
                          </tr>
                          <tr>
                            <td>
                              RANCANG BANGUN ALAT PENGHISAP DEBU YANG DIKENDALIKAN MELALUI TEKNOLOGI WIRELESS CONTROLLER

                            Abstraksi :
                            Debu adalah suatu molekul yang berasal dari kotoran yang berterbangan berbentuk sangat kecil. Debu dapat menggangu pernapasan dan dapat membuat barang-barang menjadi kotor. Untuk membersihkan debu tersebut sering dilakukan dengan cara konvensional seperti disapu atau dilap oleh manusia. Apabila hal tersebut
                              <td>Robby</td>
                          </tr>
                          <tr>
                            <td>
                              SISTEM INFORMASI NAVIGASI PARIWISATA BERBASIS WEB DAN ANDROID PADA DINAS KEBUDAYAAN PARIWISATA KOTA PALOPO
<br><br>
                              Abstraksi :
                              Kota Palopo merupakan salah satu daerah tujuan wisata yang mempunyai berbagai macam wisata yang menarik di Pulau Sulawesi khususnya di Sulawesi Selatan. Kebanyakan wisatawan berkunjung ke Kota Palopo untuk melihat kebudayaan dan tempat wisata yang alami dan terjaga keasriannya. Hal tersebut terus
                              <td>Ahamd Marzuki</td>
                          </tr>
                        </table>


  <?php                    }
                  }?>

            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

    <!-- /.content-section-a -->

    <footer class="site-footer">
        <div class="container">
            <div class="row">
                    <section class="site-footer">
                        <div class="container">
                            <div class="row"><center>
                                <div class="col-sm-4">
                                    <span class="glyphicon glyphicon-map-marker" style="font-size:40px;color:red;"><h4 class="site-footer" >Universitas Pamulang</h4></span>
                                </div>
                                <div class="col-sm-4">
                                    <span class="glyphicon glyphicon-envelope" style="font-size:40px;color:green;"><h4  class="site-footer">panitiasemnas@gmail.com</h4></span>
                                </div>
                                <div class="col-sm-4">
                                    <span class="glyphicon glyphicon-earphone" style="font-size:40px;color:blue;"><h4  class="site-footer">0821 - 12345678</h4></span>
                                </div>
                            </div>
                        </center><!-- row -->
                        </div><!-- container -->
                    </section>
            </div>

        </div>

    </footer>
    <div class="footer" style="background:black;">
                    <p align=center style="color:grey;">Designed and Developed by <b>Developer Kampus</b></p>
    </div>

    </div>
    <!-- /.banner -->

    <!-- Footer -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
