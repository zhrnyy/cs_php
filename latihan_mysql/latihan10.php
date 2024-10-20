<?php
require 'functions.php';

$mahasiswa = ambilData("SELECT * FROM mahasiswa");
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan MySQL - Cara Baru</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Nomor</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Nim</th>
            <th>Jurusan</th>
            <th>Email</th>
        </tr>

        <?php
        $i = 1;
        foreach ($mahasiswa as $row) :

        ?>

            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="#">Ubah</a> |
                    <a href="#">Hapus</a>
                </td>
                <td>
                    <img src="img/<?= $row["gambar"] ?>" alt="">
                </td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["nim"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>
                <td><?= $row["email"]; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>

</html>