<footer class="bg-green-900 text-white px-24 py-12">
    <div class="max-w-6xl mx-auto flex flex-col md:flex-row justify-between">
        <div class="space-y-8">
            <div class="text-2xl font-bold">e-Nalasha</div>
            <div>
                <h4 class="font-medium text-base mb-4">Social Media</h4>
                <div class="flex space-x-4">
                    <a href="https://www.facebook.com/pages/KAMPUS%20UPN%20%22Veteran%22%20YOGYAKARTA,%20Condong%20Catur/161377307232534/" class="w-10 h-10 border border-white rounded flex items-center justify-center hover:bg-white hover:text-green-900 transition-colors">
                        <i class="fab fa-facebook-f text-sm"></i>
                    </a>
                    <a href="https://x.com/FTIUPNYK_" class="w-10 h-10 border border-white rounded flex items-center justify-center hover:bg-white hover:text-green-900 transition-colors">
                        <i class="fab fa-twitter text-sm"></i>
                    </a>
                    <a href="https://www.instagram.com/rudi_ahmad31/" class="w-10 h-10 border border-white rounded flex items-center justify-center hover:bg-white hover:text-green-900 transition-colors">
                        <i class="fab fa-instagram text-sm"></i>
                    </a>
                </div>
            </div>
            <div class="flex items-start space-x-3 max-w-96">
                <i class="fas fa-map-marker-alt text-base mt-1 flex-shrink-0"></i>
                <a href="https://maps.app.goo.gl/TaGtxB6wKXua6RMZ6">
                    <span class="text-sm leading-relaxed">Kampus Unit II (Prodi Teknik Informatika, Jl. Babarsari No.2, Janti, Caturtunggal, Depok, Sleman Regency, Special Region of Yogyakarta 55281</span>
                </a>
            </div>
            <div class="flex items-center space-x-3">
                <i class="fas fa-phone text-base"></i>
                <a href="https://wa.me/6281216921151">
                    <span class="text-sm">+62 812-1692-1151</span>
                </a>
            </div>
        </div>
        <div class="mt-10 md:mt-0 md:ml-20">
            <h4 class="font-bold text-xl mb-6">MENU</h4>
            <ul class="space-y-4">
                <li><a href="{{ route('landing') }}" class="text-sm hover:underline">Home</a></li>
                <li><a href="{{ route('produk') }}" class="text-sm hover:underline">Product</a></li>
                <li><a href="{{ route('keranjang') }}" class="text-sm hover:underline">Shopping Cart</a></li>
                {{-- <li><a href="{{ route('produk') }}" class="text-sm hover:underline">Contact</a></li> --}}
            </ul>
        </div>
    </div>

    <div class="border-t border-green-700 mt-12 max-w-6xl mx-auto"></div>
</footer>