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
                    <div class="text-xl text-gray-900">
                        {{Auth::user()->name}}
                    </div>

                    <div class="overflow-x-auto px-6 py-4">
                        <table>
                            <thead>
                                <th>Judul Laporan</th>
                                <th>Status</th>
                                <th>Tanggal Dibuat</th>
                                <th>Pilihan</th>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>