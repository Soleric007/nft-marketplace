<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('art_nfts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->text('description');
            $table->enum('status', ['buy', 'sold'])->default('buy');
            $table->integer('stock')->default(1);
            $table->string('creator_name');
            $table->string('creator_image');
            $table->enum('category', ['trending', 'explore']);
            $table->integer('likes')->default(0);
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('art_nfts');
    }
};
