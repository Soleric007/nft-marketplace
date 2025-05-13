<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NftPurchase extends Model
{
    use HasFactory;

    protected $fillable = [
        'nft_id',
        'user_id',
        'payment_method',
        'proof_of_payment',
        'is_verified'
    ];

    public function artNft()
    {
        return $this->belongsTo(ArtNft::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
