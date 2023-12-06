<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Detail Penitipan') }}
            </h2>

            <a href="{{ route('dashboard') }}"
                class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">
                Kembali
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">



                @if ($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 mb-5 rounded relative"
                        role="alert">
                        <strong class="font-bold">Oops!</strong>
                        <span class="block sm:inline">{{ $errors->first() }}</span>
                    </div>
                @endif


                @if (session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 mb-5 rounded relative"
                        role="alert">
                        <strong class="font-bold">Success!</strong>
                        <span class="block sm:inline">{{ session('success') }}</span>
                    </div>
                @endif

                <form method="POST" action="{{ route('admin.penitipan.update', $penitipan->id) }}"
                    class="relative overflow-x-auto mt-5 shadow-md sm:rounded-lg">
                    @csrf
                    @method('PUT')
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <tbody>
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Nama Pelanggan
                                </th>

                                <th scope="row"
                                    class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap dark:text-white">
                                    : {{ $penitipan->nama_pelanggan }}
                                </th>
                            </tr>

                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Tanggal Penitipan
                                </th>

                                <th scope="row"
                                    class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap dark:text-white">
                                    : {{ \Carbon\Carbon::parse($penitipan->tanggal_penitipan)->format('d F Y') }}
                                </th>
                            </tr>

                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Tanggal Pengambilan
                                </th>

                                <th scope="row"
                                    class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap dark:text-white">
                                    : {{ \Carbon\Carbon::parse($penitipan->tanggal_pengambilan)->format('d F Y') }}
                                </th>
                            </tr>

                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Ukuran Box
                                </th>

                                <th scope="row"
                                    class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap dark:text-white">
                                    : {{ $penitipan->ukuran_box }}
                                </th>
                            </tr>

                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Total Harga
                                </th>

                                <th scope="row"
                                    class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap dark:text-white">
                                    : Rp. {{ number_format($penitipan->harga, 0, ',', '.') }}
                                </th>
                            </tr>


                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Token
                                </th>

                                <th scope="row"
                                    class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap dark:text-white">
                                    : {{ $penitipan->token }}
                                </th>
                            </tr>

                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Alamat
                                </th>

                                <th scope="row"
                                    class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap dark:text-white">
                                    : {{ $penitipan->alamat_pelanggan }}
                                </th>
                            </tr>
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Metode Pembayaran
                                </th>

                                <th scope="row"
                                    class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap dark:text-white">
                                    : {{ $penitipan->metode_pembayaran }}
                                </th>
                            </tr>

                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Status Pembayaran
                                </th>

                                <th scope="row"
                                    class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap dark:text-white">
                                    <select name="status_pembayaran" id="status_pembayaran"
                                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-yellow-400 focus:outline-none focus:shadow-outline-yellow dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                                        <option value="Belum Dibayar"
                                            {{ $penitipan->status_pembayaran == 'Belum Dibayar' ? 'selected' : '' }}>
                                            Belum Dibayar
                                        </option>
                                        <option value="Sudah Dibayar"
                                            {{ $penitipan->status_pembayaran == 'Sudah Dibayar' ? 'selected' : '' }}>
                                            Sudah Dibayar
                                        </option>
                                    </select>
                                </th>
                            </tr>

                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Denda
                                </th>

                                <th scope="row"
                                    class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap dark:text-white">
                                    : Rp. {{ number_format($denda, 0, ',', '.') }}
                                </th>
                            </tr>

                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Telah Diambil
                                </th>

                                <th scope="row"
                                    class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap dark:text-white">

                                    <select name="apakah_telah_diambil" id="apakah_telah_diambil"
                                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-yellow-400 focus:outline-none focus:shadow-outline-yellow dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                                        <option value="0"
                                            {{ $penitipan->apakah_telah_diambil == 0 ? 'selected' : '' }}>
                                            Belum Diambil
                                        </option>
                                        <option value="1"
                                            {{ $penitipan->apakah_telah_diambil == 1 ? 'selected' : '' }}>
                                            Telah Diambil
                                        </option>
                                    </select>
                                </th>
                            </tr>



                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Bukti Pembayaran
                                </th>

                                <th scope="row"
                                    class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap dark:text-white">
                                    <img src="{{ asset('storage/' . $penitipan->bukti_transaksi) }}"
                                        alt="bukti_pembayaran" class="w-64 h-64 rounded-xl">
                                </th>
                            </tr>

                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                </th>

                                <th scope="row"
                                    class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap dark:text-white">
                                    <button type="submit"
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                        Simpan
                                    </button>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
