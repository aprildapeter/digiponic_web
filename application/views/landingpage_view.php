<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Digiponic</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/custom.css" />

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">


  <!-- Font -->
  <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet"> -->
</head>

<body>
  <!-- Header -->
  <section class="h-100 w-100 bg-white" style="box-sizing: border-box" id="header">

    <div class="container-xxl mx-auto p-0  position-relative header-2-2" style="font-family: 'Poppins', sans-serif; margin-bottom: 2.25rem;">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a href="#">
          <img style="margin-right: 0.75rem" src="<?php echo base_url(); ?>assets/image/Logo.svg" alt="" />
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="modal" data-bs-target="#targetModal-item">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="modal-item modal fade" id="targetModal-item" tabindex="-1" role="dialog" aria-labelledby="targetModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content bg-white border-0">
              <div class="modal-header border-0" style="padding: 2rem; padding-bottom: 0">
                <a class="modal-title" id="targetModalLabel">
                  <img style="margin-top: 0.5rem" src="<?php echo base_url(); ?>assets/image/Logo.svg" alt="" />
                </a>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body" style="padding: 2rem; padding-top: 0; padding-bottom: 0">
                <ul class="navbar-nav responsive me-auto mt-2 mt-lg-0">
                  <li class="nav-item ">
                    <a class="nav-link" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#spesial">Layanan</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#portofolio">Portofolio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#tentang">Tentang Kami</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#tim">Tim Kami</a>
                  </li>
                  <!-- <li class="nav-item">
                    <a class="nav-link" href="#testimoni">Testimoni</a>
                  </li> -->
                  <li class="nav-item">
                    <a class="nav-link" href="#kontak">Kontak Kami</a>
                  </li>
                </ul>
              </div>

            </div>
          </div>
        </div>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo">
          <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
            <li class="nav-item ">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#spesial">Layanan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#portofolio">Portofolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#tentang">Tentang Kami</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#tim">Tim Kami</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="#testimoni">Testimoni</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="#kontak">Kontak Kami</a>
            </li>
          </ul>
        </div>
      </nav>
      <!-- Header End -->

      <!-- Hero -->
      <div>
        <div class="mx-auto d-flex flex-lg-row flex-column hero">
          <!-- Left Column -->
          <div class="left-column d-flex flex-lg-grow-1 flex-column align-items-lg-start text-lg-start align-items-center text-center my-auto">
            <!-- <p class="text-caption">FREE 30 DAY TRIAL</p> -->
            <p class="text-caption"></p>
            <img src="<?php echo base_url(); ?>assets/image/Vector.svg" alt="">
            <h5 class="title-text-big">
              Mari Buat Hidup Anda Lebih Mudah Dengan Digiponic
            </h5>
            <p class="text-caption">Kami adalah perusahaan teknologi <br /> informasi yang berada di malang dengan memberikan layanan berkualitas kepada pelanggan.</p>
          </div>
          <!-- Right Column -->
          <div class="right-column text-center d-flex justify-content-center pe-0">
            <img id="img-fluid" class="h-auto mw-100" src="<?php echo base_url(); ?>assets/image/foto/digiponic.png" alt="" />
          </div>
        </div>
      </div>
    </div>
    <!-- Hero End -->
  </section>

  <!-- Spesial -->
  <section class="h-100 w-100" style="box-sizing: border-box; background-color: #fff" id="spesial">
    <div class="content-3-7 overflow-hidden container-xxl mx-auto position-relative" style="font-family: 'Poppins', sans-serif; padding-bottom: 3rem">
      <div class="container mx-auto ">

        <div class="d-flex flex-column text-center w-100 pt-2" style="margin-bottom: 2.25rem">
          <p class="caption-text mx-auto">
            Apa layanan yang kita lakukan?
          </p>
          <h2 class="title-text">Spesialisasi Kami</h2>
        </div>

        <div class="d-flex justify-content-center row row-cols-1 row-cols-md-3 mb-3">
          <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
              <div class="card-body">
                <div class="d-flex text-muted pt-3">
                  <img src="<?php echo base_url(); ?>assets/image/web.svg" alt="" width="48px" height="48px" class="p-1">
                  <p class="pb-3 mb-0 small lh-sm price-duration">
                    <strong class="d-block price-title">Web Development</strong>
                  </p>
                </div>
                <div class="price-list">
                  <p class="d-flex align-items-center check" style="text-align: center;">
                    Website menjadi garda terdepan sebuah perusahaan.
                    Dengan tenaga ahli yang berpengalaman,
                    kami siap mengembangkan website yang lebih interaktif
                    dan siap membantu pengembangan bisnis Anda.
                  </p>

                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
              <div class="card-body">
                <div class="d-flex text-muted pt-3">
                  <img src="<?php echo base_url(); ?>assets/image/mobile.svg" alt="" width="48px" height="48px" class="p-1">
                  <p class="pb-3 mb-0 small lh-sm price-duration">
                    <strong class="d-block price-title">Mobile Apps Development</strong>
                  </p>
                </div>
                <div class="price-list">
                  <p class="d-flex align-items-center check" style="text-align: center;">
                    Kami memiliki developer dan desainer yang siap membangun aplikasi Anda. Dengan pengalaman yang ada, kami siap membuat yang sesuai dengan kebutuhan bisnis Anda.
                  </p>

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-center row row-cols-1 row-cols-md-3 mb-3">
          <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
              <div class="card-body">
                <div class="d-flex text-muted pt-3">
                  <img src="<?php echo base_url(); ?>assets/image/software.svg" alt="" width="48px" height="48px" class="p-1">
                  <p class="pb-3 mb-0 small lh-sm price-duration">
                    <strong class="d-block price-title">Sistem Otomasi</strong>
                  </p>
                </div>
                <div class="price-list">
                  <p class="d-flex align-items-center check" style="text-align: center;">
                  Kami siap menyediakan sistem otomasi industri yang komprehensif dan sepenuhnya di kustomisasi agar sesuai 
                  dengan spesifikasi dan persyaratan produksi dari pelanggan, karena tujuan utama adalah memberikan solusi.
                  </p>

                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
              <div class="card-body">
                <div class="d-flex text-muted pt-3">
                  <img src="<?php echo base_url(); ?>assets/image/web.svg" alt="" width="48px" height="48px" class="p-1">
                  <p class="pb-3 mb-0 small lh-sm price-duration">
                    <strong class="d-block price-title">Software Development</strong>
                  </p>
                </div>
                <div class="price-list">
                  <p class="d-flex align-items-center check" style="text-align: center;">
                  Kami akan mengembangkan Sistem Informasi Manajemen 
                  perusahaan Anda. Pelanggan akan mendapatkan data yang tepat untuk menentukan langkah 
                  perusahaan kedepannya.
                  </p>

                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
        <div class="me-md-3   text-start text-white overflow-hidden">
        <div class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden ">
                <h2 class="price-title"> <img src="<?php echo base_url(); ?>assets/image/web.svg" alt=""> Web Development</h2>
                <div class="price-list">
                <p class="d-flex align-items-center check">
                Website menjadi garda terdepan sebuah perusahaan. Dengan tenaga ahli yang ada, 
                kami siap mengambangkan website yang lebih interaktif dan membantu pengambangan bisnis Anda.
                </p>
                
            </div>
            </div>
            </div>
        <div class=" me-md-3   text-start overflow-hidden">
        <div class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden ">
                <h2 class="price-title"> <img src="<?php echo base_url(); ?>assets/image/mobile.svg" alt=""> Mobile Apps Development</h2>
                <div class="price-list">
                <p class="d-flex align-items-center check">
                Website menjadi garda terdepan sebuah perusahaan. Dengan tenaga ahli yang ada, 
                kami siap mengambangkan website yang lebih interaktif dan membantu pengambangan bisnis Anda.
                </p>
            </div>
            </div>
            </div>
        </div> -->

        <!-- <div class="d-flex flex-wrap">
          <div class="mx-auto card-item position-relative">
            <div class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden ">
              <h2 class="price-title"> <img src="<?php echo base_url(); ?>assets/image/web.svg" alt=""> Web Development</h2>
              <div class="price-list">
                <p class="d-flex align-items-center check">
                  Website menjadi garda terdepan sebuah perusahaan. Dengan tenaga ahli yang ada,
                  kami siap mengambangkan website yang lebih interaktif dan membantu pengambangan bisnis Anda.
                </p>

              </div>
            </div>
          </div>
          <div class="mx-auto card-item position-relative">
            <div class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden ">
              <h2 class="price-title"> <img src="<?php echo base_url(); ?>assets/image/mobile.svg" alt=""> Mobile Apps Development</h2>
              <div class="price-list">
                <p class="d-flex align-items-center check">
                  Website menjadi garda terdepan sebuah perusahaan. Dengan tenaga ahli yang ada,
                  kami siap mengambangkan website yang lebih interaktif dan membantu pengambangan bisnis Anda.
                </p>

              </div>
            </div>
          </div>
          <div class="mx-auto card-item position-relative">
            <div class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden ">
              <h2 class="price-title"> <img src="<?php echo base_url(); ?>assets/image/software.svg" alt=""> Software Development</h2>
              <div class="price-list">
                <p class="d-flex align-items-center check">
                  Website menjadi garda terdepan sebuah perusahaan. Dengan tenaga ahli yang ada,
                  kami siap mengambangkan website yang lebih interaktif dan membantu pengambangan bisnis Anda.
                </p>

              </div>
            </div>
          </div>

          <div class="mx-auto card-item position-relative">
            <div class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden ">
              <h2 class="price-title"> <img src="<?php echo base_url(); ?>assets/image/it.svg" alt=""> IT Konsultasi</h2>
              <div class="price-list">
                <p class="d-flex align-items-center check">
                  Website menjadi garda terdepan sebuah perusahaan. Dengan tenaga ahli yang ada,
                  kami siap mengambangkan website yang lebih interaktif dan membantu pengambangan bisnis Anda.
                </p>

              </div>
            </div>
          </div>
        </div> -->

      </div>
    </div>
  </section>
  <!-- Spesial End -->

  <!-- Portofolio -->
  <section class="h-100 w-100" style="box-sizing: border-box; background-color: #fff" id="portofolio">
    <div class="content-3-7 overflow-hidden container-xxl mx-auto position-relative" style="font-family: 'Poppins', sans-serif; margin-bottom: 3rem;">
      <div class="container mx-auto">

        <div class="d-flex flex-column text-center w-100" style="margin-bottom: 2.25rem">
          <p class="caption-text mx-auto">
            Pekerjaan Kita
          </p>
          <h2 class="title-text">Portofolio Kami</h2>
        </div>


        <div id="carouselExampleControls2" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-1">
                <div class="col">
                  <div class="card shadow-sm">
                    <div class="front">
                      <img src="<?php echo base_url(); ?>assets/image/portofolio/halokes.png" class="w-100 h-100" alt="...">
                    </div>
                    <div class="back">
                      <div class="back-content middle">
                        <div class="sm">
                          <a href="https://digiponic.co.id/" target="_blank"><i class="fas fa-globe"></i></a>
                          <a href="https://www.instagram.com/digiponic.co.id/" target="_blank"><i class="fab fa-instagram"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card shadow-sm">
                    <div class="front">
                      <img src="<?php echo base_url(); ?>assets/image/portofolio/halomeet.png" class="w-100 h-100" alt="...">
                    </div>
                    <div class="back">
                      <div class="back-content middle">
                        <div class="sm">
                          <a href="http://halomeet.halokes.co.id/" target="_blank"><i class="fas fa-globe"></i></a>
                          <a href="https://www.instagram.com/halokes.id/" target="_blank"><i class="fab fa-instagram"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card shadow-sm">
                    <div class="front">
                      <img src="<?php echo base_url(); ?>assets/image/portofolio/haloteach.png" class="w-100 h-100" alt="...">
                    </div>
                    <div class="back">
                      <div class="back-content middle">
                        <div class="sm">
                          <a href="http://haloteach.halokes.co.id/" target="_blank"><i class="fas fa-globe"></i></a>
                          <a href="https://www.instagram.com/haloteach.id/" target="_blank"><i class="fab fa-instagram"></i></a>
                          <a href="https://www.youtube.com/channel/UCDltOYVRkrGTftpiUWgY9Hg" target="_blank"><i class="fab fa-youtube"></i></a>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-5">
                <div class="col">
                  <div class="card shadow-sm">
                    <div class="front">
                      <img src="<?php echo base_url(); ?>assets/image/portofolio/nitromax.png" class="w-100 h-100" alt="...">
                    </div>
                    <div class="back">
                      <div class="back-content middle">
                        <div class="sm">
                          <a href="http://nitromax.digiponic.co.id/" target="_blank"><i class="fas fa-globe"></i></a>
                          <a href="https://www.instagram.com/digiponic.co.id/" target="_blank"><i class="fab fa-instagram"></i></a>
                          <a href="https://www.youtube.com/channel/UCaAXpnUyvF97Bj6V4YPK7yA" target="_blank"><i class="fab fa-youtube"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card shadow-sm">
                    <div class="front">
                      <img src="<?php echo base_url(); ?>assets/image/portofolio/osac.png" class="w-100 h-100" alt="...">
                    </div>
                    <div class="back">
                      <div class="back-content middle">
                        <div class="sm">
                          <a href="http://dev.digiponic.co.id/osac_sistema/" target="_blank"><i class="fas fa-globe"></i></a>
                          <a href="https://www.instagram.com/digiponic.co.id/" target="_blank"><i class="fab fa-instagram"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-center align-items-center pt-5">
          <div class="btn-group">
            <button type="button" class="carousel-control-prev mx-4" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="next">
              <span aria-hidden="true"><img src="<?php echo base_url(); ?>assets/image/prev.svg"></span>
            </button>
            <button type="button" class="carousel-control-next mx-4" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="prev">
              <span aria-hidden="true"><img src="<?php echo base_url(); ?>assets/image/next.svg"></span>
            </button>
          </div>
        </div>

        <!-- <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
                <div class="me-md-3 pt-3 px-3 pt-md-5 px-md-5  text-start text-white overflow-hidden">
                    <div class="d-flex flex-column position-relative overflow-hidden "> 
                        <img src="<?php echo base_url(); ?>assets/image/portofolio.svg" class="" alt="...">
                    </div>
                    <div class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden ">
                        <div class="img"> 
                            <img src="<?php echo base_url(); ?>assets/image/portofolio.svg" class="card-img-top" alt="...">
                        </div>
                        <h2 class="price-title"> <img src="<?php echo base_url(); ?>assets/image/web.svg" alt=""> Web Development</h2>
                        <div class="price-list">
                            <p class="d-flex align-items-center check">
                            Website menjadi garda terdepan sebuah perusahaan. Dengan tenaga ahli yang ada, 
                            kami siap mengambangkan website yang lebih interaktif dan membantu pengambangan bisnis Anda.
                            </p>
                        </div>
                    </div>
                </div>
        
                <div class=" me-md-3 pt-3 px-3 pt-md-5 px-md-5  text-start overflow-hidden">
                    <div class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden ">
                        <h2 class="price-title"> <img src="<?php echo base_url(); ?>assets/image/mobile.svg" alt=""> Mobile Apps Development</h2>
                        <div class="price-list">
                            <p class="d-flex align-items-center check">
                            Website menjadi garda terdepan sebuah perusahaan. Dengan tenaga ahli yang ada, 
                            kami siap mengambangkan website yang lebih interaktif dan membantu pengambangan bisnis Anda.
                            </p>
                         </div>
                    </div>
                </div>
            </div> -->

        <!-- <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
          <div class="me-md-3   text-start text-white overflow-hidden mb-5">
            <div class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden ">
              <img src="<?php echo base_url(); ?>assets/image/portofolio.svg" class="" alt="...">
            </div>
            <div class="row">
              <div class="col-8">
                <p class="caption-text fw-bold">Fashion Landing page</p>
              </div>
              <div class="col-4">
                <p class="caption-text-2">Lihat Detail</p>
              </div>
            </div>
          </div>
          <div class="me-md-3   text-start text-white overflow-hidden mt-5">
            <div class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden ">
              <img src="<?php echo base_url(); ?>assets/image/portofolio.svg" class="" alt="...">
            </div>
            <div class="row">
              <div class="col-8">
                <p class="caption-text fw-bold">Health & Fitness</p>
              </div>
              <div class="col-4">
                <p class="caption-text-2">Lihat Detail</p>
              </div>
            </div>
          </div>
        </div>

        <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
          <div class="me-md-3   text-start text-white overflow-hidden mb-5">
            <div class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden ">
              <img src="<?php echo base_url(); ?>assets/image/portofolio.svg" class="" alt="...">
            </div>
            <div class="row">
              <div class="col-8">
                <p class="caption-text fw-bold">Furniture Shop</p>
              </div>
              <div class="col-4">
                <p class="caption-text-2">Lihat Detail</p>
              </div>
            </div>
          </div>
          <div class="me-md-3   text-start text-white overflow-hidden mt-5">
            <div class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden ">
              <img src="<?php echo base_url(); ?>assets/image/portofolio.svg" class="" alt="...">
            </div>
            <div class="row">
              <div class="col-8">
                <p class="caption-text fw-bold">IT Solution Provider</p>
              </div>
              <div class="col-4">
                <p class="caption-text-2">Lihat Detail</p>
              </div>
            </div>
          </div>
        </div> -->

        <!-- <div class="d-grid gap-2 col-2 mx-auto pt-3">
          <button class="btn btn-fill" type="button">Semua Portofolio</button>
        </div> -->

      </div>
    </div>
  </section>
  <!-- Portofolio End -->


  <!-- Tentang -->
  <section class="h-100 w-100" style="box-sizing: border-box; background-color: #fff" id="tentang">
    <div class="header-2-2 overflow-hidden container-xxl mx-auto position-relative" style="font-family: 'Poppins', sans-serif">
      <div class="container mx-auto">

        <div class="d-flex flex-column text-center w-100">
          <h2 class="title-text">Tentang</h2>
        </div>

        <div class="mx-auto d-flex flex-lg-row flex-column hero">
          <!-- Left Column -->
          <div class="left-column d-flex flex-lg-grow-1 flex-column align-items-lg-start text-lg-start align-items-center text-center ">
            <!-- <p class="text-caption">FREE 30 DAY TRIAL</p> -->
            <!-- <h5 class="title-text-big">
              Mari Buat Hidup Anda Lebih Modern Dengan Teknologi Digiponic
            </h5> -->
            <p class="text-caption">Digiponic merupakan perusahaan penyedia solusi teknologi informasi
              yang berkantor pusat di Malang yang resmi berdiri pada tahun 2017.</p>
            <h4 class="fw-bold">Visi</h5>
              <p class="text-caption">Digiponic sebagai perusahaan teknologi kreatif, aplikasi dan digital solution 5 besar di indonesia pada tahun 2025</p>
              <h4 class="fw-bold">Misi</h4>
              <ol style="font-size:18px">
                <li>
                  <p class="text-caption">Mengembangkan solusi digital untuk pelanggan & masyarakat Indonesia khususnya dan dunia pada umumnya, baik dari segi materi ataupun segi nilai manfaat.
                  </p>
                </li>
                <li>
                  <p class="text-caption">Menjadikan Sumber Daya Manusia kreatif yang berintegritas tinggi sebagai sokoguru utama kesinambungan perusahaan secara jangka Panjang.</p>
                </li>
                <li>
                  <p class="text-caption">Memastikan keseimbangan profit untuk keberlangsungan perusahaan dan pembiayaan riset teknologi untuk kompetisi global.</p>
                </li>
                <li>
                  <p class="text-caption">Mengutamakan kerjasama dan kolaborasi dg berbagai individu insan teknologi kreatif dan berbagai institusi kelas dunia demi mewujudkan percepatan visi perusahaan.</p>
                </li>
              </ol>
          </div>
          <!-- Right Column -->
          <div class="right-column text-center d-flex justify-content-center pe-0">
            <img id="img-fluid" class="h-auto mw-100 d-none d-sm-block" src="<?php echo base_url(); ?>assets/image/foto/digiponic3.png" alt="" />
          </div>
        </div>
      </div>

    </div>
    </div>
  </section>
  <!-- Tentang end -->

  <!-- Tim -->
  <section class="h-100 w-100" style="box-sizing: border-box; background-color: #fff" id="tim">
    <div class="content-3-7 overflow-hidden container-xxl mx-auto position-relative" style="font-family: 'Poppins', sans-serif">
      <div class="container mx-auto">

        <div class="d-flex flex-column text-center w-100" style="margin-bottom: 2.25rem">
          <p class="caption-text mx-auto">
            Tim Kita
          </p>
          <h2 class="title-text">Tim Inti Kami</h2>
        </div>
        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch d-flex justify-content-center g-4 py-5">
          <div class="col">
            <div class="card card-cover  overflow-hidden text-white  rounded-5">
              <div class="d-flex flex-column h-100 p-5 text-white text-shadow-1">
                <div class="d-flex justify-content-center">
                  <img src="<?php echo base_url(); ?>assets/image/tim/1.png" alt="Bootstrap" width="203" height="203" class="rounded-circle">
                </div>
                <h2 class="fw-bold caption-text-2 text-center pt-3">Deni Dwi Handoko</h2>

                <h2 class="price-duration text-center pt-3" style="color: #8997b5">Founder & CEO</h2>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card card-cover  overflow-hidden text-white  rounded-5">
              <div class="d-flex flex-column h-100 p-5 text-white text-shadow-1">
                <div class="d-flex justify-content-center">
                  <img src="<?php echo base_url(); ?>assets/image/tim/tim2.svg" alt="Bootstrap" width="203" height="203" class="rounded-circle">
                </div>
                <h2 class="fw-bold caption-text-2 text-center pt-3">Bagus Kristomoyo Kristanto</h2>

                <h2 class="price-duration text-center pt-3" style="color: #8997b5">Co-Founder & CTO</h2>
              </div>
            </div>
          </div>
        </div>

        <div class="d-flex justify-content-center pb-5">
          <img src="<?php echo base_url() ?>assets/image/tim/foto_team2.png" class="img-fluid" alt="">
        </div>


      </div>
    </div>
  </section>
  <!-- Tim End -->


  <!-- Testimoni -->
  <!-- <section class="h-100 w-100" style="box-sizing: border-box; background-color: #fff" id="testimoni">
    <div class="content-3-7 overflow-hidden container-xxl mx-auto position-relative" style="font-family: 'Poppins', sans-serif">
      <div class="container mx-auto">

        <div class="d-flex flex-column text-center w-100" style="margin-bottom: 2.25rem">
          <p class="caption-text mx-auto">
            Testimoni
          </p>
          <h2 class="title-text">Customer Service</h2>
        </div>
        <div id="carouselExampleControls1" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="d-flex justify-content-center row row-cols-1 row-cols-md-3 mb-3">
                <div class="col">
                  <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-body">
                      <div class="d-flex text-muted pt-3">
                        <img src="<?php echo base_url(); ?>assets/image/tim/tim2.svg" alt="" width="48px" height="48px" class="p-1">
                        <p class="pb-3 mb-0 small lh-sm price-duration">
                          <strong class="d-block price-title">Web Development</strong>
                          Malang
                        </p>
                      </div>
                      <div class="price-list">
                        <p class="d-flex align-items-center check">
                          Selain pelayanan dan tenaga ahli profesional, pada pelatihan kali ini peserta
                          bisa langsung melakukan penetration test.
                          Ini merupakan pengalaman baru bagi kami.
                        </p>

                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-body">
                      <div class="d-flex text-muted pt-3">
                        <img src="<?php echo base_url(); ?>assets/image/tim/tim2.svg" alt="" width="48px" height="48px" class="p-1">
                        <p class="pb-3 mb-0 small lh-sm price-duration">
                          <strong class="d-block price-title">Web Development</strong>
                          Malang
                        </p>
                      </div>
                      <div class="price-list">
                        <p class="d-flex align-items-center check">
                          Selain pelayanan dan tenaga ahli profesional, pada pelatihan kali ini peserta
                          bisa langsung melakukan penetration test.
                          Ini merupakan pengalaman baru bagi kami.
                        </p>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="d-flex justify-content-center row row-cols-1 row-cols-md-3 mb-3">
                <div class="col">
                  <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-body">
                      <div class="d-flex text-muted pt-3">
                        <img src="<?php echo base_url(); ?>assets/image/tim/tim2.svg" alt="" width="48px" height="48px" class="p-1">
                        <p class="pb-3 mb-0 small lh-sm price-duration">
                          <strong class="d-block price-title">Web Development</strong>
                          Malang
                        </p>
                      </div>
                      <div class="price-list">
                        <p class="d-flex align-items-center check">
                          Selain pelayanan dan tenaga ahli profesional, pada pelatihan kali ini peserta
                          bisa langsung melakukan penetration test.
                          Ini merupakan pengalaman baru bagi kami.
                        </p>

                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-body">
                      <div class="d-flex text-muted pt-3">
                        <img src="<?php echo base_url(); ?>assets/image/tim/tim2.svg" alt="" width="48px" height="48px" class="p-1">
                        <p class="pb-3 mb-0 small lh-sm price-duration">
                          <strong class="d-block price-title">Web Development</strong>
                          Malang
                        </p>
                      </div>
                      <div class="price-list">
                        <p class="d-flex align-items-center check">
                          Selain pelayanan dan tenaga ahli profesional, pada pelatihan kali ini peserta
                          bisa langsung melakukan penetration test.
                          Ini merupakan pengalaman baru bagi kami.
                        </p>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="d-flex justify-content-center row row-cols-1 row-cols-md-3 mb-3">
                <div class="col">
                  <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-body">
                      <div class="d-flex text-muted pt-3">
                        <img src="<?php echo base_url(); ?>assets/image/tim/tim2.svg" alt="" width="48px" height="48px" class="p-1">
                        <p class="pb-3 mb-0 small lh-sm price-duration">
                          <strong class="d-block price-title">Web Development</strong>
                          Malang
                        </p>
                      </div>
                      <div class="price-list">
                        <p class="d-flex align-items-center check">
                          Selain pelayanan dan tenaga ahli profesional, pada pelatihan kali ini peserta
                          bisa langsung melakukan penetration test.
                          Ini merupakan pengalaman baru bagi kami.
                        </p>

                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-body">
                      <div class="d-flex text-muted pt-3">
                        <img src="<?php echo base_url(); ?>assets/image/tim/tim2.svg" alt="" width="48px" height="48px" class="p-1">
                        <p class="pb-3 mb-0 small lh-sm price-duration">
                          <strong class="d-block price-title">Web Development</strong>
                          Malang
                        </p>
                      </div>
                      <div class="price-list">
                        <p class="d-flex align-items-center check">
                          Selain pelayanan dan tenaga ahli profesional, pada pelatihan kali ini peserta
                          bisa langsung melakukan penetration test.
                          Ini merupakan pengalaman baru bagi kami.
                        </p>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="d-flex justify-content-center align-items-center py-5">
          <div class="btn-group">
            <button type="button" class="carousel-control-prev mx-4" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="next">
              <span aria-hidden="true"><img src="<?php echo base_url(); ?>assets/image/prev.svg"></span>
            </button>
            <button type="button" class="carousel-control-next mx-4" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="prev">
              <span aria-hidden="true"><img src="<?php echo base_url(); ?>assets/image/next.svg"></span>
            </button>
          </div>
        </div>

      </div>
    </div>
  </section> -->
  <!-- Testimoni End -->

  <!-- Kontak -->
  <section class="h-100 w-100" style="box-sizing: border-box; background-color: #fff" id="kontak">
    <div class="content-3-7 overflow-hidden container-xxl mx-auto position-relative" style="font-family: 'Poppins', sans-serif">
      <div class="container mx-auto">

        <div class="d-flex flex-column text-center w-100" style="margin-bottom: 2.25rem">

          <h2 class="title-text">Kontak Kami</h2>
        </div>

        <div class="container px-4 py-4">
          <div class="row gx-5">
            <div class="col">
              <div class="p-3 ">
                <h4>Kontak Informasi</h4>
                <div class="jalan pt-5">
                  <div class="d-inline pe-2">
                    <div class="d-flex">
                      <img src="<?php echo base_url(); ?>assets/image/hubungi/lokasi.svg" class=" pe-2">
                      <p class="mb-0 small lh-sm price-duration">
                        Jl. Raya Tidar No.100, Karangbesuki,
                        Kec. Sukun, Kota Malang, Jawa Timur
                      </p>
                    </div>
                  </div>
                </div>
                <div class="tlpn">
                  <div class="d-inline pe-2">
                    <div class="d-flex">
                      <img src="<?php echo base_url(); ?>assets/image/hubungi/tlpn.svg" class="pe-2">
                      <p class="mt-2 mb-0 small lh-sm price-duration">
                        081357853085
                      </p>
                    </div>
                  </div>
                </div>
                <div class="mailo">
                  <div class="d-inline pe-2">
                    <div class="d-flex">
                      <img src="<?php echo base_url(); ?>assets/image/hubungi/email.svg" class="pe-2 ">
                      <p class="mt-2 mb-0 small lh-sm price-duration">
                        digiponic@gmail.com
                      </p>
                    </div>
                  </div>
                </div>
                <a href="https://wa.me/6281357853085" target="_blank" style="text-decoration: none;color:black">
                  <div class="wa">
                    <div class="d-inline pe-2">
                      <div class="d-flex">
                        <img src="<?php echo base_url(); ?>assets/image/hubungi/wa.svg" class="pe-2">
                        <p class="mt-2 mb-0 small lh-sm price-duration">
                          081357853085
                        </p>
                      </div>
                    </div>
                  </div>
                </a>

              </div>
            </div>
            <div class="col">
              <div class="HubungiKami p-3">
                <h4>Hubungi Kami</h4>
                <form class="row g-3 pt-5">
                  <div class="col-md-6">
                    <input type="text" class="form-control" id="NamaLengkap" placeholder="Nama Lengkap">
                  </div>
                  <div class="col-md-6">
                    <input type="text" class="form-control" id="Notlpn" placeholder="No. Telp/WA">
                  </div>
                  <div class="col-12">
                    <input type="email" class="form-control" id="Email" placeholder="Email">
                  </div>
                  <div class="col-12">
                    <input type="text" class="form-control" id="Subjek" placeholder="Subjek">
                  </div>
                  <div class="col-12">
                    <textarea class="form-control" id="TextAreaPesan" rows="4" placeholder="Pesan"></textarea>
                  </div>
                  <div class="col-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-fill">Kirim</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- Kontak End -->

  <!-- Footer -->
  <footer id="footer">
    <div class="container-fluid">
      <div class="copyright">
        &copy;2021
        <span>
          Digiponic - All rights reserved.
          <br />
          Develop by
        </span>
        <a href="#" id="digi">Digiponic.co.id</a>
      </div>

      <div class="credits">
        <div class="social-links">
          <a href="#" class="twitter">
            <img src="<?php echo base_url(); ?>assets/image/Footer/Foot01.svg" />
          </a>
          <a href="https://www.facebook.com/digiponic.haloteach" class="facebook" target=”_blank”>
            <img src="<?php echo base_url(); ?>assets/image/Footer/Foot02.svg" />
          </a>
          <a href="https://www.instagram.com/digiponic.co.id/" class="instagram" target=”_blank”>
            <img src="<?php echo base_url(); ?>assets/image/Footer/Foot03.svg" />
          </a>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer end -->
  <script src="<?php echo base_url(); ?>/assets/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>