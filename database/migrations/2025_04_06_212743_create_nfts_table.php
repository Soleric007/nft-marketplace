<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('nfts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Foreign key for user
            $table->string('title');
            $table->decimal('price', 10, 2);
            $table->text('description')->nullable();
            $table->string('file_path'); // Path to uploaded NFT
            $table->string('file_type');
            $table->string('collection_name');
            $table->integer('royalties')->default(0); // Percentage
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('nfts');
    }
};

