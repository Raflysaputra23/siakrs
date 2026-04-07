<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-50 p-4 lg:p-8">
    <div class="max-w-7xl mx-auto">
        <div class="mb-8 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
            <div>
                <h1 class="text-2xl font-bold text-gray-900">Laporan Akademik Terpadu</h1>
                <p class="text-sm text-gray-500 mt-1">Lihat Kartu Hasil Studi (KHS) dan rekap nilai Anda.</p>
            </div>
            <div class="flex items-center gap-3">
                <select class="bg-white border text-sm border-gray-300 text-gray-900 rounded-lg focus:ring-brand-500 focus:border-brand-500 block w-full p-2 outline-none">
                    <option selected>Semester 4 (Genap 2025/2026)</option>
                    <option value="3">Semester 3 (Ganjil 2025/2026)</option>
                    <option value="2">Semester 2 (Genap 2024/2025)</option>
                    <option value="1">Semester 1 (Ganjil 2024/2025)</option>
                </select>
                <button class="bg-brand-100 hover:bg-brand-200 text-brand-700 px-4 py-2 rounded-lg font-medium transition-colors cursor-pointer border border-brand-200">
                    <i class="ph ph-printer"></i>
                </button>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-white p-5 rounded-2xl shadow-sm border border-gray-100 flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-500">IPS Semester Ini</p>
                    <p class="text-2xl font-bold text-gray-900">3.88</p>
                </div>
                <div class="w-12 h-12 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center">
                    <i class="ph ph-chart-line-up text-2xl"></i>
                </div>
            </div>
            <div class="bg-white p-5 rounded-2xl shadow-sm border border-gray-100 flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-500">SKS Lulus (Semester Ini)</p>
                    <p class="text-2xl font-bold text-gray-900">22</p>
                </div>
                <div class="w-12 h-12 rounded-full bg-green-50 text-green-600 flex items-center justify-center">
                    <i class="ph ph-books text-2xl"></i>
                </div>
            </div>
            <div class="bg-white p-5 rounded-2xl shadow-sm border border-gray-100 flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-500">IPK Keseluruhan</p>
                    <p class="text-2xl font-bold text-gray-900">3.85</p>
                </div>
                <div class="w-12 h-12 rounded-full bg-purple-50 text-purple-600 flex items-center justify-center">
                    <i class="ph ph-trophy text-2xl"></i>
                </div>
            </div>
        </div>

        <!-- Detail Table -->
        <div class="bg-white rounded-2xl shadow-[0_2px_10px_-3px_rgba(6,81,237,0.1)] border border-gray-100 overflow-hidden">
            <div class="p-6 border-b border-gray-100 bg-gray-50/50">
                <h2 class="text-lg font-semibold text-gray-800">Detail Nilai Mata Kuliah</h2>
            </div>
            
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">No</th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Mata Kuliah</th>
                            <th class="px-6 py-4 text-center text-xs font-semibold text-gray-500 uppercase tracking-wider">SKS</th>
                            <th class="px-6 py-4 text-center text-xs font-semibold text-gray-500 uppercase tracking-wider">Nilai Huruf</th>
                            <th class="px-6 py-4 text-center text-xs font-semibold text-gray-500 uppercase tracking-wider">Nilai Angka</th>
                            <th class="px-6 py-4 text-center text-xs font-semibold text-gray-500 uppercase tracking-wider">Mutu</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-100">
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">1</td>
                            <td class="px-6 py-4 text-sm font-medium text-gray-900">Pemrograman Lanjut</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">3</td>
                            <td class="px-6 py-4 whitespace-nowrap text-center"><span class="font-bold text-green-600 bg-green-50 px-2 py-1 rounded">A</span></td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">4.00</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 text-center">12.00</td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2</td>
                            <td class="px-6 py-4 text-sm font-medium text-gray-900">Basis Data</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">4</td>
                            <td class="px-6 py-4 whitespace-nowrap text-center"><span class="font-bold text-brand-600 bg-brand-50 px-2 py-1 rounded">A-</span></td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">3.75</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 text-center">15.00</td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">3</td>
                            <td class="px-6 py-4 text-sm font-medium text-gray-900">Pendidikan Agama</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">2</td>
                            <td class="px-6 py-4 whitespace-nowrap text-center"><span class="font-bold text-green-600 bg-green-50 px-2 py-1 rounded">A</span></td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">4.00</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 text-center">8.00</td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">4</td>
                            <td class="px-6 py-4 text-sm font-medium text-gray-900">Kalkulus II</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">3</td>
                            <td class="px-6 py-4 whitespace-nowrap text-center"><span class="font-bold text-yellow-600 bg-yellow-50 px-2 py-1 rounded">B+</span></td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">3.50</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 text-center">10.50</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
</main>
