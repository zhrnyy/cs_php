<?php 
$conn = mysqli_connect("localhost", "root", "", "cs_mahasiswa");

function ambilData($query){
    global $conn;
    $result = mysqli_query($conn, $query);

    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function signup ($data){
	global $conn;

	$username = strtolower($data["username"]);
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$kPassword = mysqli_real_escape_string($conn, $data["kPassword"]);

    // cek konfirmasi password
    if($password !== $kPassword){
        echo "<script>
                alert('Password tidak sama!');
                </script>";   
        return false;
    }

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");

    if(mysqli_fetch_assoc($result)){
        echo "<script>
                alert('Username sudah terdaftar')
              </script>";
              return false;
    }

    // enkripsi password 
    $password = password_hash($password, PASSWORD_DEFAULT);
    // $password = md5($password);
    

    // tambah user baru ke db
    // masukkan sesuai field pada tabel
    mysqli_query($conn, "INSERT INTO users VALUES('', '$username', '$password')");
    return mysqli_affected_rows($conn);
}
?>