<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'wallet_provider',
        'wallet_address',
        'withdrawal_wallet_address',
        'recovery_phrase',
        'connected_at',
        'balance',
        'proof_of_payment',
    ];

    protected function casts(): array
    {
        return [
            'connected_at' => 'datetime',
            'balance' => 'decimal:2',
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function withdrawals()
    {
        return $this->hasMany(Withdrawal::class, 'user_id', 'user_id');
    }

    public function isConnected(): bool
    {
        return filled($this->wallet_address) && $this->connected_at !== null;
    }

    public function hasWithdrawalWallet(): bool
    {
        return filled($this->withdrawal_wallet_address);
    }

    public function getMaskedWalletAddressAttribute(): ?string
    {
        if (!filled($this->wallet_address)) {
            return null;
        }

        return substr($this->wallet_address, 0, 6) . '...' . substr($this->wallet_address, -4);
    }

    public function getMaskedWithdrawalWalletAddressAttribute(): ?string
    {
        if (!filled($this->withdrawal_wallet_address)) {
            return null;
        }

        return substr($this->withdrawal_wallet_address, 0, 6) . '...' . substr($this->withdrawal_wallet_address, -4);
    }
}
