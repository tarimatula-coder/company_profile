<?php
include '../../../config/connection.php';

// Fungsi Escape String (gunakan OOP)
function escapeString($connect, $string)
{
    if (!is_string($string)) {
        $string = strval($string);
    }
    return $connect->real_escape_string($string);
}

// Ambil keyword pencarian (jika ada)
$keyword = isset($_GET['search']) ? escapeString($connect, $_GET['search']) : "";

$qmajor = "SELECT * FROM majors";
if (!empty($keyword)) {
    $qmajor .= " WHERE major_name LIKE '%$keyword%' 
                 OR major_description LIKE '%$keyword%' 
                 OR head LIKE '%$keyword%'";
}
$resultMajor = $connect->query($qmajor) or die($connect->error);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Detail lihat semua</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="shortcut icon" type="img/png" href="../../template_user/img/logo.png" />
</head>

<body>
    <section id="major" class="text-center">
        <style>
            .major-link {
                display: block;
                text-decoration: none;
                color: inherit;
                height: 100%;
                border-radius: 15px;
                overflow: hidden;
                background: linear-gradient(135deg, #a8edea, #fed6e3);
                box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
                transition: transform .3s ease, box-shadow .3s ease, color .3s ease;
            }

            .major-link:hover {
                transform: translateY(-5px);
                box-shadow: 0 12px 25px rgba(0, 0, 0, 0.2);
                color: #ff6f91;
                /* Warna hover diambil dari gradasi */
            }

            .major-link img {
                width: 100%;
                height: 200px;
                object-fit: cover;
                display: block;
            }

            .major-content {
                padding: 15px;
            }

            .major-content h5 {
                margin: 12px 0 8px;
                font-weight: bold;
                font-size: 18px;
            }

            .major-content p {
                font-size: 14px;
                margin-bottom: 8px;
                line-height: 1.4;
                color: #555;
            }

            /* Efek sudut bercahaya */
            .major-link::before,
            .major-link::after {
                content: "";
                position: absolute;
                width: 50px;
                height: 50px;
                pointer-events: none;
            }

            .major-link::before {
                top: 0;
                left: 0;
                border-top: 6px solid #1abc9c;
                border-left: 6px solid #1abc9c;
                border-top-left-radius: 15px;
                box-shadow: 0 0 10px #1abc9c, 0 0 20px #1abc9c, 0 0 30px #1abc9c;
            }

            /* .major-link::after {
            bottom: 0;
            right: 0;
            border-bottom: 6px solid #3498db;
            border-right: 6px solid #3498db;
            border-bottom-right-radius: 15px;
            box-shadow: 0 0 10px #3498db, 0 0 20px #3498db, 0 0 30px #3498db;
        } */
        </style>

        <div class="container position-relative">
            <div class="row">
                <div class="col-12">
                    <div class="intro mb-4 text-center">
                        <h1>Kompetensi Keahlian</h1>
                        <p class="mx-auto" style="max-width: 600px;">
                            Di SMK Negeri 1 Bangsri memiliki 5 Kompetensi Keahlian, diantaranya:
                        </p>
                    </div>
                </div>
            </div>
            <!-- Form Pencarian -->
            <div class="row mb-4">
                <div class="col-md-6 offset-md-3">
                    <form method="GET" action="" class="d-flex">
                        <input type="text" name="search" class="form-control me-2" placeholder="Cari jurusan..."
                            value="<?= htmlspecialchars($keyword) ?>">
                        <button type="submit" class="btn btn-primary">Cari</button>
                    </form>
                </div>
            </div>
            <div class="row text-center g-4">
                <?php if ($resultMajor->num_rows > 0): ?>
                    <?php while ($item = $resultMajor->fetch_object()): ?>
                        <div class="col-lg-4 col-md-6 justified-content">
                            <a href="major.php?id=<?= $item->id ?>" class="major-link position-relative">
                                <img src="../../../storages/major/<?= $item->major_image ?>" alt="<?= $item->major_name ?>">
                                <div class="major-content">
                                    <h5><?= $item->major_name ?></h5>
                                    <p><?= $item->head ?></p>
                                    <p><?= $item->major_description ?></p>
                                </div>
                            </a>
                        </div>
                    <?php endwhile; ?>
                <?php else: ?>
                    <div class="col-12">
                        <p class="text-muted">Tidak ada data jurusan ditemukan.</p>
                    </div>
                <?php endif; ?>
            </div>
            <div class="row mt-4">
                <a href="../../index.php#major" class="mt-4">
                    <button type="button" class="btn btn-primary">
                        Kembali
                    </button>
                </a>
            </div>
        </div>
    </section>
</body>

</html>