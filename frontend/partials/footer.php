 <footer>
     <div class="footer-top text-center">
         <div class="container">
             <div class="row justify-content-center">
                 <div class="col-lg-6 text-center">
                     <p class="">SMKN 1 BANGSRI<span class="dot"></span></p>
                     <p>"Berikut ini adalah sosial media smkn 1 bangsri, Lihat keseruan aktivitas, karya siswa, dan momen penting di sosial media di bawah ini"</p>
                     <?php
                        $qSocial_media = "SELECT * FROM social_media LIMIT 3";
                        $resultSocial_media = mysqli_query($connect, $qSocial_media) or die(mysqli_error($connect));
                        ?>
                     <?php
                        while ($item = $resultSocial_media->fetch_object()):
                        ?>
                         <a href="<?= $item->link_url ?>"><img src="../storages/social_media/<?= $item->icon; ?>" alt="<?= $item->icon; ?>" style=" width: 60px; height:60px; border-radius: 50%;"></a>
                     <?php endwhile; ?>
                 </div>
             </div>
         </div>
     </div>
     </div>
     <div class="footer-bottom text-center">
         <p class="mb-0">SMKN 1 BANGSRI</p><a
             href="http://localhost/company_profile/backend/pages/about/index.php"><span class="text-white display-none">Distributed By </span>@SMKN1BANGSRI</a>
     </div>
 </footer>