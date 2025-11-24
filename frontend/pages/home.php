<?php
$qAbout = mysqli_query($connect, "SELECT * FROM abouts LIMIT 2");
?>


<div class="owl-carousel owl-theme hero-slider">
    <?php while ($about = mysqli_fetch_assoc($qAbout)) : ?>
        <div class="slide" style="background-image: url('../storages/about/<?= $about['school_banner'] ?>'); background-size:cover; background-position:center;">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center text-white">
                        <h1 class="display-3 my-4"><?= $about['school_name'] ?></h1>
                        <h6 class="text-white text-uppercase"><?= $about['school_tagline'] ?></h6>
                        <!-- <a href="#" class="btn btn-brand" style="background-color: #FA886E;">Get Started</a>
                        <a href="#" class="btn btn-outline-light ms-3">Our work</a> -->
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
</div>