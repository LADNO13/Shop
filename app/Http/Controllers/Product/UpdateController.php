<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Product;
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
            $data['preview_image'] = $imagePath;
        }

        // Удаляем лишние поля из массива данных
        unset($data['product_images'], $data['tags'], $data['colors']);

        // Обновляем данные продукта
        $product->update($data);

        // Обрабатываем дополнительные изображения
        if ($request->hasFile('product_images')) {
            // Удаляем старые изображения
            foreach ($product->productImages as $image) {
                if (Storage::disk('public')->exists($image->file_path)) {
                    Storage::disk('public')->delete($image->file_path);
                }
            }
            // Удаляем записи о старых изображениях из базы данных
            $product->productImages()->delete();

            // Загружаем новые изображения
            foreach ($request->file('product_images') as $image) {
                if ($image) {
                    $imagePath = $image->store('images', 'public');
                    $product->productImages()->create([
                        'file_path' => $imagePath
                    ]);
                }
            }
        }

        // Синхронизируем теги
        if ($request->has('tags')) {
            $product->tags()->sync($request->tags);
        }

        // Синхронизируем цвета
        if ($request->has('colors')) {
            $product->colors()->sync($request->colors);
        }

        return redirect()->route('product.index');
    }
}
