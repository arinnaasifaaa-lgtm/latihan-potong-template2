<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Curriculum Vitae of Karina</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- link icon yg didapat dari devicon.dev --> 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@2.15.1/devicon.min.css">

  <style>
    /* Supaya teks Hero bergeser ke kanan dan tidak tertutup sidebar di layar komputer */
    @media (min-width: 1200px) {
      .hero {
        margin-left: 300px;
      }
    }
    #header::-webkit-scrollbar {
      display: none;
    }

    .hero {
      position: relative;
      width: auto;
      height: 100vh;
      overflow: hidden;
    }

    .hero .hero-bg {
      position: absolute;
      inset: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: 0;
    }

    .hero::before {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(0, 0, 0, .45);
      z-index: 1;
    }

    .hero .container {
      position: relative;
      z-index: 2;
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: flex-start;
      padding-left: 70px;
    }

    .hero h2 {
      color: #fff;
      font-size: 64px;
      font-weight: 700;
      margin-bottom: 10px;
    }

    .hero p {
      color: #fff;
      font-size: 28px;
    }

    /* Merapikan Foto Profile Sidebar */
    .profile img {
      width: 200px !important;
      height: 200px !important;
      border-radius: 50% !important;
      object-fit: cover !important;
      object-position: center !important;
      display: block;
      margin: 15px auto;
      border: 8px solid rgba(255, 255, 255, .15);
    }

   /* Menghilangkan bullet point list */
.nav-menu ul {
  list-style: none !important;
  padding: 0 !important;
  margin: 0 !important;
}

/* WARNA & LAYOUT DEFAULT (Teks & Ikon Redup) */
.nav-menu a {
  display: flex !important;
  align-items: center !important;
  gap: 12px !important; /* Mencegah ikon & teks bertumpuk */
  color: #a8b2d1;
  text-decoration: none;
  padding: 10px 15px;
  transition: all 0.3s ease;
}

.nav-menu a i {
  position: static !important; /* Matikan posisi absolute bawaan template */
  font-size: 20px !important;
  color: #6c757d;
  margin: 0 !important;
  transition: all 0.3s ease;
}

.nav-menu a span {
  position: static !important;
  color: #a8b2d1;
  transition: all 0.3s ease;
}

/* WARNA MENYALA (Saat Active / Di-hover) */
.nav-menu a.active,
.nav-menu a.active span,
.nav-menu a:hover,
.nav-menu a:hover span {
  color: #ffffff !important; /* Teks & Span jadi putih terang */
  font-weight: 600;
}

.nav-menu a.active i,
.nav-menu a:hover i {
  color: #149ddd !important; /* Ikon jadi biru menyala */
}
    .portfolio .portfolio-wrap {
  transition: 0.3s;
  position: relative;
  overflow: hidden;
  z-index: 1;
  border-radius: 8px;
  margin: 12px; /* <--- TAMBAHKAN INI (Sesuaikan angkanya, misal 10px - 15px) */
}

.portfolio .portfolio-wrap::before {
  content: "";
  background: rgba(0, 0, 0, 0.6);
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  transition: all ease-in-out 0.3s;
  z-index: 2;
  opacity: 0;
}

.portfolio .portfolio-wrap .portfolio-links {
  opacity: 0;
  left: 0;
  right: 0;
  top: calc(50% - 18px);
  position: absolute;
  z-index: 3;
  text-align: center;
  transition: all ease-in-out 0.3s;
}

.portfolio .portfolio-wrap .portfolio-links a {
  color: #fff;
  font-size: 24px;
  background: #149ddd;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 36px;
  height: 36px;
  border-radius: 50%;
  transition: 0.3s;
  margin: 0 2px;
  text-decoration: none;
}
.portfolio .portfolio-wrap img {
  width: 100%;
  height: auto;
  display: block;
}

.portfolio .portfolio-wrap .portfolio-links a:hover {
  background: #37b3ed;
}

