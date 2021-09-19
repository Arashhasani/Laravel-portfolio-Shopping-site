<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => 1,
            'title' => $this->faker->sentence(4),
            'body' => $this->faker->paragraph(20),
            'price' => $this->faker->numberBetween(2000,4000),
            'framework' => $this->faker->sentence(1),
            'version' => $this->faker->numberBetween(1,2),
            'imagesm' => '/web/assets/img/product/product-2.jpg',
            'imagebig' => '/web/assets/img/product/details/pro-de-1.jpg',
            'is_published' => 1,
        ];
    }
}
