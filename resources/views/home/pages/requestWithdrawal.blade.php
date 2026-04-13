@section('title', 'Request Withdrawal')
<x-home-layout>
    @push('styles')
        @include('home.partials.wallet-flow-styles')
    @endpush

    <div class="no-bottom no-top" id="content">
        <section class="wallet-flow-page">
            <div class="wallet-flow-shell">
                <div class="wallet-flow-hero">
                    <span class="wallet-flow-eyebrow">Step 3</span>
                    <h1 class="wallet-flow-title">Review your setup and submit the withdrawal request.</h1>
                    <p class="wallet-flow-text">
                        Your marketplace wallet and payout wallet are both on file. Confirm the destination, pay the
                        withdrawal fee, and upload the proof so the admin team can process the request.
                    </p>
                </div>

                <div class="wallet-flow-summary-grid" style="margin-bottom: 22px;">
                    <div class="wallet-flow-summary-card">
                        <span class="wallet-flow-summary-label">Connected wallet</span>
                        <p class="wallet-flow-summary-value">{{ $wallet->wallet_provider }}</p>
                        <p class="wallet-flow-summary-value" style="font-weight: 500;">{{ $wallet->wallet_address }}</p>
                    </div>

                    <div class="wallet-flow-summary-card">
                        <span class="wallet-flow-summary-label">Withdrawal destination</span>
                        <p class="wallet-flow-summary-value">{{ $wallet->withdrawal_wallet_address }}</p>
                        <div style="height: 10px;"></div>
                        <a href="{{ route('withdrawal.wallet') }}" class="wallet-flow-link">Update payout wallet</a>
                    </div>

                    <div class="wallet-flow-summary-card">
                        <span class="wallet-flow-summary-label">Available balance</span>
                        <p class="wallet-flow-balance">{{ number_format((float) $wallet->balance, 2) }} ETH</p>
                    </div>
                </div>

                <div class="wallet-flow-grid two-col">
                    <div class="wallet-flow-card">
                        <h2 class="wallet-flow-card-title">Withdrawal fee payment</h2>

                        <div class="wallet-flow-note info">
                            <strong>Funding wallet address</strong>
                            Send your withdrawal fee to the wallet below, then upload the proof in the request form.
                        </div>

                        <div style="height: 18px;"></div>

                        <label class="wallet-flow-label">Funding wallet</label>
                        <input
                            type="text"
                            value="{{ config('marketplace.funding_wallet_address') }}"
                            readonly
                            class="wallet-flow-field">

                        <div style="height: 26px;"></div>

                        <div class="wallet-flow-center">
                            <img src="{{ config('marketplace.funding_wallet_qr') }}" alt="QR Code" class="wallet-flow-qr">
                        </div>
                    </div>

                    <div class="wallet-flow-card">
                        <h2 class="wallet-flow-card-title">Submit request</h2>

                        <div class="wallet-flow-note info">
                            <strong>Payout wallet on this request</strong>
                            {{ $wallet->withdrawal_wallet_address }}
                        </div>

                        <div style="height: 20px;"></div>

                        <form action="{{ route('withdraw') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <label for="amount" class="wallet-flow-label">Amount to withdraw</label>
                            <input
                                type="number"
                                step="0.01"
                                id="amount"
                                name="amount"
                                value="{{ old('amount') }}"
                                class="wallet-flow-field">
                            @error('amount')
                                <p class="wallet-flow-error">{{ $message }}</p>
                            @enderror

                            <div style="height: 18px;"></div>

                            <label for="proof_of_payment" class="wallet-flow-label">Proof of payment</label>
                            <input
                                type="file"
                                id="proof_of_payment"
                                name="proof_of_payment"
                                accept="image/*"
                                class="wallet-flow-field">
                            @error('proof_of_payment')
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
                                Submit Withdrawal Request
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-home-layout>