.portfolio .portfolio-wrap:hover::before,
.portfolio .portfolio-wrap:hover .portfolio-links {
  opacity: 1;
}
   
  </style>
</head>

<body>
  <?php
  include "../Backend sb-admin/connection.php";
  // FROM "profile" di bwh ini adl nama tabel di dlm database
  $tampil_profile = mysqli_query($koneksi, "SELECT * FROM profile");
  $p = mysqli_fetch_object($tampil_profile);
  ?>

  <!--- ==== Mobile nav toggle button === -->
  <i class="header-toggle bi bi-list d-xl-none"></i>
    
  <!-- ==== header ==== -->
 <header id="header" class="header dark-background">
    <div class="d-flex flex-column">

      <div class="profile text-center">
        <!-- menampilkan data foto sidebAR START -->
        <?php
        include "../Backend sb-admin/connection.php";
        $tampil_sidebar_photo = mysqli_query($koneksi, "SELECT * FROM sidebar_photo");
        $sb = mysqli_fetch_object($tampil_sidebar_photo);
        ?>
        <!-- end -->

       <img src="../Backend sb-admin/foto/<?php echo $sb->sidebar_photo; ?>"
             alt=""
           style="width: 180px !important; height: 180px !important; object-fit: cover;"
     class="img-fluid rounded-circle">
        
        <!-- Nama Profile (Di bawah foto, rata tengah, warna putih) -->
        <h1 class="text-light text-center">
          <a href="index.php" style="color: #ffffff !important; text-decoration: none;">
            <?php echo $p->nama ?>
          </a>
        </h1>
      </div>

      <div class="social-links mt-3 text-center">
 <!-- <a href="<?php echo isset($p->twitter) ? $p->twitter : '#'; ?>" class="twitter" target="_blank"><i class="bi bi-twitter-x"></i></a> --> 
 <!-- <a href="<?php echo isset($p->facebook) ? $p->facebook : '#'; ?>" class="facebook" target="_blank"><i class="bi bi-facebook"></i></a> --> 
   <a href="https://www.instagram.com/_rinaariiinnn" class="instagram" target="_blank">
    <i class="bx bxl-instagram"></i></a>
  <!-- <a href="<?php echo isset($p->skype) ? $p->skype : '#'; ?>" class="skype" target="_blank"><i class="bi bi-skype"></i></a> -->
 <!-- <a href=<"<!?php echo isset($p->linkedin) ? $p->linkedin : '#'; ?>" class="linkedin" target="_blank"><i class="bi bi-linkedin"></i></a> -->
</div>
        
      <nav id="navbar" class="nav-menu">
  <ul>
    <li><a href="#hero" class="nav-link scrollto active"><i class="bi bi-house"></i> <span>Home</span></a></li>
    <li><a href="#about" class="nav-link scrollto"><i class="bi bi-person"></i> <span>Overview</span></a></li>
    <li><a href="#skills" class="nav-link scrollto"><i class="bi bi-award"></i> <span>Proficiency</span></a></li>
    <li><a href="#education" class="nav-link scrollto"><i class="bi bi-file-earmark-text"></i> <span>Education</span></a></li>
    <li><a href="#experience" class="nav-link scrollto"><i class="bi bi-briefcase"></i> <span>Experience</span></a></li>
    <li><a href="#portfolio" class="nav-link scrollto"><i class="bi bi-images"></i> <span>Portfolio</span></a></li>
    <li><a href="#services" class="nav-link scrollto"><i class="bi bi-people"></i> <span>References</span></a></li>
  </ul>
