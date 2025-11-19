<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $categories = [
            'ファッション',
            '家電',
            'インテリア',
            'レディース',
            'メンズ',
            'コスメ',
            '本',
            'ゲーム',
            'スポーツ',
            'キッチン',
            'ハンドメイド',
            'アクセサリー',
            'おもちゃ',
            'ベビー・キッズ'
        ];

        $conditions = [
            '良好',
            '目立った傷や汚れなし',
            'やや傷や汚れあり',
            '状態が悪い'
        ];

        return [
            'seller_id' => User::factory(),
            'buyer_id' => null,
            'name' => $this->faker->word(),
            'brand' => $this->faker->company(),
            'status' => 'available',
            'description' => $this->faker->text(100), 
            'image_path' => 'sample.png', 
            'category' => $this->faker->randomElement($categories),
            'condition' => $this->faker->randomElement($conditions),
            'price' => $this->faker->numberBetween(1000, 50000),
        ];
    }
}
