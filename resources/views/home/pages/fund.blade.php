@section('title', 'Fund Wallet')
<x-home-layout>
    @vite('resources/css/app.css')

    @vite('resources/css/app.css')
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>

        <!-- section begin -->
        <section id="subheader" class="text-light"
            data-bgimage="url(/template/assets/images/background/subheader.jpg) top">
            <div class="center-y relative text-center">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12 text-center">
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
            <div class="container mx-auto px-4">
                <div class="max-w-xl mx-auto bg-white shadow-lg rounded-lg p-6">
                    <!-- Heading -->
                    <div class="text-center mb-6">
                        <h3 class="text-3xl font-bold text-indigo-600">Deposit ETH</h3>
                        <p class="text-gray-600 mt-2">Send only Ethereum to the wallet address below</p>
                    </div>

                    <!-- Wallet Address -->
                    <div class="bg-gray-100 p-4 rounded-lg mb-4 text-center">
                        <p class="text-gray-700 font-semibold">Make a payment to the following wallet address:</p>
                        <input type="text" value="0x205A8743d22c7FCEd4b54D697c3159a1eDCa58dB" readonly
                            class="w-full mt-2 p-3 text-center text-indigo-600 font-semibold border border-indigo-300 rounded-lg bg-indigo-100">
                    </div>

                    <!-- QR Code / Image -->
                    <div class="flex justify-center mb-4">
                        <img src="https://xquisitearts.com/admin/edit-profile/uploads/67802e656cadb.jpeg" alt="QR Code"
                            class="w-40 h-40 object-cover rounded-lg shadow-md">
                    </div>

                    <!-- Form -->
                    <form action="{{ route('wallet.fund.store') }}" method="POST" enctype="multipart/form-data"
                        class="space-y-4">
                        @csrf

                        <!-- Amount -->
                        <input type="number" name="amount" placeholder="Amount" required
                            class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-600">

                        <!-- Proof of Payment Upload -->
                        <label for="proof_of_payment" class="block text-gray-700 font-semibold">Proof of Payment</label>
                        <input type="file" name="proof_of_payment" id="fileInput" accept="image/*" required
                            class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-600">
                        @error('proof_of_payment')
                            <p class="text-danger my-2">{{ $message }}</p>
                        @enderror
                        <!-- Submit Button -->
                        <button type="submit"
                            class="w-full bg-indigo-600 text-white font-semibold py-3 rounded-lg cursor-pointer transition hover:bg-indigo-700">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </section>



    </div>
</x-home-layout>
