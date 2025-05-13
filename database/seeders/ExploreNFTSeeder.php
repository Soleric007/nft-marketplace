<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ExploreNFTSeeder extends Seeder
{
    public function run()
    {
        $nfts = [
            [
                'name' => 'Pinkey Ocean',
                'image' => '/template/assets/images/items/max2.jpg',
                'creator_name' => 'Monica Lucas',
                'creator_image' => '/template/assets/images/author/author-1.jp',
                'likes' => 94,
                'price' => '2.5'
            ],
            [
                'name' => 'Deep Sea Phantasy',
                'image' => '/template/assets/images/items/max4.jpg',
                'creator_name' => 'Stacy Long',
                'creator_image' => '/template/assets/images/author/author-10.jpg',
                'likes' => 80,
                'price' => '2.5'
            ],
            [
                'name' => 'Rainbow Styles',
                'image' => '/template/assets/images/items/max16.jpg',
                'creator_name' => 'Ida Chapman',
                'creator_image' => '/template/assets/images/author/author-11.jpg',
                'likes' => 97,
                'price' => '2.5'
            ],
            [
                'name' => 'Two Tigers',
                'image' => '/template/assets/images/items/static-4.jpg',
                'creator_name' => 'Fred Ryan',
                'creator_image' => '/template/assets/images/author/author-12.jpg',
                'likes' => 70,
                'price' => '2.5'
            ],
            [
                'name' => 'The Truth',
                'image' => '/template/assets/images/items/max12.jpg',
                'creator_name' => 'Franklin Gear',
                'creator_image' => '/template/assets/images/author/author-9.jpg',
                'likes' => 70,
                'price' => '2.5'
            ],
            [
                'name' => 'Loop Donut',
                'image' => '/template/assets/images/items/max19.jpg',
                'creator_name' => 'Fred Ryan',
                'creator_image' => '/template/assets/images/author/author-4.jpg',
                'likes' => 78,
                'price' => '2.5'
            ],
            [
                'name' => 'Lady Copter',
                'image' => '/template/assets/images/items/max20.jpg',
                'creator_name' => 'Fred Ryan',
                'creator_image' => '/template/assets/images/author/author-5.jpg',
                'likes' => 78,
                'price' => '2.5'
            ],
            [
                'name' => 'Purple Planet',
                'image' => '/template/assets/images/items/max10.jpg',
                'creator_name' => 'Fred Ryan',
                'creator_image' => '/template/assets/images/author/author-8.jpg',
                'likes' => 78,
                'price' => '2.5'
            ],
            [
                'name' => 'Oh Yeah!',
                'image' => '/template/assets/images/items/max8.jpg',
                'creator_name' => 'Fred Ryan',
                'creator_image' => '/template/assets/images/author/author-6.jpg',
                'likes' => 78,
                'price' => '2.5'
            ],
            [
                'name' => 'This is Our Story',
                'image' => '/template/assets/images/items/max9.jpg',
                'creator_name' => 'Fred Ryan',
                'creator_image' => '/template/assets/images/author/author-8.jpg',
                'likes' => 78,
                'price' => '2.5'
            ],
            [
                'name' => 'Pixel World',
                'image' => '/template/assets/images/items/max15.jpg',
                'creator_name' => 'Fred Ryan',
                'creator_image' => '/template/assets/images/author/author-9.jpg',
                'likes' => 78,
                'price' => '2.5'
            ],
            [
                'name' => 'I Believe I Can Fly',
                'image' => '/template/assets/images/items/max3.jpg',
                'creator_name' => 'Fred Ryan',
                'creator_image' => '/template/assets/images/author/author-12.jpg',
                'likes' => 78,
                'price' => '2.5'
            ],
            [
                'name' => 'Cute Astronout',
                'image' => '/template/assets/images/items/max21.jpg',
                'creator_name' => 'Fred Ryan',
                'creator_image' => '/template/assets/images/author/author-4.jpg',
                'likes' => 78,
                'price' => '2.5'
            ],
            [
                'name' => 'Teal Ocean',
                'image' => '/template/assets/images/items/max11.jpg',
                'creator_name' => 'Fred Ryan',
                'creator_image' => '/template/assets/images/author/author-1.jpg',
                'likes' => 78,
                'price' => '2.5'
            ],
            [
                'name' => 'Teal Ocean',
                'image' => '/template/assets/images/items/max11.jpg',
                'creator_name' => 'Fred Ryan',
                'creator_image' => '/template/assets/images/author/author-1.jpg',
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
                'category' => 'explore',
                'likes' => $nft['likes'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

