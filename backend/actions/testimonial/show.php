<?php
if (!isset($_GET['id'])) {
    echo "
    <script>    
        alert('Tidak bisa memilih ID ini');
        window.location.href='../../pages/testimonial/index.php';
        </script>
    ";
}

$id = $_GET['id'];

$qSelect = "SELECT * FROM testimonials WHERE id='$id'";
$result = mysqli_query($connect, $qSelect) or die(mysqli_error($connect));

$testimonial = $result->fetch_object();
if (!$testimonial) {
    die("Data tidak di temukan");
}
