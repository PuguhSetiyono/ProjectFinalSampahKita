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
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">

  <div class="hero_area">
    <header class="header_section">
      <div class="container">
        @include('components.navbar')
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

        <div class="rounded-lg bg-white p-8 shadow-lg container mx-auto my-12 grid lg:grid-cols-2 gap-8">
          <form action="" class="space-y-4 text-sm">
            <div>
              <label class="sr-only" for="name">Name</label>
              <input class="w-full rounded-lg border border-gray-200 p-3" placeholder="Name" type="text" id="name" />
            </div>

            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
              <div>
                <label class="sr-only" for="email">Email</label>
                <input class="w-full rounded-lg border border-gray-200 p-3" placeholder="Email address" type="email" id="email" />
              </div>

              <div>
                <label class="sr-only" for="phone">Phone</label>
                <input class="w-full rounded-lg border border-gray-200 p-3" placeholder="Phone Number" type="tel" id="phone" />
              </div>
            </div>

            <div class="grid grid-cols-1 gap-4 text-center sm:grid-cols-3">
              <div>
                <input id="option1" type="radio" name="option" class="sr-only" />
                <label for="option1"
                  class="block w-full rounded-lg border border-gray-200 p-3 text-gray-600 cursor-pointer hover:border-black">
                  <span>Gold</span>
                </label>
              </div>

              <div>
                <input id="option2" type="radio" name="option" class="sr-only" />
                <label for="option2"
                  class="block w-full rounded-lg border border-gray-200 p-3 text-gray-600 cursor-pointer hover:border-black">
                  <span>Silver</span>
                </label>
              </div>

              <div>
                <input id="option3" type="radio" name="option" class="sr-only" />
                <label for="option3"
                  class="block w-full rounded-lg border border-gray-200 p-3 text-gray-600 cursor-pointer hover:border-black">
                  <span>Bronze</span>
                </label>
              </div>
            </div>

            <div>
              <label class="sr-only" for="message">Message</label>
              <textarea class="w-full rounded-lg border border-gray-200 p-3" placeholder="Message" rows="8"
                id="message"></textarea>
            </div>

            <div class="mt-4">
              <button type="submit"
                class="inline-block w-full rounded-lg bg-black px-5 py-3 font-medium text-white">
                Send Enquiry
              </button>
            </div>
          </form>
          <div class="lg:order-2 ml-auto">
       <div class="img-box-container">
        <img src="images/gold.jpg" alt="Gambar Paket" class="w-full h-auto max-w-sm rounded-lg shadow-lg ml-5">
        <div class="img-description p-4 bg-gray-100 rounded-lg mt-4">
            <h5>Gold Package</h5>
            <p>Pengangkutan sampah dilakukan tiga kali dalam seminggu pada hari Senin, Kamis, Minggu.</p>
            <p>Waktu Pengangkutan:</p>
            <ul>
                <li>Hari Senin dan Kamis: 09.00 - 10.00</li>
                <li>Hari Minggu: 16.00 - 17.00</li>
            </ul>
        </div>
    </div>
  </div>
  </div>
  </div>
  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    // Event listener untuk radio button "Gold"
    var option1 = document.getElementById('option1');
    option1.addEventListener('change', function () {
      var goldDetails = document.getElementById('goldDetails');
      if (option1.checked) {
        goldDetails.style.display = 'block';
      } else {
        goldDetails.style.display = 'none';
      }
    });

    // ... (kode lainnya)
  });
</script>


  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
</body>

</html>
