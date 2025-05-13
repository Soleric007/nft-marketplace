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
        Schema::table('art_nfts', function (Blueprint $table) {
            $table->decimal('price', 10, 2)->after('category'); // Adjust position if needed
        });
    }

    public function down()
    {
        Schema::table('art_nfts', function (Blueprint $table) {
            $table->dropColumn('price');
        });
    }
};
