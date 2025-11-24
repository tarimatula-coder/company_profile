<!-- TOP NAV -->
<div class="top-nav" id="home">
    <div class="container d-flex justify-content-between align-items-center">

        <!-- Jam & Tanggal di kiri -->
        <div class="jam-tanggal text-dark fw-semibold">
            <span id="tanggal"><?= date('l, d F Y') ?></span> |
            <span id="jam"></span>
        </div>

        <!-- Sosial Media di kanan -->
        <div class="social-icons d-flex">
            <?php
            $qSocial_media = "SELECT * FROM social_media LIMIT 3";
            $resultSocial_media = mysqli_query($connect, $qSocial_media) or die(mysqli_error($connect));
            while ($sm = $resultSocial_media->fetch_object()):
            ?>
                <a href="<?= $sm->link_url ?>" target="_blank" class="ms-2">
                    <img src="../storages/social_media/<?= $sm->icon; ?>" alt="<?= $sm->icon; ?>">
                </a>
            <?php endwhile; ?>
        </div>
    </div>
</div>

<!-- Script Jam -->
<script>
    function updateJam() {
        const now = new Date();
        let h = now.getHours().toString().padStart(2, '0');
        let m = now.getMinutes().toString().padStart(2, '0');
        let s = now.getSeconds().toString().padStart(2, '0');
        document.getElementById('jam').innerText = h + ":" + m + ":" + s;
    }
    setInterval(updateJam, 1000);
    updateJam();
</script>

<!-- STYLE -->
<style>
    .jam-tanggal {
        font-size: 18px;
        font-weight: 600;
    }

    .social-icons img {
        width: 20px;
        height: 20px;
        object-fit: contain;
    }
</style>

</div>
</div>

<!-- BOTTOM NAV -->
<?php
$qabout = "SELECT * FROM abouts LIMIT 1";
$resultabout = mysqli_query($connect, $qabout) or die(mysqli_error($connect));
?>
<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
    <div class="container">
        <?php while ($item = $resultabout->fetch_object()) : ?>
            <a class="navbar-brand d-flex align-items-center text-uppercase" href="#">
                <img src="../storages/about/<?= $item->school_logo ?>" alt="" style="height: 35px; margin-right: 8px;">
                Smkn 1 Bangsri<span class="dot"></span>
            </a>

        <?php endwhile; ?>
        <!-- Toggler (sudah diperbaiki data-bs-toggle) -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#home">BERANDA</a>
                </li>
               
                <!-- Dropdown Major -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="majorDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        TENTANG KAMI
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="majorDropdown">
                        <li><a class="dropdown-item" href="#about">TENTANG SEKOLAH</a></li>
                        <li><a class="dropdown-item" href="#major">JURUSAN</a></li>
                        <li><a class="dropdown-item" href="#achievement">PENCAPAIAN</a></li>
                        <li><a class="dropdown-item" href="#announcements">PENGUMUMAN</a></li>
                        <li><a class="dropdown-item" href="#headmaster">KEPALA SEKOLAH</a></li>
                        <li><a class="dropdown-item" href="#visi-misi">VISI MISI</a></li>
                        <li><a class="dropdown-item" href="#extracurricular">EKSTRAKULIKULER</a></li>
                        <li><a class="dropdown-item" href="#cooperation">KERJA SAMA</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#galleri">GALERI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#teacher">GURU</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#reviews">TESTIMONI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#blog">ARTIKEL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">KONTAK</a>
                </li>
            </ul>
        </div>
        <a href="#message" data-bs-toggle="modal" data-bs-target="#exampleModal"
            class="btn btn-brand ms-lg-3" style="background-color: #FA886E;">PESAN</a>
    </div>
</nav>

<!-- Bootstrap JS (pastikan ada) -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const sections = document.querySelectorAll("#major, #achievement, #announcements, #headmaster, #visi-misi, #extracurricular, #cooperation");
        const navLinks = document.querySelectorAll('.dropdown-menu .dropdown-item');

        function setActiveLink() {
            let scrollPos = window.scrollY + 200;

            sections.forEach(section => {
                let id = section.getAttribute("id");
                let link = document.querySelector(`.dropdown-menu a[href="#${id}"]`);

                if (section.offsetTop <= scrollPos && (section.offsetTop + section.offsetHeight) > scrollPos) {
                    navLinks.forEach(a => a.classList.remove("active"));
                    if (link) link.classList.add("active");
                }
            });
        }

        window.addEventListener("scroll", setActiveLink);
        setActiveLink(); // Panggil saat load pertama

        // Tambahkan smooth scroll saat klik
        navLinks.forEach(link => {
            link.addEventListener("click", function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute("href"));
                if (target) {
                    window.scrollTo({
                        top: target.offsetTop - 100,
                        behavior: "smooth"
                    });
                }
            });
        });
    });
</script>