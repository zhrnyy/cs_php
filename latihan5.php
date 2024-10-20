<!-- Array associative -->
 <!-- sama seperti array numerik, namun key-nya adalah string yg kita buat sendiri -->
<?php 
    $mahasiswa = [
        [
            "nama" => "Raizsa Zahra", 
            "nim" => "60900121017", 
            "jurusan" => "Sistem informasi",
            "foto" => "girl.jpg"
        ],
        [
            "nama" => "Komeng", 
            "nim" => "60900121070", 
            "jurusan" => "Sistem informasi",
            "foto" => "boy.jpg"
        ]
    ];
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 5</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>    
        <ul>
            <li>
                <img src="img/<?= $mhs["foto"];?>" alt="">
            </li>
            <li>Nama: <?= $mhs["nama"]; ?></li>
            <li>NIM: <?= $mhs["nim"]; ?></li>
            <li>Jurusan: <?= $mhs["jurusan"]; ?></li>
        </ul>
    <?php endforeach ?>
</body>
</html>