<?php 
// variable scope (lingkup variabel)
// variabel global dan lokal
// variabel superglobals (variabel yg disediakan oleh PHP)
// $_GET, $_POST, $_REQUEST, $_SESSION, $_COOKIE, $_SERVER, $_ENV (semua array associative)

// variabl scope
$x = 17;

// // echo $x;

// function showX(){
//     // $x = 20;
//     global $x;
//     echo $x;
// }

// showX();
// echo "<br>";
// echo $x;

var_dump($_SERVER);

// variabel superglobal
// $_GET["nama"] = "Raizsa Zahra";
// $_GET["nim"] = "60900121017";
// var_dump($_GET);

?>

<!-- Metode request GET adalah metode pengiriman data melalui URL dan data tersebut bisa diambil oleh variabel superglobal $_GET-->

