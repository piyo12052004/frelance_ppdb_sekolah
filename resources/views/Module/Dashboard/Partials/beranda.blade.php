<!-- Hero Section -->
<section id="beranda" class="relative">
        <div class="relative h-[500px] w-full overflow-hidden">
            <img src="{{ asset('asset/img/seni_tari.jpg') }}" alt="SMP Karya Guna" class="object-cover filter brightness-60 w-full h-full">
            <div class="absolute inset-0 bg-black/50"></div>
            <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-white p-4">
                <h1 class="text-4xl font-bold tracking-tight sm:text-5xl md:text-6xl">SMP Karya Guna Jaya</h1>
                <p class="mt-4 text-xl md:text-2xl max-w-3xl">
                    Terakreditasi A
                </p>
                <div class="mt-8 flex flex-wrap justify-center gap-4">
                    <a href="{{ route('siswa.index') }}" class="inline-flex items-center justify-center !text-white rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-blue-600 text-white hover:bg-blue-700 h-11 px-8">
                        PPDB Online
                    </a>

                </div>
            </div>
        </div>
    </section>

    <!-- Announcement Banner -->
    <section class="bg-blue-600 text-white py-3">
        <div class="container">
            <div class="flex items-center justify-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5">
                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                    <line x1="16" y1="2" x2="16" y2="6"></line>
                    <line x1="8" y1="2" x2="8" y2="6"></line>
                    <line x1="3" y1="10" x2="21" y2="10"></line>
                </svg>
                <p class="text-sm md:text-base font-medium">
                    Pendaftaran Peserta Didik Baru Tahun Ajaran 2025/2026 telah dibuka!
                    <a href="{{ route('siswa.index') }}" class="ml-2 underline bg-blue-300 p-4">Daftar sekarang</a>
                </p>
            </div>
        </div>
    </section>

    <!-- Profile Section -->
    <section id="profil" class="py-16 bg-gray-50">
        <div class="container">
            <div class="flex flex-col items-center text-center mb-12">
                <h2 class="text-3xl font-bold">Profil Sekolah</h2>
                <div class="w-20 h-1 bg-blue-600 mt-4 mb-6"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <div>
                    <img src="{{ asset('asset/img/smpnya.jpg') }}" alt="Gedung SMP Karya Guna Jaya" class="rounded-lg shadow-lg w-full h-auto">
                </div>
                <div class="space-y-6">
                    <div>
                        <h3 class="text-xl font-bold mb-2">Visi</h3>
                        <p class="text-gray-600">
                         MEMBANGUN KREATIFITAS, KEMANDIRIAN, DAN TANGGUNG JAWAB SERTA BERAKHLAK MULIA
                        </p>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-2">Misi</h3>
                        <ul class="list-disc list-inside text-gray-600 space-y-2">
                            <li>Mewujudkan pembangunan Kurikulum Tingkat Satuan Pendidikan yang sesuai dengan potensi, karakteristik dan social budaya.</li>
                            <li>Mewujudkan proses pembelajaran secara interaktif, inspiratif, menyenangkan dan menantang.</li>
                            <li>Mewujudkan pengembangan prakarsa, kreativitas dan kemandirian sesuai dengan bakat, minat, dan perkembangan fisik serta psikologis siswa.</li>
                            <li>Mewujudkan lulusan yang cerdas, kreatif, kompetitif serta berakhlak mulia.</li>
                            <li>Mengembangkan Delapan Standar Pendidikan yang bertaraf Internasional.</li>
                        </ul>
                    </div>
                    {{-- <a href="#" class="inline-flex !text-white items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-blue-600 text-white hover:bg-blue-700 h-10 px-4 py-2">
                        Selengkapnya
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-2 h-4 w-4">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </a> --}}
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-12 bg-blue-600 text-white">
        <div class="container">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                <div class="p-4">
                    <div class="text-4xl font-bold mb-2">{{ $stats->total_students ?? '500+' }}</div>
                    <div class="text-sm uppercase tracking-wider">Siswa</div>
                </div>
                <div class="p-4">
                    <div class="text-4xl font-bold mb-2">{{ $stats->total_staff ?? '15+' }}</div>
                    <div class="text-sm uppercase tracking-wider">Guru & Staff</div>
                </div>
                <div class="p-4">
                    <div class="text-4xl font-bold mb-2">{{ $stats->total_extracurriculars ?? '6' }}</div>
                    <div class="text-sm uppercase tracking-wider">Ekstrakurikuler</div>
                </div>
                <div class="p-4">
                    <div class="text-4xl font-bold mb-2">{{ $stats->total_achievements ?? '100+' }}</div>
                    <div class="text-sm uppercase tracking-wider">Prestasi</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Programs Section -->
    <section id="program" class="py-16">
        <div class="container">
            <div class="flex flex-col items-center text-center mb-12">
                <h2 class="text-3xl font-bold">Program Beasiswa</h2>
                <div class="w-20 h-1 bg-blue-600 mt-4 mb-6"></div>
                <p class="max-w-3xl text-gray-600">
                    SMP Karya Guna menawarkan berbagai program beasiswa untuk memberikan kesempatan pendidikan yang lebih luas bagi generasi muda berprestasi dan berpotensi, serta demi mewujudkan masa depan yang lebih cerah.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @forelse($programUnggulan as $program)
                <div class="rounded-lg border bg-card text-card-foreground shadow-sm overflow-hidden">
                    <div class="h-48 relative">
                        <img src="{{ asset($program->image) }}" alt="{{ $program->title }}" class="object-cover w-full h-full">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-2 mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 text-blue-600">
                                <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                                <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                            </svg>
                            <h3 class="font-bold text-lg">{{ $program->title }}</h3>
                        </div>
                        <p class="text-gray-600 mb-4">{{ $program->description }}</p>
                        {{-- <a href="#" class="text-blue-600 font-medium flex items-center">
                            Selengkapnya
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-1 h-4 w-4">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </a> --}}
                    </div>
                </div>
                @empty
                <div class="col-span-3 text-center">
                    <p>Belum ada program unggulan yang ditampilkan</p>
                </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Facilities Section -->
    <section id="fasilitas" class="py-16 bg-gray-50">
        <div class="container">
            <div class="flex flex-col items-center text-center mb-12">
                <h2 class="text-3xl font-bold">Fasilitas</h2>
                <div class="w-20 h-1 bg-blue-600 mt-4 mb-6"></div>
                <p class="max-w-3xl text-gray-600">
                    SMP Karya Guna Jaya menyediakan berbagai fasilitas yang lengkap dan modern untuk mendukung proses belajar mengajar yang nyaman, aman, dan menyenangkan bagi seluruh siswa.
                </p>
            </div>

            <div x-data="{ activeTab: 'akademik' }">
                <div class="flex flex-wrap justify-center mb-8">
                    <button @click="activeTab = 'akademik'" :class="{ 'bg-blue-600 text-white': activeTab === 'akademik', 'bg-gray-100 text-gray-700 hover:bg-gray-200': activeTab !== 'akademik' }" class="px-4 py-2 rounded-l-md transition-colors">
                        Akademik
                    </button>
                    <button @click="activeTab = 'olahraga'" :class="{ 'bg-blue-600 text-white': activeTab === 'olahraga', 'bg-gray-100 text-gray-700 hover:bg-gray-200': activeTab !== 'olahraga' }" class="px-4 py-2 transition-colors">
                        Olahraga
                    </button>
                    <button @click="activeTab = 'teknologi'" :class="{ 'bg-blue-600 text-white': activeTab === 'teknologi', 'bg-gray-100 text-gray-700 hover:bg-gray-200': activeTab !== 'teknologi' }" class="px-4 py-2 transition-colors">
                        Teknologi
                    </button>
                    <button @click="activeTab = 'penunjang'" :class="{ 'bg-blue-600 text-white': activeTab === 'penunjang', 'bg-gray-100 text-gray-700 hover:bg-gray-200': activeTab !== 'penunjang' }" class="px-4 py-2 rounded-r-md transition-colors">
                        Penunjang
                    </button>
                </div>

                @foreach(['akademik', 'olahraga', 'teknologi', 'penunjang'] as $category)
                <div x-show="activeTab == '{{ $category }}'" class="grid grid-cols-1 md:grid-cols-3 gap-6" style="display: none;">
                    @php
                        $categoryFacilities = $fasilitas->where('category', $category);
                    @endphp

                    @forelse($categoryFacilities as $facility)
                    <div class="bg-white rounded-lg shadow-sm">
                        <div class="h-48 relative mb-4 rounded-md overflow-hidden">
                            <img src="{{ asset('storage/' . $facility?->image) }}" alt="{{ $facility?->name }}" class="object-cover w-full h-full">
                        </div>
                        <div class="deskripsi pt-4 pb-12 px-5">
                            <h3 class="font-bold text-lg mb-2">{{ $facility?->name }}</h3>
                            <p class="text-gray-600">{{ $facility?->description }}</p>
                        </div>
                    </div>
                    @empty
                    <div class="col-span-3 text-center py-12">
                        <p class="text-gray-600">Belum ada fasilitas untuk kategori ini.</p>
                    </div>
                    @endforelse
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- News Section -->
    <section id="berita" class="py-16">
        <div class="container">
            <div class="flex flex-col items-center text-center mb-12">
                <h2 class="text-3xl font-bold">Berita & Kegiatan</h2>
                <div class="w-20 h-1 bg-blue-600 mt-4 mb-6"></div>
                <p class="max-w-3xl text-gray-600">Informasi terbaru tentang kegiatan dan prestasi SMP Karya Guna.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @forelse ($latestNews as $item)
                    <div class="rounded-lg border bg-card text-card-foreground shadow-sm overflow-hidden">
                        <div class="h-48 relative">
                            @if($item->image)
                                <img src="{{ asset($item->image) }}" alt="{{ $item->title }}" class="object-cover w-full h-full">
                            @else
                                <img src="https://via.placeholder.com/600x400?text=No+Image" alt="{{ $item->title }}" class="object-cover w-full h-full">
                            @endif
                            <div class="absolute top-0 left-0 bg-blue-600 text-white px-3 py-1 text-sm">
                                {{ $item->published_date->format('d M Y') }}
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="font-bold text-lg mb-2">{{ $item->title }}</h3>
                            <p class="text-gray-600 mb-4 line-clamp-3">
                                {{ Str::limit(strip_tags($item->content), 150) }}
                            </p>
                            <a href="{{ route('app.news.show', $item->slug) }}" class="text-blue-600 font-medium flex items-center">
                                Baca selengkapnya
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-1 h-4 w-4">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="col-span-3 text-center py-12">
                        <p class="text-gray-600">Belum ada berita yang dipublikasikan.</p>
                    </div>
                @endforelse
            </div>

            <div class="flex justify-center mt-8">
                <a href="{{ route('app.news.index') }}" class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2">
                    Lihat Semua Berita
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-2 h-4 w-4">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="galeri" class="py-16 bg-gray-50">
        <div class="container">
            <div class="flex flex-col items-center text-center mb-12">
                <h2 class="text-3xl font-bold">Galeri</h2>
                <div class="w-20 h-1 bg-blue-600 mt-4 mb-6"></div>
                <p class="max-w-3xl text-gray-600">Dokumentasi kegiatan dan momen berkesan di SMP Karya Guna.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                @forelse($gallery as $photo)
                <div class="gallery-item">
                    <div class="relative group cursor-pointer">
                        <img src="{{ asset($photo->image) }}" alt="{{ $photo->title }}" class="w-full h-64 object-cover rounded-lg" onclick="openLightbox('{{ asset($photo->image) }}', '{{ $photo->title }}', '{{ $photo->description }}', '{{ $photo->category }}')">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-opacity duration-300 rounded-lg flex items-center justify-center">
                            <div class="text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300 text-center p-4">
                                <h3 class="font-bold text-lg mb-2">{{ $photo->title }}</h3>
                                <p class="text-sm">{{ $photo->description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-span-4 text-center py-12">
                    <p class="text-gray-600">Belum ada foto yang ditampilkan.</p>
                </div>
                @endforelse
            </div>

            <div class="flex justify-center mt-8">
                <a href="{{ route('app.gallery.index') }}" class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-blue-600 text-white hover:bg-blue-700 h-10 px-4 py-2">
                    Lihat Semua Foto
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-16">
        <div class="container">
            <div class="flex flex-col items-center text-center mb-12">
                <h2 class="text-3xl font-bold">Testimoni</h2>
                <div class="w-20 h-1 bg-blue-600 mt-4 mb-6"></div>
                <p class="max-w-3xl text-gray-600">Apa kata para alumni tentang SMP Karya Guna.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-6">
                    <div class="flex flex-col items-center text-center">
                        <div class="relative w-20 h-20 rounded-full overflow-hidden mb-4">
                            <!-- Gambar orang tua (foto orang) -->
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Orang Tua Siswa" class="object-cover w-full h-full">
                        </div>
                        <p class="text-gray-600 italic mb-4">
                            "Saya sangat senang bersekolah di SMP Karya Guna Jaya. Sekolah ini memiliki lingkungan yang nyaman dan aman, sehingga saya dapat fokus pada belajar."
                        </p>
                        <h4 class="font-bold">Natasya Della</h4>
                        <p class="text-sm text-gray-500">4 bulan lalu</p>
                    </div>
                </div>

                <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-6">
                    <div class="flex flex-col items-center text-center">
                        <div class="relative w-20 h-20 rounded-full overflow-hidden mb-4">
                            <!-- Gambar alumni (foto orang) -->
                            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Alumni" class="object-cover w-full h-full">
                        </div>
                        <p class="text-gray-600 italic mb-4">
                            "Sekolahnya sangat seru, gurunya sangat baik sekali, lingkungan sekolahnya sangat bersih dan juga rapih."
                        </p>
                        <h4 class="font-bold">Adji Ismail</h4>
                        <p class="text-sm text-gray-500">4 bulan lalu</p>
                    </div>
                </div>

                <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-6">
                    <div class="flex flex-col items-center text-center">
                        <div class="relative w-20 h-20 rounded-full overflow-hidden mb-4">
                            <!-- Gambar siswa (foto orang) -->
                            <img src="https://randomuser.me/api/portraits/men/65.jpg" alt="Siswa" class="object-cover w-full h-full">
                        </div>
                        <p class="text-gray-600 italic mb-4">
                            "Selama sekolah disini nyaman, lapangan luas, ruangan lengkap, lab ada, spp murah, deket rumah juga, gurunya baik."
                        </p>
                        <h4 class="font-bold">Airra Agustiani</h4>
                        <p class="text-sm text-gray-500">10 bulan lalu</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-blue-600 text-white">
        <div class="container">
            <div class="flex flex-col md:flex-row items-center justify-between gap-8">
                <div class="max-w-2xl">
                    <h2 class="text-3xl font-bold mb-4">Bergabunglah dengan SMP Karya Guna Jaya</h2>
                    <p class="text-blue-100">
                        Pendaftaran untuk tahun ajaran 2025/2026 telah dibuka. Segera daftarkan putra/putri Anda untuk
                        mendapatkan pendidikan berkualitas di SMP Karya Guna Jaya.
                    </p>
                </div>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('siswa.index') }}" class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-white text-blue-600 hover:bg-blue-50 h-11 px-8">
                        PPDB Online
                    </a>
                    <a href="#kontak" class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-white text-white hover:bg-blue-700 h-11 px-8">
                        Hubungi Kami
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="kontak" class="py-16">
        <div class="container">
            <div class="flex flex-col items-center text-center mb-12">
                <h2 class="text-3xl font-bold">Kontak Kami</h2>
                <div class="w-20 h-1 bg-blue-600 mt-4 mb-6"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <div class="bg-gray-100 p-6 rounded-lg">
                        <div class="flex flex-col space-y-4">
                            <div class="flex items-start gap-4">
                                <div class="bg-blue-600 text-white p-3 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5">
                                        <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path>
                                        <circle cx="12" cy="10" r="3"></circle>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-bold text-lg">Alamat</h3>
                                    <p class="text-gray-600">{{ $contact->address ?? 'Jl. Al.Huda Rawa Sapi Jatimulya Tambun Selatan, Kabupaten Bekasi.' }}</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <div class="bg-blue-600 text-white p-3 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5">
                                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-bold text-lg">Telepon</h3>
                                    <p class="text-gray-600">0896 7550 6676</p>
                                    <p class="text-gray-600">0899 0737 857</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <div class="bg-blue-600 text-white p-3 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5">
                                        <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                        <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-bold text-lg">Email</h3>
                                    <p class="text-gray-600">karyagunajaya10@gmail.com</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <div class="bg-blue-600 text-white p-3 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5">
                                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                        <line x1="17.5" y1="6.5" x2="17.5" y2="6.5"></line>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-bold text-lg">Instagram</h3>
                                    <p class="text-gray-600">ppdb_karyagunajaya</p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8">
                            <h3 class="font-bold text-lg mb-4">Jam Operasional</h3>
                            <div class="space-y-2">
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Senin - Jumat</span>
                                    <span>07:00 - 15:00</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Sabtu</span>
                                    <span>07:00 - 12:00</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Minggu & Hari Libur</span>
                                    <span>Tutup</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="bg-white p-6 rounded-lg shadow-sm">
                        <h3 class="font-bold text-lg mb-4">Kirim Pesan</h3>
                        <form action="{{ route('kirim.pesan') }}" method="POST" class="space-y-4">
                            @csrf
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div class="space-y-2">
                                    <label for="name" class="text-sm font-medium">
                                        Nama
                                    </label>
                                    <input
                                        id="name"
                                        name="name"
                                        class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                                        placeholder="Nama Anda"
                                    />
                                </div>
                                <div class="space-y-2">
                                    <label for="email" class="text-sm font-medium">
                                        Email
                                    </label>
                                    <input
                                        id="email"
                                        name="email"
                                        class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                                        placeholder="email@example.com"
                                    />
                                </div>
                            </div>
                            <div class="space-y-2">
                                <label for="subject" class="text-sm font-medium">
                                    Subjek
                                </label>
                                <input
                                    id="subject"
                                    name="subject"
                                    class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                                    placeholder="Subjek pesan"
                                />
                            </div>
                            <div class="space-y-2">
                                <label for="message" class="text-sm font-medium">
                                    Pesan
                                </label>
                                <textarea
                                    id="message"
                                    name="message"
                                    class="flex min-h-[120px] w-full rounded-md bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 border-gray-200 focus:border-gray-200"
                                    placeholder="Tulis pesan Anda di sini..."
                                ></textarea>
                            </div>
                            <button type="submit" class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-blue-600 text-white hover:bg-blue-700 h-10 px-4 py-2 w-full">
                                Kirim Pesan
                            </button>
                        </form>
                    </div>

                    @if (session('success'))
                        <div class="p-4 mb-4 text-green-800 bg-green-100 rounded-md">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="mt-8">
                <h3 class="font-bold text-lg mb-4">Daftar Pesan</h3>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 max-h-[600px] overflow-y-auto pr-2">
                    @foreach ($messages as $item)
                        <div class="border border-gray-200 rounded-lg p-4 bg-gray-50 shadow-sm">
                            <div class="mb-2">
                                <p class="text-sm text-gray-500">Dari:</p>
                                <p class="text-base font-semibold text-gray-800">{{ $item->name }}</p>
                                @if ($item->email)
                                    <p class="text-sm text-gray-500">{{ $item->email }}</p>
                                @endif
                            </div>

                            @if ($item->subject)
                                <div class="mb-2">
                                    <p class="text-sm text-gray-500">Subjek:</p>
                                    <p class="text-base text-gray-700">{{ $item->subject }}</p>
                                </div>
                            @endif

                            <div class="mb-2">
                                <p class="text-sm text-gray-500">Pesan:</p>
                                <p class="text-base text-gray-700 whitespace-pre-line">{{ $item->message }}</p>
                            </div>

                            @if ($item->balasan)
                                <div class="mt-4 border-t pt-3 border-gray-300">
                                    <p class="text-sm text-blue-600 font-semibold">Balasan Admin:</p>
                                    <p class="text-base text-gray-800 whitespace-pre-line">{{ $item->balasan }}</p>
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section>

    <!-- Map Section -->
    <section class="h-[400px] relative">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.370964024052!2d107.0240093!3d-6.2778847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698e16b31fccb7%3A0xb11c746ff76c544f!2sSMP%20SMK%20Karya%20Guna%20Jaya%20-%20Bekasi!5e0!3m2!1sid!2sid!4v1717920000000!5m2!1sid!2sid"
            width="100%"
            height="100%"
            style="border:0; min-height:400px;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            class="absolute inset-0 w-full h-full"
        ></iframe>
        <div class="absolute top-4 left-1/2 -translate-x-1/2 z-10 bg-white/80 rounded-lg px-4 py-2 shadow text-center">
            <p class="text-lg font-medium">Peta Lokasi SMP Karya Guna Jaya</p>
            <p class="text-sm text-gray-600">Jl. Al.Huda Rawa Sapi Jatimulya Tambun Selatan, Kabupaten Bekasi.</p>
        </div>
    </section>
