<!-- Load Boxicons -->
<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
<?php
$qabout = "SELECT * FROM abouts LIMIT 1";
$resultabout = mysqli_query($connect, $qabout) or die(mysqli_error($connect));
?>
<!-- about -->
<section id="about">
    <div class="container">
        <?php while ($item = $resultabout->fetch_object()) : ?>
            <div class="row">
                <!-- Bagian Kiri (Teks) -->
                <div class="col-lg-6">
                    <h1 class="about-title"><?= $item->school_name ?></h1>
                    <p class="about-subtitle"><em><?= $item->school_tagline ?></em></p>
                    <p class="about-text"><?= $item->school_description ?></p>
                    <p><strong>Sejak:</strong> <?= $item->since ?></p>
                    <p><strong>Alamat:</strong> <?= $item->alamat ?></p>
                </div>

                <!-- Bagian Kanan (Banner + Logo) -->
                <div class="col-lg-6 text-center position-relative">
                    <!-- Banner -->
                    <img src="../storages/about/<?= $item->school_banner ?>"
                        alt="Banner <?= $item->school_name ?>"
                        class="img-fluid rounded shadow banner-photo">

                    <!-- Logo (opsional jika ada di DB)
                    <img src="../storages/about/<?= $item->school_logo ?>"
                        alt="Logo <?= $item->school_name ?>"
                        class="logo-photo">
                    -->
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</section>

<style>
    .about-title {
        font-size: 2.2rem;
        font-weight: 700;
        text-transform: uppercase;
        font-family: 'Poppins', sans-serif;
        margin-bottom: 10px;
        line-height: 1.3;
    }

    .about-subtitle {
        font-size: 1.2rem;
        font-weight: 500;
        color: #555;
        margin-bottom: 20px;
        font-family: 'Poppins', sans-serif;
    }

    .about-text {
        font-size: 1rem;
        line-height: 1.7;
        margin-bottom: 15px;
        text-align: justify;
        font-family: 'Poppins', sans-serif;
    }

    .banner-photo {
        max-width: 100%;
        height: auto;
        border-radius: 15px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.25);
        object-fit: cover;
    }

    .logo-photo {
        position: absolute;
        top: 15px;
        left: 15px;
        width: 80px;
        height: 80px;
        object-fit: contain;
        background: white;
        border-radius: 50%;
        padding: 5px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.25);
    }

    /* Agar teks sejajar atas dengan gambar */
    #about .row {
        display: flex;
        align-items: flex-start;
        /* tadinya center */
    }

    /* Responsif di HP */
    @media (max-width: 767px) {
        #about .row {
            flex-direction: column;
            text-align: center;
        }

        .about-title {
            font-size: 1.8rem;
        }

        .about-subtitle {
            font-size: 1rem;
        }
    }
</style>