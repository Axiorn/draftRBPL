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
      <!-- CARD 1 -->
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
      <!-- CARD 8 -->
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
      <!-- CARD 1 -->
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
      <!-- CARD 8 -->
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
</div>

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

<!-- Footer -->
<footer class="bg-green-900 text-white px-24 py-12">
    <div class="max-w-6xl mx-auto flex flex-col md:flex-row justify-between">
        <div class="space-y-8">
            <div class="text-2xl font-bold">e-Nalasha</div>
            <div>
                <h4 class="font-medium text-base mb-4">Social Media</h4>
                <div class="flex space-x-4">
                    <a href="#" class="w-8 h-8 border border-white rounded flex items-center justify-center hover:bg-white hover:text-green-900 transition-colors">
                        <i class="fab fa-facebook-f text-sm"></i>
                    </a>
                    <a href="#" class="w-8 h-8 border border-white rounded flex items-center justify-center hover:bg-white hover:text-green-900 transition-colors">
                        <i class="fab fa-twitter text-sm"></i>
                    </a>
                    <a href="#" class="w-8 h-8 border border-white rounded flex items-center justify-center hover:bg-white hover:text-green-900 transition-colors">
                        <i class="fab fa-instagram text-sm"></i>
                    </a>
                </div>
            </div>
            <div class="flex items-start space-x-3">
                <i class="fas fa-map-marker-alt text-base mt-1 flex-shrink-0"></i>
                <span class="text-sm leading-relaxed">Jl. Dimana-Mana No.2, Keruncung</span>
            </div>
            <div class="flex items-center space-x-3">
                <i class="fas fa-phone text-base"></i>
                <span class="text-sm">0812-XXXX-XXX</span>
            </div>
        </div>
        <div class="mt-10 md:mt-0 md:ml-20">
            <h4 class="font-bold text-xl mb-6">MENU</h4>
            <ul class="space-y-4">
                <li><a href="#" class="text-sm hover:underline">Home</a></li>
                <li><a href="#" class="text-sm hover:underline">Product</a></li>
                <li><a href="#" class="text-sm hover:underline">Shopping Cart</a></li>
                <li><a href="#" class="text-sm hover:underline">Contact</a></li>
            </ul>
        </div>
    </div>

    <div class="border-t border-green-700 mt-12 max-w-6xl mx-auto"></div>
</footer>

</body>
</html>
