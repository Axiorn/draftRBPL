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

@endsection