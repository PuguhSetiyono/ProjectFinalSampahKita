<template>
    <div>
      <head>
        <!-- Basic -->
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!-- Site Metas -->
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta name="author" content="" />
  
        <title>Electrochip</title>
  
        <!-- slider stylesheet -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />
  
        <!-- bootstrap core css -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  
        <!-- fonts style -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />
        <!-- Custom styles for this template -->
        <link href="css/style.css" rel="stylesheet" />
        <!-- responsive style -->
        <link href="css/responsive.css" rel="stylesheet" />
      </head>
  
      <body>
        <div class="hero_area">
          <!-- header section starts -->
          <header class="header_section">
            <div class="container">
              <nav class="navbar navbar-expand-lg custom_nav-container ">
                <a class="navbar-brand">
                  <span>Sampah Kita</span>
                </a>
                <button
                  class="navbar-toggler"
                  type="button"
                  data-toggle="collapse"
                  data-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <span class="s-1"> </span>
                  <span class="s-2"> </span>
                  <span class="s-3"> </span>
                </button>
  
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                    <ul class="navbar-nav  ">
                      <li class="nav-item active">
                        <router-link to="landingpage" class="nav-link">Beranda<span class="sr-only">(current)</span></router-link>
                      </li>
                      <li class="nav-item">
                        <router-link to="pemesanan" class="nav-link"> Pemesanan</router-link>
                      </li>
                      <li class="nav-item">
                        <router-link to="layanan" class="nav-link"> Layanan </router-link>
                      </li>
                      <li class="nav-item">
                        <router-link to="contact" class="nav-link">Contact </router-link>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
            </div>
          </header>
          <!-- end header section -->
  
          <!-- slider section -->
          <section class="slider_section">
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail_box">
                    <h1>
                      Bebas Repot
                    </h1>
                    <p>
                      Hapus Sampah dengan sejuta Kemudahan!
                    </p>
                    <a href="" class="">
                      Contact Us
                    </a>
                  </div>
                </div>
                <div class="col-lg-5 col-md-6 offset-lg-1">
                  <img src="images/tes.png" alt="Deskripsi Gambar Sampah 2" style="width: 100%; max-width: 100%;" />
                </div>
              </div>
            </div>
          </section>
          <!-- end slider section -->
  
          <!-- service section -->
          <section class="service_section layout_padding">
            <div class="container">
              <div class="heading_container">
                <h2>
                  Fitur Sampah Kita
                </h2>
              </div>
  
              <div class="service_container">
                <div class="box">
                  <div class="img-box">
                    <img src="images/jadwal.png" class="img1" alt="" />
                  </div>
                  <div class="detail-box">
                    <h5>
                      Jadwal Pengangkutan Sampah
                    </h5>
                    <p>
                      Sistem pengangkutan sampah memanfaatkan teknologi untuk merencanakan rute optimal dan memonitor status tempat sampah, meningkatkan efisiensi dan keberlanjutan pengumpulan sampah.
                    </p>
                  </div>
                </div>
                <div class="box active">
                  <div class="img-box">
                    <img src="images/tagihan.png" class="img1" alt="" />
                  </div>
                  <div class="detail-box">
                    <h5>
                      Tagihan
                    </h5>
                    <p>
                      Fitur tagihan sampah memberikan kemudahan dalam administrasi pembayaran layanan pengelolaan sampah, memastikan transparansi dan keterjangkauan bagi pengguna.
                    </p>
                  </div>
                </div>
                <div class="box">
                  <div class="img-box">
                    <img src="images/s3.png" class="img1" alt="" />
                  </div>
                  <div class="detail-box">
                    <h5>
                      Monitoring Sampah
                    </h5>
                    <p>
                      Dengan fitur monitoring sampah, data real-time digunakan untuk melacak dan mengelola sampah, memungkinkan pengambilan keputusan yang lebih cerdas untuk pengelolaan sampah yang berkelanjutan.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </body>
    </div>
  </template>
  
  <script>
  export default {
    // Your component logic goes here
  };
  </script>
  
  <style scoped>
    /* Your component-specific styles go here */
  </style>
  