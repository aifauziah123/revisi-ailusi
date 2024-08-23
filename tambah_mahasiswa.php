<?php
$conn = mysqli_connect("localhost","phpmyadmin","admin","lsp");

if(isset($_POST["submit"])){
    $npm = $_POST["npm"];
    $nama = $_POST["nama"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $tempat_lahir = $_POST["tempat_lahir"];
    $prodi = $_POST["prodi"];

    $query = "INSERT INTO mahasiswa VALUES('$npm', '$nama', '$tempat_lahir', '$tanggal_lahir', '$prodi')";
    mysqli_query($conn,$query);
    echo "<script> alert('Data Inserted Successfully'); </script>";
    echo "<script>location.href='mahasiswa.php';</script>";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Tambah Mahasiswa</title>
        <link rel="stylesheet" type="text/css" href="bootstrap5/css/bootstrap.css">
        <script type="text/javascript" src="bootstrap5/js/bootstrap.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="text-center" style="margin-top: 20px">

            </div>
            <br/>
            <h5 class="text-center">Tambah Mahasiswa</h5>
            <form class="form-horizontal" action="" method="post">
                <div class="form-group" style="margin-top: 10px">
                    <label class="control-label col-sm-2" for="nik">NPM:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="npm" name="npm">
                    </div>
                </div>
                <div class="form-group" style="margin-top: 10px">
                    <label class="control-label col-sm-2" for="nama">Nama:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                </div>
                <div class="form-group" style="margin-top: 10px">
                    <label class="control-label col-sm-2" for="tempat_lahir">Tempat Lahir:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
                    </div>
                </div>
                <div class="form-group" style="margin-top: 10px">
                    <label class="control-label col-sm-2" for="tanggal_lahir">Tanggal Lahir:</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                    </div>
                </div>
                <div class="form-group" style="margin-top: 10px">
                    <label class="control-label col-sm-2" for="prodi">Prodi:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="prodi" name="prodi">
                    </div>
                </div>
                <br/>
                <button type="submit" name="submit" class="btn btn-secondary">Submit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
                <a href="/mahasiswa.php" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </body>
</html>
