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
        <li><a href="#" data-target="dashboardAdmin" class="nav-link block py-2 px-4 rounded hover:bg-green-800 hover:text-white">Dashboard</a></li>
        <li><a href="#" data-target="penambahanProduk" class="nav-link block py-2 px-4 rounded hover:bg-green-800 hover:text-white">Penambahan Produk</a></li>
        <li><a href="#" data-target="kelolaStok" class="nav-link block py-2 px-4 rounded hover:bg-green-800 hover:text-white">Kelola Stok</a></li>
        <li><a href="#" data-target="riwayatPembelian" class="nav-link block py-2 px-4 rounded hover:bg-green-800 hover:text-white">Riwayat Pembelian</a></li>
      </ul>
    </nav>
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
      Grafik dummy
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

    <!-- Penambahan Produk -->
    <section id="penambahanProduk" class="section hidden">
      <h1 class="text-2xl font-semibold mb-4">Penambahan Produk</h1>
  <div class="bg-white p-6 rounded-xl shadow space-y-6">

    <div class="grid grid-cols-2 gap-4">
      <div>
        <label class="block text-sm font-medium mb-1">Nama Produk *</label>
        <input type="text" class="w-full border rounded p-2" placeholder="Masukkan nama produk">
      </div>
      <div>
        <label class="block text-sm font-medium mb-1">Deskripsi Produk *</label>
        <textarea class="w-full border rounded p-2 h-20" placeholder="Masukkan deskripsi produk secara detail"></textarea>
      </div>
      <div>
        <label class="block text-sm font-medium mb-1">Kategori</label>
        <select class="w-full border rounded p-2">
          <option>Pilih Kategori</option>
        </select>
      </div>
      <div>
        <label class="block text-sm font-medium mb-1">Bahan</label>
        <input type="text" class="w-full border rounded p-2" placeholder="Masukkan bahan produk">
      </div>
      <div>
        <label class="block text-sm font-medium mb-1">SKU</label>
        <input type="text" class="w-full border rounded p-2" placeholder="Kode SKU produk">
      </div>
      <div>
        <label class="block text-sm font-medium mb-1">Berat (gram)</label>
        <input type="number" class="w-full border rounded p-2" placeholder="Masukkan berat produk">
      </div>
      <div>
        <label class="block text-sm font-medium mb-1">Harga (Rp)</label>
        <input type="text" class="w-full border rounded p-2" placeholder="Masukkan harga">
      </div>
      <div>
        <label class="block text-sm font-medium mb-1">Diskon (%)</label>
        <input type="text" class="w-full border rounded p-2" placeholder="Masukkan diskon jika ada">
      </div>
    </div>

    <div>
      <h2 class="font-semibold mb-2">Variasi Produk</h2>
      <div class="mb-3">
        <label class="block text-sm font-medium mb-1">Ukuran Tersedia *</label>
        <div class="flex flex-wrap gap-4">
          <label><input type="checkbox" class="mr-1"> S</label>
          <label><input type="checkbox" class="mr-1"> M</label>
          <label><input type="checkbox" class="mr-1"> L</label>
          <label><input type="checkbox" class="mr-1"> XL</label>
        </div>
      </div>
      <div class="grid grid-cols-3 gap-4 items-end">
        <div>
          <label class="block text-sm font-medium mb-1">Warna Tersedia</label>
          <input type="text" class="w-full border rounded p-2" placeholder="Nama warna">
        </div>
        <div>
          <label class="block text-sm font-medium mb-1">Pilih Warna</label>
          <input type="color" class="w-full h-10">
        </div>
        <div>
          <label class="block text-sm font-medium mb-1">Stok Awal</label>
          <input type="number" class="w-full border rounded p-2" placeholder="Jumlah stok">
        </div>
      </div>
    </div>

    <div>
      <h2 class="font-semibold mb-2">Gambar Produk *</h2>
      <div class="border-dashed border-2 border-gray-300 rounded p-6 text-center">
        <p>Klik atau seret gambar ke sini</p>
        <button class="mt-2 px-4 py-2 bg-gray-200 rounded">Pilih File</button>
      </div>
    </div>

    <div class="flex justify-end space-x-2">
      <button class="bg-gray-300 px-4 py-2 rounded">Batal</button>
      <button class="bg-green-600 text-white px-4 py-2 rounded">Simpan Produk</button>
    </div>
  </div>
    </section>

    <!-- Kelola Stok -->
    <section id="kelolaStok" class="section hidden">
      <h1 class="text-2xl font-semibold mb-4">Kelola Stok Produk</h1>

  <div class="grid grid-cols-4 gap-4">
    <div class="bg-white p-4 rounded-xl shadow">
      <p class="text-sm text-gray-500">Total Products</p>
      <p class="text-lg font-bold">86</p>
    </div>
    <div class="bg-white p-4 rounded-xl shadow">
      <p class="text-sm text-gray-500">Low Stock Items</p>
      <p class="text-lg font-bold">12</p>
    </div>
    <div class="bg-white p-4 rounded-xl shadow">
      <p class="text-sm text-gray-500">Out of Stock</p>
      <p class="text-lg font-bold">3</p>
    </div>
    <div class="bg-white p-4 rounded-xl shadow">
      <p class="text-sm text-gray-500">Total Stock Value</p>
      <p class="text-lg font-bold">Rp 43.5M</p>
    </div>
  </div>

  <div class="flex justify-between items-center mt-6">
    <button class="bg-green-600 text-white px-4 py-2 rounded">+ Add New Stock</button>
    <input type="text" placeholder="Search products..." class="border px-3 py-2 rounded w-1/4">
  </div>

  <div class="overflow-x-auto mt-4 bg-white rounded-xl shadow">
    <table class="w-full text-sm text-left">
      <thead class="bg-gray-100 text-gray-700">
        <tr>
          <th class="p-2">Product ID</th>
          <th>Product Name</th>
          <th>Category</th>
          <th>Price (Rp)</th>
          <th>Current Stock</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr class="border-t">
          <td class="p-2">NL-001</td>
          <td>Anggun Pastel Dress</td>
          <td>Gamis</td>
          <td>365,000</td>
          <td>25</td>
          <td><span class="text-green-600">Good</span></td>
          <td><button class="text-blue-500 mr-2">Edit</button><button class="text-green-500">Update Stock</button></td>
        </tr>
        <!-- Tambah data lainnya sesuai kebutuhan -->
      </tbody>
    </table>
  </div>    
    </section>

    <!-- Riwayat Pembelian -->
    <section id="riwayatPembelian" class="section hidden">
      <h1 class="text-2xl font-semibold mb-4">Riwayat Pembelian</h1>

  <div class="flex space-x-2 mb-4">
    <button class="bg-green-600 text-white px-4 py-1 rounded">Semua</button>
    <button class="bg-gray-200 px-4 py-1 rounded">Belum Bayar</button>
    <button class="bg-gray-200 px-4 py-1 rounded">Diproses</button>
    <button class="bg-gray-200 px-4 py-1 rounded">Dikirim</button>
    <button class="bg-gray-200 px-4 py-1 rounded">Selesai</button>
    <button class="bg-gray-200 px-4 py-1 rounded">Dibatalkan</button>
  </div>

  <!-- Contoh 1 Pesanan -->
  <div class="bg-white p-4 rounded-xl shadow space-y-2">
    <p class="font-semibold">Order ID: 3354654654526</p>
    <p>Gamis Wanita Yasmine Dress - Maroon, XS (x1)</p>
    <p class="text-green-600 font-bold">Rp 365.000</p>
    <p class="text-sm text-gray-500">Tanggal Pemesanan: 10 Januari 2025 • Estimasi: 15–17 Januari 2025</p>
    <div class="flex justify-between">
      <button class="text-sm text-gray-600 border rounded px-3 py-1">Invoice</button>
      <button class="bg-green-600 text-white text-sm rounded px-3 py-1">Pantau Pengiriman</button>
    </div>
  </div>
    </section>

  </main>
</div>

<!-- Script SPA -->
<script>
  const links = document.querySelectorAll(".nav-link");
  const sections = document.querySelectorAll(".section");

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
