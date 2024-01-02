<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Seed brands table
        Brand::factory()->count(500)->create();
        // User::factory()->count(500)->create();
        Category::factory()->count(500)->create();
        Product::factory()->count(1000)->create();

        //other way to seed brands
        // $this->call([
        //     Brand::class
        // ]);
    }
    
}
