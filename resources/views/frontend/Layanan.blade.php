<!DOCTYPE html>
<html>

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

  <title>Sampah Kita</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/css-calendar@1.1.2/dist/calendar.min.css" />

  
</head>

<style>
  .package-details {
    display: none;
  }
</style>

<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      @auth
      @include('layouts.navbar2') <!-- Tampilkan navbar untuk pengguna yang sudah login -->
  @else
      @include('layouts.navbar') <!-- Tampilkan navbar untuk pengguna yang belum login -->
  @endauth
    </header>
    <!-- end header section -->
  </div>
  
    <section class="blog_section layout_padding -mt-10">
  <div class="container">
    <div class="heading_container text-3xl text-center">
      <h2>Layanan Kami</h2>
    </div>
    <section>
      <div class="container">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
          <!-- Blog 1 -->
          <div class="box" id="box1">
            <div class="img-box">
              <img src="images/2.png" alt="Gold Package">
            </div>
            <div class="detail-box p-4">
              <h5 class="text-2xl font-bold text-center mb-4">Eksekutif</h5>
              <p class="mb-4">Pengangkutan sampah dilakukan di setiap harinya</p>
              <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-700" onclick="showDetails(1)">
                Lihat Detail
              </button>
            </div>
          </div>

          <!-- Blog 2 -->
          <div class="box" id="box2">
            <div class="img-box">
              <img src="images/3.png" alt="Silver Package">
            </div>
            <div class="detail-box p-4">
              <h5 class="text-2xl font-bold text-center mb-4">Bisnis</h5>
              <p class="mb-4">Pengangkutan sampah dilakukan dua kali dalam seminggu pada hari yang telah ditentukan</p>
              <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-700" onclick="showDetails(2)">
                Lihat Detail
              </button>
            </div>
          </div>

          <!-- Blog 3 -->
          <div class="box" id="box3">
            <div class="img-box">
              <img src="images/1.png" alt="Bronze Package">
            </div>
            <div class="detail-box p-4">
              <h5 class="text-2xl font-bold text-center mb-4">Ekonomi</h5>
              <p class="mb-4">Pengangkutan sampah dilakukan satu kali dalam seminggu pada hari yang telah ditentukan</p>
              <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-700" onclick="showDetails(3)">
                Lihat Detail
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</section>

<section id="details1" class="hidden py-16 bg-green-100 justify-between items-center">
<div class="container mx-auto p-8 rounded-lg shadow-md bg-white w-3/5">
    <h2 class="text-3xl font-bold text-yellow-500 mb-4">Detail Paket Eksekutif</h2>
    <ul class="list-disc pl-4">
      <li>Pengangkutan sampah dilakukan 7  kali dalam seminggu</li>
      <li>Pengangkutan dilakukan pada hari senin sampai dengan minggu</li>
      <li>Pelanggan akan mendapatkan armada truk sebagai pengangkut sampahnya</li>
      <!-- Tambahkan elemen-elemen lain sesuai kebutuhan -->
    </ul>
  </div>
</section>

<section id="details2" class="hidden py-16 bg-green-100 justify-between items-center">
<div class="container mx-auto p-8 rounded-lg shadow-md bg-white w-3/5">
    <h2 class="text-3xl font-bold text-grey-800 mb-4">Detail Paket Bisnis</h2>
    <ul class="list-disc pl-4">
      <li>Pengangkutan sampah dilakukan 2  kali dalam seminggu</li>
      <li>Pengangkutan dilakukan pada hari senin dan kamis</li>
      <li>Pelanggan akan mendapatkan armada mobil pick-up sebagai pengangkut sampahnya</li>
      <!-- Tambahkan elemen-elemen lain sesuai kebutuhan -->
    </ul>
  </div>
</section>

<section id="details3" class="hidden py-16 bg-green-100 justify-between items-center">
  <div class="container mx-auto p-8 rounded-lg shadow-md bg-white w-3/5">
    <h2 class="text-3xl font-bold text-yellow-800 mb-4">Detail Paket Ekonomi</h2>
    <ul class="list-disc pl-4">
      <li>Pengangkutan sampah dilakukan 1 kali dalam seminggu</li>
      <li>Pengangkutan dilakukan pada hari senin</li>
      <li>Pelanggan akan mendapatkan armada motor sebagai pengangkut sampahnya</li>
      <!-- Tambahkan elemen-elemen lain sesuai kebutuhan -->
    </ul>
  </div>
