<?php
session_start();
include '../../app.php';
// mengecek apakah user sudah login
if (!isset($_SESSION['email'])) {
    echo " 
         <script>    
              alert('anda harus login dahulu');
              window.location.href='../auth/login.php';
          </script>
           ";
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADMIN</title>
    <link rel="shortcut icon" type="image/png" href="../../SEODash-1.0.0/SEODash-1.0.0/src/assets/images/logos/logo.png" />
    <link rel="stylesheet" href="../../SEODash-1.0.0/SEODash-1.0.0/src/assets/css/styles.min.css" />
</head>
<body>