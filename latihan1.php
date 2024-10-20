<!DOCTYPE html>
<html>
<head>
    <title>Penggunaan PHP dan HTML</title>
</head>
<body>

     <!-- penulisan php
     bisa PHP di dalam HTML
     bisa HTML di dalam PHP

     variabel
     menggunakan simbol $ 
     tidak boleh di awali dengan angka dan spasi -->

    <h1>Selamat datang di situs kami!</h1>
    
    <p>Budi HTML</p>
    <?php
        echo "Budi PHP";
    ?>
    <?php
        $nama = "Rara";
        echo "<p>Halo, $nama! Terima kasih telah berkunjung.</p>";

        // mengecek isi variabel
        var_dump($nama);
    ?>
    <?php 
        $nama_depan = "Raizsa";
        $nama_belakang = "Zahra";
        echo  $nama_depan . " " . $nama_belakang;
    ?>
    <?php  ?>
</body>
</html>