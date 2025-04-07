<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('wallets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Foreign key
            $table->string('key_phrase'); // 12-key phrase
            $table->string('wallet_address'); // Wallet address
            $table->decimal('balance', 15, 2)->default(0.00); // Wallet balance
            $table->string('proof_of_payment')->nullable(); // Proof of payment image path
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('wallets');
    }
};
