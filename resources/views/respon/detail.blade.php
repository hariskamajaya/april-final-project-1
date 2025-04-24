<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Laporan Saya
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-yellow-200 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="text-xl font-semibold text-gray-900">
                        Detail Laporan {{$data->judul_laporan}}
                    </div>
                    <div class="text-md text-gray-900">
                        Berikut adalah progress laporan yang anda ajukan.
                    </div>
                    <div class="overflow-x-auto py-4 mt-4">
                        <table class="min-w-full bg-transparent">
                            <tbody>
                                <tr>
                                    <td class="py-2 px-4">Judul Laporan</td>
                                    <td class="py-2 px-4">{{$data->judul_laporan}}</td>
                                    <td rowspan="4">
                                        <img src="{{asset('storage/images/laporan/' . $data->dokumentasi)}}"
                                            alt="Bukti Dokumentasi" width="240">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-4">Jenis Laporan</td>
                                    <td class="py-2 px-4">{{$data->jenis}}</td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-4">Status Laporan</td>
                                    <td class="py-2 px-4">{{$data->status}}</td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-4">Detail Laporan</td>
                                    <td class="py-2 px-4">{{$data->detail_laporan}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="overflow-hidden shadow-sm sm:rounded-lg mt-2 bg-white">
                <div class="p-6">
                    <div class="flex justify-between">
                        <div class="text-xl font-semibold text-gray-900">
                            Tambah Respon
                        </div>
                    </div>

                    <form method="POST" action="{{ route('respon.store') }}">
                        @csrf

                        <input type="number" name="id_laporan" value="{{$data->id}}" hidden>

                        <!-- Judul laporan -->
                        <div class="mt-4">
                            <x-input-label for="status" :value="__('Status Laporan')" />
                            <select name="status" id="status"
                                class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                required>
                                <option value="{{$data->status}}">{{$data->status}}</option>
                                <option value="proses">Proses</option>
                                <option value="selesai">Selesai</option>
                                <option value="ditolak">Ditolak</option>
                            </select>
                            <x-input-error :messages="$errors->get('jenis')" class="mt-2" />
                        </div>

                        <div class="mt-2">
                            <x-input-label for="detail_respon" :value="__('Detail Respon')" />
                            <textarea name="detail_respon" id="detail_respon"
                                class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"></textarea>
                            <x-input-error :messages="$errors->get('detail_respon')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ms-3">
                                {{ __('Log in') }}
                            </x-primary-button>
                        </div>
                    </form>

                </div>
            </div>

            @foreach ($respon as $item)
                <div class="overflow-hidden shadow-sm sm:rounded-lg mt-2 bg-white">
                    <div class="p-6">
                        <div class="flex justify-between">
                            <div class="text-xl font-semibold text-gray-900">
                                Respon Pengaduan {{$data->judul_laporan}}
                            </div>
                            <div class="">
                                {{$item->tanggal_reposn}}
                            </div>
                        </div>
                        <div class="text-md text-gray-900 mt-4">
                            {{$item->detail_respon}}
                        </div>
                    </div>
                </div>
            @endforeach



        </div>
    </div>
</x-app-layout>