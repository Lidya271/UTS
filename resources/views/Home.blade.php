@extends('UTS.app')

@section('title', 'Beranda - RedConnect')

@section('content')
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center md:items-start gap-8 py-12 px-6">
    <!-- Bagian Kiri: Gambar -->
    <div class="md:w-1/2">
        <img src="{{ asset('images/donor-blood.jpg') }}" alt="Donor Darah" class="rounded-lg shadow-lg w-full object-cover">
    </div>

    <!-- Bagian Kanan: Teks -->
    <div class="md:w-1/2 space-y-6">
        <h1 class="text-4xl font-bold text-red-700">Selamat Datang di RedConnect</h1>
        <p class="text-gray-700 text-lg leading-relaxed">
            RedConnect hadir untuk mempermudah proses donor darah dan meningkatkan kesadaran masyarakat tentang pentingnya donor darah.
            Bergabunglah dengan kami untuk membantu menyelamatkan nyawa dan menyebarkan kebaikan.
        </p>
        <a href="/form" class="inline-block bg-red-600 text-white px-6 py-3 rounded-md font-semibold hover:bg-red-700 transition">
            Daftar Donor Sekarang
        </a>
    </div>
</div>
 <!-- Edukasi Section -->
    <section class="py-16 px-6 bg-white text-gray-800">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-4xl font-bold text-center text-red-700 mb-12">Edukasi Seputar Donor Darah</h2>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Box 1 -->
                <div class="bg-red-50 p-6 rounded-lg shadow hover:shadow-md transition">
                    <div class="flex items-center justify-center mb-4">
                        <i data-feather="heart" class="text-red-600 w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-red-600 mb-2 text-center">Manfaat Donor</h3>
                    <ul class="list-disc list-inside text-gray-700 text-sm space-y-1">
                        <li>Menjaga kesehatan jantung & tekanan darah.</li>
                        <li>Merangsang produksi darah baru.</li>
                        <li>Mendeteksi penyakit sejak dini.</li>
                        <li>Menumbuhkan empati sosial.</li>
                    </ul>
                </div>

                <!-- Box 2 -->
                <div class="bg-red-50 p-6 rounded-lg shadow hover:shadow-md transition">
                    <div class="flex items-center justify-center mb-4">
                        <i data-feather="check-circle" class="text-red-600 w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-red-600 mb-2 text-center">Syarat Umum</h3>
                    <ul class="list-disc list-inside text-gray-700 text-sm space-y-1">
                        <li>Usia 17–60 tahun.</li>
                        <li>BB ≥ 45 kg, HB & tensi normal.</li>
                        <li>Sehat jasmani dan rohani.</li>
                        <li>Tidak sedang konsumsi obat.</li>
                    </ul>
                </div>

                <!-- Box 3 -->
                <div class="bg-red-50 p-6 rounded-lg shadow hover:shadow-md transition">
                    <div class="flex items-center justify-center mb-4">
                        <i data-feather="activity" class="text-red-600 w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-red-600 mb-2 text-center">Proses Donor</h3>
                    <ol class="list-decimal list-inside text-gray-700 text-sm space-y-1">
                        <li>Daftar & isi formulir kesehatan.</li>
                        <li>Pemeriksaan oleh petugas medis.</li>
                        <li>Donor selama 10–15 menit.</li>
                        <li>Istirahat & minum/makan ringan.</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Toggle mobile menu
        document.getElementById('menuBtn').addEventListener('click', () => {
            const menu = document.getElementById('mobileMenu');
            menu.classList.toggle('hidden');
        });
    </script>
@endsection