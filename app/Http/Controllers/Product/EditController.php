<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Category;
use App\Models\Color;
use App\Models\ColorProduct;
use App\Models\Group;
use App\Models\Product;
use App\Models\ProductTag;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class EditController extends Controller
{
    public function __invoke(Product $product)
    {
        // Получаем список категорий, тегов и цветов
        $categories = Category::all();
        $tags = Tag::all();
        $colors = Color::all();
        $groups = Group::all();

        // Передаем данные в представление
        return view('product.edit', compact('product', 'categories', 'tags', 'colors', 'groups'));
    }
}
