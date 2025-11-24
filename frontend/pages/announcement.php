<!-- Load Boxicons -->
<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

<?php
$qannouncement = "SELECT * FROM Announcements LIMIT 3";
$resultannouncement = mysqli_query($connect, $qannouncement) or die(mysqli_error($connect));
?>

<section id="announcements" class="py-5">
    <div class="container">
        <!-- Judul -->
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h1>Pengumuman</h1>
                <p class="mx-auto" style="max-width: 600px;">
                    Berikut ini terkait pengumuman yang ada di SMKN 1 Bangsri
                </p>
            </div>
        </div>

        <!-- Daftar Pengumuman -->
        <div class="row text-center d-flex align-items-stretch">
            <?php while ($item = $resultannouncement->fetch_object()) : ?>
                <div class="col-md-4 d-flex">
                    <article class="announcement-post flex-fill">
                        <img src="../storages/announcement/<?= $item->announcement_image ?>"
                            alt="<?= $item->announcement_title ?>">

                        <!-- Label Pengumuman -->
                        <span class="tag">
                            <i class='bx bxs-megaphone'></i> Pengumuman
                        </span>

                        <div class="content d-flex flex-column">
                            <div class="meta">
                                <span><i class="bx bx-calendar"></i> <?= $item->date ?></span>
                                <span><i class="bx bx-user"></i> <?= $item->author ?></span>
                            </div>

                            <!-- Judul sebagai link -->
                            <h5>
                                <a href="./pages/detail/announcement.php?id=<?= $item->id ?>" class="title-link">
                                    <?= htmlspecialchars(substr($item->announcement_title, 0, 100)) ?>...
                                </a>
                            </h5>

                            <p><?= htmlspecialchars(substr($item->announcement_description, 0, 100)) ?>...</p>

                            <!-- Spacer agar konten rata bawah -->
                            <div class="mt-auto"></div>
                        </div>
                    </article>
                </div>
            <?php endwhile; ?>

            <!-- Tombol Lihat Semua -->
            <div class="row mt-4">
                <div class="col-12 text-center mt-4">
                    <a href="./pages/detail/allAnnouncement.php" class="btn btn-primary">Lihat semua</a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .announcement-post {
        position: relative;
        background: #fff;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        transition: transform .3s ease, box-shadow .3s ease;
        margin-bottom: 30px;
        text-align: left;
        display: flex;
        flex-direction: column;
        height: 100%;
        /* semua card sama tinggi */
    }

    .announcement-post:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    }

    .announcement-post img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        display: block;
    }

    .tag {
        position: absolute;
        top: 15px;
        left: 15px;
        background: #ff3b3b;
        color: #fff;
        padding: 5px 12px;
        border-radius: 20px;
        font-size: 14px;
        display: flex;
        align-items: center;
        gap: 5px;
        z-index: 2;
    }

    .tag i {
        font-size: 16px;
    }

    .content {
        padding: 15px;
        display: flex;
        flex-direction: column;
        flex: 1;
    }

    .meta {
        display: flex;
        gap: 15px;
        font-size: 14px;
        color: #777;
        margin-bottom: 8px;
    }

    .content h5 {
        margin: 0 0 10px;
        font-size: 18px;
        font-weight: 600;
        line-height: 1.4;
    }

    .title-link {
        color: #333;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .title-link:hover {
        color: #ff3b3b;
    }

    .content p {
        color: #666;
        font-size: 14px;
        margin-bottom: 15px;
    }
</style>