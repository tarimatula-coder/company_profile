<?php
$qGalleri = "SELECT * FROM Galleries LIMIT 9";
$resultGalleri = mysqli_query($connect, $qGalleri) or die(mysqli_error($connect));
?>
<section class="" id="galleri">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="intro">
                    <h1>Galleri</h1>
                    <p class="mx-auto">Berikut ini galleri dokumentasi kegiatan tentang sekolah</p>
                </div>
            </div>
        </div>
    </div>
    <div id="projects-slider" class="owl-theme owl-carousel">
        <?php while ($item = $resultGalleri->fetch_object()) : ?>
            <div class="project">
                <div class="overlay"></div>
                <img src="../storages/galleri/<?= $item->image ?>" alt="<?= $item->image ?>">
                <div class="content">
                    <h2><?= $item->description ?></h2>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</section>