<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'category_id' => '1',
                'product_name' => 'Milk Coffee',
                'description' => 'Bring you a good favor',
                'product_image' => 'milkcoffee.jpg',
                'price' => '10.000',
                'amount' => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                
            ],
            [
                'category_id' => '2',
                'product_name' => 'orange juice',
                'description' => 'Bring you a good favor',
                'product_image' => 'jc.jpg',
                'price' => '20.000',
                'amount' => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'category_id' => '3',
                'product_name' => 'Coca',
                'description' => 'Bring you a good favor',
                'product_image' => 'coca.jpg',
                'price' => '5.000',
                'amount' => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'category_id' => '4',
                'product_name' => 'Guava juice',
                'description' => 'Bring you a good favor',
                'product_image' => 'oi.jpg',
                'price' => '20.000',
                'amount' => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'category_id' => '2',
                'product_name' => 'Peaches juice',
                'description' => 'Bring you a good favor',
                'product_image' => 'dao1.jpg',
                'price' => '30.000',
                'amount' => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'category_id' => '5',
                'product_name' => 'Star fruit juice',
                'description' => 'Bring you a good favor',
                'product_image' => 'khe.jpg',
                'price' => '15.000',
                'amount' => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'category_id' => '6',
                'product_name' => 'Watermelon juice',
                'description' => 'Bring you a good favor',
                'product_image' => 'duahau.jpg',
                'price' => '30.000',
                'amount' => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'category_id' => '7',
                'product_name' => 'pineapple juice',
                'description' => 'Bring y
                ou a good favor',
                'product_image' => 'dua.jpg',
                'price' => '35.000',
                'amount' => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'category_id' => '8',
                'product_name' => 'Tomato juice',
                'description' => 'Bring you a good favor',
                'product_image' => 'cachua.jpg',
                'price' => '20.000',
                'amount' => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'category_id' => '9',
                'product_name' => 'Kiwi juice',
                'description' => 'Bring you a good favor',
                'product_image' => 'kiwi.jpg',
                'price' => '40.000',
                'amount' => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'category_id' => '10',
                'product_name' => 'Peach juice',
                'description' => 'Bring you a good favor',
                'product_image' => 'hong.jpg',
                'price' => '15.000',
                'amount' => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'category_id' => '11',
                'product_name' => 'Mangosteen',
                'description' => 'Bring you a good favor',
                'product_image' => 'mangcut.jpg',
                'price' => '20.000',
                'amount' => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
