<!-- multidimensi array -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 4</title>
</head>
<style>
    .kotak{
        width: 30px;
        height: 30px;
        background-color: greenyellow;
        line-height: 30px;
        text-align: center;
        margin: 3px;
        float: left;
    }
    .clear{
        clear: both;
    }
</style>
<body>
<?php 
    $numbers = [
        [1, 2, 3], 
        [4, 5, 6], 
        [7, 8, 9]
    ];
    // echo $numbers[0][1];
?>
<?php foreach($numbers as $number) :  ?>
    <?php foreach($number as $num) : ?>
        <div class="kotak"><?= $num; ?></div>
    <?php endforeach; ?>
    <div class="clear"></div>
<?php endforeach; ?>


</body>
</html>