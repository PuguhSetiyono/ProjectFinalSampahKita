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
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />
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
            <h2 class="text-3xl font-semibold">Profil Pengguna</h2>
            <p>Informasi profil pengguna Anda.</p>
        </div>

        <div class="flex items-center justify-center">
            <!-- Informasi Profil -->
            <div class="w-1/2 space-y-4 text-sm">
                <div>
                    <label class="font-semibold">Nama:</label>
                    <p>{{ auth()->user()->name }}</p>
                </div>

                <div>
                    <label class="font-semibold">Email:</label>
                    <p>{{ auth()->user()->email }}</p>
                </div>

                <div>
                    <label class="font-semibold">Nomor Telepon:</label>
                    <p>{{ auth()->pelanggan()->tlp_pl }}</p>
                </div>

                <div>
                    <label class="font-semibold">Alamat Lengkap:</label>
                    <p>{{ auth()->user()->alamat_pl }}</p>
                </div>

                <!-- Informasi Pemesanan -->
          <div>
            <h3 class="text-lg font-semibold mt-4 mb-2">Informasi Pemesanan</h3>
            <p>ID Pelanggan: {{ $pemesanan->id_pelanggan }}</p>
            <p>ID Paket: {{ $pemesanan->id_paket }}</p>
            <p>Tanggal Pemesanan: {{ $pemesanan->tanggal_pemesanan }}</p>
            <p>Kadaluarsa Paket: {{ $pemesanan->kadaluarsa_paket }}</p>
          </div>
            </div>
        </div>
    </div>
</section>

TOLONG BUAT PROFIL PENGGUNANNYA JUGA SIAPA AJA YANG BANGUN AOWKWKW :)





<!-- info section -->
<section class="info_section layout_padding">
    <div class="container">
        <!-- Konten informasi dan formulir langganan -->
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
