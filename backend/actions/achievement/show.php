<?php
if (!isset($_GET['id'])) {
    echo "
    <script>    
        alert('Tidak bisa memilih ID ini');
        window.location.href='../../pages/achievement/index.php';
        </script>
    ";
}

$id = $_GET['id'];

$qSelect = "SELECT * FROM achievements WHERE id='$id'";
$result = mysqli_query($connect, $qSelect) or die(mysqli_error($connect));

$achievement = $result->fetch_object();
if (!$achievement) {
    die("Data tidak di temukan");
}
