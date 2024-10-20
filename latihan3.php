<!-- Array 2 dimensi dan multidimensi -->
<?php 
    $mahasiswa = [
        ["Raizsa Zahra", "60900121017", "Sistem Informasi"],
        ["Ahmad Ghazali", "60900121070", "Sistem Informasi"]
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    
    <!-- cara pertama -->
    <!-- <ul>
        <?php 
        // foreach ($mahasiswa as $mhs) : ?>
            <li><?= $mhs; ?></li>
        <?php 
    // endforeach; ?>
    </ul> -->

    <!-- cara kedua untuk multidimensi -->
     <?php foreach ($mahasiswa as $mhs) : ?>    
        <ul>
            <li>Nama: <?= $mhs[0]; ?></li>
            <li>NIM: <?= $mhs[1]; ?></li>
            <li>Jurusan: <?= $mhs[2]; ?></li>
        </ul>
    <?php endforeach ?>

    <!-- Ini semua array numerik -->
</body>
</html>