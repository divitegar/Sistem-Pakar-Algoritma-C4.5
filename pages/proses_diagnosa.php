<?php
include 'koneksi.php';


// menangkap data yang di kirim dari form
$nama=$_POST['nama'];
  $nohp=$_POST['nohp'];
    $tekanan_darah_sistolik=$_POST['tekanan_darah_sistolik'];
      $tekanan_darah_diastolik=$_POST['tekanan_darah_diastolik'];
        $kenaikan_berat_badan=$_POST['kenaikan_berat_badan'];
          $usia_kehamilan=$_POST['usia_kehamilan'];
            $usia_ibu=$_POST['usia_ibu'];
              $edema=$_POST['edema'];
                $proteinuria=$_POST['proteinuria'];


//proses mining
if($proteinuria=="positif"){
  $hasildiagnosa="preeklampsia";
}elseif ($proteinuria=="negatif") {
  if ($tekanan_darah_diastolik=="normal") {
    $hasildiagnosa="hamil normal";
  }elseif ($tekanan_darah_diastolik=="tinggi") {
    if ($usia_ibu=="muda") {
      $hasildiagnosa="hamil normal";
    }elseif ($usia_ibu=="tua") {
      $hasildiagnosa="preeklampsia";
    }elseif ($usia_ibu=="ideal") {
      if ($usia_kehamilan=="trimester1") {
        $hasildiagnosa="hamil normal";
      }elseif ($usia_kehamilan=="trimester2") {
        $hasildiagnosa="hamil normal";
      }elseif ($usia_kehamilan=="trimester3") {
        if ($tekanan_darah_sistolik=="normal") {
          $hasildiagnosa="hamil normal";
        }elseif ($tekanan_darah_sistolik=="tinggi") {
          if ($edema=="iya") {
            $hasildiagnosa="preeklampsia";
          }elseif ($edema=="tidak") {
            if ($kenaikan_berat_badan=="normal") {
              $hasildiagnosa="hamil normal";
            }elseif ($kenaikan_berat_badan=="tinggi") {
              $hasildiagnosa="preeklampsia";
            }
          }
        }
      }
    }
  }
}

if (!empty($nama && $nohp))
{
  echo "" ;
}
else{

  die("Maaf, anda harus mengisi nama dan No.HP");

}


                // echo $nama;
                // echo $nohp;
                // echo $tekanan_darah_sistolik;

// menginput data ke database
//mysqli_query($koneksi,"insert into hasildiagnosa values('','$nama','$nohp','$tekanan_darah_sistolik','$tekanan_darah_diastolik','$usia_kehamilan','$usia_ibu','$edema','$proteinuria','$hasildiagnosa ')");
// Insert user data into table
        $result = mysqli_query($koneksi, "INSERT INTO hasildiagnosa VALUES('','$nama','$nohp','$tekanan_darah_sistolik','$tekanan_darah_diastolik','$kenaikan_berat_badan','$usia_kehamilan','$usia_ibu','$edema','$proteinuria','$hasildiagnosa')");

        // Show message when user added
        //echo "User added successfully. <a href='index.php'>View Users</a>";
        // mengalihkan halaman kembali ke index.php


header("location:hasiltree.php");
?>
