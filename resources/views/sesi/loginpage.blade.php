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
  <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet" />
  <link href="{{ asset('css/responsive.css') }}" type="text/css" rel="stylesheet" />
</head>

<body class="sub_page">

  <div class="hero_area">
    <header class="header_section">
      <div class="container">
        @include('layouts.navbarguest')
      </div>
    </header>
  </div>

<section class="bg-white">
<div class="flex items-center justify-center">
    <!-- Formulir -->
    <form action="{{ route('postLogin') }}" method="POST" class="w-1/2 space-y-4 text-sm">
        @csrf

        <!-- Email input -->
        <div>
            <x-input-label class="sr-only" for="email_pl" :value="__('Email')" />
            <input class="w-full rounded-lg border border-gray-200 p-3" placeholder="Email address" type="email" id="email_pl" name="email_pl" value="{{ old('email_pl') }}" required autofocus autocomplete="username" />
        </div>

        <!-- Password input -->
        <div class="">
            <x-input-label class="sr-only" for="password_pl" :value="__('Password')" />
            <x-text-input id="password_pl" class="w-full rounded-lg border border-gray-200 p-3" type="password" name="password_pl" placeholder="Password" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password_pl')" class="mt-2" />
        </div>

        <!-- Button Submit -->
        <div class="text-center">
            <x-primary-button type="submit" class="block w-full text-center mb-3 rounded-lg border border-gray-200 p-3 text-gray-600 cursor-pointer hover:border-black">
                {{__('Masuk')}}
            </x-primary-button>
        </div>
    </form>
      <!-- Detail Packages -->
      </div>
    </div>
  </div>
</section>
  <!-- end contact section -->

  @include('layouts.footer')

  <!-- Sertakan Vue.js melalui CDN -->
  <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
</body>

</html>
