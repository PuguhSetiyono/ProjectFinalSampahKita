<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Admin</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.15/tailwind.min.css'><link rel="stylesheet" href="./style.css">
  <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
<!-- partial:index.partial.html -->
<body class="relative bg-green-50 overflow-hidden max-h-screen">
  <header class="fixed right-0 top-0 left-60 bg-green-50 py-3 px-4 h-16">
    <div class="max-w-4xl mx-auto">
      <div class="flex items-center justify-center">
        <div class="text-3xl font-bold mt-4"></div>
      </div>
    </div>
  </header>

  <aside class="fixed inset-y-0 left-0 bg-white shadow-md max-h-screen w-60">
    <div class="flex flex-col justify-between h-full">
      <div class="flex-grow">
        <div class="px-4 py-6 text-center border-b">
          <h1 class="text-xl font-bold leading-none"><span class="text-green-700">Admin</span> Page</h1>
        </div>
        <div class="p-4">
          <ul class="space-y-1">
            <li>
              <a href="{{ route('admin.home') }}" class="flex bg-white hover:bg-green-100 rounded-xl font-bold text-sm text-gray-900 py-3 px-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="text-lg mr-4" viewBox="0 0 16 16">
                  <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1z"/>
                </svg>Home
              </a>
            </li>
            <li>
              <a href="{{ route('admin.paket') }}" class="flex bg-white hover:bg-green-100 rounded-xl font-bold text-sm text-gray-900 py-3 px-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="text-lg mr-4" viewBox="0 0 16 16">
                  <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1z"/>
                </svg>Paket
              </a>
            </li>
            <li>
              <a href="{{ route('admin.pembayaran') }}" class="flex bg-white hover:bg-green-100 rounded-xl font-bold text-sm text-gray-900 py-3 px-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="text-lg mr-4" viewBox="0 0 16 16">
                  <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1z"/>
                </svg>Pembayaran
              </a>
            </li>
            <li>
              <a href="{{ route('admin.pemesanans') }}" class="flex items-center bg-green-200 rounded-xl font-bold text-sm text-green-900 py-3 px-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="text-lg mr-4" viewBox="0 0 16 16">
                  <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-3.5-7h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5z"/>
                </svg>Pemesanan
              </a>
            </li>
            <li>
              <a href="{{ route('admin.pelanggan') }}" class="flex bg-white hover:bg-green-100 rounded-xl font-bold text-sm text-gray-900 py-3 px-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="text-lg mr-4" viewBox="0 0 16 16">
                  <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1z"/>
                </svg>Pelanggan
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </aside>

  <main class="ml-60 pt-16 max-h-screen overflow-auto">
    <div class="px-6 py-8">
        <div class="max-w-7xl mx-auto">
            <div class="bg-white rounded-3xl px-8 py-5 mb-5">
                <h1 class="text-3xl font-bold mb-3">Edit Pemesanan</h1>
                <div class="flex items-center justify-between">
                </div>
                <hr class="mt-1">

                <div class="flex w-full">
                    <div class="w-full py-5 bg-white">
                        <h2 class="text-2xl font-bold tracking-tight text-gray-900"></h2>

                        <!-- Form untuk mengedit pemesanan -->
                        <form action="{{ route('admin.pelanggan.update', $pelanggan->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                        
                            <div class="mt-6">
                                <label for="nama" class="block mb-2 text-gray-800">Nama:</label>
                                <input type="text" id="nama" name="nama" value="{{ $pelanggan->nama }}" class="w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200">
                            </div>
                        
                            <div class="mt-6">
                                <label for="alamat_pl" class="block mb-2 text-gray-800">Alamat:</label>
                                <input type="text" id="alamat_pl" name="alamat_pl" value="{{ $pelanggan->alamat_pl }}" class="w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200">
                            </div>
                        
                            <div class="mt-6">
                                <label for="tlp_pl" class="block mb-2 text-gray-800">Nomor Telepon:</label>
                                <input type="text" id="tlp_pl" name="tlp_pl" value="{{ $pelanggan->tlp_pl }}" class="w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200">
                            </div>
                        
                            <div class="mt-6">
                                <label for="email_pl" class="block mb-2 text-gray-800">Email:</label>
                                <input type="email" id="email_pl" name="email_pl" value="{{ $pelanggan->email_pl }}" class="w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200">
                            </div>
                        
                            <div class="mt-6">
                                <label for="password_pl" class="block mb-2 text-gray-800">Password:</label>
                                <input type="password" id="password_pl" name="password_pl" value="{{ $pelanggan->password_pl }}" class="w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200">
                            </div>
                        
                            <div class="mt-6">
                                <label for="latitude" class="block mb-2 text-gray-800">Latitude:</label>
                                <input type="text" id="latitude" name="latitude" value="{{ $pelanggan->latitude }}" class="w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200">
                            </div>
                        
                            <div class="mt-6">
                                <label for="longitude" class="block mb-2 text-gray-800">Longitude:</label>
                                <input type="text" id="longitude" name="longitude" value="{{ $pelanggan->longitude }}" class="w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200">
                            </div>
                        
                            <div class="mt-8 flex items-center justify-center">
                                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Update Pelanggan</button>
                            </div>
                        </form>                        
                        <!-- End Form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

</body>
<!-- partial -->
  
</body>
</html>
