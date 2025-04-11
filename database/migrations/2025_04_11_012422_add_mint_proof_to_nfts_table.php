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
        Schema::table('nfts', function (Blueprint $table) {
            $table->string('mint_proof_of_payment')->nullable();
        });
    }

    public function down()
    {
        Schema::table('nfts', function (Blueprint $table) {
            $table->dropColumn('mint_proof_of_payment');
        });
    }

};
