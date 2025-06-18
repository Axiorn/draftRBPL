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

<!-- Section 1: Judul -->
<section class="bg-green-100 py-6 text-center">
  <h1 class="text-3xl font-bold text-green-900">Keranjang Belanja</h1>
</section>

<!-- Section 2: Konten Produk -->
<div class=" p-4 mb-24">
    <section class="bg-white p-6 flex flex-col md:flex-row gap-4 items-start">
        <div class="flex items-center min-h-[200px]">
            <div class="flex flex-col gap-3 justify-center">
                <button class="w-10 h-10 flex items-center justify-center bg-green-100 rounded-md border border-black">
                ✅
                </button>
                <button class="w-10 h-10 flex items-center justify-center bg-red-100 rounded-md border border-black">
                🗑️
                </button>
            </div>
        </div>
        <div>
            <img src="/assets/images/landing/Kaftan Tulip.png" alt="Produk" class="w-44 h-auto rounded-md">
        </div>
        <div class="flex-1">
            <h2 class="text-lg font-semibold">Gamis Wanita Yasmine Dress</h2>
            <p><span class="font-medium">Varian:</span> Maroon</p>
            <p><span class="font-medium">Ukuran:</span> XS</p>
            <p><span class="font-medium">Kuantitas:</span> 1</p>
            <p class="mt-1 font-semibold">Rp.395.000</p>
            <button class="mt-3 px-4 py-1 bg-yellow-300 text-black border border-black rounded-md hover:bg-yellow-400">Edit</button>
        </div>
    </section>
</div>

<!-- Section 3: Total + Checkout -->
<section class="fixed bottom-0 left-0 w-full bg-gray-200 p-4 flex justify-between items-center z-50">
    <div>
        <p class="text-right font-medium">Total :</p>
        <p class="text-xl font-bold">Rp.395.000</p>
    </div>
    <a href="{{ route('checkout') }}">
        <button class="px-6 py-2 bg-green-400 hover:bg-green-500 text-white font-medium rounded border border-black">
            Checkout
        </button>
    </a>
</section>

</body>
</html>
