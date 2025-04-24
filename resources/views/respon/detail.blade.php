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
                            Respon Pengaduan {{$data->judul_laporan}}
                        </div>
                        <div class="">
                            20-05-2025
                        </div>
                    </div>
                    <div class="text-md text-gray-900 mt-4">
                        Berikut adalah progress laporan yang anda ajukan.
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>