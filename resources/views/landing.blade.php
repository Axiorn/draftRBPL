<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>e-Nalasha</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />
</head>
<body class="bg-white">

<!-- Navbar -->
<nav class="bg-green-100 h-[64px] flex items-center justify-between px-24 sticky top-0 z-50">
    <div class="text-xl font-bold text-green-900">
      <span class="font-normal">e-</span><span class="font-bold">Nalasha</span>
    </div>
    <div class="flex items-center space-x-8">
      <a href="{{ route('landing') }}" class="text-green-900 font-medium">HOME</a>
      <a href="{{ route('produk') }}" class="text-green-900 font-medium">PRODUCT</a>
      <a href="#" class="text-green-900 font-medium">STATUS</a>
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
    <!-- Section 1: Hero -->
    <section class="bg-green-100 px-24 py-16 md:grid-cols-2 flex justify-center items-center gap-12">
        <div>
            <h1 class="text-4xl md:text-5xl font-bold text-green-900 leading-tight">Nalasha-<br>Gamis Cantik,<br>Nyaman, dan<br>Penuh Berkah</h1>
            <p class="mt-4 text-green-800">Jelajahi koleksi gamis dan pakaian islami lainnya sesuai dengan selera pakaian anda</p>
            <button class="mt-6 bg-green-900 text-white px-6 py-2 rounded shadow-md hover:bg-green-800">JELAJAHI SEKARANG</button>
        </div>
        <div>
            <img src="assets\images\landing\Model Gamis Hijau.png" alt="Model Gamis Hijau" class="h-96 w-auto rounded-xl overflow-hidden"/>
        </div>
    </section>

    <!-- Section 2: Best Selling -->
    <section class="px-24 py-16 bg-white text-center">
        <h2 class="text-3xl font-bold text-green-900">Best selling</h2>
        <p class="text-green-800 mt-2">Get in on the trend with our curated selection of best-selling styles.</p>

        <div class="mt-10 grid md:grid-cols-3 gap-x-2 gap-y-6">
            <div class="flex flex-col items-center">
                <img src="/assets/images/landing/Kaftan Tulip.png" alt="Kaftan Tulip" class="h-[24rem] max-w-full rounded-md" />
                <h3 class="mt-2 font-semibold text-center">Kaftan Tulip Rayon Uzbekistan</h3>
                <div class="flex gap-2 text-green-900 text-sm justify-center">
                    <p>Rp120.000</p>
                    <p class="text-gray-400">|</p>
                    <p class="text-yellow-500">5.0 ⭐</p>
                </div>
            </div>
            <div class="flex flex-col items-center">
                <img src="/assets/images/landing/Calya Gaisya.png" alt="Calya Gaisya" class="h-[24rem] max-w-full rounded-md" />
                <h3 class="mt-2 font-semibold text-center">Calya Gaisya Dress Gamis</h3>
                <div class="flex gap-2 text-green-900 text-sm justify-center">
                    <p>Rp100.000</p>
                    <p class="text-gray-400">|</p>
                    <p class="text-yellow-500">4.9 ⭐</p>
                </div>
            </div>
            <div class="flex flex-col items-center">
                <img src="/assets/images/landing/HijabChic Syahira.png" alt="HijabChic Syahira" class="h-[24rem] max-w-full rounded-md" />
                <h3 class="mt-2 font-semibold text-center">HijabChic Syahira Pink Nude Dress</h3>
                <div class="flex gap-2 text-green-900 text-sm justify-center">
                    <p>Rp250.000</p>
                    <p class="text-gray-400">|</p>
                    <p class="text-yellow-500">5.0 ⭐</p>
                </div>
            </div>
        </div>
        <button class="mt-6 border border-green-900 text-green-900 px-4 py-2 rounded hover:bg-green-50">
            Lainnya →
        </button>
    </section>

    <!-- Section 3: Product e-Nalasha -->
    <section class="px-24 py-16 bg-gray-50 text-center">
        <h2 class="text-3xl font-bold text-green-900 mb-12">Product e-Nalasha</h2>
        
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-y-8">
            <div class="flex flex-col items-center">
                <img src="assets\images\landing\image1.png" alt="Yasmine Dress" class="w-48 h-64 object-cover rounded-md shadow-sm" />
                <h3 class="mt-3 font-medium text-gray-800">Yasmine Dress</h3>
                <div class="flex items-center gap-2 text-sm mt-1">
                    <p class="font-semibold text-gray-900">Rp.395.000</p>
                    <span class="text-gray-300">|</span>
                    <div class="flex items-center gap-1">
                        <span class="text-yellow-500">★</span>
                        <span class="text-gray-600">5.0</span>
                    </div>
                </div>
            </div>
            <div class="flex flex-col items-center">
                <img src="assets\images\landing\image2.png" alt="Khimar Belfia Syari" class="w-48 h-64 object-cover rounded-md shadow-sm" />
                <h3 class="mt-3 font-medium text-gray-800">Khimar Belfia Syari</h3>
                <div class="flex items-center gap-2 text-sm mt-1">
                    <p class="font-semibold text-gray-900">Rp.320.000</p>
                    <span class="text-gray-300">|</span>
                    <div class="flex items-center gap-1">
                        <span class="text-yellow-500">★</span>
                        <span class="text-gray-600">4.9</span>
                    </div>
                </div>
            </div>
            <div class="flex flex-col items-center">
                <img src="assets\images\landing\image3.png" alt="Crinkle Lattecia KVG" class="w-48 h-64 object-cover rounded-md shadow-sm" />
                <h3 class="mt-3 font-medium text-gray-800">Crinkle Lattecia KVG</h3>
                <div class="flex items-center gap-2 text-sm mt-1">
                    <p class="font-semibold text-gray-900">Rp.520.000</p>
                    <span class="text-gray-300">|</span>
                    <div class="flex items-center gap-1">
                        <span class="text-yellow-500">★</span>
                        <span class="text-gray-600">4.8</span>
                    </div>
                </div>
            </div>
            <div class="flex flex-col items-center">
                <img src="assets\images\landing\image4.png" alt="Alysa Dress Nella'sstyle" class="w-48 h-64 object-cover rounded-md shadow-sm" />
                <h3 class="mt-3 font-medium text-gray-800">Alysa Dress Nella'sstyle</h3>
                <div class="flex items-center gap-2 text-sm mt-1">
                    <p class="font-semibold text-gray-900">Rp.400.000</p>
                    <span class="text-gray-300">|</span>
                    <div class="flex items-center gap-1">
                        <span class="text-yellow-500">★</span>
                        <span class="text-gray-600">4.7</span>
                    </div>
                </div>
            </div>
            <div class="flex flex-col items-center">
                <img src="assets\images\landing\image5.png" alt="Maxi Dress Tulle Garden Mix" class="w-48 h-64 object-cover rounded-md shadow-sm" />
                <h3 class="mt-3 font-medium text-gray-800">Maxi Dress Tulle Garden Mix</h3>
                <div class="flex items-center gap-2 text-sm mt-1">
                    <p class="font-semibold text-gray-900">Rp.145.000</p>
                    <span class="text-gray-300">|</span>
                    <div class="flex items-center gap-1">
                        <span class="text-yellow-500">★</span>
                        <span class="text-gray-600">5.0</span>
                    </div>
                </div>
            </div>
            <div class="flex flex-col items-center">
                <img src="assets\images\landing\image6.png" alt="As Mazis Rayon Cassandra" class="w-48 h-64 object-cover rounded-md shadow-sm" />
                <h3 class="mt-3 font-medium text-gray-800">As Mazis Rayon Cassandra</h3>
                <div class="flex items-center gap-2 text-sm mt-1">
                    <p class="font-semibold text-gray-900">Rp.145.000</p>
                    <span class="text-gray-300">|</span>
                    <div class="flex items-center gap-1">
                        <span class="text-yellow-500">★</span>
                        <span class="text-gray-600">4.7</span>
                    </div>
                </div>
            </div>
            <div class="flex flex-col items-center">
                <img src="assets\images\landing\image7.png" alt="Gamis Brukat Jumbo" class="w-48 h-64 object-cover rounded-md shadow-sm" />
                <h3 class="mt-3 font-medium text-gray-800">Gamis Brukat Jumbo</h3>
                <div class="flex items-center gap-2 text-sm mt-1">
                    <p class="font-semibold text-gray-900">Rp.100.000</p>
                    <span class="text-gray-300">|</span>
                    <div class="flex items-center gap-1">
                        <span class="text-yellow-500">★</span>
                        <span class="text-gray-600">4.9</span>
                    </div>
                </div>
            </div>    
            <div class="flex flex-col items-center">
                <img src="assets\images\landing\image8.png" alt="Fairuz – Brukat Premium" class="w-48 h-64 object-cover rounded-md shadow-sm" />
                <h3 class="mt-3 font-medium text-gray-800">Fairuz – Brukat Premium</h3>
                <div class="flex items-center gap-2 text-sm mt-1">
                    <p class="font-semibold text-gray-900">Rp.220.000</p>
                    <span class="text-gray-300">|</span>
                    <div class="flex items-center gap-1">
                        <span class="text-yellow-500">★</span>
                        <span class="text-gray-600">5.0</span>
                    </div>
                </div>
            </div>
        </div>
        
        <button class="mt-10 border border-green-900 text-green-900 px-6 py-2 rounded-md hover:bg-green-100 transition-colors">
            <a href="{{ route('produk') }}">
            Lainnya →
            </a>
        </button>
    </section>

    <!-- Section 4: Banyak Pilihan Jenis -->
    <section class="px-24 py-16 bg-white text-center">
        <h2 class="text-4xl font-bold text-gray-800 mb-4">Banyak Pilihan Jenis</h2>
        <p class="text-gray-600 text-lg max-w-4xl mx-auto mb-12">
            Nalasha memberikan banyak jenis pakaian seperti Gamis, Sarimbit, Couple Dress, Dan lain-lain !
        </p>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
            <div class="flex flex-col items-center">
                <div class="w-80 h-96 mb-6">
                    <img src="/assets\images\landing\imageGamis.png" alt="Gamis" class="w-full h-full object-cover rounded-lg"/>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-3">Gamis</h3>
                <p class="text-gray-600 text-base leading-relaxed max-w-xs">
                    Pakaian panjang longgar yang menutup seluruh tubuh hingga mata kaki dikenakan oleh wanita Muslim untuk tampil syar'i dan elegan.
                </p>
            </div>
            <div class="flex flex-col items-center">
                <div class="w-80 h-96 mb-6">
                    <img src="/assets\images\landing\imageCouple.png" alt="Couple Dress" class="w-full h-full object-cover rounded-lg"/>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-3">Couple Dress</h3>
                <p class="text-gray-600 text-base leading-relaxed max-w-xs">
                    Setelan busana serasi baju koko untuk pria dan gamis untuk wanita dirancang dengan warna, motif, atau bahan yang senada
                </p>
            </div>
            <div class="flex flex-col items-center">
                <div class="w-80 h-96 mb-6">
                    <img src="/assets\images\landing\imageFamily.png" alt="Sarimbit" class="w-full h-full object-cover rounded-lg"/>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-3">Sarimbit</h3>
                <p class="text-gray-600 text-base leading-relaxed max-w-xs">
                    Busana Muslim seragam untuk satu keluarga dengan desain, warna, dan motif yang senada untuk menciptakan kesan harmonis.
                </p>
            </div>
        </div>
    </section>

    <!-- Section 5: Feedback Corner -->
    <section class="px-24 py-16 bg-white text-center">
        <h2 class="text-4xl font-bold text-gray-800 mb-16">Feedback Corner</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
            <div class="bg-gray-50 p-8 rounded-lg relative">
                <div class="text-6xl text-gray-300 absolute top-4 left-6 leading-none">"</div>
                <div class="pt-8 text-left">
                    <h4 class="font-bold text-gray-800 text-lg mb-4">Hana Lestari</h4>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        "Saya sangat suka desain tampilan e-Nalasha yang elegan dan modern. Produk yang ditawarkan tersusun dengan rapi, membuat pengalaman berbelanja jadi lebih menyenangkan!"
                    </p>
                </div>
            </div>
            <div class="bg-green-200 p-8 rounded-lg relative">
                <div class="text-6xl text-green-400 absolute top-4 left-6 leading-none">"</div>
                <div class="pt-8 text-left">
                    <h4 class="font-bold text-gray-800 text-lg mb-4">Siti Aulia</h4>
                    <p class="text-gray-700 text-sm leading-relaxed">
                        "Website e-Nalasha sangat mudah digunakan dan responsif di berbagai perangkat. Saya bisa dengan cepat menemukan produk yang saya cari tanpa hambatan!"
                    </p>
                </div>
            </div>
            <div class="bg-gray-50 p-8 rounded-lg relative">
                <div class="text-6xl text-gray-300 absolute top-4 left-6 leading-none">"</div>
                <div class="pt-8 text-left">
                    <h4 class="font-bold text-gray-800 text-lg mb-4">Dian Putri</h4>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        "Koleksi gamis, baju koko, dan sarimbit di e-Nalasha sangat lengkap dengan berbagai model yang stylish. Sangat cocok untuk belanja pakaian Muslim keluarga!"
                    </p>
                </div>
            </div>
        </div>
    </section>

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