</nav>
<!-- Letakkan script di sini -->
    <script>
      const navLinks = document.querySelectorAll('.nav-link');
      
      navLinks.forEach(link => {
        link.addEventListener('click', function() {
          navLinks.forEach(nav => nav.classList.remove('active'));
          this.classList.add('active');
        });
      });
      </script>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- end header --> 

  <!-- Hero Section -->
  <section id="hero" class="hero section dark-background">

    <img src="../Backend sb-admin/foto/<?php echo $sb->sidebar_photo; ?>"
         class="hero-bg"
         alt="">

    <div class="container" data-aos="fade-up">

        <h2><?php echo $p->nama; ?></h2>

        <p>
            Saya
            <span class="typed"
                  data-typed-items="Bekerja Keras,Ramah,Mudah Bergaul,Kreatif">
            </span>
        </p>

    </div>

  </section><!-- / end Hero Section -->

      <main id="main">

    <!-- About Section -->
    <section id="about" class="about section">
      <div class="container">

      <!-- Section Title -->
      <div class="section-title">
        <h2>OVERVIEW</h2>
       <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. 
        Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.
        Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --> 
        <p style="text-align:justify; font-size: 25px; line-height: 1.6;"><?php echo $p->about; ?></p> <br>

      </div><!-- End Section Title -->

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="../Backend sb-admin/foto/<?php echo $sb->sidebar_photo ?>" class="img-fluid" alt="" width="350">
          </div>
         <div class="col-lg-8 pt-0 pt-lg-0 content" data-aos="fade-left">
            <!-- <h2>UI/UX Designer &amp; Web Developer.</h2> -->
             <div class="section-title" style="padding-bottom: 10px; margin-bottom: 15px;">

              <h2> INFORMASI PRIBADI</h2>
             </div>
            <!-- <p class="fst-italic py-3">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p> --> 
            <div class="row">
              <div class="col-lg">
                <ul>
                 <!--  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>1 May 1995</span></li> -->
                 <li class="d-flex align-items-start gap-2" style="font-size: 23px; margin-bottom: 25px;">
  <i class="bi bi-chevron-right mt-1"></i> 
  <strong class="text-nowrap">Website:</strong> 
  <span class="text-break">
    <a href="<?php echo $p->website ?>" target="_blank"><?php echo $p->website ?></a>
  </span>
