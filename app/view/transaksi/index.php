<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-50 p-4 lg:p-8">
    <div class="max-w-7xl mx-auto">
        <div class="mb-8 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
            <div>
                <h1 class="text-2xl font-bold text-gray-900">Transaksi & Pembayaran</h1>
                <p class="text-sm text-gray-500 mt-1">Pantau tagihan dan riwayat pembayaran UKT Anda.</p>
            </div>
            <a href="<?= CONSTANT::DIRNAME ?>pembayaran" class="bg-brand-600 cursor-pointer hover:bg-brand-700 text-white px-4 py-2 rounded-lg font-medium flex items-center gap-2 transition-colors shadow-sm">
                <i class="ph ph-receipt text-xl"></i> Bayar Tagihan
            </a>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Left: List of invoices -->
            <div class="lg:col-span-2 space-y-6">
                <!-- Invoice 1 -->
                <div class="bg-white rounded-2xl shadow-[0_2px_10px_-3px_rgba(6,81,237,0.1)] border border-gray-100 p-6 flex flex-col sm:flex-row justify-between sm:items-center gap-4">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-green-50 text-green-600 rounded-full flex items-center justify-center shrink-0">
                            <i class="ph ph-check-circle text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900">Pembayaran UKT Semester Ganjil 2026</h3>
                            <p class="text-sm text-gray-500 mt-1">INV-2026-08-001 • Dibayar pada 25 Ags 2026</p>
                            <span class="inline-block mt-2 bg-green-100 text-green-700 text-xs px-2 py-0.5 rounded font-medium">Lunas</span>
                        </div>
                    </div>
                    <div class="text-right">
                        <span class="block font-bold text-lg text-gray-900">Rp 4.500.000</span>
                        <button class="text-brand-600 hover:text-brand-800 text-sm font-medium mt-1 transition-colors cursor-pointer">Lihat Kuitansi</button>
                    </div>
                </div>

                <!-- Invoice 2 -->
                <div class="bg-white rounded-2xl shadow-[0_2px_10px_-3px_rgba(6,81,237,0.1)] border border-gray-100 p-6 flex flex-col sm:flex-row justify-between sm:items-center gap-4">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-green-50 text-green-600 rounded-full flex items-center justify-center shrink-0">
                            <i class="ph ph-check-circle text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900">Pembayaran UKT Semester Genap 2025</h3>
                            <p class="text-sm text-gray-500 mt-1">INV-2026-02-045 • Dibayar pada 10 Feb 2026</p>
                            <span class="inline-block mt-2 bg-green-100 text-green-700 text-xs px-2 py-0.5 rounded font-medium">Lunas</span>
                        </div>
                    </div>
                    <div class="text-right">
                        <span class="block font-bold text-lg text-gray-900">Rp 4.500.000</span>
                        <button class="text-brand-600 hover:text-brand-800 text-sm font-medium mt-1 transition-colors cursor-pointer">Lihat Kuitansi</button>
                    </div>
                </div>
            </div>

            <!-- Right: Summary -->
            <div class="bg-white rounded-2xl shadow-[0_2px_10px_-3px_rgba(6,81,237,0.1)] border border-gray-100 p-6 h-fit">
                <h2 class="text-lg font-bold text-gray-800 mb-6">Ringkasan Keuangan</h2>
                <div class="space-y-4">
                    <div class="flex justify-between items-center pb-4 border-b border-gray-100">
                        <span class="text-gray-600">Total Tagihan (Aktif)</span>
                        <span class="font-semibold text-gray-900">Rp 0</span>
                    </div>
                    <div class="flex justify-between items-center pb-4 border-b border-gray-100">
                        <span class="text-gray-600">Status Pembayaran</span>
                        <span class="text-green-600 font-semibold items-center flex gap-1"><i class="ph ph-check-circle"></i> Aman</span>
                    </div>
                    <div class="flex justify-between items-center pb-4">
                        <span class="text-gray-600">Metode Tersedia</span>
                        <div class="flex gap-2 text-2xl text-gray-400">
                            <i class="ph ph-bank hover:text-brand-600 transition-colors cursor-pointer"></i>
                            <i class="ph ph-credit-card hover:text-brand-600 transition-colors cursor-pointer"></i>
                        </div>
                    </div>
                </div>
                <div class="mt-6 bg-blue-50 text-blue-800 p-4 rounded-lg text-sm flex items-start gap-3 border border-blue-100">
                    <i class="ph ph-info text-xl shrink-0"></i>
                    <p>Pembayaran UKT semester depan akan dibuka pada tanggal 1 Januari 2027. Pastikan Anda membayar sebelum batas waktu agar bisa mengisi KRS.</p>
                </div>
            </div>
        </div>
    </div>
</main>
