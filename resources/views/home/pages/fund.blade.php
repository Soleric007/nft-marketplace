@section('title', 'Fund Wallet')
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
                            <h1 class='text-[2.5rem] md:text-[4rem] font-bold'>Fund Wallet</h1>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->

        <!-- section begin -->
        <section aria-label="section" class="py-12">
            <div class="container px-4 mx-auto">
                <div class="max-w-xl p-6 mx-auto bg-white rounded-lg shadow-lg">
                    <!-- Heading -->
                    <div class="mb-6 text-center">
                        <h3 class="text-3xl font-bold text-indigo-600">Deposit ETH</h3>
                        <p class="mt-2 text-gray-600">Send only Ethereum to the wallet address below</p>
                    </div>

                    <!-- Wallet Address -->
                    <div class="p-4 mb-4 text-center bg-gray-100 rounded-lg">
                        <p class="font-semibold text-gray-700">Make a payment to the following wallet address:</p>
                        <input type="text" value="0x205A8743d22c7FCEd4b54D697c3159a1eDCa58dB" readonly
                            class="w-full p-3 mt-2 font-semibold text-center text-indigo-600 bg-indigo-100 border border-indigo-300 rounded-lg">
                    </div>

                    <!-- QR Code / Image -->
                    <div class="flex justify-center mb-4">
                        <img src="https://xquisitearts.com/admin/edit-profile/uploads/67802e656cadb.jpeg" alt="QR Code"
                            class="object-cover w-40 h-40 rounded-lg shadow-md">
                    </div>

                    <!-- Form -->
                    <form action="{{ route('wallet.fund.store') }}" method="POST" enctype="multipart/form-data"
                        class="space-y-4">
                        @csrf

                        <!-- Amount -->
                        <input type="number" name="amount" placeholder="Amount" required
                            class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-600">

                        <!-- Proof of Payment Upload -->
                        <label for="proof_of_payment" class="block font-semibold text-gray-700">Proof of Payment</label>
                        <input type="file" name="proof_of_payment" id="fileInput" accept="image/*" required
                            class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-600">
                        @error('proof_of_payment')
                            <p class="my-2 text-danger">{{ $message }}</p>
                        @enderror
                        <!-- Submit Button -->
                        <button type="submit"
                            class="w-full py-3 font-semibold text-white transition bg-indigo-600 rounded-lg cursor-pointer hover:bg-indigo-700">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </section>



    </div>
</x-home-layout>