</li>
                  <li style="font-size: 23px; margin-bottom: 25px;"><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span><?php echo $p->phone ?></span></li>
                  <li style="font-size: 23px; margin-bottom: 25px; display: flex; align-items: flex-start; gap: 8px;"><i class="bi bi-chevron-right" style="margin-top: 4px;"></i> <strong style="white-space: nowrap;">Address:</strong> <span style="flex: 1;"><?php echo $p->address ?></span></li>
                  <li style="font-size: 23px; margin-bottom: 25px;"><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span><?php echo $p->email ?></span></li>
                  <li style="font-size: 23px; margin-bottom: 25px;"><i class="bi bi-chevron-right"></i> <strong>Nationality:</strong> <span><?php echo $p->nationality ?></span></li>
                </ul>
              </div>

              <!-- <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>30</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Master</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>email@example.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
                </ul>
              </div>-->
            </div>
            <!-- <p class="py-3">
              Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
              Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque.
            </p> -->
          </div>
        </div>

      </div>

    </section><!-- / End About Section -->

    <!-- facts Section -->
    <section id="facts" class="facts">

      <div class="container">

       <!--  <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Happy Clients</strong> <span>consequuntur quae</span></p>
            </div> 
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="stats-item">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Projects</strong> <span>adipisci atque cum quia aut</span></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="stats-item">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Hours Of Support</strong> <span>aut commodi quaerat</span></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="stats-item">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Hard Workers</strong> <span>rerum asperiores dolor</span></p>
            </div>
          </div>

        </div> -->

      </div>

    </section><!-- /End Facts Section -->

    <!-- Skills Section -->
   <section id="skills" class="skills section" style="padding-top: 0 !important; margin-top: -115px !important;">

      <!-- Section Title -->
      <div class="container">
      <div class="section-title" style="color: gray; padding-bottom: 10px; margin-bottom: 15px;">
        <h2>KETERAMPILAN IT </h2>
        <h6 style="color: gray; margin-top: 10px; margin-bottom: 0;"> PROGRAMMING LANGUAGE & FRAMEWORKS </h6>
          <h4 class="title"> </h4>
        <div class="description">
                                <?php
                                // profile adl nama tabel di database
                                $tampil_mobile = mysqli_query($koneksi, "SELECT * FROM mobile");
                                while ($m = mysqli_fetch_object($tampil_mobile)):
                                ?>
           <!-- <i style="color: grey;font-size:35px" class="<?php echo $m->icon; ?> m-3></i> -->
           <i style="font-size:60px" class="icon-with-tooltip <?php echo $m->icon; ?> colored m-3"
           data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo $m->nama ?>"></i>
          <?php endwhile; ?>
    </div>
  </div>
      <div class="section-title mb-4">
        <h6 style="color:gray">FAMILIAR WITH</h6>
          <h4 class="title"></h4>
          <div class="description"> <?php 
                                // profile adl nama tabel di database
                                $tampil_familiar = mysqli_query($koneksi, "SELECT * FROM familiar");
                                while ($m = mysqli_fetch_object($tampil_familiar)):
                                ?>
           <!-- <i style="color: grey;font-size:35px" class="<?php echo $m->icon; ?> m-3></i> -->
           <i style="font-size:60px" class="icon-with-tooltip <?php echo $m->icon; ?> colored m-3"
           data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo $m->nama ?>"></i>
           
           <!-- untuk memunculkan TOOLTIP per icon dibutuhkan JaaScript as below -->
           <!-- JavaScript start -->
  
          <!-- java script end -->
          <!-- Next, we'll scrolldown to end of the body --> 
          <?php endwhile; ?>

    </div>
  </div>
    <div class="section-title mb-4" style="color: grey;">
      <h6 style="color:gray"> TOOLS & PLATFORMS </h6>

        <h4 class="title"> </h4>
         <div class="description"> <?php 
                                // profile adl nama tabel di database
                                $tampil_tools = mysqli_query($koneksi, "SELECT * FROM tools");
                                while ($m = mysqli_fetch_object($tampil_tools)):
                                ?>
           <!-- <i style="color: grey;font-size:35px" class="<?php echo $m->icon; ?> m-3></i> -->
           <i style="font-size:60px" class="icon-with-tooltip <?php echo $m->icon; ?> colored m-3"
           data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo $m->nama ?>"></i>
        
          <?php endwhile; ?>

    </div>
  </div>
    <div class="section-title mt-4">
       <h2> LANGUAGE PROFICIENTY </h2>
       
       <?php 
       // profile adl nama tabel di database
       $tampil_language = mysqli_query($koneksi, "SELECT * FROM language ORDER BY id_language DESC ");
       while ($l = mysqli_fetch_object($tampil_language)):
       ?>
        <div class="row">
          <div class="col">
            <h6 class="skill" style="color:grey; font-size: 23px;"> 
             <?php echo $l->bahasa ?> </h6>
        </div>
        <div class="col">

         <img src="../Backend sb-admin/fotobende/<?php echo $l->flag; ?>" alt="" class="val mb-3" width="100px">
     </div>
   </div>

  <?php endwhile; ?>
