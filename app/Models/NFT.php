<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NFT extends Model
{
    use HasFactory;
    protected $table = 'nfts'; // Explicitly define the table name if necessary

    protected $fillable = [
        'user_id',
        'title',
        'price',
        'description',
        'file_path',
        'file_type',
        'collection_name',
        'royalties',
        'status',
        'mint_proof_of_payment',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}


