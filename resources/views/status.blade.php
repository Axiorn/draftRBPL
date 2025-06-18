<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>e-Nalasha</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />
</head>

<!-- Navbar -->
<nav class="bg-green-100 h-[64px] flex items-center justify-between px-24 sticky top-0 z-50">
    <div class="text-xl font-bold text-green-900">
      <span class="font-normal">e-</span><span class="font-bold">Nalasha</span>
    </div>
    <div class="flex items-center space-x-8">
      <a href="{{ route('landing') }}" class="text-green-900 font-medium">HOME</a>
      <a href="{{ route('produk') }}" class="text-green-900 font-medium">PRODUCT</a>
      <a href="{{ route('status') }}" class="text-green-900 font-medium">STATUS</a>
    </div>
    <div class="flex items-center space-x-6">
      <div class="relative">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-900" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1.5 7h11L17 13M7 13l-4-8m14 0a2 2 0 110 4 2 2 0 010-4z" />
        </svg>
        <span class="absolute top-0 right-0 h-3 w-3 bg-green-500 rounded-full border-2 border-green-100"></span>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-900" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A9.004 9.004 0 0112 15c2.485 0 4.735.998 6.364 2.636M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
      </svg>
    </div>
</nav>

<!-- Content Area -->
  <div class="max-w-7xl mx-auto bg-gray-50 p-6 rounded-xl shadow-sm space-y-6 mt-12 mb-12">

  <!-- Section 1 -->
  <div class="flex flex-col md:flex-row gap-6">
    <!-- Gambar -->
    <img src="/assets/images/landing/Kaftan Tulip.png" alt="Yasmine Dress" class="w-28 h-36 object-cover rounded-md" />
    
    <!-- Detail Order -->
    <div class="flex-1 space-y-1">
      <p class="font-semibold text-blue-900">Order ID: <span class="font-bold text-blue-800">3354654654526</span></p>
      <p class="text-gray-800 font-medium">Gamis Wanita Yasmine Dress</p>
      <p class="text-gray-600">Varian: Maroon</p>
      <p class="text-gray-600">Ukuran: XS</p>
      <p class="text-gray-600">Kuantitas: 1</p>

      <!-- Tanggal & Estimasi -->
      <div class="flex flex-wrap gap-6 mt-3 text-sm text-gray-700">
        <div class="flex items-center gap-2">
          <i class="fa-regular fa-calendar"></i>
          <span>Tanggal Pemesanan: <span class="font-semibold text-black">10 Januari 2025</span></span>
        </div>
        <div class="flex items-center gap-2">
          <i class="fa-solid fa-truck"></i>
          <span>Estimasi Barang Sampai: <span class="font-semibold text-black">15–17 Januari 2025</span></span>
        </div>
      </div>
    </div>
  </div>

  <!-- Section 2 -->
  <div class="flex justify-end gap-3">
    <button class="border border-gray-300 px-4 py-2 rounded-md text-sm hover:bg-gray-100 transition">🧾 Invoice</button>
    <button id="openTrackingBtn" class="bg-green-500 text-white px-4 py-2 rounded-md text-sm hover:bg-green-600 transition">Pantau Pengiriman</button>
  </div>
</div>

