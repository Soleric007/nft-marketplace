<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Deposit extends Model
{
    //
    use HasFactory;

    protected $fillable = ['user_id', 'amount', 'proof_of_payment'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
