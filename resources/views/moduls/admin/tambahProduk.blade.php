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
    <!-- Penambahan Produk -->
    <section id="penambahanProduk" class="section">
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
  </main>
</div>

<!-- Script SPA -->
<script>
  const links = document.querySelectorAll('.nav-link');
  const sections = document.querySelectorAll('.section');

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
