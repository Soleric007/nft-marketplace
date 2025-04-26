@section('title', 'Connect WIthdrawal wallet')
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
                            <h1 class='text-[2.5rem] md:text-[4rem] font-bold'>Withdrawal Wallet</h1>
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
                        <h3 class="text-3xl font-bold text-indigo-600">Withdrawal - Wallet</h3>
                        <p class="mt-2 text-gray-600">
                            Enter your wallet's <b class="text-indigo-600">Address</b> to connect your wallet for
                            easy withdrawal.
                        </p>
                    </div>
                </div>

                <div class="max-w-xl p-6 mx-auto bg-white rounded-lg shadow-md">
                    <div class="mb-4">
                        <p class="text-sm text-gray-700">
                            Here are your wallet address: <br>
                            <b
                                class="text-indigo-600 wallet-address-container">{{Auth::user()->wallet->wallet_address ? Auth::user()->wallet->wallet_address : 'Not set. Please provide your withdrawal wallet address' }}</b>
                        </p>
                    </div>

                    <form action="{{ route('wallet.address.store') }}" method="POST" class="space-y-4">
                        @csrf
                        <label for="wphrase" class="block font-semibold text-gray-700">
                            Enter your wallet address to add a new wallet or to change an existing one
                        </label>
                        <hr class="border-gray-300">

                        <input type="text" id="wphrase" name="wallet_address"
                            class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-600">
                        @error('wallet_address')
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
