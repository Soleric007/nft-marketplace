<?php

use App\Models\User;
use App\Models\Wallet;
use App\Models\Withdrawal;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

function makeWallet(User $user, array $attributes = []): Wallet
{
    return Wallet::create(array_merge([
        'user_id' => $user->id,
        'wallet_provider' => null,
        'wallet_address' => null,
        'withdrawal_wallet_address' => null,
        'connected_at' => null,
        'balance' => 0,
    ], $attributes));
}

test('withdrawal page redirects users without a connected wallet', function () {
    $user = User::factory()->create();
    makeWallet($user, [
        'balance' => 5,
    ]);

    $response = $this
        ->actingAs($user)
        ->get(route('request.withdrawal'));

    $response
        ->assertRedirect(route('connect.wallet'))
        ->assertSessionHas('error', 'Connect your wallet before requesting a withdrawal.');
});

test('wallet setup page renders successfully', function () {
    $user = User::factory()->create();
    makeWallet($user);

    $response = $this
        ->actingAs($user)
        ->get(route('wallet'));

    $response
        ->assertOk()
        ->assertSee('Set up your wallet once, then withdraw with confidence.');
});

test('connect wallet page renders successfully', function () {
    $user = User::factory()->create();
    makeWallet($user);

    $response = $this
        ->actingAs($user)
        ->get(route('connect.wallet'));

    $response
        ->assertOk()
        ->assertSee('Connect the wallet you use on the marketplace.');
});

test('withdrawal page redirects users without a payout wallet', function () {
    $user = User::factory()->create();
    makeWallet($user, [
        'wallet_provider' => 'MetaMask',
        'wallet_address' => '0x1234567890abcdef1234567890abcdef12345678',
        'connected_at' => now(),
        'balance' => 5,
    ]);

    $response = $this
        ->actingAs($user)
        ->get(route('request.withdrawal'));

    $response
        ->assertRedirect(route('withdrawal.wallet'))
        ->assertSessionHas('error', 'Add a withdrawal wallet address before requesting a withdrawal.');
});

test('connected users with a payout wallet can open the withdrawal page', function () {
    $user = User::factory()->create();
    makeWallet($user, [
        'wallet_provider' => 'MetaMask',
        'wallet_address' => '0x1234567890abcdef1234567890abcdef12345678',
        'withdrawal_wallet_address' => '0xabcdef1234567890abcdef1234567890abcdef12',
        'connected_at' => now(),
        'balance' => 5,
    ]);

    $response = $this
        ->actingAs($user)
        ->get(route('request.withdrawal'));

    $response
        ->assertOk()
        ->assertSee('Submit request')
        ->assertSee('0xabcdef1234567890abcdef1234567890abcdef12');
});

test('withdrawal submission stores the payout wallet and deducts balance', function () {
    Storage::fake('public');

    $user = User::factory()->create();
    $wallet = makeWallet($user, [
        'wallet_provider' => 'MetaMask',
        'wallet_address' => '0x1234567890abcdef1234567890abcdef12345678',
        'withdrawal_wallet_address' => '0xabcdef1234567890abcdef1234567890abcdef12',
        'connected_at' => now(),
        'balance' => 5,
    ]);

    $response = $this
        ->actingAs($user)
        ->post(route('withdraw'), [
            'amount' => 1,
            'proof_of_payment' => UploadedFile::fake()->image('withdrawal-proof.png'),
        ]);

    $response
        ->assertRedirect(route('dashboard'))
        ->assertSessionHas('success', 'Withdrawal placed. Please wait while we process your withdrawal.');

    expect((float) $wallet->fresh()->balance)->toBe(4.0);

    $this->assertDatabaseHas('withdrawals', [
        'user_id' => $user->id,
        'amount' => 1.00,
        'withdrawal_wallet_address' => '0xabcdef1234567890abcdef1234567890abcdef12',
        'status' => 'pending',
    ]);

    expect(Withdrawal::count())->toBe(1);
});
