<?php 
    // array (variabel yang dapat menampung banyak nilai)
    // berupa pasangan key(index yg dimulai dari 0) dan value

    // cara lama
    $hari = array("Senin", "Selasa", "Rabu", "Kamis");

    // cara baru (boleh berbeda tipe data) 
    $bulan = ["Januari", "Februari", "Maret", "April"];

    // menampilkan array 
    
    // tidak bisa menggunakan echo
    // bisa menggunakan -> var_dump dan print_r
    // var_dump($hari);
    // echo "<br>";
    // print_r($bulan);
    // echo "<br>";


    // menambahkan elemen baru pada array
    // $hari[] = "Jumat";
    // var_dump($hari);
    
    // var_dump dan print_r digunakan untuk proses debugging (untuk developer, bukan user)


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak{
            width: 30px;
            height: 30px;
            background-color: yellow;
            line-height: 30px;
            text-align: center;
            margin: 3px;
            float: left;
        }
        .clear{
            clear: both;
        }
    </style>
</head>
<body> 
    
    <!--    menampilkan array menggunakan cara yang benar
            for dan foreach (khusus untuk array)  -->
    
    <!-- Menggunakan for -->
    <?php 
    $angka = [1, 2, 3, 4, 5, 6, 7];
    ?>
    <?php for($i = 0; $i < 7; $i++){ ?>
        <div class="kotak"><?php echo $angka[$i]; ?></div>
    <?php } ?>
    
    <div class="clear"></div>
    

<!-- bagaimana jika ditambah satu elemen? -->

<!-- Menggunakan foreach -->
    <?php foreach($angka as $number){ ?>
        <div class="kotak"><?php echo $number ?></div>
    <?php } ?>

    <div class="clear"></div>

    <?php foreach($angka as $number) : ?>
        <div class="kotak"><?= $number ?></div>
    <?php endforeach; ?>
    
</body>
</html>