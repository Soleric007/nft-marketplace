<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('wallets', function (Blueprint $table) {
            if (!Schema::hasColumn('wallets', 'wallet_provider')) {
                $table->string('wallet_provider')->nullable()->after('user_id');
            }

            if (Schema::hasColumn('wallets', 'key_phrase')) {
                $table->dropColumn('key_phrase');
            }

            if (!Schema::hasColumn('wallets', 'withdrawal_wallet_address')) {
                $table->string('withdrawal_wallet_address')->nullable()->after('wallet_address');
            }

            if (!Schema::hasColumn('wallets', 'connected_at')) {
                $table->timestamp('connected_at')->nullable()->after('withdrawal_wallet_address');
            }
        });
    }

    public function down(): void
    {
        Schema::table('wallets', function (Blueprint $table) {
            if (Schema::hasColumn('wallets', 'connected_at')) {
                $table->dropColumn('connected_at');
            }

            if (Schema::hasColumn('wallets', 'withdrawal_wallet_address')) {
                $table->dropColumn('withdrawal_wallet_address');
            }

            if (!Schema::hasColumn('wallets', 'key_phrase')) {
                $table->string('key_phrase')->nullable()->after('user_id');
            }

            if (Schema::hasColumn('wallets', 'wallet_provider')) {
                $table->dropColumn('wallet_provider');
            }
        });
    }
};
