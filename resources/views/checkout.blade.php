<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>e-Nalasha</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />
</head>

<div class="flex flex-col lg:flex-row gap-4 px-16 py-6">
  <!-- Section 1: Ringkasan Order -->
  <section class="w-full lg:w-1/3 space-y-6 p-4 bg-white">
    <div class="flex items-center gap-4 bg-green-100 p-6 shadow justify-start fixed top-0 left-0 w-full text-2xl z-50">
      <a href="{{ route('keranjang') }}">
        <button class="text-green-900 font-bold">
          ←
        </button>
      </a>
      <h1 class="text-2xl font-semibold text-green-800">e-Nalasha</h1>
      <span class="text-xl font-light">| CHECKOUT</span>
    </div>

    <!-- Detail Produk -->
    <div class="space-y-4">
      <h2 class="font-semibold text-lg mt-16">Order Summary</h2>
      <div class="flex items-start gap-4">
        <img src="/assets/images/landing/Kaftan Tulip.png" alt="Product" class="w-20 h-auto object-cover border rounded-md">
        <div class="flex-1">
          <p class="font-medium">Gamis Wanita Yasmine Dress</p>
          <p class="text-sm text-gray-600">Varian: Maroon</p>
          <p class="text-sm text-gray-600">Ukuran: XS</p>
          <div class="flex items-center gap-2 mt-2">
            <button class="w-6 h-6 border rounded">−</button>
            <span class="text-sm">1</span>
            <button class="w-6 h-6 border rounded">+</button>
          </div>
        </div>
        <p class="text-sm font-semibold">Rp.395.000</p>
      </div>
    </div>

    <!-- Kode Promo & Harga -->
    <div class="space-y-4">
      <div class="flex gap-2">
        <input type="text" placeholder="Kode Promo" class="w-full border px-2 py-1 rounded text-sm">
        <button class="text-sm border px-4 py-1 rounded text-blue-600 border-blue-500 hover:bg-blue-100">Pasang</button>
      </div>
      <div class="text-sm space-y-1">
        <div class="flex justify-between">
          <span>Subtotal</span>
          <span>Rp.395.000</span>
        </div>
        <div class="flex justify-between">
          <span>Biaya Admin</span>
          <span>Rp.5.000</span>
        </div>
        <div class="flex justify-between">
          <span>Ongkir</span>
          <span class="text-green-500 font-medium">Gratis</span>
        </div>
        <hr>
        <div class="flex justify-between font-semibold">
          <span>Total Harga</span>
          <span class="text-green-600">Rp.400.000</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 2: Form Pengiriman -->
  <section class="w-full lg:w-2/3 space-y-6 p-4">
    <!-- Step Navigasi -->
    <div class="flex items-center gap-4 mt-16">
      <span id="step-shipping" class="text-green-500 font-bold p-4">Alamat Pengiriman</span>
      <div class="h-[1px] w-4 bg-gray-300"></div>
      <span id="step-delivery" class="text-gray-400 font-normal">Pengantaran</span>
      <div class="h-[1px] w-4 bg-gray-300"></div>
      <span id="step-payment" class="text-gray-400 font-normal">Pembayaran</span>
    </div>

    <div id="shipping" class="mt-8">
      <!-- Form Penerima -->
      <div class="bg-white shadow rounded p-4 space-y-4">
        <h3 class="font-medium text-gray-800">Informasi Penerima</h3>
        <input type="text" placeholder="Nama Penerima" class="w-full border px-3 py-2 rounded text-sm">
        <input type="email" placeholder="Email" class="w-full border px-3 py-2 rounded text-sm">
        <div class="flex gap-2">
          <select class="border px-2 py-2 rounded text-sm">
            <option>+62</option>
          </select>
          <input type="tel" placeholder="No. Telp" class="flex-1 border px-3 py-2 rounded text-sm">
        </div>
      </div>
      <!-- Form Alamat -->
      <div class="bg-white shadow rounded p-4 space-y-4">
        <h3 class="font-medium text-gray-800">Informasi Alamat</h3>
        <input type="text" placeholder="Alamat Penerima" class="w-full border px-3 py-2 rounded text-sm">
        <div class="flex gap-2">
          <input type="text" placeholder="Kota/Kabupaten" class="w-1/2 border px-3 py-2 rounded text-sm">
          <input type="text" placeholder="Kecamatan" class="w-1/2 border px-3 py-2 rounded text-sm">
        </div>
        <input type="text" placeholder="Kode Pos" class="w-full border px-3 py-2 rounded text-sm">
        <input type="text" placeholder="Alamat Acuan" class="w-full border px-3 py-2 rounded text-sm">
      </div>
      <!-- Tombol Lanjut -->
        <div class="flex justify-end mt-4">
          <button onclick="showStep('delivery')" class="px-6 py-2 bg-green-400 hover:bg-green-500 text-white font-medium rounded">Lanjut</button>
        </div>
      </a>
    </div>

    <div id="delivery" class="mt-8 hidden">
      <div class="bg-white p-8 rounded shadow-md">
        <h2 class="text-lg font-semibold text-gray-700 mb-4">Opsi Pengantaran</h2>
        <div class="space-y-4">
          <label class="flex justify-between items-center">
            <div class="flex items-center gap-3">
              <input type="radio" name="pengantaran" class="accent-green-500 w-5 h-5" checked>
              <span class="text-gray-700">Standard 5-7 Hari</span>
            </div>
            <span class="text-green-500 font-medium">Gratis</span>
          </label>
          <label class="flex justify-between items-center">
            <div class="flex items-center gap-3">
              <input type="radio" name="pengantaran" class="accent-green-500 w-5 h-5">
              <span class="text-gray-700">2-4 Hari</span>
            </div>
            <span>Rp.15.000</span>
          </label>
          <label class="flex justify-between items-center">
            <div class="flex items-center gap-3">
              <input type="radio" name="pengantaran" class="accent-green-500 w-5 h-5">
              <span class="text-gray-700">Hari yang Sama</span>
            </div>
            <span>Rp. 30.000</span>
          </label>
        </div>

        <!-- Tombol Navigasi -->
        <div class="flex justify-between mt-6">
          <button onclick="showStep('shipping')" class="px-6 py-2 border border-green-500 text-green-600 rounded hover:bg-green-50">Kembali</button>
          <button onclick="showStep('payment')" class="px-6 py-2 bg-green-400 hover:bg-green-500 text-white font-medium rounded">Lanjut</button>
        </div>
      </div>
    </div>

    <div id="payment" class="mt-8 hidden">
      <!-- Opsi Pembayaran -->
      <div class="bg-white p-6 rounded shadow-md">
        <h2 class="text-lg font-semibold text-gray-700 mb-4">Opsi Pembayaran</h2>
        <div class="space-y-4">
          <label class="flex justify-between items-center">
            <div class="flex items-center gap-3">
              <input type="radio" name="pembayaran" class="accent-green-500 w-5 h-5" checked>
              <span class="text-gray-700 flex items-center gap-2">
                <svg class="w-5 h-5 text-gray-600" fill="currentColor" viewBox="0 0 24 24"><path d="M2 4h20v16H2V4zm2 2v12h16V6H4zm10 2h4v2h-4V8zm0 4h4v2h-4v-2zm-8 0h6v2H6v-2z"/></svg>
                Cash On Delivery (COD)
              </span>
            </div>
          </label>
          <label class="flex justify-between items-center">
            <div class="flex items-center gap-3">
              <input type="radio" name="pembayaran" class="accent-green-500 w-5 h-5">
              <span class="text-gray-700 flex items-center gap-2">
                <svg class="w-5 h-5 text-gray-600" fill="currentColor" viewBox="0 0 24 24"><path d="M3 4h18v16H3V4zm2 2v12h14V6H5zm3 2h8v2H8V8zm0 4h8v2H8v-2z"/></svg>
                Transfer Bank (BRI)
              </span>
            </div>
          </label>
        </div>
      </div>

      <!-- Tombol Navigasi -->
      <div class="flex justify-between mt-6">
        <button onclick="showStep('delivery')" class="px-6 py-2 border border-green-500 text-green-600 rounded hover:bg-green-50">Kembali</button>
        <button class="px-6 py-2 bg-green-400 hover:bg-green-500 text-white font-medium rounded">Bayar Sekarang</button>
      </div>
    </div>
  </section>
</div>

<script>
  function showStep(stepId) {
    const steps = ['shipping', 'delivery', 'payment'];
    const indicatorMap = {
      shipping: 'step-shipping',
      delivery: 'step-delivery',
      payment: 'step-payment'
    };

    steps.forEach(id => {
      // Sembunyikan konten
      document.getElementById(id).classList.add('hidden');

      // Reset indikator
      const indicator = document.getElementById(indicatorMap[id]);
      indicator.classList.remove('text-green-500', 'font-bold');
      indicator.classList.add('text-gray-400', 'font-normal');
    });

    // Tampilkan konten aktif
    document.getElementById(stepId).classList.remove('hidden');

    // Aktifkan indikator
    const activeIndicator = document.getElementById(indicatorMap[stepId]);
    activeIndicator.classList.remove('text-gray-400', 'font-normal');
    activeIndicator.classList.add('text-green-500', 'font-bold');
  }
</script>

</body>
</html>