</div>
     <div class="section-title mt-4">
        <h2> ADDITIONAL SKILLS </h2>
        <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. 
        Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. 
        Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --> 
      </div>

      <div class="row skills-content">

       <div class="col-lg" data-aos="fade-up">

         <!-- membuat tampilan skill menggunakan perulangan WHILE -->
          <?php
          include "../Backend sb-admin/connection.php";
          // profile adalah nama tabel di database
          $tampil_skill = mysqli_query($koneksi, "SELECT * FROM skill ORDER BY id_skill DESC");
          while ($s = mysqli_fetch_object($tampil_skill)):
          ?>

           <span style="display: block; font-size: 25px; font-weight: 500; color: grey; margin-bottom: 12px;"><?php echo $s->nama_skill ?></span> <br>
          <?php endwhile; ?>
           <!-- perulangan end -->
           <!-- icon start -->
           <!-- ambil iconnya dari devicon.dev dn linknya di letakkan di <HEAD> atas -->

            <!-- <div class="progress">
              <span class="skill"><span>HTML</span> <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill"><span>CSS</span> <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill"><span>JavaScript</span> <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill"><span>PHP</span> <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill"><span>WordPress/CMS</span> <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill"><span>Photoshop</span> <i class="val">55%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div> -->

          </div>

        </div>

      </div>

    </section><!-- / End Skills Section -->

    <!-- Resume Section -->
   <section id="resume" class="resume section">
  <div class="container">

    <!-- EDUCATION -->
    <div class="section-title">
      <h2 id="education">EDUCATION</h2>
    </div>

    <?php
    include "../Backend sb-admin/connection.php";
    $tampil_education = mysqli_query($koneksi, "SELECT * FROM education ORDER BY id_education DESC");
    while ($e = mysqli_fetch_object($tampil_education)):
    ?>

    <div class="resume-item">
      <div class="row">

        <div class="col-10">
          <h4 style="color:grey; font-size: 25px; font-weight: 700; margin-bottom: 15px; "><?php echo $e->nama_jurusan; ?></h4>
          <p style="font-size: 25px; margin-bottom: 15px;"><em><?php echo $e->tempat_belajar; ?></em></p>
          <p style="font-size: 20px; color: black; line-height: 1.6; margin-bottom: 15;">
            <?php echo $e->deskripsi; ?>
          </p>
        </div>

        <div class="col-2 text-end">
          <h5 style="background:none;color:grey; font-size: 20px; font-weight: 600; margin-bottom: 15;">
            <?php echo $e->tahun_belajar; ?>
          </h5>
        </div>

      </div>
    </div>

    <?php endwhile; ?>


    <!-- TRAINING -->
    <div class="section-title mt-5">
      <h2>TRAINING</h2>
    </div>

    <?php
    $tampil_training = mysqli_query($koneksi, "SELECT * FROM training ORDER BY id_training DESC");
    while ($t = mysqli_fetch_object($tampil_training)):
    ?>

    <div class="resume-item">
      <div class="row">

        <div class="col-10">
          <h4 style="color:grey; font-size: 25px; font-weight: 700; margin-bottom: 15px; ""><?php echo $t->nama_training; ?></h4>
          <p style="font-size: 25px; margin-bottom: 15px;"><em><?php echo $t->tempat_training; ?></em></p>
          <p style="font-size: 20px; margin-bottom: 15px;"><?php echo $t->deskripsi; ?></p>
        </div>

        <div class="col-2 text-end">
          <h5 style="background:none;color:grey; font-size: 20px; font-weight: 600; margin-bottom: 15px;">
            <?php echo $t->tahun_training; ?>
          </h5>
        </div>

      </div>
    </div>

    <?php endwhile; ?>


    <!-- EXPERIENCE -->
    <div class="section-title mt-5">
      <h2 id="experience">EXPERIENCE</h2>
    </div>

    <?php
    $tampil_job = mysqli_query($koneksi, "SELECT * FROM job ORDER BY id_job DESC");
    while ($j = mysqli_fetch_object($tampil_job)):
    ?>

    <div class="resume-item">
      <h4 style="color:grey; font-size: 25px; font-weight: 700; margin-bottom: 15px; "><?php echo $j->nama_pekerjaan; ?></h4>
      <h5 style="color:grey; font-size: 20px; font-weight: 600; margin-bottom: 15px;"> <?php echo $j->tahun_bekerja; ?></h5>
      <p style="font-size: 20px; margin-bottom: 15px;"><em><?php echo $j->tempat_bekerja; ?></em></p>

      <ul>
        <li style="padding-left: 20px; font-size: 18px; color: #161414; line-height: 1.6;"><?php echo $j->deskripsi; ?></li>
      </ul>
    </div>

    <?php endwhile; ?>

  </div>
