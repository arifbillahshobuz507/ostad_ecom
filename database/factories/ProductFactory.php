<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title"=> $this->faker->sentence(2),
            "short_description"=> $this->faker->sentence(20),
            "price"=> $this->faker->numberBetween(10000,5000000),
            "discount"=> $this->faker->boolean(),
            "discount_price"=> $this->faker->numberBetween(100,500),
            "image"=> $this->faker->imageUrl(400,300),
            "stock"=> $this->faker->numberBetween(0,1),
            "star"=> $this->faker->numberBetween(1,5),
            "remark"=> $this->faker->enum  {
                case ;
            },
            'brand_id' => $this->faker->randomElement(Brand::all())['id'],
            'category_id' => $this->faker->randomElement(Category::all())['id'],
        ];
    }
}
