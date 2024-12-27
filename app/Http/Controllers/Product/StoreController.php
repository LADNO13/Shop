<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreRequest;
use App\Models\Product;
use App\Models\ProductTag;
use App\Models\Color;
use App\Models\ColorProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
        $tagsIds = $data['tags'];
        $colorIds = $data['colors'];
        unset($data['tags'], $data['colors']);
        Product::firstOrCreate($data);

        $product = Product::firstOrCreate([
            'title' => $data['title'],

        ], $data);

        foreach ($tagsIds as $tagsId) {

            ProductTag::firstOrCreate([
                'product_id' => $product->id,
                'tag_id' => $tagsId,
            ]);
        }

        foreach ($colorIds as $colorsId) {

            ColorProduct::firstOrCreate([
                'product_id' => $product->id,
                'color_id' => $colorsId,
            ]);
        }



        return redirect()->route('product.index');
    }
}
