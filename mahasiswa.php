<?php
    $con = mysqli_connect("localhost","phpmyadmin","admin","lsp");
    $result = mysqli_query($con,"SELECT * FROM mahasiswa ORDER BY nama ASC");
    $data = $result->fetch_all(MYSQLI_ASSOC);
?>

<html>
    <head>
        <title>Data Mahasiswa</title>
        <link rel="stylesheet" type="text/css" href="bootstrap5/css/bootstrap.css">
        <script type="text/javascript" src="bootstrap5/js/bootstrap.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="text-center" style="margin-top: 20px">

            </div>
            <br/>
            <h5 class="text-center">Data Mahasiswa</h5>
            <br/>
            <table class="table table-bordered">
                <thead class=text-center>
                    <tr>
                        <th>NPM</th>
                        <th>Nama</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Prodi</th>
                        <th/>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data as $row): ?>
                    <tr>
                        <td> <?= htmlspecialchars($row['npm']) ?> </td>
                        <td> <?= htmlspecialchars($row['nama']) ?> </td>
                        <td> <?= htmlspecialchars($row['tempat_lahir']) ?> </td>
                        <td> <?= htmlspecialchars($row['tanggal_lahir']) ?> </td>
                        <td> <?= htmlspecialchars($row['prodi']) ?> </td>
                        <td>
                            <a href="delete_mahasiswa.php?npm=<?= htmlspecialchars($row['npm']) ?>">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <a href="/tambah_mahasiswa.php" class="btn btn-secondary">Tambah Data</a>
        </div>
    </body>
</html>
