<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Sampah Kita</title>

  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" />
  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
  <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
  <style>
    #map {
      height: 400px;
      width: 635px;
    }

    .input-group {
      display: flex;
      justify-content: space-between;
      margin-top: 10px;
    }

    .input-group input {
      flex: 1;
      margin-right: 10px;
    }
  </style>
</head>

<body class="sub_page">

  <div class="hero_area">
    <header class="header_section">
      <div class="container">
        @auth
        @include('layouts.navbar2') <!-- Tampilkan navbar untuk pengguna yang sudah login -->
    @else
        @include('layouts.navbar') <!-- Tampilkan navbar untuk pengguna yang belum login -->
    @endauth
      </div>
    </header>
  </div>

<section class="bg-white">
  <div class=" my-60">
    <!-- Tulisan di atas formulir -->
    <div class="text-center mb-8">
      <h2 class="text-3xl font-bold">Anda Telah Berlangganan Sampah Kita</h2>
      <p></p>
    </div>

      <div class=" flex flex-col text-center items-center justify-center mt-10">
          <p class="">Anda saat ini sedang berlangganan paket Sampah Kita saat ini,<br>tekan tombol berikut untuk berhenti berlangganan</p>
          <form action="{{ route('pemesanan.destroy', ['id_users' => Auth::user()->id]) }}" method="post">
              @csrf
              @method('DELETE')
              <button type="submit" class="bg-green-700 hover:bg-green-800 text-white font-medium py-2 px-4 ml-2 rounded" onclick="return confirm('Apakah Anda yakin ingin berhenti berlangganan?')">Berhenti Berlangganan</button>
          </form>
      </div>
  </div>
</section>
  <!-- end contact section -->


  <!-- info section -->

  <section class="info_section layout_padding">
    <div class="container">
      <div class="info_contact">
        <div class="row">
          <div class="col-md-4">
            <a href="">
              <img src="images/location-white.png" alt="">
              <span>
                Passages of Lorem Ipsum available
              </span>
            </a>
          </div>
          <div class="col-md-4">
            <a href="">
              <img src="images/telephone-white.png" alt="">
              <span>
                Call : +012334567890
              </span>
            </a>
          </div>
          <div class="col-md-4">
            <a href="">
              <img src="images/envelope-white.png" alt="">
              <span>
                demo@gmail.com
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-lg-9">
          <div class="info_form">
            <form action="">
              <input type="text" placeholder="Enter your email">
              <button>
                subscribe
              </button>
            </form>
          </div>
        </div>
        <div class="col-md-4 col-lg-3">
          <div class="info_social">
            <div>
              <a href="">
                <img src="images/fb.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="images/twitter.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="images/linkedin.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="images/instagram.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- end info section -->

  <!-- footer section -->
  <footer class="container-fluid footer_section">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 col-md-9 mx-auto">
          <p>
            &copy; 2019 All Rights Reserved By
            <a href="https://html.design/">Free Html Templates</a>
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- footer section -->

  <!-- Sertakan Vue.js melalui CDN -->
  <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
</body>

</html>
