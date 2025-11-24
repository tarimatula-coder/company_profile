<?php
$qTestimonial = "SELECT * FROM testimonials LIMIT 10";
$resultTestimonial = mysqli_query($connect, $qTestimonial) or die(mysqli_error($connect));
?>
<section class="" id="reviews">
    <div class="owl-theme owl-carousel reviews-slider container">
        <?php while ($item = $resultTestimonial->fetch_object()) : ?>
            <div class="review">
                <div class="person">
                    <img src="../storages/testimonial/<?= $item->image ?>" alt="">
                    <h5><?= $item->name ?></h5>
                    <small><?= $item->status ?></small>
                </div>
                <h3><?= $item->message ?></h3>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class="bx bxs-star-half"></i>
                </div>
                <!-- <i class='bx bxs-quote-alt-left'></i> -->
            </div>
        <?php endwhile; ?>
    </div>
</section>