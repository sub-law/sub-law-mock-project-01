<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Http\UploadedFile;

class ExhibitionTest extends TestCase
{
    use RefreshDatabase;

    public function test_商品出品画面にて必要な情報が保存できること（カテゴリ、商品の状態、商品名、ブランド名、商品の説明、販売価格）()
    {
        $seller = User::factory()->create(['email_verified_at' => now()]);

        /** @var \App\Models\User $seller */

        $this->actingAs($seller);

        $response = $this->get('/sell');
        $response->assertStatus(200);

        $response = $this->post('/sell', [
            'name' => '商品',
            'brand' => 'ノーブランド',
            'description' => 'それなりの品物',
            'image_path' => UploadedFile::fake()->create('aaa.jpg', 100),
            'category' => ['ファッション'],
            'condition' => '良好',
            'price' => 15000,
            'status' => 'available',
        ]);
        $response->assertStatus(302);

        
        $this->assertDatabaseHas('products', [
            'seller_id' => $seller->id,   
            'brand' => 'ノーブランド',
            'description' => 'それなりの品物',
            'category' => 'ファッション',
            'condition' => '良好',
            'price' => 15000,
            'status' => 'available',
        ]);

        $product = \App\Models\Product::first();
        $this->assertNotNull($product->image_path);
    }
}
