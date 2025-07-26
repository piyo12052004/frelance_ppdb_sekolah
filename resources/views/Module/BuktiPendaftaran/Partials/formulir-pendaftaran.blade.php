@if (session('error'))
    <div id="toast-error"
        class="fixed top-5 right-5 z-50 flex items-center w-full max-w-xs p-4 text-white bg-red-600 rounded-lg shadow"
        role="alert">
        <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-red-100 bg-red-700 rounded-lg">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M18 10c0 4.418-3.582 8-8 8s-8-3.582-8-8 3.582-8 8-8 8 3.582 8 8zm-9-3a1 1 0 112 0v4a1 1 0 11-2 0V7zm1 8a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"
                    clip-rule="evenodd" />
            </svg>
        </div>
        <div class="ms-3 text-sm font-normal">
            {{ session('error') }}
        </div>
        <button type="button"
            class="ms-auto -mx-1.5 -my-1.5 text-white hover:text-black rounded-lg p-1.5 hover:bg-red-700"
            onclick="document.getElementById('toast-error').remove()" aria-label="Close">
            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 14 14">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1l6 6m0 0l6 6M7 7l6-6M7 7L1 13" />
            </svg>
        </button>
    </div>

    <script>
        setTimeout(() => {
            const toast = document.getElementById('toast-error');
            if (toast) toast.remove();
        }, 7000);
    </script>
@endif

@if ($errors->any())
    <div id="toast-validation-error"
        class="fixed top-5 right-5 z-50 flex flex-col space-y-2 w-full max-w-xs p-4 text-white bg-red-600 rounded-lg shadow"
        role="alert">
        <div
            class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-red-100 bg-red-700 rounded-lg mb-2">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M18 10c0 4.418-3.582 8-8 8s-8-3.582-8-8 3.582-8 8-8 8 3.582 8 8zm-9-3a1 1 0 112 0v4a1 1 0 11-2 0V7zm1 8a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"
                    clip-rule="evenodd" />
            </svg>
        </div>
        <div class="text-sm font-normal">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <button type="button"
            class="ms-auto -mx-1.5 -my-1.5 text-white hover:text-black rounded-lg p-1.5 hover:bg-red-700 self-start"
            onclick="document.getElementById('toast-validation-error').remove()" aria-label="Close">
            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 14 14">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1l6 6m0 0l6 6M7 7l6-6M7 7L1 13" />
            </svg>
        </button>
    </div>

    <script>
        setTimeout(() => {
            const toast = document.getElementById('toast-validation-error');
            if (toast) toast.remove();
        }, 10000);
    </script>
@endif