</section>
  <!-- /End Resume Section -->

    <!-- Portfolio Section -->
   <section id="portfolio" class="portfolio section">
  <div class="container">

    <!-- Section Title -->
    <div class="section-title">
      <h2>PORTFOLIO</h2>
      <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. 
      Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
      ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
    </div>

    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
     <?php
include "../Backend sb-admin/connection.php";

// profile adl nama tabel di database
$tampil_portfolio = mysqli_query($koneksi, "SELECT * FROM portfolio ORDER BY id_portfolio DESC");

// Variabel pendukung
$total_data = mysqli_num_rows($tampil_portfolio); // Hitung total foto di database
$no = 1;
$limit = 6; // Jumlah foto yang mau ditampilkan di awal (bisa kamu ubah, misal jadi 3 atau 9)

while ($pf = mysqli_fetch_object($tampil_portfolio)):
  // Jika urutan foto sudah lebih dari limit, berikan class 'd-none portfolio-hidden' (disembunyikan)
  $hiddenClass = ($no > $limit) ? 'd-none portfolio-hidden' : '';
?>
  <div class="col-lg-4 col-md-6 portfolio-item filter-web <?php echo $hiddenClass; ?>">
    <div class="portfolio-wrap">
      <img src="../Backend sb-admin/foto/<?php echo $pf->img ?>" class="img-fluid" alt="" style="width: 100%; height: 230px; object-fit: cover;">
      <div class="portfolio-links">
        <a href="../Backend sb-admin/foto/<?php echo $pf->img ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php echo $pf->judul_portfolio ?>">
          <i class="bx bx-plus"></i>
        </a>
        <a href="<?php echo trim($pf->link); ?>" target="_blank" rel="noopener noreferrer" title="More Details">
          <i class="bx bx-link"></i>
        </a>
      </div> 
    </div>
  </div>
<?php 
  $no++;
endwhile; 
?>

<!-- Tombol "Lihat Selengkapnya" (Hanya tampil jika total foto melebihi limit) -->
<?php if ($total_data > $limit): ?>
  <div class="col-12 text-center mt-4">
    <button id="btn-see-more" class="btn btn-primary px-4 py-2" style="border-radius: 20px;" onclick="togglePortfolio()">Lihat Selengkapnya</button>
  </div>