</section>

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
  
<script>
  // Function to generate the calendar for a specific month and year
function generateCalendar(year, month) {
const calendarElement = document.getElementById('calendar');
const currentMonthElement = document.getElementById('currentMonth');

// Create a date object for the first day of the specified month
const firstDayOfMonth = new Date(year, month, 1);
const daysInMonth = new Date(year, month + 1, 0).getDate();

// Clear the calendar
calendarElement.innerHTML = '';

// Set the current month text
const monthNames = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
currentMonthElement.innerText = `${monthNames[month]} ${year}`;

// Calculate the day of the week for the first day of the month (0 - Sunday, 1 - Monday, ..., 6 - Saturday)
const firstDayOfWeek = firstDayOfMonth.getDay();

// Create headers for the days of the week
const daysOfWeek = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
daysOfWeek.forEach(day => {
    const dayElement = document.createElement('div');
    dayElement.className = 'text-center font-semibold';
    dayElement.innerText = day;
    calendarElement.appendChild(dayElement);
});

// Create empty boxes for days before the first day of the month
for (let i = 0; i < firstDayOfWeek; i++) {
    const emptyDayElement = document.createElement('div');
    calendarElement.appendChild(emptyDayElement);
}

// Create boxes for each day of the month
for (let day = 1; day <= daysInMonth; day++) {
    const dayElement = document.createElement('div');
    dayElement.className = 'text-center py-2 border cursor-pointer';
    dayElement.innerText = day;

    // Check if this date is the current date
    const currentDate = new Date();
    if (year === currentDate.getFullYear() && month === currentDate.getMonth() && day === currentDate.getDate()) {
        dayElement.classList.add('bg-blue-500', 'text-white'); // Add classes for the indicator
    }

    calendarElement.appendChild(dayElement);
}
}

// Initialize the calendar with the current month and year
const currentDate = new Date();
let currentYear = currentDate.getFullYear();
let currentMonth = currentDate.getMonth();
generateCalendar(currentYear, currentMonth);

// Event listeners for previous and next month buttons
document.getElementById('prevMonth').addEventListener('click', () => {
currentMonth--;
if (currentMonth < 0) {
    currentMonth = 11;
    currentYear--;
}
generateCalendar(currentYear, currentMonth);
});

document.getElementById('nextMonth').addEventListener('click', () => {
currentMonth++;
if (currentMonth > 11) {
    currentMonth = 0;
    currentYear++;
}
generateCalendar(currentYear, currentMonth);
});

// Function to show the modal with the selected date
function showModal(selectedDate) {
const modal = document.getElementById('myModal');
const modalDateElement = document.getElementById('modalDate');
modalDateElement.innerText = selectedDate;
modal.classList.remove('hidden');
}

// Function to hide the modal
function hideModal() {
const modal = document.getElementById('myModal');
modal.classList.add('hidden');
}

// Event listener for date click events
const dayElements = document.querySelectorAll('.cursor-pointer');
dayElements.forEach(dayElement => {
dayElement.addEventListener('click', () => {
    const day = parseInt(dayElement.innerText);
    const selectedDate = new Date(currentYear, currentMonth, day);
    const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
    const formattedDate = selectedDate.toLocaleDateString(undefined, options);
    showModal(formattedDate);
});
});

// Event listener for closing the modal
document.getElementById('closeModal').addEventListener('click', () => {
hideModal();
});

</script>


<script>
function showDetails(packageId) {
  // Sembunyikan semua detail terlebih dahulu
  for (let i = 1; i <= 3; i++) {
    document.getElementById(`details${i}`).style.display = 'none';
  }

  // Tampilkan detail paket yang dipilih
  document.getElementById(`details${packageId}`).style.display = 'flex'; // Menggunakan flex untuk mengatur tata letak
}
</script>





<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>

</html>