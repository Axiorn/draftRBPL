<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard Owner - e-Nalasha</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

<div class="flex h-screen">
  <!-- Sidebar -->
  <aside class="w-64 bg-white shadow-md flex flex-col">
    <div class="p-6 border-b">
      <h1 class="text-xl font-bold text-gray-800">e-Nalasha</h1>
    </div>
    <div class="p-4 border-b flex items-center space-x-4">
      <div class="w-10 h-10 bg-green-500 text-white rounded-full flex items-center justify-center text-lg font-bold">O</div>
      <div>
        <p class="font-semibold text-gray-800">Owner</p>
        <p class="text-sm text-gray-500">Pemilik e-Nalasha</p>
      </div>
    </div>
    <nav class="flex-1 p-4">
      <ul class="space-y-4 text-gray-700">
        <li>
          <a href="{{ route('owner') }}" class="block py-2 px-4 rounded bg-green-100 text-green-700 font-medium">+ Dashboard</a>
        </li>
      </ul>
    </nav>
  </aside>

  <!-- Main -->
  <main class="flex-1 p-8 overflow-y-auto">
    <div class="flex justify-between items-center mb-6">
      <h1 class="text-2xl font-semibold">Dashboard Pemilik</h1>
      <div class="flex items-center space-x-4">
        <span class="text-sm text-gray-600">7 April 2023</span>
        <button class="bg-green-500 text-white px-4 py-2 rounded">Unduh Laporan</button>
      </div>
    </div>

    <!-- Cards -->
    <div class="grid grid-cols-4 gap-4 mb-8">
      <div class="bg-white p-4 rounded shadow">
        <div class="flex items-center space-x-4">
          <div class="bg-blue-100 text-blue-600 p-2 rounded">
            <i class="fas fa-users"></i>
          </div>
          <div>
            <p class="text-sm text-gray-600">Total Pengguna</p>
            <h2 class="text-xl font-bold">176</h2>
            <p class="text-xs text-green-500">+18%</p>
          </div>
        </div>
      </div>
      <div class="bg-white p-4 rounded shadow">
        <div class="flex items-center space-x-4">
          <div class="bg-green-100 text-green-600 p-2 rounded">
            <i class="fas fa-shopping-bag"></i>
          </div>
          <div>
            <p class="text-sm text-gray-600">Total Pesanan</p>
            <h2 class="text-xl font-bold">641</h2>
            <p class="text-xs text-green-500">+24%</p>
          </div>
        </div>
      </div>
      <div class="bg-white p-4 rounded shadow">
        <div class="flex items-center space-x-4">
          <div class="bg-yellow-100 text-yellow-600 p-2 rounded">
            <i class="fas fa-dollar-sign"></i>
          </div>
          <div>
            <p class="text-sm text-gray-600">Total Pendapatan</p>
            <h2 class="text-xl font-bold">Rp. 88.565.000</h2>
            <p class="text-xs text-green-500">+36%</p>
          </div>
        </div>
      </div>
      <div class="bg-white p-4 rounded shadow">
        <div class="flex items-center space-x-4">
          <div class="bg-red-100 text-red-600 p-2 rounded">
            <i class="fas fa-truck"></i>
          </div>
          <div>
            <p class="text-sm text-gray-600">Total Pengiriman</p>
            <h2 class="text-xl font-bold">635</h2>
            <p class="text-xs text-green-500">+21%</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Tabs -->
    <div class="mb-6 border-b border-gray-200">
      <nav class="flex space-x-6 text-sm">
        <a href="#" class="text-green-600 font-medium border-b-2 border-green-600 pb-2">Laporan Keuangan</a>
      </nav>
    </div>

    <!-- Charts -->
    <div class="grid grid-cols-2 gap-6 mb-6">
      <div class="bg-white p-6 rounded shadow">
        <h3 class="font-semibold mb-2">Pendapatan Bulanan</h3>
        <div class="bg-gray-100 h-40 rounded flex items-center justify-center text-sm text-gray-500">[ Chart Placeholder ]</div>
      </div>
      <div class="bg-white p-6 rounded shadow">
        <h3 class="font-semibold mb-2">Distribusi Pendapatan</h3>
        <div class="bg-gray-100 h-40 rounded flex items-center justify-center text-sm text-gray-500">[ Pie Chart Placeholder ]</div>
      </div>
    </div>

    <!-- Table -->
    <div class="bg-white p-6 rounded shadow">
      <div class="flex justify-between mb-4">
        <h3 class="font-semibold">Transaksi Terbaru</h3>
        <a href="#" class="text-green-500 text-sm">Lihat Semua</a>
      </div>
      <div class="overflow-x-auto">
        <table class="w-full text-left text-sm">
          <thead class="text-gray-600 border-b">
            <tr>
              <th class="py-2">No. Transaksi</th>
              <th class="py-2">Produk</th>
              <th class="py-2">Pelanggan</th>
              <th class="py-2">Metode Pembayaran</th>
              <th class="py-2">Tanggal</th>
              <th class="py-2">Jumlah</th>
              <th class="py-2">Status</th>
            </tr>
          </thead>
          <tbody>
            <tr class="border-b">
              <td class="py-2">TR-010824/7291</td>
              <td>Giana Wardha Tipsint Dress</td>
              <td>Siti Raiyah</td>
              <td>Bank Transfer</td>
              <td>27 Apr 2023</td>
              <td>Rp. 340.000</td>
              <td><span class="bg-green-100 text-green-600 px-2 py-1 rounded text-xs">Sukses</span></td>
            </tr>
            <tr class="border-b">
              <td class="py-2">TR-010824/7510</td>
              <td>Couple Series Family</td>
              <td>Ahmad Fazri</td>
              <td>Bank Transfer</td>
              <td>27 Apr 2023</td>
              <td>Rp. 850.000</td>
              <td><span class="bg-green-100 text-green-600 px-2 py-1 rounded text-xs">Sukses</span></td>
            </tr>
            <tr class="border-b">
              <td class="py-2">TR-002824/9035</td>
              <td>Classic Cotton Jubah</td>
              <td>Muhammad Rido</td>
              <td>Bank Transfer</td>
              <td>26 Apr 2023</td>
              <td>Rp. 385.000</td>
              <td><span class="bg-green-100 text-green-600 px-2 py-1 rounded text-xs">Sukses</span></td>
            </tr>
            <tr class="border-b">
              <td class="py-2">TR-002614/4103</td>
              <td>Khimar Ceruti Syari</td>
              <td>Nurul Hidayah</td>
              <td>COD</td>
              <td>26 Apr 2023</td>
              <td>Rp. 275.000</td>
              <td><span class="bg-green-100 text-green-600 px-2 py-1 rounded text-xs">Sukses</span></td>
            </tr>
            <tr>
              <td class="py-2">TR-101924/9301</td>
              <td>Azalea Pocket Gamis</td>
              <td>Anita Rahma</td>
              <td>COD</td>
              <td>25 Apr 2023</td>
              <td>Rp. 385.000</td>
              <td><span class="bg-yellow-100 text-yellow-600 px-2 py-1 rounded text-xs">Proses</span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </main>
</div>

<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</body>
</html>
