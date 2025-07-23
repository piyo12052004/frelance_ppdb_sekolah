<div class="border-b border-gray-200 dark:border-gray-700">
    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center text-gray-500 dark:text-gray-400">
        <li class="me-2">
            <a href="#" onclick="loadTabContent('calonMahasiswa')"
                class="tab-link inline-flex items-center justify-center p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">
                <svg class="w-4 h-4 me-2 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300"
                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
                </svg>
                Informasi Pendaftaran
            </a>
        </li>
        <li class="me-2">
            <a href="#" onclick="loadTabContent('registrasi')"
                class="tab-link inline-flex items-center justify-center p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">
                <svg class="w-4 h-4 me-2 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300"
                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                    <path
                        d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                </svg>
                Syarat Pendaftaran
            </a>
        </li>
        <li class="me-2">
            <a href="#" onclick="loadTabContent('bayarUangPendaftaran')"
                class="tab-link inline-flex items-center justify-center p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">
                <svg class="w-4 h-4 me-2 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300"
                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M5 11.424V1a1 1 0 1 0-2 0v10.424a3.228 3.228 0 0 0 0 6.152V19a1 1 0 1 0 2 0v-1.424a3.228 3.228 0 0 0 0-6.152ZM19.25 14.5A3.243 3.243 0 0 0 17 11.424V1a1 1 0 0 0-2 0v10.424a3.227 3.227 0 0 0 0 6.152V19a1 1 0 1 0 2 0v-1.424a3.243 3.243 0 0 0 2.25-3.076Zm-6-9A3.243 3.243 0 0 0 11 2.424V1a1 1 0 0 0-2 0v1.424a3.228 3.228 0 0 0 0 6.152V19a1 1 0 1 0 2 0V8.576A3.243 3.243 0 0 0 13.25 5.5Z" />
                </svg>
                Panduan Pembayaran
            </a>
        </li>
    </ul>
</div>

<div id="tab-content" class="mt-4">
    @include('Module.PendaftaranSiswa.Partials.AlurPendaftaran.calonMahasiswa')
</div>

<div id="tab-calonMahasiswa" class="hidden">
    @include('Module.PendaftaranSiswa.Partials.AlurPendaftaran.calonMahasiswa')
</div>
<div id="tab-registrasi" class="hidden">
    @include('Module.PendaftaranSiswa.Partials.AlurPendaftaran.registrasi')
</div>
<div id="tab-bayarUangPendaftaran" class="hidden">
    @include('Module.PendaftaranSiswa.Partials.AlurPendaftaran.bayarUangPendaftaran')
</div>

<script>
    function loadTabContent(name) {
        document.querySelectorAll('.tab-link').forEach(link => {
            link.classList.remove('text-blue-600', 'border-blue-600', 'dark:text-blue-500',
                'dark:border-blue-500');
        });

        const clickedLink = event.currentTarget;
        clickedLink.classList.add('text-blue-600', 'border-blue-600', 'dark:text-blue-500', 'dark:border-blue-500');

        const content = document.getElementById(`tab-${name}`);
        const displayArea = document.getElementById("tab-content");

        if (content && displayArea) {
            displayArea.innerHTML = content.innerHTML;
        } else {
            displayArea.innerHTML = "<div class='text-red-500'>Konten tidak ditemukan.</div>";
        }
    }
</script>