<?php endif; ?>
      

      <!-- <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
        <div class="portfolio-content h-100">
          <img src="assets/img/portfolio/app-1.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>App 1</h4>
            <p>Lorem ipsum, dolor sit amet consectetur</p>
            <a href="assets/img/portfolio/app-1.jpg" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
        <div class="portfolio-content h-100">
          <img src="assets/img/portfolio/product-1.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Product 1</h4>
            <p>Lorem ipsum, dolor sit amet consectetur</p>
            <a href="assets/img/portfolio/product-1.jpg" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
        <div class="portfolio-content h-100">
          <img src="assets/img/portfolio/branding-1.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Branding 1</h4>
            <p>Lorem ipsum, dolor sit amet consectetur</p>
            <a href="assets/img/portfolio/branding-1.jpg" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
        <div class="portfolio-content h-100">
          <img src="assets/img/portfolio/books-1.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Books 1</h4>
            <p>Lorem ipsum, dolor sit amet consectetur</p>
            <a href="assets/img/portfolio/books-1.jpg" title="Branding 1" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
        <div class="portfolio-content h-100">
          <img src="assets/img/portfolio/app-2.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>App 2</h4>
            <p>Lorem ipsum, dolor sit amet consectetur</p>
            <a href="assets/img/portfolio/app-2.jpg" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
        <div class="portfolio-content h-100">
          <img src="assets/img/portfolio/product-2.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Product 2</h4>
            <p>Lorem ipsum, dolor sit amet consectetur</p>
            <a href="assets/img/portfolio/product-2.jpg" title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
        <div class="portfolio-content h-100">
          <img src="assets/img/portfolio/branding-2.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Branding 2</h4>
            <p>Lorem ipsum, dolor sit amet consectetur</p>
            <a href="assets/img/portfolio/branding-2.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
        <div class="portfolio-content h-100">
          <img src="assets/img/portfolio/books-2.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Books 2</h4>
            <p>Lorem ipsum, dolor sit amet consectetur</p>
            <a href="assets/img/portfolio/books-2.jpg" title="Branding 2" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
        <div class="portfolio-content h-100">
          <img src="assets/img/portfolio/app-3.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>App 3</h4>
            <p>Lorem ipsum, dolor sit amet consectetur</p>
            <a href="assets/img/portfolio/app-3.jpg" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
        <div class="portfolio-content h-100">
          <img src="assets/img/portfolio/product-3.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Product 3</h4>
            <p>Lorem ipsum, dolor sit amet consectetur</p>
            <a href="assets/img/portfolio/product-3.jpg" title="Product 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
        <div class="portfolio-content h-100">
          <img src="assets/img/portfolio/branding-3.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Branding 3</h4>
            <p>Lorem ipsum, dolor sit amet consectetur</p>
            <a href="assets/img/portfolio/branding-3.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
        <div class="portfolio-content h-100">
          <img src="assets/img/portfolio/books-3.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Books 3</h4>
            <p>Lorem ipsum, dolor sit amet consectetur</p>
            <a href="assets/img/portfolio/books-3.jpg" title="Branding 3" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div> -->

    </div>

  </div>
