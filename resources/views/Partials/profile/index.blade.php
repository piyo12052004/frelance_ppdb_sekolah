@extends('../../main')

@section('title', 'SMP Karya Guna Jaya - Sekolah Unggul di Bekasi')

@section('content')

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#1e40af',
                        secondary: '#1e3a8a',
                        accent: '#dc2626',
                    },
                    fontFamily: {
                        poppins: ['Poppins', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    <style>
        .org-connector {
            position: relative;
        }

        .org-connector::after {
            content: '';
            position: absolute;
            bottom: -20px;
            left: 50%;
            transform: translateX(-50%);
            width: 2px;
            height: 20px;
            background-color: #1e40af;
        }

        .animate-float {
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }
    </style>

    <body class="font-poppins bg-gray-50">
        <!-- Header/Navbar -->
        {{-- <header class="fixed w-full bg-white shadow-md z-50" style="margin-top: 80px; border-top: 1px solid black">
            <div class="container mx-auto px-2 py-2 flex justify-between items-center">
                <div class="flex items-center">
                    <a href="/" class="flex items-center">
                        <img src="{{ asset('asset/logo/logo-smp.png') }}" alt="Logo SMP Karya Guna Jaya" class="h-12 mr-3">
                        <div>
                            <h1 class="text-xl font-bold text-primary">Sekolah Menengah Pertama</h1>
                            <p class="text-xs text-gray-600">Karya Guna Jaya</p>
                        </div>
                    </a>
                </div>
                <nav class="hidden md:block">
                    <ul class="flex space-x-8">
                        <li><a href="#home" class="text-gray-800 hover:text-primary font-medium transition">Beranda</a></li>
                        <li><a href="#profile" class="text-gray-800 hover:text-primary font-medium transition">Profil</a>
                        </li>
                        <li><a href="#structure"
                                class="text-gray-800 hover:text-primary font-medium transition">Struktur</a></li>
                        <li><a href="#teachers" class="text-gray-800 hover:text-primary font-medium transition">Guru</a>
                        </li>
                        <li><a href="#extracurricular"
                                class="text-gray-800 hover:text-primary font-medium transition">Ekstrakurikuler</a></li>
                        <li><a href="#contact" class="text-gray-800 hover:text-primary font-medium transition">Kontak</a></li>
                    </ul>
                </nav>
                <button class="md:hidden text-gray-800 text-xl">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </header> --}}

        <!-- Hero Section -->
        {{-- <section id="home" class="pt-24 pb-16 md:pt-32 md:pb-24 bg-gradient-to-r from-primary to-secondary text-white">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-6 animate-float">SMP KARYA GUNA JAYA BEKASI</h1>
                <p class="text-xl mb-8">Membangun Kreativitas, Kemandirian, dan Tanggung Jawab serta Berakhlak Mulia</p>
                <div class="flex justify-center space-x-4">
                    <a href="#profile" class="bg-white text-primary px-6 py-3 rounded-full font-medium hover:bg-gray-100 transition">Profil Sekolah</a>
                    <a href="#contact" class="border-2 border-white px-6 py-3 rounded-full font-medium hover:bg-white hover:text-primary transition">Hubungi Kami</a>
                </div>
            </div>
        </div>
    </section> --}}

        <!-- Profile Section -->
        <section id="profile" class=" bg-white" style="padding-top:90px">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-primary mb-2 mt-4">PROFIL SEKOLAH</h2>
                    <div class="w-20 h-1 bg-accent mx-auto"></div>
                </div>

                <div class="flex flex-col md:flex-row gap-8">
                    <div class="md:w-1/2">
                        <div class="bg-gray-100 p-6 rounded-lg shadow-md mb-6">
                            <h3 class="text-xl font-bold text-primary mb-4">Identitas Sekolah</h3>
                            <div class="space-y-3">
                                <p><span class="font-medium">Nama Sekolah:</span> SMP Karya Guna Jaya Bekasi</p>
                                <p><span class="font-medium">NPSN:</span> 20268759</p>
                                <p><span class="font-medium">Akreditasi:</span> A (Unggul)</p>
                                <p><span class="font-medium">Alamat:</span> Jalan Al Huda Rawa Sapi RT 003 RW 009 Kelurahan
                                    Jatimulya Kec. Tambun Selatan</p>
                                <p><span class="font-medium">No. Telp:</span> (021) 82750817</p>
                            </div>
                        </div>

                        <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                            <h3 class="text-xl font-bold text-primary mb-4">Visi & Misi</h3>
                            <div class="mb-4">
                                <h4 class="font-bold text-secondary mb-2">VISI SEKOLAH</h4>
                                <p>Membangun Kreativitas, Kemandirian, dan Tanggung Jawab serta Berakhlak Mulia</p>
                            </div>
                            <div>
                                <h4 class="font-bold text-secondary mb-2">MISI SEKOLAH</h4>
                                <ul class="list-disc pl-5 space-y-2">
                                    <li>Mewujudkan pembangunan Kurikulum Tingkat Satuan Pendidikan yang sesuai dengan
                                        potensi, karakteristik dan sosial budaya.</li>
                                    <li>Mewujudkan proses pembelajaran secara interaktif, inspiratif, menyenangkan dan
                                        menantang.</li>
                                    <li>Mewujudkan pengembangan prakarsa, kreativitas dan kemandirian sesuai dengan bakat,
                                        minat, dan perkembangan fisik serta psikologis siswa.</li>
                                    <li>Mewujudkan lulusan yang cerdas, kreatif, kompetitif serta berakhlak mulia.</li>
                                    <li>Mengembangkan Delapan Standar Pendidikan yang bertaraf Internasional.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="md:w-1/2">
                        <div class="bg-gray-100 p-6 rounded-lg shadow-md h-full">
                            <h3 class="text-xl font-bold text-primary mb-4">Sambutan Kepala Sekolah</h3>
                            <div class="flex items-center mb-6">
                                <img src="{{ asset('asset/img/img_kepala_sekolah.jpg') }}" alt="Kepala Sekolah"
                                    class="w-24 h-24 rounded-full object-cover border-4 border-primary">
                                <div class="ml-4">
                                    <h4 class="font-bold text-lg">Nia Permatasari, S.Pd</h4>
                                    <p class="text-secondary">Kepala SMP Karya Guna Jaya</p>
                                </div>
                            </div>
                            <div class="space-y-4">
                                <p>Assalamu'alalkum warahmatullohi wabarokatuh</p>
                                <p>Segala puji dan syukur kita tujukan kepada Alloh SWT yang telah memberikan nikmat iman
                                    Islam dan rahmat kepada seluruh makhluknya. Sholawat dan salam kita hatarkan kepada
                                    junjungan kita nabiyulloh khotamilanbiya Muhammad SAW. Semoga kita mendapatkan
                                    syafa'atnya di yaumil qiyamah. Amin.</p>
                                <p>SMP Karya Guna Jaya sebagai sekolah swasta yang berdiri sejak tahun 2009 untuk memenuhi
                                    kebutuhan pendidikan tingkat menengah pertama, pada waktu itu. Seiring dengan
                                    berjalannya waktu, SMP Karya Guna Jaya terus menyempurnakan diri sebagai sekolah yang
                                    bermutu, dengan memenuhi sarana prasarana dan layanan pendidikan berdasarkan pada Badan
                                    Standar Nasional Pendidikan.</p>
                                <p>Untuk menghadapi era digital, sekolah mengembangkan kegiatan pembelajaran berbasis
                                    internet. Harapannya peserta didik mampu terlayani baik secara offline sistem
                                    tradisional maupun online sistem digital. Dalam mengembangkan bakat peserta didik SMP
                                    Karya Guna Jaya memiliki enam kegiatan ekstrakurikuler.</p>
                                <p>Semoga Alloh SWT selalu memberikan pertolongan dan keberkahan kepada kita untuk
                                    menyiapkan generasi Indonesia yang religius dan menjadi pemimpin dimasa depan.</p>
                                <p>Wassalamu'alalkum warahmatullohi wabarokatuh</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Organization Structure Section -->
        <section id="structure" class="py-16 bg-gray-100">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-primary mb-4">STRUKTUR ORGANISASI</h2>
                    <div class="w-20 h-1 bg-accent mx-auto"></div>
                </div>

                <div class="flex flex-col items-center">
                    <!-- Komite Sekolah -->
                    <div class="bg-white p-4 rounded-lg shadow-md text-center mb-6 w-64 org-connector">
                        <h4 class="font-bold text-primary">KOMITE SEKOLAH</h4>
                        <p class="text-secondary">RETSI ULPA, S. Kom</p>
                    </div>

                    <!-- Kepala Sekolah -->
                    <div class="bg-white p-4 rounded-lg shadow-md text-center mb-6 w-64 org-connector">
                        <h4 class="font-bold text-primary">KEPALA SEKOLAH</h4>
                        <p class="text-secondary">NIA PERMATASARI, S. Pd</p>
                    </div>

                    <!-- Wakil -->
                    <div class="flex flex-wrap justify-center gap-4 mb-6">
                        <div class="bg-white p-4 rounded-lg shadow-md text-center w-56">
                            <h4 class="font-bold text-primary">WAKA. BID. KESISWAAN</h4>
                            <p class="text-secondary">ACEP SOLEH S, S. Pd</p>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow-md text-center w-56">
                            <h4 class="font-bold text-primary">WAKA. BID. KURIKULUM</h4>
                            <p class="text-secondary">ROBBI DIAPARI, S. Kom</p>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow-md text-center w-56">
                            <h4 class="font-bold text-primary">WAKA. BID. SARPRAS</h4>
                            <p class="text-secondary">RIFKY FAJAR, SE</p>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow-md text-center w-56">
                            <h4 class="font-bold text-primary">WAKA. BID. HUMAS</h4>
                            <p class="text-secondary">UIANG SUJANA, S. Pd. I</p>
                        </div>
                    </div>

                    <!-- Staff -->
                    <div class="bg-white p-4 rounded-lg shadow-md text-center w-full max-w-2xl">
                        <h4 class="font-bold text-primary mb-2">STAFF SEKOLAH</h4>
                        <div class="flex flex-wrap justify-center gap-2">
                            <span class="bg-gray-100 px-3 py-1 rounded-full">Wali Kelas</span>
                            <span class="bg-gray-100 px-3 py-1 rounded-full">Pembina OSIS</span>
                            <span class="bg-gray-100 px-3 py-1 rounded-full">Guru</span>
                            <span class="bg-gray-100 px-3 py-1 rounded-full">Pembina Eskul</span>
                            <span class="bg-gray-100 px-3 py-1 rounded-full">Kebersihan</span>
                            <span class="bg-gray-100 px-3 py-1 rounded-full">Satpam</span>
                        </div>
                    </div>

                    <!-- Siswa -->
                    <div class="mt-8 text-center">
                        <h4 class="text-xl font-bold text-primary">SISWA - SISWI SMP KARYA GUNA JAYA</h4>
                    </div>
                </div>
            </div>
        </section>

        <!-- Teachers Section -->
        <section id="teachers" class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-primary mb-4">GURU & STAFF</h2>
                    <div class="w-20 h-1 bg-accent mx-auto"></div>
                </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <!-- Guru 1 -->
                <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition">
                    <div class="h-48 bg-primary flex items-center justify-center">
                        <img src="{{ asset('asset/img/Anggi.jpg') }}" alt="Anggi Rizky Liestyana" class="h-full w-full object-cover">
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-lg">Anggi  Rizky Liestyana, S. Pd</h3>
                        <p class="text-secondary">Guru Bahasa Inggris</p>
                    </div>
                </div>

                <!-- Guru 2 -->
                <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition">
                    <div class="h-48 bg-primary flex items-center justify-center">
                        <img src="{{ asset('asset/img/Ujang.jpg') }}" alt="Ujang Sujana" class="h-full w-full object-cover">
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-lg">Ujang Sujana, S.Pd.I</h3>
                        <p class="text-secondary">Guru PAI</p>
                    </div>
                </div>

                <!-- Guru 3 -->
                <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition">
                    <div class="h-48 bg-primary flex items-center justify-center">
                        <img src="{{ asset('asset/img/Siti.png') }}" alt="Nia Permatasari" class="h-full w-full object-cover">
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-lg">Siti Rosita, S. Pd I</h3>
                        <p class="text-secondary">Guru Matematika</p>
                    </div>
                </div>

                <!-- Guru 4 -->
                <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition">
                    <div class="h-48 bg-primary flex items-center justify-center">
                        <img src="{{ asset('asset/img/Mega.jpg') }}" alt="Mega Andriyanti" class="h-full w-full object-cover">
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-lg">Mega Andriyanti, S. Pd</h3>
                        <p class="text-secondary">Guru Bahasa Indonesia</p>
                    </div>
                </div>

                <!-- Guru 5 -->
                <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition">
                    <div class="h-48 bg-primary flex items-center justify-center">
                        <img src="{{ asset('asset/img/Nur.jpg') }}" alt="Nur Asni" class="h-full w-full object-cover">
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-lg">Nur Asni, S. Pd</h3>
                        <p class="text-secondary">Guru IPA</p>
                    </div>
                </div>

                <!-- Guru 6 -->
                <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition">
                    <div class="h-48 bg-primary flex items-center justify-center">
                        <img src="{{ asset('asset/img/image.png') }}" alt="Ayu Fitriana" class="h-full w-full object-cover">
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-lg">Ayu Fitriana, S. Pd</h3>
                        <p class="text-secondary">Guru IPS</p>
                    </div>
                </div>

                <!-- Guru 7 -->
                <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition">
                    <div class="h-48 bg-primary flex items-center justify-center">
                        <img src="{{ asset('asset/img/Tyara.png') }}" alt="Tyara Annisa Rachmalia" class="h-full w-full object-cover">
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-lg">Tyara Annisa Rachmalia, SE</h3>
                        <p class="text-secondary">Guru PKWU</p>
                    </div>
                </div>

                <!-- Guru 8 -->
                <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition">
                    <div class="h-48 bg-primary flex items-center justify-center">
                        <img src="{{ asset('asset/img/image.png') }}" alt="Acep Soleh" class="h-full w-full object-cover">
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-lg">Acep Soleh Sulaeman, S. Pd</h3>
                        <p class="text-secondary">Guru PJOK</p>
                    </div>
                </div>
            </div>

                {{-- <div class="text-center mt-8">
                <button class="bg-primary text-white px-6 py-2 rounded-lg hover:bg-secondary transition">
                    Lihat Semua Guru & Staff
                </button>
            </div> --}}
            </div>
        </section>

        <!-- Extracurricular Section -->
        <section id="extracurricular" class="py-16 bg-gray-100">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-primary mb-4">EKSTRAKURIKULER</h2>
                    <div class="w-20 h-1 bg-accent mx-auto"></div>
                </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Paskibra -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition transform hover:-translate-y-2">
                    <div class="h-48 bg-primary flex items-center justify-center">
                        <img src="{{ asset('asset/img/paskibra.jpg') }}" alt="Paskibra" class="h-full w-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-xl mb-2">PASKIBRA</h3>
                        <p class="text-gray-600 mb-4">Melatih kedisiplinan, kerapian, dan kekompakan dalam baris-berbaris serta menanamkan jiwa nasionalisme melalui kegiatan paskibra.</p>
                        <div class="flex items-center text-secondary">
                            <i class="fas fa-calendar-alt mr-2"></i>
                            <span>Setiap Sabtu, 15.00-17.00</span>
                        </div>
                    </div>
                </div>

                <!-- Pramuka -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition transform hover:-translate-y-2">
                    <div class="h-48 bg-primary flex items-center justify-center">
                        <img src="{{ asset('asset/img/pramuka.jpg') }}" alt="Pramuka" class="h-full w-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-xl mb-2">PRAMUKA</h3>
                        <p class="text-gray-600 mb-4">Mengembangkan keterampilan kepemimpinan, kemandirian, dan kerja sama melalui kegiatan kepramukaan.</p>
                        <div class="flex items-center text-secondary">
                            <i class="fas fa-calendar-alt mr-2"></i>
                            <span>Setiap Jumat, 15.00-17.00</span>
                        </div>
                    </div>
                </div>

                <!-- Seni Tari -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition transform hover:-translate-y-2">
                    <div class="h-48 bg-primary flex items-center justify-center">
                        <img src="{{ asset('asset/img/seni_tari.jpg') }}" alt="Seni Tari" class="h-full w-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-xl mb-2">SENI TARI</h3>
                        <p class="text-gray-600 mb-4">Mengembangkan bakat seni dan melestarikan budaya Indonesia melalui berbagai jenis tarian tradisional dan modern.</p>
                        <div class="flex items-center text-secondary">
                            <i class="fas fa-calendar-alt mr-2"></i>
                            <span>Setiap Senin, 15.00-17.00</span>
                        </div>
                    </div>
                </div>

                <!-- Futsal -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition transform hover:-translate-y-2">
                    <div class="h-48 bg-primary flex items-center justify-center">
                        <img src="{{ asset('asset/img/futsal.jpg') }}" alt="Futsal" class="h-full w-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-xl mb-2">FUTSAL</h3>
                        <p class="text-gray-600 mb-4">Meningkatkan kebugaran fisik, kecepatan, kelincahan, dan daya tahan.</p>
                        <div class="flex items-center text-secondary">
                            <i class="fas fa-calendar-alt mr-2"></i>
                            <span>Setiap Rabu, 15.00-17.00</span>
                        </div>
                    </div>
                </div>

                <!-- Muay Thai -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition transform hover:-translate-y-2">
                    <div class="h-48 bg-primary flex items-center justify-center">
                        <img src="{{ asset('asset/img/muaythai.png') }}" alt="Muay Thai" class="h-full w-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-xl mb-2">MUAY THAI</h3>
                        <p class="text-gray-600 mb-4">Mengembangkan keterampilan bela diri dan teknik Muay Thai yang benar</p>
                        <div class="flex items-center text-secondary">
                            <i class="fas fa-calendar-alt mr-2"></i>
                            <span>Setiap Selasa, 15.00-17.00</span>
                        </div>
                    </div>
                </div>

                <!-- Marching Band -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition transform hover:-translate-y-2">
                    <div class="h-48 bg-primary flex items-center justify-center">
                        <img src="{{ asset('asset/img/MARCHING_BAND.jpg') }}" alt="Marching Band" class="h-full w-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-xl mb-2">MARCHING BAND</h3>
                        <p class="text-gray-600 mb-4">Meningkatkan keterampilan memainkan alat musik dan gerak baris-berbaris.</p>
                        <div class="flex items-center text-secondary">
                            <i class="fas fa-calendar-alt mr-2"></i>
                            <span>Setiap Rabu, 15.00-17.00 (SEMENTARA OFF)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <!-- Contact Section -->
        {{-- <section id="contact" class="py-16 bg-primary text-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-4">HUBUNGI KAMI</h2>
                <div class="w-20 h-1 bg-accent mx-auto"></div>
            </div>

            <div class="flex flex-col md:flex-row gap-8">
                <div class="md:w-1/2">
                    <div class="bg-white bg-opacity-10 p-6 rounded-lg backdrop-blur-sm">
                        <h3 class="text-xl font-bold mb-4">Informasi Kontak</h3>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <i class="fas fa-map-marker-alt mt-1 mr-4"></i>
                                <p>Jalan Al Huda Rawa Sapi RT 003 RW 009 Kelurahan Jatimulya Kec. Tambun Selatan, Bekasi</p>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-phone-alt mr-4"></i>
                                <p>(021) 82750817</p>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-envelope mr-4"></i>
                                <p>info@karyagunajaya.sch.id</p>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-clock mr-4"></i>
                                <p>Senin - Jumat: 07.00 - 16.00 WIB</p>
                            </div>
                        </div>

                        <h3 class="text-xl font-bold mt-8 mb-4">Sosial Media</h3>
                        <div class="flex space-x-4">
                            <a href="#" class="w-10 h-10 rounded-full bg-white bg-opacity-20 flex items-center justify-center hover:bg-opacity-30 transition">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="w-10 h-10 rounded-full bg-white bg-opacity-20 flex items-center justify-center hover:bg-opacity-30 transition">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="w-10 h-10 rounded-full bg-white bg-opacity-20 flex items-center justify-center hover:bg-opacity-30 transition">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="w-10 h-10 rounded-full bg-white bg-opacity-20 flex items-center justify-center hover:bg-opacity-30 transition">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="md:w-1/2">
                    <div class="bg-white bg-opacity-10 p-6 rounded-lg backdrop-blur-sm">
                        <h3 class="text-xl font-bold mb-4">Kirim Pesan</h3>
                        <form class="space-y-4">
                            <div>
                                <input type="text" placeholder="Nama Lengkap" class="w-full px-4 py-2 rounded bg-white bg-opacity-20 border border-white border-opacity-30 focus:outline-none focus:ring-2 focus:ring-white focus:ring-opacity-50 placeholder-white placeholder-opacity-70">
                            </div>
                            <div>
                                <input type="email" placeholder="Email" class="w-full px-4 py-2 rounded bg-white bg-opacity-20 border border-white border-opacity-30 focus:outline-none focus:ring-2 focus:ring-white focus:ring-opacity-50 placeholder-white placeholder-opacity-70">
                            </div>
                            <div>
                                <input type="tel" placeholder="Nomor Telepon" class="w-full px-4 py-2 rounded bg-white bg-opacity-20 border border-white border-opacity-30 focus:outline-none focus:ring-2 focus:ring-white focus:ring-opacity-50 placeholder-white placeholder-opacity-70">
                            </div>
                            <div>
                                <textarea placeholder="Pesan Anda" rows="4" class="w-full px-4 py-2 rounded bg-white bg-opacity-20 border border-white border-opacity-30 focus:outline-none focus:ring-2 focus:ring-white focus:ring-opacity-50 placeholder-white placeholder-opacity-70"></textarea>
                            </div>
                            <button type="submit" class="bg-white text-primary px-6 py-2 rounded font-medium hover:bg-opacity-90 transition">Kirim Pesan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

        <!-- Footer -->
        <footer class="bg-secondary text-white py-8">
            <div class="container mx-auto px-4">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <div class="mb-4 md:mb-0">
                        <div class="flex items-center">
                            <img src="{{ asset('asset/logo/logo-smp.png') }}" alt="Logo SMP Karya Guna Jaya"
                                class="h-10 mr-3">
                            <div>
                                <h3 class="font-bold">Sekolah Menengah Pertama</h3>
                                <p class="text-sm opacity-80">Karya Guna Jaya</p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center md:text-right">
                        <p class="text-sm opacity-80">© 2023 SMP Karya Guna Jaya. Semua Hak Dilindungi.</p>
                        <p class="text-sm opacity-80">Dikembangkan oleh Tim IT SMP Karya Guna Jaya</p>
                    </div>
                </div>
            </div>
        </footer>

        <script>
            // Mobile menu toggle
            document.querySelector('.fa-bars').addEventListener('click', function() {
                const nav = document.querySelector('nav ul');
                nav.classList.toggle('hidden');
                nav.classList.toggle('block');
                nav.classList.toggle('absolute');
                nav.classList.toggle('bg-white');
                nav.classList.toggle('w-full');
                nav.classList.toggle('left-0');
                nav.classList.toggle('top-16');
                nav.classList.toggle('py-4');
                nav.classList.toggle('px-4');
                nav.classList.toggle('shadow-md');
            });

            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();

                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });
        </script>
    @endsection
