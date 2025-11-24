 <!--  Main wrapper -->
 <div class="body-wrapper">
     <!--  Header Start -->
     <header class="app-header">
         <nav class="navbar navbar-expand-lg navbar-light">
             <ul class="navbar-nav">

                 <li class="nav-item d-block d-xl-none">
                     <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                         <i class="ti ti-menu-2"></i>
                     </a>
                 </li>
                 <style>
                     .jam-tanggal {
                         font-size: 18px;
                         /* Perbesar tulisan */
                         font-weight: 600;
                         /* Tebalkan sedikit */
                     }
                 </style>

                 <div class="jam-tanggal text-dark fw-semibold me-3">
                     <span id="tanggal"><?= date('l, d F Y') ?></span> |
                     <span id="jam"></span>
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

             </ul>
             <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                 <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                     <li class="nav-item dropdown">
                         <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                             aria-expanded="false">
                             <img src="../../SEODash-1.0.0/SEODash-1.0.0/src/assets/images/logos/user.png" alt="" width="30" height="30" class="rounded-circle">
                         </a>
                         <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                             <div class="message-body">
                                 <a href="javascript:void(0)" class="dropdown-item d-flex flex-column gap-1">
                                     <div class="d-flex align-items-center gap-2">
                                         <i class="ti ti-user fs-6"></i>
                                         <p class="mb-0 fs-3"><?= $_SESSION['name'] ?></p>
                                     </div>
                                     <div class="d-flex align-items-center gap-2">
                                         <i class="ti ti-mail fs-6"></i>
                                         <p class="mb-0 fs-3"><?= $_SESSION['email'] ?></p>
                                     </div>
                                 </a>
                                 <a href="../../actions/auth/logout.php" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                             </div>
                         </div>
                     </li>
                 </ul>
             </div>
         </nav>
     </header>
     