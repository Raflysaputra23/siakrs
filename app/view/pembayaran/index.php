<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-50 p-4 lg:p-8">
    <div class="max-w-7xl mx-auto">
        <div class="mb-6 flex items-center gap-3">
            <a href="<?= CONSTANT::DIRNAME ?>transaksi" class="text-gray-400 hover:text-brand-600 transition-colors p-2 rounded-full hover:bg-gray-200">
                <i class="ph ph-arrow-left text-2xl"></i>
            </a>
            <div>
                <h1 class="text-2xl font-bold text-gray-900">Pembayaran Tagihan</h1>
                <p class="text-sm text-gray-500 mt-1">Selesaikan pembayaran untuk melunasi tagihan akademik.</p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Rincian Tagihan -->
            <div class="md:col-span-2 space-y-6">
                <div class="bg-white rounded-2xl shadow-[0_2px_10px_-3px_rgba(6,81,237,0.1)] border border-gray-100 p-6">
                    <h2 class="text-lg font-bold text-gray-800 mb-4 border-b border-gray-100 pb-4">Rincian Pembayaran</h2>
                    <div class="space-y-4">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="font-semibold text-gray-900">UKT Semester Ganjil 2026</h3>
                                <p class="text-sm text-gray-500">Tagihan INV-2026-08-002</p>
                            </div>
                            <span class="font-bold text-gray-900">Rp 4.500.000</span>
                        </div>
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="font-semibold text-gray-900">Biaya Administrasi Bank</h3>
                                <p class="text-sm text-gray-500">Disesuaikan metode</p>
                            </div>
                            <span class="font-bold text-gray-900">Rp 2.500</span>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-[0_2px_10px_-3px_rgba(6,81,237,0.1)] border border-gray-100 p-6">
                    <h2 class="text-lg font-bold text-gray-800 mb-4 border-b border-gray-100 pb-4">Pilih Metode Pembayaran</h2>
                    
                    <div class="space-y-3">
                        <label class="flex items-center justify-between p-4 border border-gray-200 rounded-xl cursor-pointer hover:bg-brand-50 hover:border-brand-300 transition-colors">
                            <div class="flex items-center gap-3 flex-1">
                                <div class="w-12 h-12 bg-blue-50 text-blue-800 rounded-lg flex items-center justify-center shrink-0">
                                    <i class="ph ph-bank text-2xl"></i>
                                </div>
                                <div>
                                    <p class="font-bold text-gray-900">BCA Virtual Account</p>
                                    <p class="text-xs text-gray-500">Dicek otomatis</p>
                                </div>
                            </div>
                            <input type="radio" name="payment_method" class="w-5 h-5 text-brand-600 focus:ring-brand-500 border-gray-300" checked>
                        </label>
                        
                        <label class="flex items-center justify-between p-4 border border-gray-200 rounded-xl cursor-pointer hover:bg-brand-50 hover:border-brand-300 transition-colors">
                            <div class="flex items-center gap-3 flex-1">
                                <div class="w-12 h-12 bg-orange-50 text-orange-600 rounded-lg flex items-center justify-center shrink-0">
                                    <i class="ph ph-bank text-2xl"></i>
                                </div>
                                <div>
                                    <p class="font-bold text-gray-900">BNI Virtual Account</p>
                                    <p class="text-xs text-gray-500">Dicek otomatis</p>
                                </div>
                            </div>
                            <input type="radio" name="payment_method" class="w-5 h-5 text-brand-600 focus:ring-brand-500 border-gray-300">
                        </label>

                        <label class="flex items-center justify-between p-4 border border-gray-200 rounded-xl cursor-pointer hover:bg-brand-50 hover:border-brand-300 transition-colors">
                            <div class="flex items-center gap-3 flex-1">
                                <div class="w-12 h-12 bg-green-50 text-green-600 rounded-lg flex items-center justify-center shrink-0">
                                    <i class="ph ph-wallet text-2xl"></i>
                                </div>
                                <div>
                                    <p class="font-bold text-gray-900">Qris / E-Wallet</p>
                                    <p class="text-xs text-gray-500">Gopay, OVO, Dana</p>
                                </div>
                            </div>
                            <input type="radio" name="payment_method" class="w-5 h-5 text-brand-600 focus:ring-brand-500 border-gray-300">
                        </label>
                    </div>
                </div>
            </div>

            <!-- Ringkasan Checkout -->
            <div class="md:col-span-1">
                <div class="bg-white rounded-2xl shadow-[0_2px_10px_-3px_rgba(6,81,237,0.1)] border border-gray-100 p-6 sticky top-8">
                    <h2 class="text-lg font-bold text-gray-800 mb-4">Total Tagihan</h2>
                    <div class="text-3xl font-extrabold text-brand-600 mb-6">Rp 4.502.500</div>
                    
                    <button class="w-full bg-brand-600 hover:bg-brand-700 text-white font-bold py-3 px-4 rounded-xl shadow-lg transition-colors flex justify-center items-center gap-2 cursor-pointer">
                        <i class="ph ph-lock-key"></i> Bayar Sekarang
                    </button>
                    
                    <div class="mt-4 flex items-center justify-center gap-2 text-xs text-gray-500">
                        <i class="ph ph-shield-check text-green-500 text-lg"></i>
                        Transaksi dilindungi enkripsi 256-bit
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
