<!-- Load Boxicons -->
<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

<?php
// Query data prestasi
$qAchievement = "SELECT * FROM achievements LIMIT 6";
$resultAchievement = mysqli_query($connect, $qAchievement) or die(mysqli_error($connect));
?>

<section id="achievement" class="py-5">
    <div class="container">
        <!-- Judul -->
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h1>Prestasi</h1>
                <p>Berikut ini prestasi yang sudah di peroleh di smkn 1 bangsri</p>
            </div>
        </div>

        <!-- Daftar Prestasi -->
        <div class="row">
            <?php while ($item = $resultAchievement->fetch_object()) : ?>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <a href="./pages/detail/achievement.php?id=<?= $item->id ?>" class="achievement-link">
                        <div class="achievement-card">
                            <!-- Gambar -->
                            <div class="image-wrapper">
                                <img src="../storages/achievement/<?= $item->image ?>" alt="<?= $item->title ?>">
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
        </div>

        <!-- Tombol Lihat Semua -->
        <div class="text-center mt-4">
            <a href="./pages/detail/allAchievement.php">
                <button type="button" class="btn btn-primary">
                    Lihat semua
                </button>
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

    /* Efek hover link */
    .achievement-link:hover h5,
    .achievement-link:hover ul li {
        color: #ffe082;
        /* kuning muda saat hover */
    }

    /* Efek klik link */
    .achievement-link:active h5,
    .achievement-link:active ul li {
        color: #ffeb3b;
        /* kuning terang saat klik */
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