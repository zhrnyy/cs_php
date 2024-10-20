<?php 
    // mengecek apakah tidak ada data di $_GET
    if( !isset($_GET["nama"]) ||
        !isset($_GET["nim"])||
        !isset($_GET["jurusan"])||
        !isset($_GET["foto"])
    ){
        // redirect kemana
        header("Location: latihan6.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <ul>
        <li><img src="img/<?= $_GET["foto"]; ?>" alt=""></li>
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["nim"]; ?></li>
        <li><?= $_GET["jurusan"]; ?></li>
    </ul>
    <a href="latihan6.php">Kembali</a>
</body>
</html>