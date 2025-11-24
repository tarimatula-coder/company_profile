<?php
$qMajor = "SELECT * FROM majors LIMIT 3";
$resultMajor = mysqli_query($connect, $qMajor) or die(mysqli_error($connect));
?>
<section id="major" class="text-center">
    <style>
        .major-link {
            display: block;
            text-decoration: none;
            color: inherit;
            height: 100%;
            border-radius: 15px;
            overflow: hidden;
            background: linear-gradient(135deg, #a8edea, #fed6e3);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            transition: transform .3s ease, box-shadow .3s ease, color .3s ease;
        }

        .major-link:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.2);
            color: #ff6f91;
            /* Warna hover diambil dari gradasi */
        }

        .major-link img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            display: block;
        }

        .major-content {
            padding: 15px;
        }

        .major-content h5 {
            margin: 12px 0 8px;
            font-weight: bold;
            font-size: 18px;
        }

        .major-content p {
            font-size: 14px;
            margin-bottom: 8px;
            line-height: 1.4;
            color: #555;
        }

        /* Efek sudut bercahaya */
        .major-link::before,
        .major-link::after {
            content: "";
            position: absolute;
            width: 50px;
            height: 50px;
            pointer-events: none;
        }

        .major-link::before {
            top: 0;
            left: 0;
            border-top: 6px solid #1abc9c;
            border-left: 6px solid #1abc9c;
            border-top-left-radius: 15px;
            box-shadow: 0 0 10px #1abc9c, 0 0 20px #1abc9c, 0 0 30px #1abc9c;
        }

        /* .major-link::after {
            bottom: 0;
            right: 0;
            border-bottom: 6px solid #3498db;
            border-right: 6px solid #3498db;
            border-bottom-right-radius: 15px;
            box-shadow: 0 0 10px #3498db, 0 0 20px #3498db, 0 0 30px #3498db;
        } */
    </style>

    <div class="container position-relative">
        <div class="row">
            <div class="col-12">
                <div class="intro mb-4 text-center">
                    <h1>Kompetensi Keahlian</h1>
                    <p class="mx-auto" style="max-width: 600px;">
                        Di SMK Negeri 1 Bangsri memiliki 5 Kompetensi Keahlian, diantaranya:
                    </p>
                </div>
            </div>
        </div>
        <div class="row text-center g-4">
            <?php while ($item = $resultMajor->fetch_object()): ?>
                <div class="col-lg-4 col-md-6 d-flex">
                    <a href="./pages/detail/major.php?id=<?= $item->id ?>" class="major-link position-relative">
                        <img src="../storages/major/<?= $item->major_image ?>" alt="<?= $item->major_name ?>">
                        <div class="major-content">
                            <h5><?= $item->major_name ?></h5>
                            <p><?= $item->head ?></p>
                            <p><?= $item->major_description ?></p>
                        </div>
                    </a>
                </div>
            <?php endwhile; ?>
        </div>

        <div class="row mt-4">
            <div class="col-12 text-center mt-4">
                <a href="./pages/detail/allMajor.php" class="btn btn-primary">Lihat semua</a>
            </div>
        </div>
    </div>
</section>