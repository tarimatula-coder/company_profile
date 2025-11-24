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

$qSelect = "SELECT * FROM announcements WHERE id='$id'";
$result = mysqli_query($connect, $qSelect) or die(mysqli_error($connect));

$announcement = $result->fetch_object();
if (!$announcement) {
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
        <div class="container my-5">
            <div class="card shadow border-0 rounded-3 p-4 mx-auto" style="max-width: 700px;">

                <!-- Gambar Pengumuman -->
                <img src="../../../storages/announcement/<?= htmlspecialchars($announcement->announcement_image); ?>"
                    alt="<?= htmlspecialchars($announcement->title); ?>"
                    class="card-img-top mx-auto d-block mb-4"
                    style="max-height: 320px; width: auto; object-fit: contain;">

                <!-- Tanggal & Penulis -->
                <h6 class="card-subtitle text-muted text-center mb-2">
                    <?= htmlspecialchars($announcement->date); ?> | <?= htmlspecialchars($announcement->author); ?>
                </h6>

                <!-- Judul Pengumuman -->
                <h5 class="card-title text-center mb-3">
                    <?= htmlspecialchars($announcement->announcement_title); ?>
                </h5>

                <!-- Deskripsi -->
                <p class="card-text text-center">
                    <?= htmlspecialchars($announcement->announcement_description); ?>
                </p>

                <!-- Tombol Kembali -->
                <div class="text-center mt-4">
                    <a href="./allAnnouncement.php" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </div>


</body>

</html>