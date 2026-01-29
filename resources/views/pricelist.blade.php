@extends('layout')
@section('content')
<div class="min-h-full">
  <header class="bg-gray-800 border-b border-white/10 py-12">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-center">
      <h1 class="text-4xl font-bold tracking-tight text-white">Daftar Harga</h1>
      <p class="mt-4 text-gray-400 max-w-2xl mx-auto text-lg">
        Estimasi biaya layanan Fixify. Transparan, kompetitif, dan tanpa biaya tersembunyi.
      </p>
    </div>
  </header>

  <main class="py-16">
    <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">
        <div class="overflow-hidden rounded-2xl border border-white/10 bg-white/5 shadow-2xl backdrop-blur-sm">
            <table class="w-full text-left">
                <thead class="bg-white/10 text-indigo-400 border-b border-white/10">
                    <tr>
                        <th class="px-6 py-4 text-sm font-semibold uppercase tracking-wider">Kategori Layanan</th>
                        <th class="px-6 py-4 text-sm font-semibold uppercase tracking-wider text-right">Mulai Dari</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-white/10">
                    <tr class="hover:bg-white/5 transition">
                        <td class="px-6 py-5">
                            <div class="font-medium text-white">Instalasi OS (Windows/Linux)</div>
                            <div class="text-xs text-gray-500">Termasuk driver standar & aplikasi dasar</div>
                        </td>
                        <td class="px-6 py-5 text-right font-mono text-indigo-300">Rp 100.000</td>
                    </tr>
                    <tr class="hover:bg-white/5 transition">
                        <td class="px-6 py-5">
                            <div class="font-medium text-white">Pembersihan Hardware (Deep Cleaning)</div>
                            <div class="text-xs text-gray-500">Pembersihan debu & ganti thermal paste</div>
                        </td>
                        <td class="px-6 py-5 text-right font-mono text-indigo-300">Rp 75.000</td>
                    </tr>
                    <tr class="hover:bg-white/5 transition">
                        <td class="px-6 py-5">
                            <div class="font-medium text-white">Perbaikan Motherboard</div>
                            <div class="text-xs text-gray-500">Tergantung pada tingkat kerusakan komponen</div>
                        </td>
                        <td class="px-6 py-5 text-right font-mono text-indigo-300">Rp 250.000</td>
                    </tr>
                    <tr class="hover:bg-white/5 transition">
                        <td class="px-6 py-5">
                            <div class="font-medium text-white">Pemulihan Data (Data Recovery)</div>
                            <div class="text-xs text-gray-500">HDD, SSD, atau Flashdisk yang terformat</div>
                        </td>
                        <td class="px-6 py-5 text-right font-mono text-indigo-300">Rp 150.000</td>
                    </tr>
                    <tr class="hover:bg-white/5 transition">
                        <td class="px-6 py-5">
                            <div class="font-medium text-white">Rakit PC Custom</div>
                            <div class="text-xs text-gray-500">Jasa rakit & manajemen kabel (Cable Management)</div>
                        </td>
                        <td class="px-6 py-5 text-right font-mono text-indigo-300">Rp 150.000</td>
                    </tr>
                    <tr class="hover:bg-white/5 transition">
                        <td class="px-6 py-5">
                            <div class="font-medium text-white">Solusi Software</div>
                            <div class="text-xs text-gray-500"> Menginstal ulang software sesuai kebutuhan pengguna</div>
                          </td>
                        <td class="px-6 py-5 text-right font-mono text-indigo-300">Rp50.000</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="mt-10 p-6 rounded-xl bg-indigo-500/10 border border-indigo-500/20 text-center">
            <p class="text-sm text-gray-300 italic">
                * Harga di atas adalah biaya jasa mulai dari. Biaya akhir mungkin berbeda tergantung pada penggantian komponen (sparepart) yang digunakan.
            </p>
        </div>

    </div>
  </main>

  <footer class="bg-gray-800/30 border-t border-white/10 py-10 text-center">
    <p class="text-sm text-gray-500">&copy; 2026 Fixify. Semua hak dilindungi undang-undang.</p>
  </footer>
</div>

</body>
</html>
@endsection