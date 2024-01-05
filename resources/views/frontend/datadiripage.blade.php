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
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet" />
  <link href="{{ asset('css/responsive.css') }}" type="text/css" rel="stylesheet" />
  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
  <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
  <style>
    #map {
      height: 400px;
      width: 540px;
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
        @include('layouts.navbar2')
      </div>
    </header>
  </div>

<section class="bg-white">
  <div class="container mx-auto my-12">
    <!-- Tulisan di atas formulir -->
    <div class="text-center mb-8">
      <h2 class="text-3xl font-semibold">Data Diri Anda</h2>
      <p>Berikut adalah data diri anda yang akan digunakan untuk kebutuhan pemesanan.</p>
    </div>

    <div class=" flex items-center justify-center">
      <!-- Formulir -->
      <div class=" w-1/2 space-y-4 text-sm">
        <div>
          <label class="font-semibold" for="nama">Name</label>
          <p class="w-full rounded-lg border border-gray-200 p-3" placeholder="Name" type="text" name="nama" id="nama">{{$pelanggan->nama}}</P>
        </div>

        <div>
          <label class="font-semibold" for="nama">Phone</label>
          <p class="w-full rounded-lg border border-gray-200 p-3" placeholder="Phone Number" type="tel" name="tlp_pl" id="tlp_pl">{{$pelanggan->tlp_pl}}</P>
        </div>

        <div>
          <label class="font-semibold" for="alamat_pl">Alamat Lengkap</label>
          <textarea rows="3" class="w-full rounded-lg border border-gray-200 p-3" placeholder="Alamat Lengkap" type="text" name="alamat_pl" id="alamat_pl" readonly>{{$pelanggan->alamat_pl}}</textarea>
        </div>

        <div>
          <label class="font-semibold">Lokasi Spesifik</label>
          <div class="flex flex-col items-center">
            <div class="map_container items-center">
              <div id="map"></div>
            </div>
          </div>
        </div>
      </div>
      <!-- Detail Packages -->
      </div>
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

  <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
  <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>

  <script>
  const pelangganData = {
    latitude: {{ $pelanggan->latitude }},
    longitude: {{ $pelanggan->longitude }}
  };

  const map = L.map('map').setView([pelangganData.latitude, pelangganData.longitude], 13);

  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: ''
  }).addTo(map);

  L.marker([pelangganData.latitude, pelangganData.longitude])
    .addTo(map)
    .openPopup();
</script> 


  <!-- Sertakan Vue.js melalui CDN -->
  <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
</body>


</html>
