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
  <div class="container mx-auto my-12">
    <!-- Tulisan di atas formulir -->
    <div class="text-center mb-8">
      <h2 class="text-3xl font-semibold">Formulir Pemesanan</h2>
      <p>Silakan lengkapi formulir di bawah untuk melakukan pemesanan.</p>
    </div>

    <div class="">
        <div class=" px-60">
            <!-- Formulir -->
            <form action="{{ route('pemesanan.store') }}" method="POST" class="space-y-4 text-sm lg:col-span-3">
                @csrf
                <div>
                  <input type="hidden" name="id_pelanggan" name="id_pelanggan" value="{{$pelangganInfo->id}}" required />
                </div>

                <div>
                    <label class="font-semibold" for="nama">Nama</label>
                    <p class="w-full rounded-lg border border-gray-200 p-3" placeholder="price" type="text" id="nama">{{$pelangganInfo->nama}}</p>
                </div>

                <div>
                    <label class="font-semibold" for="telp">No Telepon</label>
                    <p class="w-full rounded-lg border border-gray-200 p-3" placeholder="price" type="text" id="telp">{{$pelangganInfo->tlp_pl}}</p>
                </div>

                <div class="">
                    <label for="paket" class="font-semibold">Paket Sampah Kita</label>
                    <select id="paket" name="paket" class="w-full rounded-lg border border-gray-200 p-3" required onchange="showDetails()">
                        @foreach($paketTypes as $item)
                            <option value="{{$item->id}}" data-harga="{{$item->harga_paket}}" data-image="{{$item->gambar}}">{{$item->nama_paket}}</option>
                        @endforeach
                    </select>
                </div>

               <!-- Container Detail -->
                <div id="detailsContainers" class="hidden mt-4 lg:col-span-1  flex-col items-center">
                    <div>
                        <label for="image" class="sr-only">Image</label>
                        <img id="imageDetails" src="" alt="Paket Image" class=" items-center rounded-lg shadow-lg mb-4">
                    </div>
                </div>

                <div class="">
                    <label for="metpem" class="font-semibold">Metode Pembayaran</label>
                    <select id="metpem" name="metpem" class="w-full rounded-lg border border-gray-200 p-3" required>
                        @foreach($pembayaranTypes as $item)
                            <option value="{{$item->id}}">{{$item->metode_pembayaran}}</option>
                        @endforeach
                    </select>
                </div>

                <div id="detailsContainer" class="hidden">
                    <label class="font-semibold" for="hargaDetails">Harga</label>
                    <p class="w-full rounded-lg border border-gray-200 p-3" placeholder="price" type="text" id="hargaDetails" required autofocus autocomplete="hargaDetails">Rp.</p>
                </div>

                <div>
                    <label class="font-semibold" for="alm">Alamat</label>
                    <p class="w-full rounded-lg border border-gray-200 p-3" placeholder="" type="text" id="alm">{{$pelangganInfo->alamat_pl}}</p>
                </div>

                <div>
                    <label class="font-semibold">Lokasi Spesifik</label>
                    <div class="flex flex-col items-center">
                        <div class="map_container items-center">
                            <div id="map"></div>
                        </div>
                    </div>
                </div>

                <!-- Button Submit -->
                <div class="text-center">
                    <button type="submit" class="block w-full rounded-lg border bg-green-800 p-3 text-white cursor-pointer hover:border-black">
                        Bayar Sekarang
                    </button>
                </div>
            </form>

           
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
    latitude: {{ $pelangganInfo->latitude }},
    longitude: {{ $pelangganInfo->longitude }}
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



<script>
    function showDetails() {
        var paketDropdown = document.getElementById('paket');
        var selectedOption = paketDropdown.options[paketDropdown.selectedIndex];

        var detailsContainer = document.getElementById('detailsContainer');
        var detailsContainers = document.getElementById('detailsContainers');
        //var armadaDetails = document.getElementById('armadaDetails');
        //var kapasitasDetails = document.getElementById('kapasitasDetails');
        var hargaDetails = document.getElementById('hargaDetails');
        var imageDetails = document.getElementById('imageDetails');

        if (selectedOption) {
            //armadaDetails.textContent = "Armada: " + selectedOption.getAttribute('data-armada');
            //kapasitasDetails.textContent = "Kapasitas: " + selectedOption.getAttribute('data-kapasitas') + "kg";
            hargaDetails.textContent = "Rp." + selectedOption.getAttribute('data-harga');
            imageDetails.src = selectedOption.getAttribute('data-image');
            detailsContainer.style.display = 'block';
            detailsContainers.style.display = 'block';
        } else {
            detailsContainer.style.display = 'none';
            detailsContainers.style.display = 'none';
        }
    }
</script>

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
</body>

</html>
