<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Electrochip</title>

  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" />
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
      @auth
      @include('layouts.navbar2') <!-- Tampilkan navbar untuk pengguna yang sudah login -->
  @else
      @include('layouts.navbar') <!-- Tampilkan navbar untuk pengguna yang belum login -->
  @endauth
    </header>
  </div>

<section class="bg-white">
  <div class="container mx-auto my-12">
    <!-- Tulisan di atas formulir -->
    <div class="text-center mb-8">
      <h2 class="text-3xl font-semibold">Daftar</h2>
      <p>Silakan lengkapi formulir di bawah untuk dapat melakukan pendaftaran.</p>
    </div>

    <div class=" flex items-center justify-center">
      <!-- Formulir -->
      <form action="{{ route('register-pl.store') }}" class=" w-1/2 space-y-4 text-sm" method="POST">
        @csrf

        <div>
          <label class="sr-only" for="nama">Name</label>
          <input class="w-full rounded-lg border border-gray-200 p-3" placeholder="Name" type="text" name="nama" id="nama" required />
        </div>

        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
          <div>
            <label class="sr-only" for="email_pl"></label>
            <input class="w-full rounded-lg border border-gray-200 p-3" placeholder="Email address" type="email" name="email_pl" id="email_pl" required />
          </div>

          <div>
            <label class="sr-only" for="tlp_pl">Phone</label>
            <input class="w-full rounded-lg border border-gray-200 p-3" placeholder="Phone Number" type="tel" id="tlp_pl" name="tlp_pl" required/>
          </div>
        </div>

        <div>
          <label class="sr-only" for="alamat_pl">Alamat Lengkap</label>
          <textarea rows="3" class="w-full rounded-lg border border-gray-200 p-3" placeholder="Alamat Lengkap" type="text" name="alamat_pl" id="alamat_pl" required></textarea>
        </div>

        <!-- Password -->
        <div class="">
            <label class="sr-only" for="password_pl">Password</label>

            <input id="password_pl" class="w-full rounded-lg border border-gray-200 p-3"
                            type="password"
                            name="password_pl"
                            placeholder="Password" required/>

            <!--<x-input-error :messages="$errors->get('password')" class="mt-2" />-->
        </div>

        <!-- Confirm Password -->
        <div class="">
            <label class="sr-only" for="password_pl_confirmation"></label>

            <input id="password_pl_confirmation" class="w-full rounded-lg border border-gray-200 p-3"
                            type="password"
                            placeholder="Confirm Password"
                            name="password_pl_confirmation" />

            <!--<x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />-->
        </div>

       
        <div class="flex flex-col items-center">
          <div class="map_container items-center">
            <div id="map"></div>
            <div class="input-group">
              <label class="sr-only" for="latitude">Latitude</label>
              <input type="number" id="latitude" name="latitude" step="any" placeholder="Latitude" class="rounded-lg border border-gray-200 p-3" required>
              <label class="sr-only" for="longitude">Longitude</label>
              <input type="number" id="longitude" name="longitude" step="any" placeholder="Longitude" class="rounded-lg border border-gray-200 p-3" required>
            </div>
          </div>
        </div>


        <!-- Button Submit -->
        <div class="text-center">
          <button type="submit" class="block w-full text-center mb-3 rounded-lg border uppercase bg-green-800 p-3 text-white cursor-pointer hover:border-black">
            Daftar
          </button>
          <a class=" underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Sudah terdaftar?') }}
            </a>
        </div>
      </form>

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
    var map;
    var marker;

    function initMap() {
      // Inisialisasi peta
      map = L.map('map').setView([-8.2275, 114.9811], 10);

      // Tambahkan layer peta dari OpenStreetMap
      L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
      }).addTo(map);

      // Tambahkan marker awal
      marker = L.marker([-8.2275, 114.9811], { draggable: true }).addTo(map);

      // Event listener saat marker digeser
      marker.on('dragend', function (event) {
        updateInputs(event.target.getLatLng().lat, event.target.getLatLng().lng);
      });

      // Event listener saat peta diklik
      map.on('click', function (event) {
        marker.setLatLng(event.latlng);
        updateInputs(event.latlng.lat, event.latlng.lng);
      });

      // Tambahkan kontrol pencarian
      var searchControl = L.Control.geocoder({
        defaultMarkGeocode: false,
      }).on('markgeocode', function (e) {
        var location = e.geocode.center;
        marker.setLatLng([location.lat, location.lng]);
        updateInputs(location.lat, location.lng);
      }).addTo(map);

      // Event listener saat input latitude atau longitude berubah
      document.getElementById('latitude').addEventListener('input', function () {
        var lat = parseFloat(this.value);
        var lng = parseFloat(document.getElementById('longitude').value);
        if (!isNaN(lat) && !isNaN(lng)) {
          marker.setLatLng([lat, lng]);
          map.panTo([lat, lng]);
        }
      });

      document.getElementById('longitude').addEventListener('input', function () {
        var lng = parseFloat(this.value);
        var lat = parseFloat(document.getElementById('latitude').value);
        if (!isNaN(lat) && !isNaN(lng)) {
          marker.setLatLng([lat, lng]);
          map.panTo([lat, lng]);
        }
      });
    }

    function updateInputs(lat, lng) {
      document.getElementById('latitude').value = lat.toFixed(6);
      document.getElementById('longitude').value = lng.toFixed(6);
    }
  </script>
  <script>
    initMap();
  </script>


  <!-- Sertakan Vue.js melalui CDN -->
  <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
</body>


</html>
