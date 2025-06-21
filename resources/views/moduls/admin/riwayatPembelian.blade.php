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
        <li><a href="{{ route('admin') }}" class="block py-2 px-4 rounded hover:bg-green-800 hover:text-white">Dashboard</a></li>
        <li><a href="{{ route('tambahProduk') }}" class="block py-2 px-4 rounded hover:bg-green-800 hover:text-white">Penambahan Produk</a></li>
        <li><a href="{{ route('kelolaStok') }}" class="block py-2 px-4 rounded hover:bg-green-800 hover:text-white">Kelola Stok</a></li>
        <li><a href="{{ route('riwayatPembelian') }}" class="block py-2 px-4 rounded hover:bg-green-800 hover:text-white">Riwayat Pembelian</a></li>
      </ul>
    </nav>
    <!-- Logout Button -->
    <div class="p-4 border-t">
        <form method="POST" action="">
            @csrf
            <button type="submit" class="w-full text-left px-4 py-2 rounded bg-red-100 text-red-600 hover:bg-red-600 hover:text-white transition">
                Logout
            </button>
        </form>
    </div>
  </aside>
  
  <!-- Main Content -->
  <main class="flex-1 bg-[#f5f5f5] text-black p-10 overflow-y-auto">
    <!-- Riwayat Pembelian -->
    <section id="riwayatPembelian" class="section">
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
