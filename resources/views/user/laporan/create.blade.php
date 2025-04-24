<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Laporan Baru
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="text-xl font-semibold text-gray-900">
                        Buat Laporan Baru
                    </div>
                    <div class="text-md text-gray-900">
                        Ajukan Laporan anda pada form berikut :
                    </div>
                    <div class="overflow-x-auto py-4 mt-4">

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <!-- Judul laporan -->
                            <div class="mt-2">
                                <x-input-label for="judul_laporan" :value="__('Judul Laporan')" />
                                <x-text-input id="judul_laporan" class="block mt-1 w-full" type="text" name="judul_laporan"
                                    :value="old('judul_laporan')" required autofocus autocomplete="username" />
                                <x-input-error :messages="$errors->get('judul_laporan')" class="mt-2" />
                            </div>

                            <div class="mt-4">
                                <x-input-label for="jenis" :value="__('Jenis Laporan')" />
                                <select name="jenis" id="jenis" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>
                                    <option value="">-Pilih Jenis-</option>
                                    <option value="kerusakan">Kerusakan</option>
                                    <option value="kehilangan">Kehilangan</option>
                                    <option value="pengaduan">Pengaduan</option>
                                </select>
                                <x-input-error :messages="$errors->get('jenis')" class="mt-2" />
                            </div>

                            <div class="mt-2">
                                <x-input-label for="dokumentasi" :value="__('Dokumentasi')" />
                                <x-text-input id="dokumentasi" class="block mt-1 w-full p-4 border" type="file" name="dokumentasi"
                                    :value="old('dokumentasi')" required autofocus autocomplete="username" />
                                <x-input-error :messages="$errors->get('dokumentasi')" class="mt-2" />
                            </div>

                            <div class="mt-2">
                                <x-input-label for="detail_laporan" :value="__('Detail Laporan')" />
                                <textarea name="detail_laporan" id="detail_laporan" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" ></textarea>
                                <x-input-error :messages="$errors->get('detail_laporan')" class="mt-2" />
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <x-primary-button class="ms-3">
                                    {{ __('Log in') }}
                                </x-primary-button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>