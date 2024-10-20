<?php 
// koneksi ke db
// isi parameter -> host, username, pass, nama_db
$conn = mysqli_connect("localhost", "root", "", "cs_mahasiswa");

// ambil data dari tabel mahasiswa / query data mahasiswa
// isi parameter -> koneksi db, query mau apa

$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// ambil data mahasiswa (fetch) dari objek result
// mysqli_fetch_row() // mengembalikan array numerik

// $mhs = mysqli_fetch_row($result);
// var_dump($mhs);

// mysqli_fetch_assoc() // mengembalikan array associative
// $mhs = mysqli_fetch_assoc($result);
// var_dump($mhs);
// // agar tampil semua
// while ($mhs = mysqli_fetch_assoc($result)){;
//     var_dump($mhs);
// }

// mysqli_fetch_array() // mengembalikan array keduanya
// $mhs = mysqli_fetch_array($result);
// var_dump($mhs);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan MySQL</title>
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
        while($row = mysqli_fetch_assoc($result)) : 
        
        ?>

        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="#">Ubah</a> |
                <a href="#">Hapus</a>
            </td>
            <td>
                <img src="img/<?= $row["gambar"]?>" alt="">
            </td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["nim"]; ?></td>
            <td><?= $row["jurusan"]; ?></td>
            <td><?= $row["email"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endwhile; ?>
    </table>
</body>
</html>