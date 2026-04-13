@section('title', 'Withdrawal Wallet')
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
                            <h1 class="text-[2.5rem] md:text-[4rem] font-bold">Withdrawal Wallet</h1>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>

        <section aria-label="section" class="py-12">
            <div class="container px-4 mx-auto">
                <div class="max-w-3xl mx-auto mb-8 text-center">
                    <h3 class="text-3xl font-bold text-indigo-600">Choose where withdrawals should be sent</h3>
                    <p class="mt-3 text-gray-600">
                        Add the destination wallet address for payouts. This can be the same as your connected wallet or
                        a different address you control.
                    </p>
                </div>

                <div class="grid max-w-5xl gap-6 mx-auto md:grid-cols-2">
                    <div class="p-6 bg-white rounded-lg shadow-md">
                        <h4 class="mb-4 text-xl font-semibold text-gray-900">Wallet checklist</h4>

                        <div class="space-y-4 text-sm text-gray-700">
                            <div class="p-4 rounded-lg {{ $wallet->isConnected() ? 'bg-green-50 border border-green-200' : 'bg-amber-50 border border-amber-200' }}">
                                <p class="font-semibold">Connected wallet</p>
                                <p class="mt-1">
                                    {{ $wallet->isConnected() ? ($wallet->wallet_provider . ' - ' . $wallet->wallet_address) : 'Connect your marketplace wallet first.' }}
                                </p>
                            </div>

                            <div class="p-4 rounded-lg {{ $wallet->hasWithdrawalWallet() ? 'bg-green-50 border border-green-200' : 'bg-slate-50 border border-slate-200' }}">
                                <p class="font-semibold">Withdrawal destination</p>
                                <p class="mt-1 break-all">
                                    {{ $wallet->withdrawal_wallet_address ?: 'No withdrawal wallet added yet.' }}
                                </p>
                            </div>
                        </div>

                        @if (!$wallet->isConnected())
                            <div class="p-4 mt-6 border border-amber-200 rounded-lg bg-amber-50">
                                <p class="font-semibold text-amber-700">Connect your wallet next</p>
                                <p class="mt-2 text-sm text-amber-700">
                                    You can save your withdrawal destination now, but withdrawals stay locked until your
                                    wallet is connected.
                                </p>
                                <a href="{{ route('connect.wallet') }}" class="inline-block mt-3 font-semibold text-indigo-600">
                                    Connect wallet
                                </a>
                            </div>
                        @endif
                    </div>

                    <div class="p-6 bg-white rounded-lg shadow-md">
                        <h4 class="mb-4 text-xl font-semibold text-gray-900">Save withdrawal wallet</h4>

                        <form action="{{ route('wallet.address.store') }}" method="POST" class="space-y-4">
                            @csrf

                            <div>
                                <label for="withdrawal_wallet_address" class="block mb-2 font-semibold text-gray-700">
                                    Withdrawal wallet address
                                </label>
                                <input
                                    type="text"
                                    id="withdrawal_wallet_address"
                                    name="withdrawal_wallet_address"
                                    value="{{ old('withdrawal_wallet_address', $wallet->withdrawal_wallet_address) }}"
                                    placeholder="0x..."
                                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-600">
                                @error('withdrawal_wallet_address')
                                    <p class="mt-2 text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <button type="submit"
                                class="w-full py-3 font-semibold text-white transition bg-indigo-600 rounded-lg hover:bg-indigo-700">
                                {{ $wallet->hasWithdrawalWallet() ? 'Update Withdrawal Wallet' : 'Save Withdrawal Wallet' }}
                            </button>
                        </form>

                        @if ($wallet->isConnected() && $wallet->hasWithdrawalWallet())
                            <div class="pt-4 mt-6 border-t border-gray-200">
                                <a href="{{ route('request.withdrawal') }}" class="font-semibold text-indigo-600">
                                    Continue to withdrawal request
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-home-layout>
