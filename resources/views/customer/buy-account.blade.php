<x-app-layout>
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8 mb-12">

        <div>
            <img src="/{{ $game['cover'] }}" alt="" class="w-full h-96  object-cover rounded-lg">
            <h1 class="text-3xl font-semibold mt-4 mb-4">{{ $game['name'] }}</h1>

            <div class="gap-3 grid grid-cols-4">

                @if (count($game['accounts']) == 0)
                    <p class="p-4 text-sm">
                        Tidak ada akun yang tersedia saat ini.
                    </p>
                @endif

                @foreach ($game['accounts'] as $item)
                    <div onclick="chooseItem('{{ $item['spec'] }}~{{ $item['price'] }}~{{ $item['email'] }}~{{ $item['password'] }}')"
                        class="bg-gray-200 text-black flex flex-col justify-between w-full hover:bg-white hover:cursor-pointer rounded-xl shadow mb-2">
                        <div class="p-4">
                            <div class="flex gap-2 items-center">
                                <img src="https://ui-avatars.com/api/?name={{ $item['email'] }}" alt=""
                                    class="w-8 h-8 object-cover rounded-full">
                                <h1 class="text-lg font-semibold">
                                    {{ explode('@', $item['email'])[0] }}
                                </h1>
                            </div>

                            <p class="p-4 text-sm">
                                {{ $item['spec'] }}
                            </p>

                        </div>

                        <div class="flex flex-col p-2">
                            <h2 class="text-xl font-semibold p-4">
                                Rp. {{ number_format($item['price'], 0, ',', '.') }}
                            </h2>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>



        <ol class="relative mt-12 border-s border-gray-200 dark:border-gray-700 dark:text-gray-400">
            <li class="mb-10 ms-6">
                <span
                    class="absolute flex items-center justify-center w-8 h-8 bg-black rounded-full -start-4 ring-4 ring-green-500">
                    1
                </span>
                <h3 class="font-medium leading-tight">Pilih Pembayaran</h3>

                <div class="flex flex-col mt-3 gap-2">
                    <div onclick="choosePaymentMethod('ovo')"
                        class="border flex justify-between items-center bg-white text-black border-gray-200 rounded-lg p-4 hover:border-green-500 transition duration-300 cursor-pointer">
                        <img src="/ovo.png" alt="" class="w-32 h-8 object-scale-down">
                        <span class="text-lg font-semibold mt-4 harga-display">

                        </span>
                    </div>
                    <div onclick="choosePaymentMethod('dana')"
                        class="border flex justify-between items-center bg-white text-black border-gray-200 rounded-lg p-4 hover:border-green-500 transition duration-300 cursor-pointer">

                        <img src="/dana.png" alt="" class="w-32 h-8 object-scale-down">
                        <span class="text-lg font-semibold mt-4 harga-display"></span>
                    </div>
                    <div onclick="choosePaymentMethod('bank')"
                        class="border flex justify-between items-center bg-white text-black border-gray-200 rounded-lg p-4 hover:border-green-500 transition duration-300 cursor-pointer">

                        <img src="/bank.png" alt="" class="w-32 h-8 object-scale-down">
                        <span class="text-lg font-semibold mt-4 harga-display"></span>
                    </div>
                    <div onclick="choosePaymentMethod('gopay')"
                        class="border  bg-white text-black  border-gray-200 rounded-lg p-4 flex items-center justify-between hover:border-green-500 transition duration-300 cursor-pointer">
                        <img src="/gopay.png" alt="" class="w-32 h-8 object-scale-down">
                        <span class="text-lg font-semibold mt-4 harga-display"></span>
                    </div>
                    <div onclick="choosePaymentMethod('linkaja')"
                        class="border flex justify-between items-center bg-white text-black border-gray-200 rounded-lg p-4 hover:border-green-500 transition duration-300 cursor-pointer">

                        <img src="/qris.png" alt="" class="w-32 h-8 object-scale-down">
                        <span class="text-lg font-semibold mt-4 harga-display"></span>
                    </div>
                    <div onclick="choosePaymentMethod('shopeepay')"
                        class="border flex justify-between items-center bg-white text-black border-gray-200 rounded-lg p-4 hover:border-green-500 transition duration-300 cursor-pointer">

                        <img src="/shopeepay.png" alt="" class="w-32 h-8 object-scale-down">
                        <span class="text-lg font-semibold mt-4 harga-display"></span>
                    </div>
                    <div onclick="choosePaymentMethod('indomaret')"
                        class="border flex justify-between items-center bg-white text-black border-gray-200 rounded-lg p-4 hover:border-green-500 transition duration-300 cursor-pointer">

                        <img src="/indomaret.png" alt="" class="w-32 h-8 object-scale-down">
                        <span class="text-lg font-semibold mt-4 harga-display"></span>
                    </div>
                    <div onclick="choosePaymentMethod('alfamart')"
                        class="border flex justify-between items-center bg-white text-black border-gray-200 rounded-lg p-4 hover:border-green-500 transition duration-300 cursor-pointer">

                        <img src="/alfamart.png" alt="" class="w-32 h-8 object-scale-down">
                        <span class="text-lg font-semibold mt-4 harga-display"></span>
                    </div>
                    <div onclick="choosePaymentMethod('doku')"
                        class="border flex justify-between items-center bg-white text-black border-gray-200 rounded-lg p-4 hover:border-green-500 transition duration-300 cursor-pointer">

                        <img src="/doku.png" alt="" class="w-32 h-8 object-scale-down">
                        <span class="text-lg font-semibold mt-4 harga-display"></span>
                    </div>
                </div>
            </li>

            <li class="ms-6" x-show="selectedNominal && selectedPayment">
                <span
                    class="absolute flex items-center justify-center w-8 h-8 bg-black rounded-full -start-4 ring-4 ring-green-500">
                    2
                </span>
                <h3 class="font-medium leading-tight">Checkout</h3>

                <div class="mt-5">
                    <h1 class="text-2xl font-semibold">Detail Pembayaran</h1>

                    <div class="flex flex-col justify-between mt-2">
                        <div>
                            Metode Pembayaran: <span id="payment_method" class="font-bold"
                                x-text="selectedPayment"></span>
                        </div>
                        <div>
                            Item: <span id="item" class="font-bold" x-text="selectedNominal"></span>
                        </div>
                    </div>
                </div>

                <!-- Main modal -->
                <div id="default-modal" tabindex="-1" aria-hidden="true"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <!-- Modal header -->
                            <div
                                class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                    Terima Kasih
                                </h3>
                                <button type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                    data-modal-hide="default-modal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="p-4 md:p-5 space-y-4">
                                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                    Admin akan segera memproses pemesanan & pembayaran anda.
                                </p>
                            </div>
                            <!-- Modal footer -->
                            <div
                                class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                <button data-modal-hide="default-modal" type="button"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Saya Mengerti</button>
                                <button data-modal-hide="default-modal" type="button"
                                    class="ms-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>


                <button onclick="sendData()" data-modal-target="default-modal" data-modal-toggle="default-modal"
                    class="mt-4 w-full bg-green-500 rounded-lg px-4 py-3 focus:outline-none focus:border-green-500 text-white font-bold flex gap-2 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z" />
                    </svg>

                    Bayar Sekarang
                </button>
            </li>

        </ol>
    </div>

    <script>
        function chooseItem(item) {
            localStorage.setItem('item', JSON.stringify(item));

            let itemSplit = item.split('~');

            let chooseitem = itemSplit[0];
            let price = itemSplit[1];

            let hargaDisplay = document.querySelectorAll('.harga-display');
            hargaDisplay.forEach(function(el) {
                el.innerHTML = 'Rp. ' + new Intl.NumberFormat('id-ID').format(price);
            });
        }

        let game_id = "{{ $game['id'] }}";
        let csrfToken = "{{ csrf_token() }}";

        // payment method
        function choosePaymentMethod(method) {
            localStorage.setItem('payment_method', JSON.stringify(method));

            let paymentMethod = document.getElementById('payment_method');
            paymentMethod.innerHTML = method;

            let itemSplit = JSON.parse(localStorage.getItem('item')).split('~');
            let item = document.getElementById('item');

            let chooseitem = itemSplit[0];
            let price = itemSplit[1];

            item.innerHTML = chooseitem + ' (Rp. ' + new Intl.NumberFormat('id-ID').format(price) + ')';
        }

        function sendData() {
            let item = JSON.parse(localStorage.getItem('item'));
            let payment_method = JSON.parse(localStorage.getItem('payment_method'));

            if (item == null || payment_method == null) {
                alert('Mohon isi data dengan lengkap');
                return;
            }

            let data = {
                item: item,
                payment_method: payment_method,
                _token: csrfToken,
            };

            $.ajax({
                url: '/buy-account/' + game_id,
                type: 'POST',
                contentType: 'application/json',
                data: JSON.stringify(data),
                success: function(data) {
                    console.log('Success:', data);
                    localStorage.removeItem('item');
                    localStorage.removeItem('payment_method');
                },
                error: function(error) {
                    console.error('Error:', error);
                }
            });
        }
    </script>
</x-app-layout>
