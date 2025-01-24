@extends('layout.main')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Редактировать товар</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Dashboard v1</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">

            <form action="{{ route('product.update', $product->id) }}"  method="POST" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="form-group">
                    <input type="text" value="{{ $product->title }}" class="form-control" name="title" placeholder="Наименование">
                </div>
                <div class="form-group">
                    <input type="text" value="{{ $product->description }}" class="form-control" name="description" placeholder="Описание">
                </div>
                <div class="form-group">
                    <textarea name="content" class="form-control" placeholder="Контент" cols="30" rows="10">{{ $product->content }}</textarea>
                </div>
                <div class="form-group">
                    <input type="text" value="{{ $product->price }}" class="form-control" name="price" placeholder="Цена">
                </div>
                <div class="form-group">
                    <input type="text" value="{{ $product->old_price }}" class="form-control" name="old_price" placeholder="Старая цена">
                </div>
                <div class="form-group">
                    <input type="text" value="{{ $product->count }}" class="form-control" name="count" placeholder="Колличество на складе">
                </div>

                <div class="form-group">
                    <div class="w-50">
                        <img src="{{ url('storage/' . $product->preview_image) }}" alt="preview_image" class="w-50">
                    </div>
                    <div class="input-group">
                        <div class="custom-file">
                            <input name="preview_image" type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Выберите файл</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Загрузка</span>
                        </div>
                    </div>
                </div>

                @if($product->productImages)
                    @foreach($product->productImages as $image)
                        <div class="form-group">
                            <div class="w-50">
                                <img src="{{ url('storage/' . $image->file_path) }}" alt="product_image" class="w-50">
                            </div>
                        </div>
                    @endforeach
                @endif

                <div class="form-group">
                    <div class="input-group">
                        <div class="custom-file">
                            <input name="product_images[]" type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Выберите файл</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Загрузка</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="custom-file">
                            <input name="product_images[]" type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Выберите файл</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Загрузка</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="custom-file">
                            <input name="product_images[]" type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Выберите файл</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Загрузка</span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Выберите категорию</label>
                    <select name="category_id" class="form-control select2" style="width: 100%;">
                        <option selected="selected" disabled>Выберите категорию</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ $category->id == $product->category_id ? 'selected' : '' }}
                            >{{ $category->title }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Выберите группу</label>
                    <select name="group_id" class="form-control select2" style="width: 100%;">
                        <option selected="selected" disabled>Выберите группу</option>
                        @foreach($groups as $group)
                            <option value="{{ $group->id }}"
                                {{ $group->id == $product->group_id ? 'selected' : '' }}
                            >{{ $group->title }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <select name="tags[]" class="tags" multiple="multiple" data-placeholder="Выберите тег" style="width: 100%;">
                        @foreach ($tags as $tag)
                            <option value="{{ $tag->id }}">{{ $tag->title }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <select name="colors[]" class="colors" multiple="multiple" data-placeholder="Выберите цвет" style="width: 100%;">
                        @foreach ($colors as $color)
                            <option value="{{ $color->id }}">{{ $color->title }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary"  value="Редактировать">
                </div>
            </form>
          
        </div>
        <!-- /.row -->
        
    </div><!-- /.container-fluid -->
</section>
@endsection