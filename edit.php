<!doctype html>
<?php
include "koneksi.php";

$id = $_GET['id'];
$proses_ambil = mysqli_query($koneksi, "SELECT * FROM data_mhs WHERE id = $id");

$edit_data = mysqli_fetch_assoc($proses_ambil);

if(isset($_POST["submit"])){
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

    $proses = mysqli_query($koneksi, "UPDATE data_mhs SET nama_mhs = '$nama_mhs', prodi_mhs = '$prodi_mhs', nilai1 = $nilai1, nilai2 = $nilai2, nilai_mutu = '$nilai_mutu' WHERE id = $id");

    if ($proses) {
        echo "<script> 
                alert('Data Berhasil Diedit');
                window.location.href='form.php';
            </script>";
    } else {
        echo "<script> 
                alert('Data Gagal Diedit');
                window.location.href='form.php';
            </script>";
    }
}

?>



<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Input MHS 2</title>
    <link rel="stylesheet" href="asset/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container-1 w-75 p-2 d-flex justify-content-center ms-auto me-auto">
        <div class="items-1">
            <h1>FORM INPUT DATA MAHASISWA</h1>
        </div>
    </div>

    <div class="container-3 w-75 p-2 d-flex justify-content-center mt-2 ms-auto me-auto ">
        <div class="items-1 w-75 border rounded p-2">
            <h3 class="text-primary">Input Data Mahasiswa</h3>
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Mahasiswa</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $edit_data['nama_mhs'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="prodi" class="form-label">Prodi Mahasiswa</label>
                    <input type="text" class="form-control" id="prodi" name="prodi" value="<?php echo $edit_data['prodi_mhs'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="nilai1" class="form-label">Nilai 1 :</label>
                    <input type="number" class="form-control" id="nilai1" name="nilai1" value="<?php echo $edit_data['nilai1'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="nilai2" class="form-label">Nilai 2 :</label>
                    <input type="number" class="form-control" id="nilai2" name="nilai2" value="<?php echo $edit_data['nilai2'] ?>" required>
                </div>

                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                <button type="reset" class="btn btn-danger">Cancel</button>
                <a class="btn btn-secondary" href="form.php" role="button">Kembali</a>
            </form>
        </div>
    </div>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
</body>

</html>