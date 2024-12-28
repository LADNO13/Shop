<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\ColorProduct;
use App\Models\Product;
use App\Models\ProductTag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Product $product)
    {
        // Получаем валидированные данные из запроса
        $data = $request->validated();

        // Обновляем изображение, если оно было загружено
        if ($request->hasFile('preview_image')) {
            // Удаляем старое изображение, если оно существует
            if ($product->preview_image && Storage::disk('public')->exists($product->preview_image)) {
                Storage::disk('public')->delete($product->preview_image);
            }
            // Сохраняем новое изображение
            $imagePath = $request->file('preview_image')->store('images', 'public');
            $data['preview_image'] = $imagePath; // Сохраняем путь к новому изображению
        }

        // Удаляем теги и цвета из массива данных, чтобы они не попали в обновление продукта
        $tagsIds = $data['tags'] ?? [];
        $colorsIds = $data['colors'] ?? [];
        unset($data['tags'], $data['colors']);

        // Обновляем данные продукта
        $product->update($data);

        // Обновляем теги продукта
        if (!empty($tagsIds)) {
            // Удаляем старые связи с тегами
            ProductTag::where('product_id', $product->id)->delete();
            // Создаем новые связи с тегами
            foreach ($tagsIds as $tagId) {
                ProductTag::firstOrCreate([
                    'product_id' => $product->id,
                    'tag_id' => $tagId,
                ]);
            }
        }

        // Обновляем цвета продукта
        if (!empty($colorsIds)) {
            // Удаляем старые связи с цветами
            ColorProduct::where('product_id', $product->id)->delete();
            // Создаем новые связи с цветами
            foreach ($colorsIds as $colorId) {
                ColorProduct::firstOrCreate([
                    'product_id' => $product->id,
                    'color_id' => $colorId,
                ]);
            }
        }

        // Перенаправляем на страницу продукта
        return redirect()->route('product.show', $product)->with('success', 'Продукт успешно обновлен');
    }
}
