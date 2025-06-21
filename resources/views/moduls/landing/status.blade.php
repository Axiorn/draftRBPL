@extends('layout.index', [
    'title' => 'e-Nalasha',
    // 'active' => 'Home',
    'page' => 'status',
])

@section('content')
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
    <button id="openInvoiceBtn" class="border border-gray-300 px-4 py-2 rounded-md text-sm hover:bg-gray-100 transition">🧾 Invoice</button>
    <button id="openTrackingBtn" class="bg-green-500 text-white px-4 py-2 rounded-md text-sm hover:bg-green-600 transition">Pantau Pengiriman</button>
  </div>

<!-- BACKDROP + JS TRACKING-->
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

<!-- BACKDROP + JS INVOICE -->
  <div id="invoiceModal" class="fixed inset-0 bg-black bg-opacity-60 z-50 flex justify-center items-center hidden">
    <div class="bg-white rounded-xl shadow-lg w-full max-w-xl p-6 space-y-6 relative text-center">
      {{-- <button id="closeInvoiceBtn" class="absolute top-3 right-3 text-gray-500 hover:text-gray-800 text-xl font-bold">&times;</button> --}}
      <h2 class="text-3xl font-semibold text-black">INVOICE</h2>
      <div class="flex items-center justify-center gap-2 text-lg text-black">
        <svg class="w-6 h-6 text-black" fill="currentColor" viewBox="0 0 20 20">
          <path d="M4 3h12a2 2 0 012 2v2H2V5a2 2 0 012-2zM2 9h16v3a2 2 0 01-2 2H4a2 2 0 01-2-2V9zm4 2a1 1 0 100-2 1 1 0 000 2z"/>
        </svg>
        <span class="text-base">Cash On Delivery (COD)</span>
      </div>
      <p class="text-xl font-semibold text-black">Total Pembayaran : Rp. 400.000</p>
      <p class="text-sm text-gray-800 font-medium">NB : Diharap membayar secara pas ketika barang telah sampai</p>
      <div class="flex justify-center gap-4 pt-2">
        <button id="closeInvoiceBtn" class="border border-black px-6 py-2 rounded hover:bg-gray-100 font-semibold">Status Pesanan</button>
        <a href="{{ route('landing') }}">
          <button class="border border-black px-6 py-2 rounded hover:bg-gray-100 font-semibold">Menu Awal</button>
        </a>
      </div>
    </div>
  </div>

  <script>
    const openInvoiceBtn = document.getElementById('openInvoiceBtn');
    const closeInvoiceBtn = document.getElementById('closeInvoiceBtn');
    const invoiceModal = document.getElementById('invoiceModal');

    openInvoiceBtn.addEventListener('click', () => {
      invoiceModal.classList.remove('hidden');
    });

    closeInvoiceBtn.addEventListener('click', () => {
      invoiceModal.classList.add('hidden');
    });

    invoiceModal.addEventListener('click', (e) => {
      if (e.target === invoiceModal) {
        invoiceModal.classList.add('hidden');
      }
    });
  </script>

@endsection