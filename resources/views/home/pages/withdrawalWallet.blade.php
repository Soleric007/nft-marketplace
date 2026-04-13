@section('title', 'Withdrawal Wallet')
<x-home-layout>
    @push('styles')
        @include('home.partials.wallet-flow-styles')
    @endpush

    <div class="no-bottom no-top" id="content">
        <section class="wallet-flow-page">
            <div class="wallet-flow-shell">
                <div class="wallet-flow-hero">
                    <span class="wallet-flow-eyebrow">Step 2</span>
                    <h1 class="wallet-flow-title">Choose where approved withdrawals should be sent.</h1>
                    <p class="wallet-flow-text">
                        Save the payout destination for your withdrawals. This can match your connected wallet or be a
                        different wallet address that you control.
                    </p>
                </div>

                <div class="wallet-flow-grid two-col">
                    <div class="wallet-flow-card">
                        <h2 class="wallet-flow-card-title">Wallet checklist</h2>

                        <div class="wallet-flow-stat-list">
                            <div class="wallet-flow-stat {{ $wallet->isConnected() ? 'success' : 'warning' }}">
                                <span class="wallet-flow-stat-title">Marketplace wallet</span>
                                <p class="wallet-flow-stat-value">
                                    {{ $wallet->isConnected() ? ($wallet->wallet_provider . ' - ' . $wallet->wallet_address) : 'Connect your marketplace wallet first.' }}
                                </p>
                            </div>

                            <div class="wallet-flow-stat {{ $wallet->hasWithdrawalWallet() ? 'success' : '' }}">
                                <span class="wallet-flow-stat-title">Withdrawal destination</span>
                                <p class="wallet-flow-stat-value">
                                    {{ $wallet->withdrawal_wallet_address ?: 'No payout wallet has been saved yet.' }}
                                </p>
                            </div>
                        </div>

                        @if (!$wallet->isConnected())
                            <div class="wallet-flow-divider"></div>

                            <div class="wallet-flow-note warning">
                                <strong>Connect your wallet next</strong>
                                You can save the payout destination now, but withdrawals stay locked until the
                                marketplace wallet is connected.
                            </div>
                        @endif
                    </div>

                    <div class="wallet-flow-card">
                        <h2 class="wallet-flow-card-title">Save payout wallet</h2>

                        <form action="{{ route('wallet.address.store') }}" method="POST">
                            @csrf

                            <label for="withdrawal_wallet_address" class="wallet-flow-label">Withdrawal wallet address</label>
                            <input
                                type="text"
                                id="withdrawal_wallet_address"
                                name="withdrawal_wallet_address"
                                value="{{ old('withdrawal_wallet_address', $wallet->withdrawal_wallet_address) }}"
                                placeholder="0x..."
                                class="wallet-flow-field">
                            @error('withdrawal_wallet_address')
                                <p class="wallet-flow-error">{{ $message }}</p>
                            @enderror

                            <div style="height: 22px;"></div>

                            <button type="submit" class="wallet-flow-button" style="width: 100%;">
                                {{ $wallet->hasWithdrawalWallet() ? 'Update Withdrawal Wallet' : 'Save Withdrawal Wallet' }}
                            </button>
                        </form>

                        <div class="wallet-flow-divider"></div>

                        <div class="wallet-flow-actions">
                            @if (!$wallet->isConnected())
                                <a href="{{ route('connect.wallet') }}" class="wallet-flow-link">Connect marketplace wallet</a>
                            @endif

                            @if ($wallet->isConnected() && $wallet->hasWithdrawalWallet())
                                <a href="{{ route('request.withdrawal') }}" class="wallet-flow-link">Continue to withdrawal request</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-home-layout>
