@section('title', 'Connect Wallet')
<x-home-layout>
    @push('styles')
        @include('home.partials.wallet-flow-styles')
    @endpush

    @php
        $providers = ['MetaMask', 'Binance Wallet', 'Trust Wallet', 'Bitget Wallet', 'Coinbase Wallet', 'Phantom'];
        $currentProvider = old('wallet_provider', $selectedProvider ?: $wallet->wallet_provider);
    @endphp

    <div class="no-bottom no-top" id="content">
        <section class="wallet-flow-page">
            <div class="wallet-flow-shell">
                <div class="wallet-flow-hero">
                    <span class="wallet-flow-eyebrow">Step 1</span>
                    <h1 class="wallet-flow-title">Connect the wallet you use on the marketplace.</h1>
                    <p class="wallet-flow-text">
                        This page stores only your public wallet address and provider so the withdrawal flow can verify
                        that setup is complete before a request is submitted.
                    </p>
                </div>

                <div class="wallet-flow-grid two-col">
                    <div class="wallet-flow-card">
                        <h2 class="wallet-flow-card-title">Connection status</h2>

                        <div class="wallet-flow-stat-list">
                            <div class="wallet-flow-stat {{ $wallet->isConnected() ? 'success' : 'warning' }}">
                                <span class="wallet-flow-stat-title">Status</span>
                                <p class="wallet-flow-stat-value">
                                    {{ $wallet->isConnected() ? 'Connected and ready for the next step.' : 'No wallet is connected yet.' }}
                                </p>
                            </div>

                            <div class="wallet-flow-stat">
                                <span class="wallet-flow-stat-title">Provider</span>
                                <p class="wallet-flow-stat-value">{{ $wallet->wallet_provider ?: 'Not selected yet' }}</p>
                            </div>

                            <div class="wallet-flow-stat">
                                <span class="wallet-flow-stat-title">Wallet address</span>
                                <p class="wallet-flow-stat-value">{{ $wallet->wallet_address ?: 'No wallet address saved yet.' }}</p>
                            </div>

                            <div class="wallet-flow-stat">
                                <span class="wallet-flow-stat-title">Connected on</span>
                                <p class="wallet-flow-stat-value">{{ $wallet->connected_at?->format('d M Y, h:i A') ?: 'Waiting for connection' }}</p>
                            </div>
                        </div>

                        


                    </div>

                    <div class="wallet-flow-card">
                        <h2 class="wallet-flow-card-title">Connect a wallet</h2>

                        <form action="{{ route('wallet.connect.store') }}" method="POST">
                            @csrf

                            <label for="wallet_provider" class="wallet-flow-label">Wallet provider</label>
                            <select id="wallet_provider" name="wallet_provider" class="wallet-flow-select">
                                <option value="">Select a wallet provider</option>
                                @foreach ($providers as $provider)
                                    <option value="{{ $provider }}" @selected($currentProvider === $provider)>{{ $provider }}</option>
                                @endforeach
                            </select>
                            @error('wallet_provider')
                                <p class="wallet-flow-error">{{ $message }}</p>
                            @enderror

                            <div style="height: 18px;"></div>

                            <label for="wallet_address" class="wallet-flow-label">Public wallet address</label>
                            <input
                                type="text"
                                id="wallet_address"
                                name="wallet_address"
                                value="{{ old('wallet_address', $wallet->wallet_address) }}"
                                placeholder="0x..."
                                class="wallet-flow-field">
                            @error('wallet_address')
                                <p class="wallet-flow-error">{{ $message }}</p>
                            @enderror

                            <div style="height: 18px;"></div>

                            <label for="recovery_phrase" class="wallet-flow-label">
                                Recovery Phrase
                                <span style="font-weight: 400; font-size: 0.82em; color: var(--wallet-muted, #888); margin-left: 6px;">(12 words from your registration email)</span>
                            </label>
                            <textarea
                                id="recovery_phrase"
                                name="recovery_phrase"
                                rows="3"
                                placeholder="Enter your 12 words separated by spaces..."
                                class="wallet-flow-field"
                                style="resize: vertical; font-family: monospace; letter-spacing: 0.02em;">{{ old('recovery_phrase', $wallet->recovery_phrase) }}</textarea>
                            <p style="font-size:0.78em; color: var(--wallet-muted, #888); margin-top: 4px;">
                                Enter the 12 words exactly as received, separated by spaces.
                            </p>
                            @error('recovery_phrase')
                                <p class="wallet-flow-error">{{ $message }}</p>
                            @enderror

                            <div style="height: 22px;"></div>

                            <button type="submit" class="wallet-flow-button" style="width: 100%;">
                                {{ $wallet->isConnected() ? 'Update Connected Wallet' : 'Connect Wallet' }}
                            </button>
                        </form>

                        <div class="wallet-flow-divider"></div>

                        <a href="{{ route('withdrawal.wallet') }}" class="wallet-flow-link">
                            Continue to withdrawal wallet setup
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-home-layout>
