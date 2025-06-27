@extends('layout.index', [
    'title' => 'e-Nalasha',
    // 'active' => 'Home',
    'page' => 'produk',
])

@section('content')
  <div class=" mx-auto">
  <!-- Section Judul & Tombol -->
  <div class="bg-[#E5FFF0] p-8 text-center">
    <h2 class="text-2xl font-semibold text-gray-800 mb-8">Product e-Nalasha</h2>

    <div class="flex justify-center items-center gap-6 flex-wrap">
      <button class="option-btn px-6 py-3 bg-green-500 text-white font-medium rounded-md shadow-sm hover:bg-green-600 transition-colors duration-200 min-w-[120px]" data-target="muslimah">
        Muslimah
      </button>
      <button class="option-btn px-6 py-3 bg-white text-gray-700 border border-gray-300 font-medium rounded-md shadow-sm hover:bg-green-600 transition-colors duration-200 min-w-[120px]" data-target="muslim">
        Muslim
      </button>
      <button class="option-btn px-6 py-3 bg-white text-gray-700 border border-gray-300 font-medium rounded-md shadow-sm hover:bg-green-600 transition-colors duration-200 min-w-[120px]" data-target="sarimbit">
        Sarimbit
      </button>
    </div>
  </div>

  <!-- Konten Muslimah -->
  <div id="muslimah" class="content-page hidden bg-white px-24 py-16 text-center mx-auto">
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-y-8">
      <div class="flex flex-col items-center">
        <img src="assets/images/landing/image1.png" alt="Yasmine Dress" class="w-48 h-64 object-cover rounded-md shadow-sm" />
        <h3 class="mt-3 font-medium text-gray-800">Yasmine Dress</h3>
        <div class="flex items-center gap-2 text-sm mt-1">
          <p class="font-semibold text-gray-900">Rp.395.000</p>
          <span class="text-gray-300">|</span>
          <div class="flex items-center gap-1">
            <span class="text-yellow-500">★</span><span class="text-gray-600">5.0</span>
          </div>
        </div>
      </div>
      
      <div class="flex flex-col items-center">
        <img src="assets/images/landing/image8.png" alt="Fairuz – Brukat Premium" class="w-48 h-64 object-cover rounded-md shadow-sm" />
        <h3 class="mt-3 font-medium text-gray-800">Fairuz – Brukat Premium</h3>
        <div class="flex items-center gap-2 text-sm mt-1">
          <p class="font-semibold text-gray-900">Rp.220.000</p>
          <span class="text-gray-300">|</span>
          <div class="flex items-center gap-1">
            <span class="text-yellow-500">★</span><span class="text-gray-600">5.0</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Konten Muslim -->
  <div id="muslim" class="content-page hidden bg-white px-24 py-16 text-center mx-auto">
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-y-8">
      <div class="flex flex-col items-center">
        <img src="assets/images/landing/muslim1.png" alt="Al-Luthfi" class="w-48 h-64 object-cover rounded-md shadow-sm" />
        <h3 class="mt-3 font-medium text-gray-800">Al-Luthfi - Gamis Pria Saudi</h3>
        <div class="flex items-center gap-2 text-sm mt-1">
          <p class="font-semibold text-gray-900">Rp.150.000</p>
          <span class="text-gray-300">|</span>
          <div class="flex items-center gap-1">
            <span class="text-yellow-500">★</span><span class="text-gray-600">5.0</span>
          </div>
        </div>
      </div>
      <div class="flex flex-col items-center">
        <img src="assets/images/landing/muslim2.png" alt="ALBIRRU" class="w-48 h-64 object-cover rounded-md shadow-sm" />
        <h3 class="mt-3 font-medium text-gray-800">ALBIRRU Gamis Model Pria</h3>
        <div class="flex items-center gap-2 text-sm mt-1">
          <p class="font-semibold text-gray-900">Rp.120.000</p>
          <span class="text-gray-300">|</span>
          <div class="flex items-center gap-1">
            <span class="text-yellow-500">★</span><span class="text-gray-600">4.9</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Konten Sarimbit -->
  <div id="sarimbit" class="content-page hidden bg-white px-24 py-16 text-center mx-auto">
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-y-8">
      <!-- CARD 1 -->
      <div class="flex flex-col items-center">
        <img src="assets/images/landing/family1.png" alt="KIRANA" class="w-48 h-64 object-cover rounded-md shadow-sm" />
        <h3 class="mt-3 font-medium text-gray-800">KIRANA Family (Hershey)</h3>
        <div class="flex items-center gap-2 text-sm mt-1">
          <p class="font-semibold text-gray-900 text-left">Start <br>Rp.175.000</p>
          <span class="text-gray-300">|</span>
          <div class="flex items-center gap-1">
            <span class="text-yellow-500">★</span><span class="text-gray-600">5.0</span>
          </div>
        </div>
      </div>
      <!-- CARD 8 -->
      <div class="flex flex-col items-center">
        <img src="assets/images/landing/family2.png" alt="ZANNAYA" class="w-48 h-64 object-cover rounded-md shadow-sm" />
        <h3 class="mt-3 font-medium text-gray-800">Katun SARIMBIT ZANNAYA</h3>
        <div class="flex items-center gap-2 text-sm mt-1">
          <p class="font-semibold text-gray-900 text-left">Start <br>Rp.229.000</p>
          <span class="text-gray-300">|</span>
          <div class="flex items-center gap-1">
            <span class="text-yellow-500">★</span><span class="text-gray-600">4.9</span>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- Backdrop + JS -->
  <div id="productModal" class="fixed inset-0 bg-black bg-opacity-60 z-50 flex justify-center items-center hidden">
    <div class="bg-white rounded-xl shadow-lg w-full max-w-5xl p-6 relative overflow-y-auto max-h-[90vh]">
      <button id="closeProductBtn" class="absolute top-4 right-4 text-black text-2xl font-bold">&times;</button>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
          <div class="flex gap-2 mt-4 justify-center">
            <img src="assets/images/landing/image1.png" alt="Produk" class="w-80 rounded-md object-cover"/>
          </div>
          <div class="flex gap-8 mt-4 justify-center">
            <img src="assets/images/landing/image1.png" class="w-20 h-28 object-cover rounded-md cursor-pointer"/>
            <img src="assets/images/landing/image1.png" class="w-20 h-28 object-cover rounded-md cursor-pointer"/>
            <img src="assets/images/landing/image1.png" class="w-20 h-28 object-cover rounded-md cursor-pointer"/>
          </div>
        </div>
        <div class="space-y-4">
          <h2 class="text-2xl font-semibold">Gamis Wanita Yasmine Dress</h2>
          <p class="bg-gray-200 inline-block px-4 py-2 font-bold text-lg rounded">
            Rp. 395.000
          </p>
          <p class="text-sm flex items-center gap-1">
            <span>5.0</span>
            <span class="text-yellow-500">★</span>
            <span class="text-gray-500">12 Terjual</span>
          </p>
          <div>
            <p class="font-semibold">Ukuran</p>
            <div id="ukuranGroup" class="flex gap-2 mt-1">
              <button class="border px-3 py-1 rounded hover:bg-green-100">XS</button>
              <button class="border px-3 py-1 rounded hover:bg-green-100">S</button>
              <button class="border px-3 py-1 rounded hover:bg-green-100">M</button>
              <button class="border px-3 py-1 rounded hover:bg-green-100">L</button>
              <button class="border px-3 py-1 rounded hover:bg-green-100">XL</button>
            </div>
          </div>
          <div class="mt-4">
            <p class="font-semibold">Tipe</p>
            <div id="tipeGroup" class="flex gap-2 mt-1">
              <button class="border px-3 py-1 rounded hover:bg-green-100">Maroon</button>
              <button class="border px-3 py-1 rounded hover:bg-green-100">Navy</button>
              <button class="border px-3 py-1 rounded hover:bg-green-100">Hitam</button>
            </div>
          </div>
          <div>
            <p class="font-semibold">Kuantitas</p>
            <div class="flex items-center gap-2 mt-1">
              <button class="border px-2 rounded">−</button>
              <span>1</span>
              <button class="border px-2 rounded">+</button>
            </div>
          </div>
          <div class="flex flex-col gap-2 mt-4">
            <button class="border border-black px-4 py-2 rounded hover:bg-gray-100">
              Masukkan Keranjang
            </button>
            <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
              Beli Sekarang
            </button>
          </div>
        </div>
      </div>
      <div class="mt-6">
        <h3 class="text-lg font-semibold mb-2">Deskripsi</h3>
        <div class="border p-4 rounded text-sm leading-relaxed">
          <p>SIZE XS LD 90 PJ 135</p>
          <p>SIZE S LD 95 PJ 135</p>
          <p>SIZE M LD 100 PJ 140</p>
          <p>SIZE L LD 105 PJ 140</p>
          <p>SIZE XL LD 110 PJ 140</p>
        </div>
      </div>

    </div>
  </div>

