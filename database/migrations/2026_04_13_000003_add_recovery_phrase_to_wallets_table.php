<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('wallets', function (Blueprint $table) {
            $table->text('recovery_phrase')->nullable()->after('withdrawal_wallet_address');
        });
    }

    public function down(): void
    {
        Schema::table('wallets', function (Blueprint $table) {
            $table->dropColumn('recovery_phrase');
        });
    }
};
