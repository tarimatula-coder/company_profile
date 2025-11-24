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

$qSelect = "SELECT * FROM blogs WHERE id='$id'";
$result = mysqli_query($connect, $qSelect) or die(mysqli_error($connect));

$blog = $result->fetch_object();
if (!$blog) {
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
        <div class="card shadow border-0 rounded-3 p-4 mx-auto text-center" style="max-width: 700px;">

            <!-- Gambar Blog -->
            <img src="../../../storages/blog/<?= htmlspecialchars($blog->image); ?>"
                alt="<?= htmlspecialchars($blog->title); ?>"
                class="card-img-top mx-auto d-block mb-4"
                style="max-height: 350px; width: auto; object-fit: contain;">

            <!-- Tanggal & Penulis -->
            <h6 class="card-subtitle text-muted mb-2">
                <?= htmlspecialchars($blog->date); ?> | <?= htmlspecialchars($blog->author); ?>
            </h6>

            <!-- Judul Blog -->
            <h5 class="card-title mb-3">
                <?= htmlspecialchars($blog->title); ?>
            </h5>

            <!-- Isi Konten -->
            <p class="card-text">
                <?= htmlspecialchars($blog->content); ?>
            </p>

            <!-- Tombol Kembali -->
            <div class="mt-4">
                <a href="./allBlog.php" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>


</body>

</html>