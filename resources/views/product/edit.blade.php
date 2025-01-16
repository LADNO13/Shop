@extends('layout.main')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Редактировать тег</h1>
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

            <form action="{{ route('product.update', $product->id) }}"  method="POST">
                @csrf
                @method('patch')
                <div class="form-group">
                    <input type="text" class="form-control" name="title" placeholder="Наименование ">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="description" placeholder="Описание">
                </div>
                <div class="form-group">
                    <textarea name="content" class="form-control" placeholder="Контент"  cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="price" placeholder="Цена">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="old_price" placeholder="Старая цена">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="count" placeholder="Колличество на складе">
                </div>

                <div class="form-group">
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

                <div class="form-group">
                    <select name="category_id" class="form-control select2bs4" style="width: 100%;">
                      <option selected="selected">Выберите категорию</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <select name="group_id" class="form-control select2bs4" style="width: 100%;">
                      <option selected="selected">Выберите категорию</option>
                        @foreach ($groups as $group)
                            <option value="{{ $group->id }}">{{ $group->title }}</option>
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