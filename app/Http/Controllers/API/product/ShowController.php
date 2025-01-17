<?php

namespace App\Http\Controllers\API\product;

use App\Http\Controllers\Controller;
use App\Http\Resources\Product\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Product $product)
    {
        return new ProductResource($product);
    }
}
