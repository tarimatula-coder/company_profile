<!-- Load Boxicons -->
<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

<section id="visi-misi" class="py-5">
    <div class="container">
        <!-- Judul -->
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h1>Visi & Misi</h1>
                <p>SMKN 1 BANGSRI</p>
            </div>
        </div>

        <div class="row g-4 justify-content-center">
            <?php
            $qvisi_mission = "SELECT * FROM visi_missions LIMIT 2";
            $resultvisi_mission = mysqli_query($connect, $qvisi_mission) or die(mysqli_error($connect));
            while ($item = $resultvisi_mission->fetch_object()) :
            ?>
                <div class="col-lg-8 col-md-10">
                    <div class="visi-misi-card">
                        <h4 class="text-start"><?= $item->category ?></h4>
                        <div class="visi-misi-content">
                            <ul>
                                <?php
                                $points = explode(';', $item->text);
                                foreach ($points as $point) :
                                    $point = trim($point);
                                    if (!empty($point)) :
                                ?>
                                        <li><?= $point ?></li>
                                <?php
                                    endif;
                                endforeach;
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>

<style>
    .visi-misi-card {
        border-radius: 15px;
        padding: 25px 30px;
        background: linear-gradient(135deg, #a8edea, #fed6e3);
        /* gradasi biru ungu */
        color: #fff;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
        /* shadow lebih tegas */
        margin-bottom: 20px;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .visi-misi-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.3);
    }

    .visi-misi-card h4 {
        font-weight: 700;
        margin-bottom: 15px;
        color: black;
        font-size: 20px;
    }

    .visi-misi-card ul {
        list-style: disc;
        padding-left: 25px;
        color: black;
        margin: 0;
    }

    .visi-misi-card ul li {
        margin-bottom: 10px;
        color: black;
        font-size: 16px;
    }
</style>