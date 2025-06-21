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
    <!-- Kelola Stok -->
    <section id="kelolaStok" class="section">
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
  </main>
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
