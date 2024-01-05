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
@include('layouts.sidebar')

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
              <a href="{{ route('admin.pembayaran') }}" class="flex items-center bg-green-200 rounded-xl font-bold text-sm text-green-900 py-3 px-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="text-lg mr-4" viewBox="0 0 16 16">
                  <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-3.5-7h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5z"/>
                </svg>Pembayaran
              </a>
            </li>
            <li>
              <a href="{{ route('admin.pemesanans') }}" class="flex bg-white hover:bg-green-100 rounded-xl font-bold text-sm text-gray-900 py-3 px-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="text-lg mr-4" viewBox="0 0 16 16">
                  <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1z"/>
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
                    <h1 class="text-3xl font-bold mb-3">Data Pembayaran</h1>
                    
                    <hr class="mt-1">

                    <div class="flex w-full">
                        <table class="min-w-full bg-white border border-gray-300">
                            <thead>
                                <tr> 
                                    <th class="py-2 px-4 border-b">ID Pemesanan</th>
                                    <th class="py-2 px-4 border-b"> Metode Pembayaran</th>
                                    <th class="py-2 px-4 border-b">Status Pembayaran</th>
                                    <th class="py-2 px-4 border-b">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($pembayarans as $pembayaran)
                                <tr>
                                    <td class="py-2 px-4 border-b">{{ $pembayaran->pemesanan->id }}</td>
                                    <td class="py-2 px-4 border-b">{{ $pembayaran->metodePembayaran->metode_pembayaran }}</td>
                                    <td class="py-2 px-4 border-b">{{ $pembayaran->status_pembayaran }}</td>
                                    <td class="py-2 px-4 border-b">
                                        <a href="{{ route('admin.pembayaran.edit', $pembayaran->id) }}" class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600">Edit</a>
                                        <form action="{{ route('admin.pembayaran.destroy', $pembayaran->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
<!-- partial -->
  
</body>
</html>
