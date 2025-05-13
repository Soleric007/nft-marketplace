<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArtNftSeeder extends Seeder
{
    public function run()
    {
        $nfts = [
            [
                'name' => 'Pink fragrant',
                'image' => '/template/assets/images/items/max13.jpg',
                'creator_name' => 'ArtureWoven',
                'creator_image' => '/template/assets/images/author/author-4.jpg',
                'likes' => 94,
                'price' => '2.5'
            ],
            [
                'name' => 'Dendroclastic',
                'image' => '/template/assets/images/items/max25.jpg',
                'creator_name' => 'Stacy Long',
                'creator_image' => '/template/assets/images/author/author-10.jpg',
                'likes' => 80,
                'price' => '2.5'
            ],
            [
                'name' => 'Masterling',
                'image' => '/template/assets/images/items/max24.jpg',
                'creator_name' => 'Ida Chapman',
                'creator_image' => '/template/assets/images/author/author-11.jpg',
                'likes' => 97,
                'price' => '2.5'
            ],
            [
                'name' => 'Blue Planet',
                'image' => '/template/assets/images/items/max18.jpg',
                'creator_name' => 'Fred Ryan',
                'creator_image' => '/template/assets/images/author/author-12.jpg',
                'likes' => 70,
                'price' => '2.5'
            ],
            [
                'name' => 'Superpious',
                'image' => '/template/assets/images/items/max29.jpg',
                'creator_name' => 'Fred Ryan',
                'creator_image' => '/template/assets/images/author/author-12.jpg',
                'likes' => 70,
                'price' => '2.5'
            ],
            [
                'name' => 'Delectus Antiendotoxin',
                'image' => '/template/assets/images/items/max17.jpg',
                'creator_name' => 'Fred Ryan',
                'creator_image' => '/template/assets/images/author/author-12.jpg',
                'likes' => 78,
                'price' => '2.5'
            ],
        ];

        foreach ($nfts as $nft) {
            DB::table('art_nfts')->insert([
                'name' => $nft['name'],
                'image' => $nft['image'],
                'price' => $nft['price'],
                'description' => fake()->paragraph(),
                'status' => 'buy',
                'stock' => rand(1, 40),
                'creator_name' => $nft['creator_name'],
                'creator_image' => $nft['creator_image'],
                'category' => 'trending',
                'likes' => $nft['likes'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

