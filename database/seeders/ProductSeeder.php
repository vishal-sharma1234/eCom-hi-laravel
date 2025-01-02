<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("products")->insert([
            [
                'name' => 'LG TV',
                'price' => '50000',
                'description' => "A smart TV with excellent sound quality",
                'category' => 'TV',
                'gallery' => 'https://www.lg.com/us/images/tvs/md07000421/gallery/large01.jpg'
            ],
            [
                'name' => 'LG Washing machine',
                'price' => '20000',
                'description' => "Lg washing maching with 12 years warrenty",
                'category' => 'Washing Machine',
                'gallery' => 'https://www.lg.com/au/images/washing-machines/md05090361/gallery/zoom01.jpg'
            ],
            [
                'name' => 'Dell Laptop',
                'price' => '50000',
                'description' => "A Dell lapto with 512GB storage internal memory and 16GB Ram and 50MP front camera",
                'category' => 'Laptop',
                'gallery' => 'https://tse2.mm.bing.net/th?id=OIP.Iu_SEgMtFhG8elSKNNhu4QHaEZ&pid=Api&P=0&h=180'
            ],
            [
                'name' => 'Whirlpool Refrigerator',
                'price' => '50000',
                'description' => "A Refrigerator with high coolling in every time",
                'category' => 'Refrigerator',
                'gallery' => 'https://pisces.bbystatic.com/image2/BestBuy_US/images/products/6023/6023302_rd.jpg'
            ],
        ]);
    }
}
