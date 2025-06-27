@extends('layout.index', [
    'title' => 'e-Nalasha',
    // 'active' => 'Home',
    'page' => 'landing',
])

@section('content')
    <!-- Section 1: Hero -->
    <section class="bg-green-100 px-24 py-16 md:grid-cols-2 flex justify-center items-center gap-12">
        <div>
            <h1 class="text-4xl md:text-5xl font-bold text-green-900 leading-tight">Nalasha-<br>Gamis Cantik,<br>Nyaman, dan<br>Penuh Berkah</h1>
            <p class="mt-4 text-green-800">Jelajahi koleksi gamis dan pakaian islami lainnya sesuai dengan selera pakaian anda</p>
            <a href="#best-seller">
                <button class="mt-6 bg-green-900 text-white px-6 py-2 rounded shadow-md hover:bg-green-800">JELAJAHI SEKARANG</button>
            </a>
        </div>
        <div>
            <img src="assets\images\landing\Model Gamis Hijau.png" alt="Model Gamis Hijau" class="h-96 w-auto rounded-xl overflow-hidden"/>
        </div>
    </section>

    <!-- Section 2: Best Selling -->
    <section class="px-24 py-16 bg-white text-center" id="best-seller">
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
            <a href="{{ route('produk') }}">
                Lainnya →
            </a>
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
                    <a href="{{ route('produk') }}">
                        <img src="/assets\images\landing\imageGamis.png" alt="Gamis" class="w-full h-full object-cover rounded-lg"/>
                    </a>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-3">Gamis</h3>
                <p class="text-gray-600 text-base leading-relaxed max-w-xs">
                    Pakaian panjang longgar yang menutup seluruh tubuh hingga mata kaki dikenakan oleh wanita Muslim untuk tampil syar'i dan elegan.
                </p>
            </div>
            <div class="flex flex-col items-center">
                <div class="w-80 h-96 mb-6">
                    <a href="{{ route('produk') }}">
                        <img src="/assets\images\landing\imageCouple.png" alt="Couple Dress" class="w-full h-full object-cover rounded-lg"/>
                    </a>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-3">Couple Dress</h3>
                <p class="text-gray-600 text-base leading-relaxed max-w-xs">
                    Setelan busana serasi baju koko untuk pria dan gamis untuk wanita dirancang dengan warna, motif, atau bahan yang senada
                </p>
            </div>
            <div class="flex flex-col items-center">
                <div class="w-80 h-96 mb-6">
                    <a href="{{ route('produk') }}">
                        <img src="/assets\images\landing\imageFamily.png" alt="Sarimbit" class="w-full h-full object-cover rounded-lg"/>
                    </a>
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
@endsection