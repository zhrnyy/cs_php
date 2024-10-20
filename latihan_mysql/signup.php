<?php 
    require 'functions.php';

    if( isset($_POST["signup"])){
        if (signup($_POST) > 0){
            echo "<script>
                alert('User baru berhasil ditambahkan');
                </script>";
            
        } else {
            echo mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        label{
            display: block;
        }
    </style>
</head>
<body>
    <h1>Sign-Up Page</h1>

    <form action="" method="POST">
        <ul>
            <li>
                <label for="username">Username</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <label for="kPassword">Konfirmasi Password</label>
                <input type="Password" name="kPassword" id="kPassword">
            </li>
            <button type="submit" name="signup">Daftar</button>
        </ul>
    </form>
</body>
</html>