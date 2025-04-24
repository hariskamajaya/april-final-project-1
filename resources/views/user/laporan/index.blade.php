<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Laporan Saya
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="text-xl font-semibold text-gray-900">
                        Selamat Datang,
                    </div>
                    <div class="text-md text-gray-900">
                        Berikut adalah laporan anda yang sudah diajukan.
                    </div>
                    <div class="overflow-x-auto py-4 mt-4">
                        <table class="min-w-full bg-transparent">
                            <thead class="uppercase font-medium text-sm bg-yellow-200 dark:bg-yellow-400">
                                <th class="py-2">Judul Laporan</th>
                                <th class="py-2">Status</th>
                                <th class="py-2">Tanggal Dibuat</th>
                                <th class="py-2">Pilihan</th>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td class="py-2 px-4">{{$item->judul_laporan}}</td>
                                        <td class="py-2 px-4">{{$item->status}}</td>
                                        <td class="py-2 px-4">{{$item->tanggal_laporan}}</td>
                                        <td class="py-2 px-4 text-center">
                                            <a href="" class="text-sm uppercase me-2">detail</a>
                                            <a href="" class="text-sm uppercase font-semibold ms-2">hapus</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>