<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        factory(App\Models\ProductTags::class,10)->create();
        $this->call(ProductCategoryTableSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(BrandSeeder::class);
    }
}
