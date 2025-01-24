<?php

namespace App\Http\Controllers\API\product;

use App\Http\Controllers\Controller;
use App\Http\Filters\ProductFilter;
use App\Http\Requests\API\Product\IndexRequest;
use App\Http\Resources\Product\IndexProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(IndexRequest $request)
    {
        $data = $request->validated();
        \Log::info('Request data:', $data);
        
        $filter = app()->make(ProductFilter::class, ['queryParams' => array_filter($data)]);    
        \Log::info('Filter params:', array_filter($data));

        $products = Product::filter($filter)->get();
        return IndexProductResource::collection($products);
    }
}
