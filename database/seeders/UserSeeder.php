<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'username' => 'admin',
            'password' => Hash::make('123456'),
            'role' => 'admin'
        ]);

        $agent = User::create([
            'name' => 'Agent',
            'email' => 'agent@gmail.com',
            'username' => 'agent',
            'password' => Hash::make('123456'),
            'role' => 'agent'
        ]);

        $user = User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'username' => 'user',
            'password' => Hash::make('123456'),
            'role' => 'user'
        ]);

        foreach ([$admin, $agent, $user] as $seededUser) {
            Wallet::firstOrCreate(
                ['user_id' => $seededUser->id],
                [
                    'wallet_provider' => null,
                    'wallet_address' => null,
                    'withdrawal_wallet_address' => null,
                    'connected_at' => null,
                    'balance' => 0,
                ]
            );
        }
    }
}
