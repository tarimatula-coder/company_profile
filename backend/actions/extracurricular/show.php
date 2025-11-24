<?php
if (!isset($_GET['id'])) {
    echo "
    <script>    
        alert('Tidak bisa memilih ID ini');
        window.location.href='../../pages/extracurricular/index.php';
        </script>
    ";
}

$id = $_GET['id'];

$qSelect = "SELECT * FROM extracurriculars WHERE id='$id'";
$result = mysqli_query($connect, $qSelect) or die(mysqli_error($connect));

$extracurricular = $result->fetch_object();
if (!$extracurricular) {
    die("Data tidak di temukan");
}
