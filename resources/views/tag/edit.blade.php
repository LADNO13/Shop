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

            <form action="{{ route('tag.update', $tag->id) }}"  method="POST">
                @csrf
                @method('patch')
                <div class="form-group">
                    <input type="text" class="form-control" name="title" value="{{ $tag->title }}" placeholder="Наименование тега">
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