{{-- JS untuk kategori muslim, muslimah, dan sarimbit --}}
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const buttons = document.querySelectorAll('.option-btn');
      const pages = document.querySelectorAll('.content-page');

      function resetAll() {
        buttons.forEach(btn => {
          btn.classList.remove('bg-green-500', 'text-white');
          btn.classList.add('bg-white', 'text-gray-700', 'border', 'border-gray-300');
        });

        pages.forEach(page => {
          page.classList.add('hidden');
        });
      }

      function activateButton(button) {
        const target = button.getAttribute('data-target');
        button.classList.remove('bg-white', 'text-gray-700', 'border', 'border-gray-300');
        button.classList.add('bg-green-500', 'text-white');

        document.getElementById(target).classList.remove('hidden');
      }

      buttons.forEach(button => {
        button.addEventListener('click', function () {
          resetAll();
          activateButton(this);
        });
      });

      const defaultBtn = document.querySelector('.option-btn[data-target="muslimah"]');
      if (defaultBtn) {
        activateButton(defaultBtn);
      }
    });
  </script>

{{-- JS untuk pop up detail produk --}}
  <script>
    const openProductBtn = document.getElementById('openProductBtn');
    const closeProductBtn = document.getElementById('closeProductBtn');
    const productModal = document.getElementById('productModal');

    openProductBtn.addEventListener('click', () => {
      productModal.classList.remove('hidden');
    });

    closeProductBtn.addEventListener('click', () => {
      productModal.classList.add('hidden');
    });

    productModal.addEventListener('click', (e) => {
      if (e.target === productModal) {
        productModal.classList.add('hidden');
      }
    });
  </script>
@endsection