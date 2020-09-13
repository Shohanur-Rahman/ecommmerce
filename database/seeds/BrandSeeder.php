<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_brands')->insert([
            [
                'name' =>$email ='Samsung',
                'image' => '/user/assets/images/brands/1.jpg',
                'user_id' => 1,
            ],
            [
                'name' =>$email ='Tashiba',
                'image' => '/user/assets/images/brands/2.jpg',
                'user_id' => 5,
            ],

            [
                'name' =>$email ='Walton',
                'image' => '/user/assets/images/brands/3.jpg',
                'user_id' => 4,
            ],
            [
                'name' =>$email ='LG',
                'image' => '/user/assets/images/brands/3.jpg',
                'user_id' => 3,
            ],
            [
                'name' =>$email ='Nokia',
                'image' => '/user/assets/images/brands/4.jpg',
                'user_id' => 2,
            ],
            [
                'name' =>$email ='Samphony',
                'image' => '/user/assets/images/brands/5.jpg',
                'user_id' => 1,
            ],
            [
                'name' =>$email ='Range',
                'image' => '/user/assets/images/brands/6.jpg',
                'user_id' => 1,
            ],
            [
                'name' =>$email ='Apple',
                'image' => '/user/assets/images/brands/7.jpg',
                'user_id' => 2,
            ],
            [
                'name' =>$email ='Aarong',
                'image' => '/user/assets/images/brands/8.jpg',
                'user_id' => 3,
            ],

            [
                'name' =>$email ='Easy',
                'image' => '/user/assets/images/brands/9.jpg',
                'user_id' => 4,
            ],

            [
                'name' =>$email ='Swanpno',
                'image' => '/user/assets/images/brands/10.jpg',
                'user_id' => 5,
            ],
        ]);
    }
}
