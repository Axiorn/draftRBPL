<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>e-Nalasha</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet"/>
</head>
<body class="bg-white">

<div class="flex h-screen">
<!-- Sidebar -->
<aside class="w-64 bg-white shadow-md flex flex-col">
  <div class="p-6 border-b">
    <h1 class="text-xl font-bold text-gray-800">e-Nalasha</h1>
  </div>
  <div class="p-4 border-b flex items-center space-x-4">
    <div class="w-10 h-10 bg-green-500 text-white rounded-full flex items-center justify-center text-lg font-bold">R</div>
    <div>
      <p class="font-semibold text-gray-800">Rudi Ahmad</p>
      <p class="text-sm text-gray-500">Admin E-Nalasha</p>
    </div>
  </div>

  <nav class="flex-1 p-4">
    <ul class="space-y-4 text-gray-700">
      <li>
        <a href="{{ route('admin') }}"
           class="block py-2 px-4 rounded {{ request()->routeIs('admin') ? 'bg-green-800 text-white' : 'hover:bg-green-800 hover:text-white' }}">
           Dashboard
        </a>
      </li>
      <li>
        <a href="{{ route('tambahProduk') }}"
           class="block py-2 px-4 rounded {{ request()->routeIs('tambahProduk') ? 'bg-green-800 text-white' : 'hover:bg-green-800 hover:text-white' }}">
           Penambahan Produk
        </a>
      </li>
      <li>
        <a href="{{ route('kelolaStok') }}"
           class="block py-2 px-4 rounded {{ request()->routeIs('kelolaStok') ? 'bg-green-800 text-white' : 'hover:bg-green-800 hover:text-white' }}">
           Kelola Stok
        </a>
      </li>
      <li>
        <a href="{{ route('riwayatPembelian') }}"
           class="block py-2 px-4 rounded {{ request()->routeIs('riwayatPembelian') ? 'bg-green-800 text-white' : 'hover:bg-green-800 hover:text-white' }}">
           Riwayat Pembelian
        </a>
      </li>
    </ul>
  </nav>

  <!-- Logout -->
  <div class="p-4 border-t">
    <form method="POST" action="">
      @csrf
      <button type="submit"
              class="w-full text-left px-4 py-2 rounded bg-red-100 text-red-600 hover:bg-red-600 hover:text-white transition">
        Logout
      </button>
    </form>
  </div>
</aside>


  <!-- Main Content -->
  <main class="flex-1 bg-[#f5f5f5] text-black p-10 overflow-y-auto">
    
    <!-- Dashboard Admin -->
    <section id="dashboardAdmin" class="section">
      <h1 class="text-2xl font-semibold">Dashboard</h1>
  <div class="grid grid-cols-4 gap-4">
    <div class="p-4 bg-white rounded-xl shadow">
      <p class="text-sm text-gray-500">Total Pengunjung</p>
      <p class="text-xl font-bold">176</p>
      <p class="text-green-500 text-sm mt-1">↑ 8%</p>
    </div>
    <div class="p-4 bg-white rounded-xl shadow">
      <p class="text-sm text-gray-500">Total Pesanan</p>
      <p class="text-xl font-bold">641</p>
      <p class="text-green-500 text-sm mt-1">↑ 5%</p>
    </div>
    <div class="p-4 bg-white rounded-xl shadow">
      <p class="text-sm text-gray-500">Total Pendapatan</p>
      <p class="text-xl font-bold">Rp. 98.565.000</p>
      <p class="text-green-500 text-sm mt-1">↑ 4%</p>
    </div>
    <div class="p-4 bg-white rounded-xl shadow">
      <p class="text-sm text-gray-500">Total Pengiriman</p>
      <p class="text-xl font-bold">635</p>
      <p class="text-green-500 text-sm mt-1">↑ 3%</p>
    </div>
  </div>

  <div class="bg-white rounded-xl shadow p-6 mt-4">
    <h2 class="text-lg font-semibold mb-2">Chart Reports</h2>
    <div class="h-40 bg-gray-100 rounded-xl flex items-center justify-center text-gray-400 italic">
      <img src="{{ asset('assets/images/landing/graph.jpg') }}" alt="Grafik" style="width :380px;">
    </div>
  </div>

  <div class="bg-white rounded-xl shadow p-6 mt-4">
    <h2 class="text-lg font-semibold mb-4">Produk Terbaru</h2>
    <table class="w-full table-auto text-sm">
      <thead class="text-left text-gray-500">
        <tr>
          <th class="py-2">Produk ID</th>
          <th>Nama Produk</th>
          <th>Kategori</th>
          <th>Harga</th>
          <th>Stok</th>
          <th>Status</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody class="text-gray-700">
        <tr>
          <td class="py-2">#123456</td>
          <td>Nalasha Gamis Cantik</td>
          <td>Gamis</td>
          <td>Rp 250.000</td>
          <td>45</td>
          <td><span class="bg-green-100 text-green-600 px-2 py-1 rounded text-xs">Aktif</span></td>
          <td><button class="text-sm text-blue-600 mr-2">Edit</button><button class="text-sm text-red-600">Hapus</button></td>
        </tr>
        <!-- Tambahkan produk lainnya di sini -->
      </tbody>
    </table>
  </div>
    </section>
  </main>
</div>

<!-- Script SPA -->
<script>
  links.forEach(link => {
    link.addEventListener("click", e => {
      e.preventDefault();
      const target = link.getAttribute("data-target");

      // Sembunyikan semua section
      sections.forEach(sec => sec.classList.add("hidden"));

      // Tampilkan section yang sesuai
      document.getElementById(target).classList.remove("hidden");

      // Highlight menu aktif (opsional)
      links.forEach(l => l.classList.remove("bg-green-800", "text-white"));
      link.classList.add("bg-green-800", "text-white");
    });
  });
</script>
</body>
</html>
