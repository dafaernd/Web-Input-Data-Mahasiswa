<?php
include "koneksi.php";
// include "form.php";

if (isset($_POST["submit"])) {
    $nama_mhs = $_POST["nama"];
    $prodi_mhs = $_POST["prodi"];
    $nilai1 = $_POST["nilai1"];
    $nilai2 = $_POST["nilai2"];

    $rata_rata = $nilai1 + $nilai2/2;

    if($rata_rata >= 90){
        $nilai_mutu = 'A';
    }else{
        $nilai_mutu = 'B';
    }
   

    $proses = mysqli_query($koneksi, "INSERT INTO data_mhs (nama_mhs, prodi_mhs, nilai1, nilai2, nilai_mutu) VALUES ('$nama_mhs', '$prodi_mhs', $nilai1, $nilai2, '$nilai_mutu')") or die(mysqli_error($koneksi));

    if ($proses) {
        echo "<script> 
                alert('Data Berhasil Disimpan');
                window.location.href='form.php';
            </script>";
    } else {
        echo "<script> 
                alert('Data Gagal Disimpan');
                window.location.href='form.php';
            </script>";
    }
}
?>
