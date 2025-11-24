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

// Query Achievements dengan pencarian
// Query Achievements dengan pencarian
$qachievement = "SELECT * FROM achievements";
if (!empty($keyword)) {
    $qachievement .= " WHERE title LIKE '%$keyword%' 
                       OR description LIKE '%$keyword%'";
}
$resultAchievement = $connect->query($qachievement) or die($connect->error);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Detail lihat semua</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="shortcut icon" type="img/png" href="../../template_user/img/logo.png" />
</head>

<body>
    <section id="achievement" class="py-5">
        <div class="container">
            <!-- Judul -->
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <h1>Prestasi</h1>
                    <p>Berikut ini prestasi yang sudah di peroleh di SMKN 1 Bangsri</p>
                </div>
            </div>

            <!-- Form Pencarian -->
            <div class="row mb-4">
                <div class="col-md-6 offset-md-3">
                    <form method="GET" action="" class="d-flex">
                        <input type="text" name="search" class="form-control me-2" placeholder="Cari pencapaian..."
                            value="<?= htmlspecialchars($keyword) ?>">
                        <button type="submit" class="btn btn-primary">Cari</button>
                    </form>
                </div>
            </div>

            <!-- Daftar Prestasi -->
            <div class="row">
                <?php if ($resultAchievement->num_rows > 0): ?>
                    <?php while ($item = $resultAchievement->fetch_object()) : ?>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <a href="achievement.php?id=<?= $item->id ?>" class="achievement-link">
                                <div class="achievement-card">
                                    <!-- Gambar -->
                                    <div class="image-wrapper">
                                        <img src="../../../storages/achievement/<?= $item->image ?>" alt="<?= $item->title ?>">
                                        <span class="winner-badge">
                                            <i class='bx bxs-trophy'></i><?= $item->winner ?>
                                        </span>
                                    </div>
                                    <!-- Konten -->
                                    <div class="content-wrapper">
                                        <h5><?= $item->title ?></h5>
                                        <ul>
                                            <li><i class='bx bx-check-circle'></i> <?= $item->title ?></li>
                                            <li><i class='bx bx-check-circle'></i> Tingkat : <?= $item->description ?></li>
                                            <li><i class='bx bx-check-circle'></i> Nama : <?= $item->person ?></li>
                                        </ul>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endwhile; ?>
                <?php else: ?>
                    <div class="col-12">
                        <p class="text-muted">Tidak ada data pencapaian ditemukan.</p>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Tombol Kembali -->
            <div class="text-center mt-4">
                <a href="../../index.php#achievement" class="btn btn-primary">
                    Kembali
                </a>
            </div>
        </div>
    </section>

    <style>
        /* Link seluruh kartu */
        .achievement-link {
            text-decoration: none;
            color: inherit;
            display: block;
            height: 100%;
        }

        .achievement-link:hover h5,
        .achievement-link:hover ul li {
            color: #ffe082;
        }

        .achievement-link:active h5,
        .achievement-link:active ul li {
            color: #ffeb3b;
        }

        /* Kartu prestasi */
        .achievement-card {
            border-radius: 15px;
            border: 3px solid transparent;
            background: linear-gradient(135deg, #ff9a9e, #fad0c4, #a1c4fd, #c2e9fb);
            background-size: 400% 400%;
            animation: gradientBG 8s ease infinite;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease;
            color: #fff;
            height: 100%;
            cursor: pointer;
            position: relative;
        }

        @keyframes gradientBG {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .achievement-card:hover {
            transform: translateY(-5px);
        }

        /* Gambar */
        .image-wrapper {
            position: relative;
            width: 100%;
            height: 220px;
        }

        .image-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border: 4px solid #fff;
            border-radius: 10px;
            display: block;
        }

        /* Badge pemenang */
        .winner-badge {
            position: absolute;
            top: 10px;
            left: 10px;
            background: #ff9800;
            color: #fff;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 14px;
            display: flex;
            align-items: center;
            gap: 5px;
            font-weight: 600;
            z-index: 2;
        }

        /* Konten kartu */
        .content-wrapper {
            padding: 15px;
            background: rgba(0, 0, 0, 0.3);
            border: 4px solid #fff;
            border-radius: 10px;
            margin: 5px;
        }

        .content-wrapper h5 {
            font-weight: 700;
            margin-bottom: 15px;
            font-size: 16px;
        }

        .content-wrapper ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .content-wrapper ul li {
            margin-bottom: 5px;
            display: flex;
            align-items: center;
            gap: 5px;
            font-size: 14px;
        }

        .content-wrapper ul li i {
            color: #fff;
            font-size: 16px;
        }
    </style>
</body>

</html>