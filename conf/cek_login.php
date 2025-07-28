<?php
include 'koneksi.php';
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

$query_sql = "SELECT * FROM db_admin where username = '$username' AND password = '$password'";

$result = mysqli_query($koneksi, $query_sql);

if (mysqli_num_rows($result) > 0 ){
    session_start();
    $_SESSION['username']=$username;
    $_SESSION['status']= 'login';
    header("Location: ../datainformasi.php");
    
} else {
    echo "<center><h1>Username atau Password Anda Salah. Silahkan Login Kembali.</h1>
    <button><strong>< a href='../login.php'>login</a></strong></button>";
}
?>