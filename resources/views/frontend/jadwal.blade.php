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
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  
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
  
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Initialize Swiper for schedule section
            var scheduleSwiper = new Swiper('.schedule-swiper-container', {
                slidesPerView: 1,
                navigation: {
                    nextEl: '.schedule-swiper-next',
                    prevEl: '.schedule-swiper-prev',
                },
            });

            // Initialize Swiper for subscription section
            var subscriptionSwiper = new Swiper('.subscription-swiper-container', {
                slidesPerView: 1,
                navigation: {
                    nextEl: '.subscription-swiper-next',
                    prevEl: '.subscription-swiper-prev',
                },
            });
        });
    </script>

<div class="lg:w-7/12 md:w-9/12 sm:w-10/12 mx-auto p-4 swiper-container schedule-swiper-container">
    <div class="swiper-wrapper">
        <!-- Your existing schedule section content -->
    </div>
    <div class="swiper-button-next schedule-swiper-next"></div>
    <div class="swiper-button-prev schedule-swiper-prev"></div>
</div>




<section class="py-12">
<h2 class="text text-center text-3xl font-bold mb-4">Jadwal Pengangkutan Sampah</h2>
<div class="lg:w-7/12 md:w-9/12 sm:w-10/12 mx-auto p-4">
    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="flex items-center justify-between px-6 py-3 bg-green-700">
            <button id="prevMonth" class="text-white">Previous</button>
            <h2 id="currentMonth" class="text-white"></h2>
            <button id="nextMonth" class="text-white">Next</button>
        </div>
        <div class="grid grid-cols-7 gap-2 p-4" id="calendar">
            <!-- Calendar Days Go Here -->
        </div>
        <div id="myModal" class="modal hidden fixed inset-0 flex items-center justify-center z-50">
                <div class="modal-overlay absolute inset-0 bg-black opacity-50"></div>

                <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
                    <div class="modal-content py-4 text-left px-6">
                        <div class="flex justify-between items-center pb-3">
                            <p class="text-2xl font-bold">Selected Date</p>
                            <button id="closeModal"
                                    class="modal-close px-3 py-1 rounded-full bg-gray-200 hover:bg-gray-300 focus:outline-none focus:ring">✕
                            </button>
                        </div>
                        <div id="modalDate" class="text-xl font-semibold"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <h2 class="text text-center text-3xl font-bold mt-4">Informasi langganan</h2>

    <div class="lg:w-7/12 md:w-9/12 sm:w-10/12 mx-auto p-4 flex flex-wrap">

  {{-- Subscribed Packages --}}
  <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden shadow-lg m-6 p-4 w-full sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/2">
      @if($status && $pemesanans->count() > 0)
          @foreach($pemesanans as $pemesanan)
              <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden shadow-lg m-4">
                  <img src="{{ $pemesanan->paket->gambar }}" alt="{{ $pemesanan->paket->nama }}" class="w-full h-full object-cover object-center">
              </div>
          @endforeach
      @endif
  </div>

  {{-- Unsubscribe Information --}}
  <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden shadow-lg m-4 p-4 w-full sm:w-1/4 md:w-1/2 lg:w-1/2 xl:w-1/2">
      @if($status && $pemesanans->count() > 0)
          <p>Anda sedang berlangganan paket Sampah Kita saat ini. Tekan tombol berikut untuk berhenti berlangganan.</p>
          <form action="{{ route('pemesanan.destroy', ['id_users' => Auth::user()->id]) }}" method="post">
              @csrf
              @method('DELETE')
              <button type="submit" class="bg-green-700 hover:bg-green-800 text-white font-medium py-2 px-4 rounded" onclick="return confirm('Apakah Anda yakin ingin berhenti berlangganan?')">Berhenti Berlangganan</button>
          </form>
      @else
          <p>Anda tidak sedang berlangganan paket Sampah Kita saat ini.</p>
      @endif
  </div>
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
        <div class="col-lg-7 col-md-0 mx-auto">
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
    function generateCalendar(year, month, specialDates) {
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

            // Check if this date is a special date
            const dateString = `${year}-${(month + 1).toString().padStart(2, '0')}-${day.toString().padStart(2, '0')}`;
            const isSpecialDate = specialDates.some(dateObj => dateObj === dateString);

            if (isSpecialDate) {
                dayElement.classList.add('bg-green-500'); // Add classes for the indicator
            }

            dayElement.innerText = day;

            // Add event listener for date click events
            dayElement.addEventListener('click', () => {
                const selectedDate = new Date(year, month, day);
                const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
                const formattedDate = selectedDate.toLocaleDateString(undefined, options);
                showModal(formattedDate);
            });

            calendarElement.appendChild(dayElement);
        }
    }

    // Initialize the calendar with the current month and year
    const currentDate = new Date();
    let currentYear = currentDate.getFullYear();
    let currentMonth = currentDate.getMonth();
    const datesByPemesanan = {!! json_encode($datesByPemesanan) !!};
    
    // Extract all dates into a flat array
    const allDates = [].concat(...Object.values(datesByPemesanan));

    generateCalendar(currentYear, currentMonth, allDates);

    // Event listeners for previous and next month buttons
    document.getElementById('prevMonth').addEventListener('click', () => {
        currentMonth--;
        if (currentMonth < 0) {
            currentMonth = 11;
            currentYear--;
        }
        generateCalendar(currentYear, currentMonth, allDates);
    });

    document.getElementById('nextMonth').addEventListener('click', () => {
        currentMonth++;
        if (currentMonth > 11) {
            currentMonth = 0;
            currentYear++;
        }
        generateCalendar(currentYear, currentMonth, allDates);
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

    // Event listener for closing the modal
    document.getElementById('closeModal').addEventListener('click', () => {
        hideModal();
    });
</script>

<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>

</html>