@section('title', 'Wallet Setup')
<x-home-layout>
    @php
        $providers = [
            ['name' => 'MetaMask', 'image' => '/template/assets/images/wallet/1.png', 'label' => 'Most Popular'],
            ['name' => 'Binance Wallet', 'image' => '/template/assets/images/wallet/binanceapp.png', 'label' => null],
            ['name' => 'Trust Wallet', 'image' => '/template/assets/images/wallet/trust.png', 'label' => null],
            ['name' => 'Bitget Wallet', 'image' => '/template/assets/images/wallet/bitget.png', 'label' => null],
            ['name' => 'Coinbase Wallet', 'image' => '/template/assets/images/wallet/5.png', 'label' => null],
            ['name' => 'Phantom', 'image' => '/template/assets/images/wallet/phantom.png', 'label' => null],
        ];
    @endphp

    <div class="no-bottom no-top" id="content">
        <div id="top"></div>

        <section id="subheader" class="text-light"
            data-bgimage="url(/template/assets/images/background/subheader.jpg) top">
            <div class="relative text-center center-y">
                <div class="container">
                    <div class="row">
                        <div class="text-center col-md-12">
                            <h1 class="text-[2.5rem] md:text-[4rem] font-bold">Wallet Setup</h1>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>

        <section aria-label="section" class="py-12">
            <div class="container">
                <div class="grid gap-4 mb-8 md:grid-cols-3">
                    <div class="p-6 bg-white rounded-lg shadow-md">
                        <p class="text-sm font-semibold text-gray-500">Step 1</p>
                        <h4 class="mt-2 text-xl font-semibold">Connect wallet</h4>
                        <p class="mt-2 text-sm text-gray-600">
                            {{ $wallet->isConnected() ? 'Connected to ' . $wallet->wallet_provider : 'Choose a provider and save your public wallet address.' }}
                        </p>
                        <a href="{{ route('connect.wallet') }}" class="inline-block mt-4 font-semibold text-indigo-600">
                            {{ $wallet->isConnected() ? 'Manage connected wallet' : 'Connect now' }}
                        </a>
                    </div>

                    <div class="p-6 bg-white rounded-lg shadow-md">
                        <p class="text-sm font-semibold text-gray-500">Step 2</p>
                        <h4 class="mt-2 text-xl font-semibold">Save payout wallet</h4>
                        <p class="mt-2 text-sm text-gray-600">
                            {{ $wallet->hasWithdrawalWallet() ? 'Current destination: ' . $wallet->masked_withdrawal_wallet_address : 'Add the wallet address where approved withdrawals should be sent.' }}
                        </p>
                        <a href="{{ route('withdrawal.wallet') }}" class="inline-block mt-4 font-semibold text-indigo-600">
                            {{ $wallet->hasWithdrawalWallet() ? 'Update payout wallet' : 'Add payout wallet' }}
                        </a>
                    </div>

                    <div class="p-6 bg-white rounded-lg shadow-md">
                        <p class="text-sm font-semibold text-gray-500">Step 3</p>
                        <h4 class="mt-2 text-xl font-semibold">Request withdrawal</h4>
                        <p class="mt-2 text-sm text-gray-600">
                            {{ $wallet->isConnected() && $wallet->hasWithdrawalWallet() ? 'Your withdrawal setup is complete.' : 'Withdrawals unlock after steps 1 and 2 are completed.' }}
                        </p>
                        <a href="{{ $wallet->isConnected() && $wallet->hasWithdrawalWallet() ? route('request.withdrawal') : route('connect.wallet') }}"
                            class="inline-block mt-4 font-semibold text-indigo-600">
                            {{ $wallet->isConnected() && $wallet->hasWithdrawalWallet() ? 'Open withdrawal form' : 'Finish setup' }}
                        </a>
                    </div>
                </div>

                <div class="mb-6 text-center">
                    <h3 class="text-3xl font-bold text-indigo-600">Choose your wallet provider</h3>
                    <p class="mt-2 text-gray-600">
                        Pick a provider below to prefill the wallet connection page. We never ask for your recovery
                        phrase or private key.
                    </p>
                </div>

                <div class="row">
                    @foreach ($providers as $provider)
                        <div class="col-lg-3 mb30">
                            <a class="box-url" href="{{ route('connect.wallet', ['provider' => $provider['name']]) }}">
                                @if ($provider['label'])
                                    <span class="box-url-label">{{ $provider['label'] }}</span>
                                @endif
                                <img src="{{ $provider['image'] }}" alt="{{ $provider['name'] }}" class="mb20">
                                <h4>{{ $provider['name'] }}</h4>
                                <p>
                                    {{ $wallet->wallet_provider === $provider['name'] && $wallet->isConnected() ? 'Currently connected on your account.' : 'Use this provider for your marketplace wallet connection.' }}
                                </p>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
</x-home-layout>
