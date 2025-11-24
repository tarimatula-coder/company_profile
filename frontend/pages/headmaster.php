<?php
$qheadmaster = "SELECT * FROM headmasters LIMIT 1";
$resultheadmaster = mysqli_query($connect, $qheadmaster) or die(mysqli_error($connect));
?>
<!-- Headmaster -->
<section id="headmaster">
    <div class="container">
        <?php while ($item = $resultheadmaster->fetch_object()) : ?>
            <div class="row align-items-center">
                <!-- Bagian Kiri (Teks) -->
                <div class="col-lg-6">
                    <h4>Sambutan Kepala Sekolah</h4>
                    <p><?= $item->headmaster_description ?></p>
                </div>

                <!-- Bagian Kanan (Foto + Card Nama) -->
                <div class="col-lg-6 text-center">
                    <div class="headmaster-photo-wrapper">
                        <div class="photo-circle">
                            <img src="../storages/headmaster/<?= $item->headmaster_photo ?>"
                                alt="<?= $item->headmaster_name ?>"
                                class="headmaster-photo">
                        </div>
                        <div class="headmaster-card">
                            <h5 class="mb-0"><?= $item->headmaster_name ?></h5>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</section>

<style>
    .headmaster-title {
        font-size: 1.5rem;
        font-weight: 700;
        text-transform: uppercase;
        font-family: 'Poppins', sans-serif;
        margin: 0 0 15px;
    }

    .headmaster-photo-wrapper {
        display: inline-block;
        text-align: center;
    }

    .photo-circle {
        width: 230px;
        height: 230px;
        border-radius: 50%;
        background: #e53935;
        /* merah cerah */
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0 auto 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }

    .headmaster-photo {
        width: 200px;
        height: 200px;
        object-fit: cover;
        border-radius: 50%;
    }

    .headmaster-card {
        background: #0d1b2a;
        /* biru tua */
        border-radius: 8px;
        padding: 8px 16px;
        box-shadow: 0 3px 8px rgba(0, 0, 0, 0.2);
        display: inline-block;
    }

    .headmaster-card h5 {
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        color: #fff;
        margin: 0;
    }
</style>