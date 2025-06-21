<nav class="bg-green-100 h-[64px] flex items-center justify-between px-6 md:px-24 sticky top-0 z-50">
    <div class="text-xl font-bold text-green-900">
      <a href="{{ route('landing') }}">
        <span class="font-normal">e-</span><span class="font-bold">Nalasha</span>
      </a>
    </div>
    <div class="flex items-center space-x-8">
      <a href="{{ route('landing') }}" class="text-green-900 font-medium">HOME</a>
      <a href="{{ route('produk') }}" class="text-green-900 font-medium">PRODUCT</a>
      <a href="{{ route('status') }}" class="text-green-900 font-medium">STATUS</a>
    </div>
    <div class="flex items-center space-x-6">
      <div class="relative">
        <a href="{{ route('keranjang') }}">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-900" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1.5 7h11L17 13M7 13l-4-8m14 0a2 2 0 110 4 2 2 0 010-4z" />
        </svg>
        <span class="absolute top-0 right-0 h-3 w-3 bg-green-500 rounded-full border-2 border-green-100"></span>
        </a>
    </div>
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-900" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A9.004 9.004 0 0112 15c2.485 0 4.735.998 6.364 2.636M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
      </svg>
    </div>
</nav>