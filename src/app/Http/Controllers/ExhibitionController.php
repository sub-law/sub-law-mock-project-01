<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\ExhibitionRequest;


class ExhibitionController extends Controller
{
    public function store(ExhibitionRequest $request)
    {
        $user = auth()->user();

        $product = new Product();
        $product->seller_id = $user->id;
        $product->name = $request->input('name');
        $product->brand = $request->input('brand');
        $product->description = $request->input('description');

        if ($request->hasFile('image_path')) {
            $path = $request->file('image_path')->store('products', 'public');
            $filename = basename($path);
            $product->image_path = $filename;
        }

        $product->category = implode(',', $request->input('category', []));
        $product->condition = $request->input('condition');
        $product->price = $request->input('price');
        $product->status = 'available';
        $product->save();

        return redirect()->route('mypage')->with('status', '商品を出品しました！');
    }
}