</section><!-- /End Portfolio Section -->

    <!-- Services Section -->
    <section id="services" class="services section">
      <div class="container">

      <!-- Section Title -->
      <div class="section-title">
        <h2>REFERENCES</h2>
        <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. 
        Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit 
        alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
      </div> 

      <div class="row">
            <?php
            // profile adl nama tabel di database
            $tampil_reference = mysqli_query($koneksi, "SELECT * FROM reference ORDER BY id_reference DESC");
            while ($re= mysqli_fetch_object($tampil_reference)):
            ?>

            <div class="icon-box" data-aos="fade-up">
            <!-- 1. Ikon Telepon -->
            <div class="icon">
              <a href="tel:<?php echo $re->phone ?>" target="_blank">
               <i class="bi bi-telephone-fill"></i>
              </a>
            </div>

            <!-- 2. Nama Referensi (Besar & Tebal) -->
            <h4 class="title" style="color: grey; font-size: 25px; font-weight: 700; margin-bottom: 15px;">
               <?php echo $re->nama ?>
            </h4>

            <!-- 3. Perusahaan / Jabatan (Ukuran 18px & Rapi) -->
            <p class="description" style="font-size: 20px; color: #555555; line-height: 1.5; margin-bottom: 15px;">
               <?php echo $re->perusahaan ?>
            </p>
            </div>
          <?php endwhile; ?>
           <!--
          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="icon flex-shrink-0"><i class="bi bi-briefcase"></i></div>
            <div>
              <h4 class="title"><a href="service-details.html" class="stretched-link">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>
          </div>
          

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
            <div>
              <h4 class="title"><a href="service-details.html" class="stretched-link">Dolor Sitema</a></h4>
              <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="icon flex-shrink-0"><i class="bi bi-bar-chart"></i></div>
            <div>
              <h4 class="title"><a href="service-details.html" class="stretched-link">Sed ut perspiciatis</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="icon flex-shrink-0"><i class="bi bi-binoculars"></i></div>
            <div>
              <h4 class="title"><a href="service-details.html" class="stretched-link">Magni Dolores</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="500">
            <div class="icon flex-shrink-0"><i class="bi bi-brightness-high"></i></div>
            <div>
              <h4 class="title"><a href="service-details.html" class="stretched-link">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="600">
            <div class="icon flex-shrink-0"><i class="bi bi-calendar4-week"></i></div>
            <div>
              <h4 class="title"><a href="service-details.html" class="stretched-link">Eiusmod Tempor</a></h4>
              <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
            </div>-->
            </div>

      </div>

    </section><!-- /End Services Section -->

    <!-- Testimonials Section -->
    <!-- <section id="testimonials" class="testimonials section light-background">

      
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div>
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 1
                }
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
              </div>
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section> -->
            <!--/Testimonials Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">

      <!-- Section Title -->
      <div class="section-title">
       <!-- <h2>Contact</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> -->
      </div><!-- End Section Title -->

      <!-- <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-5">

            <div class="info-wrap">
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Address</h3>
                  <p>A108 Adam Street, New York, NY 535022</p>
                </div>
              </div>

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Call Us</h3>
                  <p>+1 5589 55488 55</p>
                </div>
              </div>

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email Us</h3>
                  <p>info@example.com</p>
                </div>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>

          <div class="col-lg-7">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <label for="name-field" class="pb-2">Your Name</label>
                  <input type="text" name="name" id="name-field" class="form-control" required="">
                </div>

                <div class="col-md-6">
                  <label for="email-field" class="pb-2">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="subject-field" class="pb-2">Subject</label>
                  <input type="text" class="form-control" name="subject" id="subject-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="message-field" class="pb-2">Message</label>
                  <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div> 

        </div>-->

      </div>

    </section><!-- /Contact Section -->

  </main> <!-- === END MAIN === -->
   <!-- ==== FOOTER ===== -->
  <footer id="footer" >
   <div class="container">
      <div class="copyright text-center ">
        &copy; Curriculum Vitae <strong><span>Karina Eka Nasifa</span></strong>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> | <a href="https://bootstrapmade.com/tools/">DevTools</a>
      </div>
    </div>

  </footer>  -->
  <!-- end footer -->

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
 <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/typed.js/typed.umd.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

<!-- Main JS File -->
<script src="assets/js/main.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function () {
    // --- TOOLTIP ---
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
    tooltipTriggerList.forEach(function (el) {
        new bootstrap.Tooltip(el);
    });

    // --- DETEKSI MENU NYALA SAAT DI-SCROLL (SCROLLSPY) ---
    const navLinks = document.querySelectorAll('#navbar .nav-link');
    const sections = document.querySelectorAll('section');

    function navbarlinksActive() {
        let position = window.scrollY + 200; // Toleransi jarak dari atas
        
        sections.forEach(section => {
            if (!section.getAttribute('id')) return;
            
            let sectionTop = section.offsetTop;
            let sectionHeight = section.offsetHeight;

            if (position >= sectionTop && position <= (sectionTop + sectionHeight)) {
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === '#' + section.getAttribute('id')) {
                        link.classList.add('active');
                    }
                });
            }
        });
    }

    // Jalankan saat pertama kali dimuat & saat layar di-scroll
    window.addEventListener('load', navbarlinksActive);
    document.addEventListener('scroll', navbarlinksActive);
});

// --- FUNGSI LIHAT SELENGKAPNYA PORTFOLIO ---
function togglePortfolio() {
  const hiddenItems = document.querySelectorAll('.portfolio-hidden');
  const btn = document.getElementById('btn-see-more');

  hiddenItems.forEach(item => {
    item.classList.toggle('d-none');
  });

  if (btn.innerText === "Lihat Selengkapnya") {
    btn.innerText = "Tampilkan Lebih Sedikit";
  } else {
    btn.innerText = "Lihat Selengkapnya";
  }
}
</script>

</body>

</html>