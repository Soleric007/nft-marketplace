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
            // Add a boolean 'status' column with a default value of false
            $table->boolean('status')->default(false);
        });
    }

    public function down()
    {
        Schema::table('nfts', function (Blueprint $table) {
            // Drop the 'status' column if the migration is rolled back
            $table->dropColumn('status');
        });
    }

};