<div class="m-4">
    <form action="{{ route('siswa.formulir', $calonSiswa['id']) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="columns is-multiline">

            <!-- BIODATA SISWA -->
            <div class="column is-12">
                <h2 class="text-lg font-bold mb-4">BIODATA SISWA</h2>
            </div>

            <div class="column is-6">
                <label for="nama_lengkap" class="block mb-2 text-sm font-medium text-black">Nama Lengkap</label>
                <input name="nama_lengkap" type="text" id="nama_lengkap"
                    value="{{ old('nama_lengkap', $calonSiswa['nama_lengkap'] ?? '') }}"
                    class="block w-full p-2 border rounded-lg bg-white text-xs focus:ring focus:ring-blue-500
                        @error('nama_lengkap') border-red-500 @else border-gray-300 @enderror
                        text-black">
                @error('nama_lengkap')
                    <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="column is-6">
                <label for="nama_panggilan" class="block mb-2 text-sm font-medium text-black">Nama Panggilan</label>
                <input name="nama_panggilan" type="text" id="nama_panggilan"
                    value="{{ old('nama_panggilan', $calonSiswa['nama_panggilan'] ?? '') }}"
                    class="block w-full p-2 border rounded-lg bg-white text-xs focus:ring focus:ring-blue-500
                        @error('nama_panggilan') border-red-500 @else border-gray-300 @enderror
                        text-black">
                @error('nama_panggilan')
                    <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="column is-6">
                <div class="columns is-multiline">
                    <div class="column is-6">
                        <label for="tempat_lahir" class="block mb-2 text-sm font-medium text-black">Tempat Lahir</label>
                        <input name="tempat_lahir" type="text" id="tempat_lahir"
                            value="{{ old('tempat_lahir', $calonSiswa['tempat_lahir'] ?? '') }}"
                            class="block w-full p-2 border rounded-lg bg-white text-xs focus:ring focus:ring-blue-500
                                @error('tempat_lahir') border-red-500 @else border-gray-300 @enderror
                                text-black">
                        @error('tempat_lahir')
                            <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="column is-6">
                        <label for="tanggal_lahir" class="block mb-2 text-sm font-medium text-black">Tanggal
                            Lahir</label>
                        <input name="tanggal_lahir" type="date" id="tanggal_lahir"
                            value="{{ old('tanggal_lahir', isset($calonSiswa['tanggal_lahir']) ? \Carbon\Carbon::parse($calonSiswa['tanggal_lahir'])->format('Y-m-d') : '') }}"
                            class="block w-full p-2 border rounded-lg bg-white text-xs focus:ring focus:ring-blue-500
                                @error('tanggal_lahir') border-red-500 @else border-gray-300 @enderror
                                text-black">
                        @error('tanggal_lahir')
                            <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="column is-6">
                <label for="agama" class="block mb-2 text-sm font-medium text-black">Agama</label>
                <input name="agama" type="text" id="agama"
                    value="{{ old('agama', $calonSiswa['agama'] ?? '') }}"
                    class="block w-full p-2 border rounded-lg bg-white text-xs focus:ring focus:ring-blue-500
                        @error('agama') border-red-500 @else border-gray-300 @enderror
                        text-black">
                @error('agama')
                    <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="column is-12">
                <label for="alamat" class="block mb-2 text-sm font-medium text-black">Alamat</label>
                <input type="text" name="alamat" id="alamat"
                    value="{{ old('alamat', $calonSiswa['alamat'] ?? '') }}"
                    class="block w-full p-2 border rounded-lg bg-white text-xs focus:ring focus:ring-blue-500
                        @error('alamat') border-red-500 @else border-gray-300 @enderror
                        text-black">
                @error('alamat')
                    <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="column is-6">
                <label for="no_hp" class="block mb-2 text-sm font-medium text-black">Nomor Tlp/HP</label>
                <input name="no_hp" type="tel" id="no_hp"
                    value="{{ old('no_hp', $calonSiswa['no_hp'] ?? '') }}"
                    class="block w-full p-2 border rounded-lg bg-white text-xs focus:ring focus:ring-blue-500
                        @error('no_hp') border-red-500 @else border-gray-300 @enderror
                        text-black">
                @error('no_hp')
                    <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- BIODATA ORANG TUA -->
            <div class="column is-12 mt-6">
                <h2 class="text-lg font-bold mb-4">BIODATA ORANG TUA/WALI</h2>
            </div>

            @php
                $fieldsOrtu = [
                    'nama_ayah',
                    'nama_ibu',
                    'tempat_tanggal_lahir_ayah',
                    'tempat_tanggal_lahir_ibu',
                    'pendidikan_ayah',
                    'pendidikan_ibu',
                    'pekerjaan_ayah',
                    'pekerjaan_ibu',
                    'alamat_ortu',
                    'no_hp_ayah',
                ];
            @endphp

            @foreach ($fieldsOrtu as $field)
                <div class="column is-{{ $field == 'alamat_ortu' ? '12' : '6' }}">
                    <label for="{{ $field }}" class="block mb-2 text-sm font-medium text-black">
                        {{ ucwords(str_replace('_', ' ', $field)) }}
                    </label>
                    @if ($field == 'alamat_ortu')
                        <textarea name="{{ $field }}" id="{{ $field }}" rows="2"
                            class="block w-full p-2 border rounded-lg bg-white text-xs focus:ring focus:ring-blue-500
                                @error($field) border-red-500 @else border-gray-300 @enderror
                                text-black">{{ old($field, $calonSiswa[$field] ?? '') }}</textarea>
                        @error($field)
                            <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    @else
                        <input name="{{ $field }}" type="text" id="{{ $field }}"
                            value="{{ old($field, $calonSiswa[$field] ?? '') }}"
                            class="block w-full p-2 border rounded-lg bg-white text-xs focus:ring focus:ring-blue-500
                                @error($field) border-red-500 @else border-gray-300 @enderror
                                text-black">
                        @error($field)
                            <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    @endif
                </div>
            @endforeach

            <!-- PERSYARATAN -->
            <div class="column is-12 mt-6">
                <h2 class="text-lg font-bold mb-4">PERSYARATAN YANG DISERAHKAN</h2>
            </div>

            @php
                $berkas = [
                    'ijazah' => 'Foto Ijazah',
                    'akta' => 'Foto Akta Kelahiran',
                    'kk' => 'Foto Kartu Keluarga',
                    'foto' => 'Pas Foto',
                ];
            @endphp

            @foreach ($berkas as $name => $label)
                <div class="column is-6">
                    <label for="{{ $name }}"
                        class="block mb-2 text-sm font-medium text-black">{{ $label }}</label>
                    <input name="{{ $name }}" type="file" id="{{ $name }}"
                        class="block w-full text-sm text-black file:mr-4 file:py-2 file:px-4
                               file:rounded-lg file:border-0 file:text-sm file:font-semibold
                               file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100
                               @error($name) border-red-500 @enderror">
                    @error($name)
                        <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            @endforeach
            <div class="column is-12" style="display: flex">
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 mt-4">
                    @if ($calonSiswa->ijazah)
                        <div class="flex flex-col items-center">
                            <img src="{{ asset('storage/berkas/siswa/' . $calonSiswa->ijazah) }}" alt="Ijazah"
                                class="w-24 h-auto rounded shadow">
                            <span class="text-xs text-gray-700 mt-2">Ijazah</span>
                        </div>
                    @endif

                    @if ($calonSiswa->akta)
                        <div class="flex flex-col items-center">
                            <img src="{{ asset('storage/berkas/siswa/' . $calonSiswa->akta) }}" alt="Akta"
                                class="w-24 h-auto rounded shadow">
                            <span class="text-xs text-gray-700 mt-2">Akta</span>
                        </div>
                    @endif

                    @if ($calonSiswa->kk)
                        <div class="flex flex-col items-center">
                            <img src="{{ asset('storage/berkas/siswa/' . $calonSiswa->kk) }}" alt="KK"
                                class="w-24 h-auto rounded shadow">
                            <span class="text-xs text-gray-700 mt-2">Kartu Keluarga</span>
                        </div>
                    @endif

                    @if ($calonSiswa->foto)
                        <div class="flex flex-col items-center">
                            <img src="{{ asset('storage/berkas/siswa/' . $calonSiswa->foto) }}" alt="Pas Foto"
                                class="w-24 h-auto rounded shadow">
                            <span class="text-xs text-gray-700 mt-2">Pas Foto</span>
                        </div>
                    @endif
                </div>

            </div>
            <div class="column is-12 mt-6">
                @if (is_null($calonSiswa->is_formulir))
                    <button type="submit"
                        class="w-full bg-blue-600 text-white py-2 px-6 rounded-lg text-sm hover:bg-blue-700 transition-all">
                        Simpan Pendaftaran
                    </button>
                    @elseif (isset ($calonSiswa->is_formulir) && $calonSiswa->is_formulir == true)
                        <button type="button"
                        class="w-full bg-blue-600 text-white py-2 px-6 rounded-lg text-sm hover:bg-blue-700 transition-all">
                        Berkas Sudah diverifikasi
                    </button>
                @else
                    <button type="button"
                        onclick="showSuccessToast('Berkas sedang diverifikasi, tidak bisa diedit.')"
                        class="w-full bg-blue-600 text-white py-2 px-6 rounded-lg text-sm hover:bg-blue-700 transition-all">
                        Berkas Sudah Terkirim
                    </button>
                @endif


            </div>

        </div>
    </form>
</div>

<div id="toast-success"
    class="hidden fixed top-5 right-5 z-50 items-center w-full max-w-xs p-4 text-white bg-green-500 rounded-lg shadow"
    role="alert">
    <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-100 bg-green-600 rounded-lg">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            <path
                d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293a1 1 0 00-1.414 1.414L9 14.414l7.121-7.121a1 1 0 000-1.414z" />
        </svg>
    </div>
    <div id="toast-success-message" class="ms-3 text-sm font-normal">
        {{ session('success') }}
    </div>
    <button type="button"
        class="ms-auto -mx-1.5 -my-1.5 text-white hover:text-black rounded-lg p-1.5 hover:bg-green-600"
        onclick="hideSuccessToast()" aria-label="Close">
        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 14 14">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M1 1l6 6m0 0l6 6M7 7l6-6M7 7L1 13" />
        </svg>
    </button>
</div>
