<?php
// Ambil data teacher
$qTeacher = "SELECT * FROM teachers";
$resultTeacher = mysqli_query($connect, $qTeacher) or die(mysqli_error($connect));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <title>Team Members</title> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

    <style>
        a.card-link {
            text-decoration: none;
            color: inherit;
            display: block;
        }

        .card {
            border-radius: 15px;
            overflow: hidden;
            background: linear-gradient(135deg, #a8edea, #fed6e3);
            box-shadow: 0px 6px 20px rgba(0, 0, 0, 0.15);
            transition: transform .2s ease, box-shadow .2s ease;
            position: relative;
            text-align: center;
            cursor: pointer;
        }

        .card::before {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(255, 255, 255, 0.6);
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0px 12px 25px rgba(0, 0, 0, 0.25);
        }

        .card img {
            border-radius: 50%;
            width: 100px !important;
            height: 100px !important;
            object-fit: cover;
            margin: 25px auto 10px;
            display: block;
            border: 5px solid #a8edea;
            z-index: 1;
            position: relative;
        }

        .card-body {
            position: relative;
            z-index: 1;
        }

        .card-body h5,
        .card-body p {
            margin: 5px 0;
            transition: color 0.3s ease;
        }

        .card-body h5 {
            font-weight: bold;
            color: #333;
        }

        .card-body p {
            color: #555;
        }

        a.card-link:hover .card-body h5,
        a.card-link:hover .card-body p {
            color: #007bff;
        }

        a.card-link.active .card-body h5,
        a.card-link.active .card-body p {
            color: #0056b3;
        }
    </style>


</head>

<body>
    <section id="teacher">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <h1>Guru kami</h1>
                    <p class="mx-auto" style="max-width: 600px;">
                        Berikut ini nama-nama guru kami
                    </p>
                </div>
            </div>
            <div class="owl-carousel owl-theme teacher-slider">
                <?php while ($item = mysqli_fetch_object($resultTeacher)) : ?>
                    <div class="item">
                        <a href="./pages/detail/teacher.php?id=<?= $item->id ?>" class="card-link">
                            <div class="card">
                                <img src="../storages/teacher/<?= $item->teacher_photo ?>" alt="<?= $item->teacher_name ?>">
                                <div class="card-body">
                                    <h5><?= $item->teacher_name ?></h5>
                                    <h6><?= $item->gender ?></h6>
                                    <p class="text-muted"><?= $item->teacher_major ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".teacher-slider").owlCarousel({
                loop: true,
                margin: 20,
                dots: true,
                autoplay: true,
                autoplayTimeout: 3000,
                responsive: {
                    0: {
                        items: 1
                    },
                    576: {
                        items: 2
                    },
                    992: {
                        items: 3
                    }
                }
            });

            $("a.card-link").click(function() {
                $("a.card-link").removeClass("active");
                $(this).addClass("active");
            });
        });
    </script>
</body>

</html>