<?php

namespace Database\Factories;

use App\Models\cart;
use App\Models\customer;
use App\Models\product;
use Illuminate\Database\Eloquent\Factories\Factory;
use PHPOpenSourceSaver\JWTAuth\Claims\Custom;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cart>
 */
class CartFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $customer=customer::all()->random();
        $product=product::all()->random();
        return [
            'customer_id'=>$customer->id,
            'pid'=>$product->id,
            'name' => $this->faker->firstName(),
            'price' => 20000,
            'quantity' => 2,
            'image' => 'nothing',
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
