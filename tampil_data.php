<?php
    include "koneksi.php";

    $proses = mysqli_query($koneksi, "SELECT * FROM data_mhs") or die (mysqli_error($koneksi));

    if(isset($_POST["search"])){
        $search = $_POST["search"];
        $proses = mysqli_query($koneksi, "SELECT * FROM data_mhs WHERE nama_mhs LIKE '%$search%'
        OR id LIKE  '%$search%'
        OR prodi_mhs LIKE '%$search%'
        OR nilai1 LIKE '%$search%' ");
    }
?>