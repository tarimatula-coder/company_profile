<?php
include '../../../config/connection.php';

// Fungsi Escape String
function escapeString($connect, $string)
{
    if (!is_string($string)) {
        $string = strval($string);
    }
    return mysqli_real_escape_string($connect, $string);
}

// Ambil keyword pencarian (jika ada)
$keyword = isset($_GET['search']) ? escapeString($connect, $_GET['search']) : "";

// Query announcements dengan pencarian
$qannouncement = "SELECT * FROM announcements";
if (!empty($keyword)) {
    $qannouncement .= " WHERE announcement_title LIKE '%$keyword%' 
                        OR announcement_description LIKE '%$keyword%'";
}
$resultAnnouncement = mysqli_query($connect, $qannouncement) or die(mysqli_error($connect));
?>
<!DOCTYPE html>
<html>

<head>
    <title>Detail lihat semua</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="shortcut icon" type="img/png" href="../../template_user/img/logo.png" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>

<body>
    <section id="announcements" class="py-5">
        <div class="container">

            <!-- Judul -->
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h1>Pengumuman</h1>
                    <p class="mx-auto" style="max-width: 600px;">
                        Berikut ini terkait pengumuman yang ada di SMKN 1 Bangsri
                    </p>
                </div>
            </div>

            <!-- Form Pencarian -->
            <div class="row mb-4">
                <div class="col-md-6 offset-md-3">
                    <form method="GET" action="" class="d-flex">
                        <input type="text" name="search" class="form-control me-2" placeholder="Cari pengumuman..."
                            value="<?= htmlspecialchars($keyword) ?>">
                        <button type="submit" class="btn btn-primary">Cari</button>
                    </form>
                </div>
            </div>

            <!-- Daftar Pengumuman -->
            <div class="row text-center g-4">
                <?php if ($resultAnnouncement->num_rows > 0): ?>
                    <?php while ($item = $resultAnnouncement->fetch_object()): ?>
                        <div class="col-md-4">
                            <a href="announcement.php?id=<?= $item->id ?>" class="announcement-link">
                                <article class="announcement-post">
                                    <!-- Label -->
                                    <span class="tag">
                                        <i class='bx bxs-megaphone'></i> Pengumuman
                                    </span>

                                    <!-- Gambar -->
                                    <img src="../../../storages/announcement/<?= htmlspecialchars($item->announcement_image) ?>"
                                        alt="<?= htmlspecialchars($item->announcement_title) ?>">

                                    <!-- Konten -->
                                    <div class="content">
                                        <div class="meta">
                                            <span><i class="bx bx-calendar"></i> <?= htmlspecialchars($item->date) ?></span>
                                            <span><i class="bx bx-user"></i> <?= htmlspecialchars($item->author) ?></span>
                                        </div>
                                        <h5><?= htmlspecialchars(substr($item->announcement_title, 0, 100)) ?></h5>
                                        <p><?= htmlspecialchars(substr($item->announcement_description, 0, 100)) ?></p>
                                    </div>
                                </article>
                            </a>
                        </div>
                    <?php endwhile; ?>
                <?php else: ?>
                    <div class="col-12">
                        <p class="text-muted">Tidak ada data pengumuman ditemukan.</p>
                    </div>
                <?php endif; ?>

                <!-- Tombol Kembali -->
                <div class="col-12 mt-2">
                    <a href="../../index.php#announcements" class="mt-4">
                        <button type="button" class="btn btn-primary">Kembali</button>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <style>
        .announcement-link {
            text-decoration: none;
            color: inherit;
            display: flex;
            flex: 1;
        }

        .announcement-post {
            position: relative;
            background: #fff;
            border-radius: 15px;
            overflow: hidden;
            transition: transform .3s ease, box-shadow .3s ease;
            flex: 1;
        }

        .announcement-post:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.1);
        }

        .announcement-post img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            border-bottom: 4px solid #eee;
        }

        .tag {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: #e74c3c;
            color: #fff;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 500;
            position: absolute;
            top: 15px;
            left: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
            z-index: 2;
        }

        .tag i {
            font-size: 16px;
        }

        .announcement-post .content {
            padding: 15px;
            text-align: left;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .announcement-post .content p {
            font-size: 14px;
            color: #555;
            margin-bottom: 0;
        }

        .announcement-post .content .meta {
            display: flex;
            align-items: center;
            gap: 15px;
            font-size: 14px;
            color: #777;
            margin-bottom: 8px;
        }

        .announcement-post .content .meta i {
            color: #3498db;
            font-size: 16px;
        }

        .announcement-post .content h5,
        .announcement-post .content p {
            color: #222;
            transition: color 0.3s ease;
        }

        .announcement-link:hover .content h5,
        .announcement-link:active .content h5 {
            color: #E74C3C;
        }
    </style>
</body>

</html>