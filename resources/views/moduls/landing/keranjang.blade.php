@extends('layout.index', [
    'title' => 'e-Nalasha',
    // 'active' => 'Home',
    'page' => 'keranjang',
])

@section('content')
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
            <img src="assets/images/landing/image1.png" alt="Produk" class="w-44 h-auto rounded-md">
        </div>
        <div class="flex-1">
            <h2 class="text-lg font-semibold">Yasmine Dress</h2>
            <p><span class="font-medium">Varian:</span> Maroon</p>
            <p><span class="font-medium">Ukuran:</span> XS</p>
            <p><span class="font-medium">Kuantitas:</span> 1</p>
            <p class="mt-1 font-semibold">Rp.395.000</p>
            <button id="openProductBtn" class="mt-3 px-4 py-1 bg-yellow-300 text-black border border-black rounded-md hover:bg-yellow-400">Edit</button>
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

  {{-- JS untuk PopUp --}}
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

  {{-- JS untuk pilihan Ukuran dan Warna --}}
  <script>
    function setupSelectableButtons(groupId, selectedClass) {
      const group = document.getElementById(groupId);
      const buttons = group.querySelectorAll('button');

      buttons.forEach(btn => {
        btn.addEventListener('click', () => {
          // Hapus kelas aktif dari semua tombol di grup
          buttons.forEach(b => {
            b.classList.remove(...selectedClass.split(' '));
          });

          // Tambahkan kelas aktif ke tombol yang diklik
          btn.classList.add(...selectedClass.split(' '));
        });
      });
    }
    setupSelectableButtons('ukuranGroup', 'bg-green-500 text-white font-semibold');
    setupSelectableButtons('tipeGroup', 'bg-green-500 text-white font-semibold');
  </script>
@endsection