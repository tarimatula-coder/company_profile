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
    exit;
}

$id = $_GET['id'];

$qSelect = "SELECT * FROM achievements WHERE id='$id'";
$result = mysqli_query($connect, $qSelect) or die(mysqli_error($connect));

$achievement = $result->fetch_object();
if (!$achievement) {
    die("Data tidak ditemukan");
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
        <div class="card shadow border-0 rounded-3 p-4 mx-auto" style="max-width: 700px;">

            <!-- Gambar Prestasi -->
            <img src="../../../storages/achievement/<?= htmlspecialchars($achievement->image); ?>"
                alt="<?= htmlspecialchars($achievement->title); ?>"
                class="card-img-top mx-auto d-block mb-4"
                style="max-height: 320px; width: auto; object-fit: contain;">

            <!-- Pemenang & Peserta -->
            <h6 class="card-subtitle text-muted text-center mb-2">
                <?= htmlspecialchars($achievement->winner); ?> | <?= htmlspecialchars($achievement->person); ?>
            </h6>

            <!-- Judul Prestasi -->
            <h5 class="card-title text-center mb-3">
                <?= htmlspecialchars($achievement->title); ?>
            </h5>

            <!-- Deskripsi (center) -->
            <p class="card-text text-center">
                <?= htmlspecialchars($achievement->description); ?>
            </p>

            <!-- Tombol Kembali -->
            <div class="text-center mt-4">
                <a href="./allAchievement.php" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
</body>

</html>