@section('title', 'Wallet Setup')
<x-home-layout>
    @push('styles')
        @include('home.partials.wallet-flow-styles')
    @endpush

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
        <section class="wallet-flow-page">
            <div class="wallet-flow-shell">
                <div class="wallet-flow-hero">
                    <span class="wallet-flow-eyebrow">Wallet Flow</span>
                    <h1 class="wallet-flow-title">Set up your wallet once, then withdraw with confidence.</h1>
                    <p class="wallet-flow-text">
                        The marketplace withdrawal flow now follows one clear path: connect your marketplace wallet,
                        save the payout destination, and open the withdrawal form only when both steps are complete.
                    </p>

                    <div class="wallet-flow-actions">
                        <a href="{{ route('connect.wallet') }}" class="wallet-flow-button">
                            {{ $wallet->isConnected() ? 'Manage Connected Wallet' : 'Connect Wallet' }}
                        </a>
                        <a href="{{ route('withdrawal.wallet') }}" class="wallet-flow-button-secondary">
                            {{ $wallet->hasWithdrawalWallet() ? 'Update Payout Wallet' : 'Add Payout Wallet' }}
                        </a>
                        @if ($wallet->isConnected() && $wallet->hasWithdrawalWallet())
                            <a href="{{ route('request.withdrawal') }}" class="wallet-flow-link">Open withdrawal request</a>
                        @endif
                    </div>
                </div>

                <div class="wallet-flow-step-grid">
                    <div class="wallet-flow-card">
                        <span class="wallet-flow-step-number">1</span>
                        <h2 class="wallet-flow-step-title">Connect marketplace wallet</h2>
                        <p class="wallet-flow-step-text">
                            {{ $wallet->isConnected() ? 'Connected to ' . $wallet->wallet_provider . '.' : 'Choose a provider and save the public address you use on the marketplace.' }}
                        </p>
                    </div>

                    <div class="wallet-flow-card">
                        <span class="wallet-flow-step-number">2</span>
                        <h2 class="wallet-flow-step-title">Choose payout destination</h2>
                        <p class="wallet-flow-step-text">
                            {{ $wallet->hasWithdrawalWallet() ? 'Current payout wallet: ' . $wallet->masked_withdrawal_wallet_address : 'Add the address where approved withdrawals should be sent.' }}
                        </p>
                    </div>

                    <div class="wallet-flow-card">
                        <span class="wallet-flow-step-number">3</span>
                        <h2 class="wallet-flow-step-title">Request a withdrawal</h2>
                        <p class="wallet-flow-step-text">
                            {{ $wallet->isConnected() && $wallet->hasWithdrawalWallet() ? 'Your setup is complete and the withdrawal form is now available.' : 'The withdrawal form unlocks only after steps 1 and 2 are complete.' }}
                        </p>
                    </div>
                </div>

                <div class="wallet-flow-hero">
                    <span class="wallet-flow-eyebrow">Providers</span>
                    <h2 class="wallet-flow-title">Choose a wallet provider</h2>
                    <p class="wallet-flow-text">
                        These shortcuts prefill the connection page so the flow stays quick and consistent. We only
                        request your public wallet address, never a private key or 12-word phrase.
                    </p>
                </div>

                <div class="wallet-flow-provider-grid">
                    @foreach ($providers as $provider)
                        @php
                            $isActive = $wallet->wallet_provider === $provider['name'] && $wallet->isConnected();
                        @endphp

                        <a
                            href="{{ route('connect.wallet', ['provider' => $provider['name']]) }}"
                            class="wallet-flow-provider-card{{ $isActive ? ' active' : '' }}">
                            @if ($provider['label'])
                                <span class="wallet-flow-badge">{{ $provider['label'] }}</span>
                            @elseif ($isActive)
                                <span class="wallet-flow-badge">Connected</span>
                            @endif

                            <img src="{{ $provider['image'] }}" alt="{{ $provider['name'] }}">
                            <h3 class="wallet-flow-provider-title">{{ $provider['name'] }}</h3>
                            <p class="wallet-flow-provider-text">
                                {{ $isActive ? 'This provider is currently linked to your account.' : 'Use this provider to continue the marketplace wallet setup flow.' }}
                            </p>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
</x-home-layout>
