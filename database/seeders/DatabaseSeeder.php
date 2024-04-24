<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Products;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Products::create([
            'name'=>"product1",
            'description' =>"this is a product",
            'category' => "cate",
            'price' =>150
        ],
        [
            'name'=>"product1",
            'description' =>"this is a product",
            'category' => "cate",
            'price' =>150
        ],
        );
        // php artisan db:seed
    }
}