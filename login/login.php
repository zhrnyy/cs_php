 <!-- mengecek apakah tombol submit sudah ditekan atau belum -->
<?php 
if (isset($_POST["submit"])){
    // cek username & password
    if($_POST["username"] == "admin" && $_POST["password"] == "123"){
    // redirect ke halaman admin.php
        header("Location: admin.php");
        exit;
    } else {
    // kalau salah, tampilkan pesan error
        $error = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <h1>Halaman Login</h1>

    <?php if(isset($error)) :?>
        <p>Username atau password salah</p>
    <?php endif; ?>
    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username: </label>
                <input type="text" name="username" id="username"><br> 
            </li>
            <li>
                <label for="password">Password: </label>
                <input type="password" name="password" id="password"><br>
            </li>
            <button type="submit" name="submit">Login</button>
        </ul>
        
    </form>
</body>
</html>