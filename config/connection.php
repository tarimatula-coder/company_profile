<?php   
$hostname = "localhost";
$username = "root";
$password ="";
$database = "magang_sekolah";

$connect = mysqli_connect($hostname, $username, $password, $database);
if (!$connect){
    die("koneksi gagal: ".mysqli_connect_error());
}
?>
