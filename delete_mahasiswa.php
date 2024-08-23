<?php
    $conn = mysqli_connect("localhost","phpmyadmin","admin","lsp");
    $npm = $_GET['npm'];
    $query = "DELETE from mahasiswa WHERE npm='$npm'";
    mysqli_query($conn,$query);
    echo "<script> alert('Data Deleted Successfully'); </script>";
    echo "<script>location.href='mahasiswa.php';</script>";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Tambah Mahasiswa</title>
    </head>
</html>
