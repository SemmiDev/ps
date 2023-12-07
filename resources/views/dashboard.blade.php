<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Penta Store</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


    <link rel="icon" href="/logo.png" type="image/x-icon">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<body class="bg-[#141b2b] min-h-screen text-white w-full">
    @include('layouts.nav')
    <div class="fixed bottom-12 right-12 z-[999]">
        <a href="https://api.whatsapp.com/send?phone=6289502789608" target="_blank" rel="noopener noreferrer"
            class="bg-green-500 text-white p-4 rounded-full flex gap-2 items-center shadow text-sm hover:bg-green-600 transition duration-300">
            <img src="/wa.png" alt="" class="w-7 h-7 object-cover me-2">
            Ingin Jual Akun?
            <br>
            Hubungi Kami
        </a>
    </div>


    <h1
        class="font-bold
    text-[#8afdf7]
    text-3xl max-w-screen-xl flex flex-wrap items-center gap-2 mx-auto p-4 mt-10">
    Riwayat Pemesanan
    </h1>

    <div class="text-3xl max-w-screen-xl items-center gap-2 mx-auto p-4 mt-10">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Game
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Username
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Item
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Harga
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Metode Pembayaran
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status Pemesanan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tanggal
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($daftarPemesanan as $pemesanan)

                    <tr class=" text-gray-200 border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-200 whitespace-nowrap">
                            {{$pemesanan->game['name']}}
                        </th>
                        <td class="px-6 py-4">
                            {{$pemesanan->topup_account}}
                        </td>
                        <td class="px-6 py-4">
                            {{$pemesanan->item}}
                        </td>
                        <td class="px-6 py-4">
                            {{number_format($pemesanan->price, 0, ',', '.')}}
                        </td>
                        <td class="px-6 py-4">
                            {{$pemesanan->payment_method}}
                        </td>
                        <td class="px-6 py-4">
                            <form id="statusForm{{ $pemesanan->id }}" method="POST" action="{{ route('topup.update-status', ['id' => $pemesanan->id]) }}">
                                @csrf
                                @method('PUT')

                                <label for="status" class="sr-only">Status</label>
                                <select id="status" name="status" class="block w-full p-2 border bg-black text-white rounded-md" onchange="submitForm('{{ $pemesanan->id }}')">
                                    <option value="0" {{ $pemesanan->status == 0 ? 'selected' : '' }}>Menunggu Konfirmasi</option>
                                    <option value="1" {{ $pemesanan->status == 1 ? 'selected' : '' }}>Dikonfirmasi</option>
                                </select>
                            </form>
                        </td>
                        <td class="px-6 py-4">
                            @php
                            \Carbon\Carbon::setLocale('id');
                            @endphp
                            {{\Carbon\Carbon::parse($pemesanan->created_at)->diffForHumans()}}
                        </td>

                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


    <footer class="mt-32 text-[#8afdf7]">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="flex justify-between">
                <div>
                    <a href="" class="flex items-center">
                        <img src="/logo.png" class="h-12 me-3" alt="FlowBite Logo" />
                        <span class="self-center text-4xl font-semibold whitespace-nowrap text-[#8afdf7]">
                            Penta Store</span>
                    </a>
                    <p class="max-w-xl w-full leading-relaxed mt-5 text-justify">
                        PentaStore menjadi destinasi toko top up game dan jual beli akun yang dipilih para gamers untuk
                        melakukan top up dan jual beli akun karena berbagai alasan penting. erdapat berbagai game yang
                        tersedia di PentaStore memungkinkan gamer untuk menemukan dan melakukan top up pada berbagai
                        jenis game.
                    </p>
                </div>
                <div>
                    <div>
                        <h2 class="mb-6 text-lg font-semibold uppercase text-[#8afdf7] flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-6 h-6">
                                <path fill-rule="evenodd"
                                    d="M4.5 3.75a3 3 0 00-3 3v10.5a3 3 0 003 3h15a3 3 0 003-3V6.75a3 3 0 00-3-3h-15zm4.125 3a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5zm-3.873 8.703a4.126 4.126 0 017.746 0 .75.75 0 01-.351.92 7.47 7.47 0 01-3.522.877 7.47 7.47 0 01-3.522-.877.75.75 0 01-.351-.92zM15 8.25a.75.75 0 000 1.5h3.75a.75.75 0 000-1.5H15zM14.25 12a.75.75 0 01.75-.75h3.75a.75.75 0 010 1.5H15a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5h3.75a.75.75 0 000-1.5H15z"
                                    clip-rule="evenodd" />
                            </svg>

                            Contact Information
                        </h2>
                        <ul class="text-sm">
                            <li class="mb-4">
                                <a href="#" class="hover:underline flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-6 h-6">
                                        <path fill-rule="evenodd"
                                            d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z"
                                            clip-rule="evenodd" />
                                    </svg>

                                    Jl. Teladan, Kec.Tampan, Riau</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-6 h-6">
                                        <path d="M10.5 18.75a.75.75 0 000 1.5h3a.75.75 0 000-1.5h-3z" />
                                        <path fill-rule="evenodd"
                                            d="M8.625.75A3.375 3.375 0 005.25 4.125v15.75a3.375 3.375 0 003.375 3.375h6.75a3.375 3.375 0 003.375-3.375V4.125A3.375 3.375 0 0015.375.75h-6.75zM7.5 4.125C7.5 3.504 8.004 3 8.625 3H9.75v.375c0 .621.504 1.125 1.125 1.125h2.25c.621 0 1.125-.504 1.125-1.125V3h1.125c.621 0 1.125.504 1.125 1.125v15.75c0 .621-.504 1.125-1.125 1.125h-6.75A1.125 1.125 0 017.5 19.875V4.125z"
                                            clip-rule="evenodd" />
                                    </svg>

                                    +62823456789</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-6 h-6">
                                        <path
                                            d="M19.5 22.5a3 3 0 003-3v-8.174l-6.879 4.022 3.485 1.876a.75.75 0 01-.712 1.321l-5.683-3.06a1.5 1.5 0 00-1.422 0l-5.683 3.06a.75.75 0 01-.712-1.32l3.485-1.877L1.5 11.326V19.5a3 3 0 003 3h15z" />
                                        <path
                                            d="M1.5 9.589v-.745a3 3 0 011.578-2.641l7.5-4.039a3 3 0 012.844 0l7.5 4.039A3 3 0 0122.5 8.844v.745l-8.426 4.926-.652-.35a3 3 0 00-2.844 0l-.652.35L1.5 9.59z" />
                                    </svg>
                                    admin@pentastore.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto lg:my-8" />

            <span class="block text-center text-sm text-[#8afdf7]">© 2023 Penta Store. All rights reserved.</span>
        </div>
    </footer>

    <script>
        function submitForm(id) {
            document.getElementById('statusForm' + id).submit();
        }
    </script>

</body>

</html>
