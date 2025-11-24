<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kerja Sama</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

    <style>
        /* Section title */
        #cooperation .title-wrap h1 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #1a1a1a;
            margin-bottom: 2rem;
        }

       .img-wrapper {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 120px; /* tinggi slider item */
}

.partner-img {
    max-width: 70%;   /* kecilkan gambar, sedang */
    max-height: 100%;
    object-fit: contain; /* tetap proporsional */
    transition: transform 0.3s ease;
}
        .partner-img:hover {
            transform: scale(1.1);
        }

        /* Dots */
        .owl-dots {
            margin-top: 15px;
        }

        .owl-dot span {
            background: #007bff;
            width: 12px;
            height: 12px;
            display: block;
            border-radius: 50%;
            transition: all 0.3s;
        }

        .owl-dot.active span {
            background: #0056b3;
            transform: scale(1.2);
        }

        @media (max-width: 576px) {
            #cooperation .title-wrap h1 {
                font-size: 1.8rem;
            }

            .img-wrapper {
                height: 100px;
            }
        }
    </style>
</head>

<body>
    <section id="cooperation" class="py-5 bg-light">
        <div class="container">
            <div class="col-12 text-center mb-4">
                <h1>Mitra Iduka</h1>
                <p class="mx-auto" style="max-width: 600px;">
                    Ketuk untuk membuka Web Resmi IDUKA
                </p>
            </div>

            <div class="owl-carousel owl-theme cooperation-slider">
                <?php
                $qcooperation = "SELECT * FROM cooperations";
                $resultcooperation = mysqli_query($connect, $qcooperation) or die(mysqli_error($connect));

                while ($item = $resultcooperation->fetch_object()) :
                ?>
                    <div class="item">
                        <a href="<?= htmlspecialchars($item->link) ?>" target="_blank" class="text-decoration-none">
                            <div class="img-wrapper">
                                <img src="../storages/cooperation/<?= htmlspecialchars($item->image) ?>"
                                    alt="<?= htmlspecialchars($item->link ?? 'Logo') ?>"
                                    class="partner-img mx-auto">
                            </div>
                        </a>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".cooperation-slider").owlCarousel({
                loop: true,
                margin: 30,
                dots: true,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    576: {
                        items: 2
                    },
                    768: {
                        items: 3
                    },
                    992: {
                        items: 4
                    },
                    1200: {
                        items: 5
                    }
                }
            });
        });
    </script>
</body>

</html>