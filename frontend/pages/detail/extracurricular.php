<?php
include '../../../config/connection.php';
include '../../../config/escapeString.php';

if (!isset($_GET['id'])) {
    echo "
    <script>    
        alert('Tidak bisa memilih ID ini');
        window.location.href='../../../index.php';
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

?>

<!DOCTYPE html>
<html>

<head>
    <title>Detail</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="shortcut icon" type="img/png" href="../../template_user/img/logo.png" />
</head>

<body>
    <div class="container my-5">
        <div class="card shadow border-0 rounded-3 p-4 mx-auto" style="max-width: 600px;">
            <img src="../../../storages/extracurricular/<?= htmlspecialchars($extracurricular->image); ?>"
                alt="<?= htmlspecialchars($extracurricular->title); ?>"
                class="card-img-top mx-auto d-block mb-3"
                style="max-height: 300px; width: auto; object-fit: contain;">

            <h5 class="card-title text-center"><?= htmlspecialchars($extracurricular->title); ?></h5>
            <p class="card-text text-center"><?= htmlspecialchars($extracurricular->description); ?></p>

            <div class="text-center">
                <a href="./allExtracurricular.php" class="btn btn-secondary mt-4">Kembali</a>
            </div>
        </div>
    </div>

</body>

</html>