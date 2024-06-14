<!doctype html>
<?php
include "koneksi.php";
include "tampil_data.php";

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


    <div class="container-2 w-75 p-2 d-flex justify-content-center ms-auto me-auto">
        <div class="items-1 w-75">
            <form class="d-flex" role="search" method="POST">
                <input class="form-control me-2" type="search" placeholder="Cari kata di sini" aria-label="Search" id="search" name="search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>


    <div class="container-3 w-75 p-2 d-flex justify-content-center mt-2 ms-auto me-auto ">
        <div class="items-1 w-75 border rounded p-2">
            <h3 class="text-primary">Input Data Mahasiswa</h3>
            <form action="proses.php" method="POST">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Mahasiswa</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                <div class="mb-3">
                    <label for="prodi" class="form-label">Prodi Mahasiswa</label>
                    <input type="text" class="form-control" id="prodi" name="prodi" required>
                </div>
                <div class="mb-3">
                    <label for="nilai1" class="form-label">Nilai 1 :</label>
                    <input type="number" class="form-control" id="nilai1" name="nilai1" required>
                </div>
                <div class="mb-3">
                    <label for="nilai2" class="form-label">Nilai 2 :</label>
                    <input type="number" class="form-control" id="nilai2" name="nilai2" required>
                </div>

                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                <button type="reset" class="btn btn-danger">Cancel</button>
            </form>
        </div>
    </div>

    <div class="container-4 w-75 p-2 d-flex justify-content-center mt-3 ms-auto me-auto ">
        <div class="items-1 w-75 border rounded p-2">
            <h3 class="text-primary">Tabel Data Mahasiswa</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Npm</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Prodi</th>
                        <th scope="col">Nilai 1</th>
                        <th scope="col">Nilai 2</th>
                        <th scope="col">Nilai Mutu</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    <?php while ($data = mysqli_fetch_assoc($proses)) { ?>
                        <tr>
                            <td> <?php echo $data['id'] ?> </td>
                            <td> <?php echo $data['nama_mhs'] ?> </td>
                            <td> <?php echo $data['prodi_mhs'] ?> </td>
                            <td> <?php echo $data['nilai1'] ?> </td>
                            <td> <?php echo $data['nilai2'] ?> </td>
                            <td> <?php echo $data['nilai_mutu'] ?> </td>
                            <td> <a href="edit.php?id=<?php echo $data['id'] ?>">Edit</a> | <a href="hapus.php?id=<?php echo $data['id'] ?> ">Hapus</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</body>

</html>