<!-- Backdrop-->
<div id="trackingModal" class="fixed inset-0 bg-black bg-opacity-60 z-50 flex justify-center items-center hidden">
  <div class="bg-white rounded-xl shadow-lg w-full max-w-2xl p-6 space-y-6 overflow-y-auto max-h-[90vh] relative">
    
    <button id="closeTrackingBtn" class="absolute top-3 right-3 text-gray-500 hover:text-gray-800 text-xl font-bold">&times;</button>

    <!-- Section 1 -->
    <!-- Section Header -->
    <div class="space-y-4">
      <!-- Breadcrumb -->
      <div class="text-sm text-gray-500">
        <span class="font-medium">Status Pesanan</span> &gt; <span class="text-gray-600">ID 3352655445</span>
      </div>

      <!-- Order ID (centered) -->
      <h2 class="text-2xl font-bold text-center text-gray-800">Order ID: 3354654654526</h2>

      <!-- Order date + Estimated Delivery -->
      <div class="flex justify-left items-center gap-4 text-sm text-gray-600">
        <p>
          Order date: <span class="font-semibold text-black">10 Jan 2025</span>
        </p>
        <div class="w-px h-4 bg-gray-300"></div>
        <p class="flex items-center text-green-600 font-medium">
          <!-- Icon pengiriman (Opsional) -->
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17V5a1 1 0 011-1h7a1 1 0 011 1v12h-2m-6 0H4v-3H2m6 3a2 2 0 11-4 0 2 2 0 014 0zm10 0a2 2 0 11-4 0 2 2 0 014 0z" />
          </svg>
          Estimated delivery: <span class="text-black ml-1">15–17 Jan 2026</span>
        </p>
      </div>
    </div>

    <!-- Section 2 -->
    <div class="space-y-6">
      <!-- Status Stepper -->
      <div class="flex justify-between items-center text-center text-sm text-gray-500">
        <div class="flex flex-col items-center gap-1">
          <p class="font-semibold text-green-600">Pesanan<br>Dikonfirmasi</p>
          <div class="w-3 h-3 rounded-full bg-green-500"></div>
          <p class="text-xs mt-1">10 Januari 2025</p>
        </div>
        <div class="flex flex-col items-center gap-1">
          <p>Dikirim</p>
          <div class="w-3 h-3 rounded-full bg-gray-300"></div>
          <p class="text-xs mt-1">14 Januari 2025</p>
        </div>
        <div class="flex flex-col items-center gap-1">
          <p>Produk<br>Sampai</p>
          <div class="w-3 h-3 rounded-full bg-gray-300"></div>
          <p class="text-xs mt-1">15–17 Januari 2025</p>
        </div>
      </div>

      <!-- Produk Info -->
      <div class="flex items-start gap-4 border rounded-lg p-4 bg-gray-50">
        <img src="/assets/images/landing/Kaftan Tulip.png" alt="Produk" class="w-20 h-28 object-cover rounded-md" />
        <div class="flex-1">
          <p class="font-semibold text-gray-800">Gamis Wanita Yasmine Dress</p>
          <p class="text-sm text-gray-600">Maroon | XS</p>
          <p class="text-sm text-gray-500">Qty: 1</p>
        </div>
        <p class="text-sm font-semibold text-gray-800">Rp. 395.000</p>
      </div>
    </div>
    
    <!-- Section 3 -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <!-- Pembayaran -->
      <div>
        <p class="text-sm text-gray-500">Pembayaran</p>
        <p class="font-medium text-gray-800">Transfer Bank (BRI)</p>
      </div>
      
      <!-- Pengiriman -->
      <div>
        <p class="text-sm text-gray-500">Pengiriman</p>
        <p class="text-gray-800">Jalan Lawu 3 No.6<br>Kec. Depok, Kabupaten Sleman,<br>Daerah Istimewa Yogyakarta</p>
      </div>
    </div>

    <!-- Section 4 -->
    <div class="pt-4 border-t space-y-2">
      <p class="font-semibold text-gray-800">Order Summary</p>
      <div class="flex justify-between text-sm text-gray-700">
        <span>Harga Unit</span><span>Rp. 395.000</span>
      </div>
      <div class="flex justify-between text-sm text-gray-700">
        <span>Ongkir</span><span>Rp. 0</span>
      </div>
      <div class="flex justify-between text-sm text-gray-700">
        <span>Biaya Admin</span><span>Rp. 5.000</span>
      </div>
      <hr class="my-2">
      <div class="flex justify-between text-base font-semibold text-gray-900">
        <span>Total</span><span>Rp. 400.000</span>
      </div>
    </div>
  </div>
</div>


<script>
  const openBtn = document.getElementById('openTrackingBtn');
  const closeBtn = document.getElementById('closeTrackingBtn');
  const modal = document.getElementById('trackingModal');

  openBtn.addEventListener('click', () => {
    modal.classList.remove('hidden');
  });

  closeBtn.addEventListener('click', () => {
    modal.classList.add('hidden');
  });

  // Optional: Tutup popup jika klik luar konten modal
  modal.addEventListener('click', (e) => {
    if (e.target === modal) {
      modal.classList.add('hidden');
    }
  });
</script>

</body>
</html>
