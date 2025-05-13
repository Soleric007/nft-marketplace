<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNftPurchasesTable extends Migration
{
    public function up()
    {
        Schema::create('nft_purchases', function (Blueprint $table) {
            $table->id();
            $table->foreignId('nft_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('payment_method')->default('crypto');
            $table->string('proof_of_payment'); // file path
            $table->boolean('is_verified')->default(false); // for manual/auto verification
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('nft_purchases');
    }
}
