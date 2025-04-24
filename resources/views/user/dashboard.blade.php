<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard User Area
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

                    <div class="flex justify-between items-center">
                        <div class="text-sm text-gray-900 mt-6 w-1/2">
                            Ajukan laporan pengaduan fasilitas, layanan atau apapun disini.
                        </div>

                        <div class="w-1/2 text-center">
                            <a href="" class="bg-yellow-500 py-2 px-6 rounded-lg hover:bg-yellow-600">Buat Laporan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>