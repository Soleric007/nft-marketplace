@section('title', 'Connect Wallet')
<x-home-layout>
    @vite('resources/css/app.css')

    @php
        $providers = ['MetaMask', 'Binance Wallet', 'Trust Wallet', 'Bitget Wallet', 'Coinbase Wallet', 'Phantom'];
        $currentProvider = old('wallet_provider', $selectedProvider ?: $wallet->wallet_provider);
    @endphp

    <div class="no-bottom no-top" id="content">
        <div id="top"></div>

        <section id="subheader" class="text-light"
            data-bgimage="url(/template/assets/images/background/subheader.jpg) top">
            <div class="relative text-center center-y">
                <div class="container">
                    <div class="row">
                        <div class="text-center col-md-12">
                            <h1 class="text-[2.5rem] md:text-[4rem] font-bold">Connect Wallet</h1>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>

        <section aria-label="section" class="py-12">
            <div class="container px-4 mx-auto">
                <div class="max-w-3xl mx-auto mb-8 text-center">
                    <h3 class="text-3xl font-bold text-indigo-600">Secure wallet setup</h3>
                    <p class="mt-3 text-gray-600">
                        Connect the wallet you use on the marketplace before you request any withdrawal.
                        We only store your public wallet address and provider.
                    </p>
                </div>

                <div class="grid max-w-5xl gap-6 mx-auto md:grid-cols-2">
                    <div class="p-6 bg-white rounded-lg shadow-md">
                        <h4 class="mb-4 text-xl font-semibold text-gray-900">Connection status</h4>

                        <div class="space-y-3 text-sm text-gray-700">
                            <div>
                                <p class="font-semibold">Status</p>
                                <p class="{{ $wallet->isConnected() ? 'text-green-600' : 'text-amber-600' }}">
                                    {{ $wallet->isConnected() ? 'Connected and ready for withdrawals' : 'Not connected yet' }}
                                </p>
                            </div>
                            <div>
                                <p class="font-semibold">Provider</p>
                                <p>{{ $wallet->wallet_provider ?: 'Not selected yet' }}</p>
                            </div>
                            <div>
                                <p class="font-semibold">Wallet address</p>
                                <p class="break-all">{{ $wallet->wallet_address ?: 'No wallet address saved yet.' }}</p>
                            </div>
                            <div>
                                <p class="font-semibold">Connected on</p>
                                <p>{{ $wallet->connected_at?->format('d M Y, h:i A') ?: 'Waiting for connection' }}</p>
                            </div>
                        </div>

                        
                    </div>

                    <div class="p-6 bg-white rounded-lg shadow-md">
                        <h4 class="mb-4 text-xl font-semibold text-gray-900">Connect a wallet</h4>

                        <form action="{{ route('wallet.connect.store') }}" method="POST" class="space-y-4">
                            @csrf

                            <div>
                                <label for="wallet_provider" class="block mb-2 font-semibold text-gray-700">Wallet provider</label>
                                <select id="wallet_provider" name="wallet_provider"
                                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-600">
                                    <option value="">Select a wallet provider</option>
                                    @foreach ($providers as $provider)
                                        <option value="{{ $provider }}" @selected($currentProvider === $provider)>{{ $provider }}</option>
                                    @endforeach
                                </select>
                                @error('wallet_provider')
                                    <p class="mt-2 text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="wallet_address" class="block mb-2 font-semibold text-gray-700">
                                    Public wallet address
                                </label>
                                <input
                                    type="text"
                                    id="wallet_address"
                                    name="wallet_address"
                                    value="{{ old('wallet_address', $wallet->wallet_address) }}"
                                    placeholder="0x..."
                                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-600">
                                @error('wallet_address')
                                    <p class="mt-2 text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <button type="submit"
                                class="w-full py-3 font-semibold text-white transition bg-indigo-600 rounded-lg hover:bg-indigo-700">
                                {{ $wallet->isConnected() ? 'Update Connected Wallet' : 'Connect Wallet' }}
                            </button>
                        </form>

                        <div class="pt-4 mt-6 border-t border-gray-200">
                            <a href="{{ route('withdrawal.wallet') }}" class="font-semibold text-indigo-600">
                                Continue to withdrawal wallet setup
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-home-layout>
