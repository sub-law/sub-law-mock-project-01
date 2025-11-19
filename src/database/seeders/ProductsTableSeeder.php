<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'seller_id' => 1,
            'name' => '腕時計',
            'brand' => 'Rolax',
            'description' => 'スタイリッシュなデザインのメンズ腕時計',
            'image_path' => 'watch.jpg',
            'category' => 'ファッション',
            'condition' => '良好',
            'price' => 15000,
            'status' => 'available',
        ]);

        Product::create([
            'seller_id' => 1,
            'name' => 'HDD',
            'brand' => '西芝',
            'description' => '高速で信頼性の高いハードディスク',
            'image_path' => 'hdd.jpg',
            'category' => '家電',
            'condition' => '目立った傷や汚れなし',
            'price' => 5000,
            'status' => 'available',
        ]);

        Product::create([
            'seller_id' => 1,
            'name' => '玉ねぎ3束',
            'brand' => '',
            'description' => '新鮮な玉ねぎ3束のセット',
            'image_path' => 'onion.jpg',
            'category' => '食品',
            'condition' => 'やや傷や汚れあり',
            'price' => 300,
            'status' => 'available',
        ]);

        Product::create([
            'seller_id' => 1,
            'name' => '革靴',
            'brand' => '',
            'description' => 'クラシックなデザインの革靴',
            'image_path' => 'shoes.jpg',
            'category' => 'ファッション',
            'condition' => '状態が悪い',
            'price' => 4000,
            'status' => 'available',
        ]);

        Product::create([
            'seller_id' => 1,
            'name' => 'ノートPC',
            'brand' => '',
            'description' => '高性能なノートパソコン',
            'image_path' => 'notebook.jpg',
            'category' => '家電',
            'condition' => '良好',
            'price' => 45000,
            'status' => 'available',
        ]);

        Product::create([
            'seller_id' => 2,
            'name' => 'マイク',
            'brand' => '',
            'description' => '高音質のレコーディング用マイク',
            'image_path' => 'microphone.jpg',
            'category' => '家電',
            'condition' => '目立った傷や汚れなし',
            'price' => 8000,
            'status' => 'available',
        ]);

        Product::create([
            'seller_id' => 2,
            'name' => 'ショルダーバッグ',
            'brand' => '',
            'description' => 'おしゃれなショルダーバッグ',
            'image_path' => 'bag.jpg',
            'category' => 'ファッション',
            'condition' => 'やや傷や汚れあり',
            'price' => 3500,
            'status' => 'available',
        ]);

        Product::create([
            'seller_id' => 2,
            'name' => 'タンブラー',
            'brand' => '',
            'description' => '使いやすいタンブラー',
            'image_path' => 'canteen.jpg',
            'category' => 'キッチン',
            'condition' => '状態が悪い',
            'price' => 500,
            'status' => 'available',
        ]);

        Product::create([
            'seller_id' => 2,
            'name' => 'コーヒーミル',
            'brand' => 'Starbacks',
            'description' => '手動のコーヒーミル',
            'image_path' => 'mill.jpg',
            'category' => 'キッチン',
            'condition' => '良好',
            'price' => 4000,
            'status' => 'available',
        ]);

        Product::create([
            'seller_id' => 2,
            'name' => 'メイクセット',
            'brand' => '',
            'description' => '便利なメイクアップセット',
            'image_path' => 'cosmetics.jpg',
            'category' => 'コスメ',
            'condition' => '目立った傷や汚れなし',
            'price' => 2500,
            'status' => 'available',
        ]);
    }
}
