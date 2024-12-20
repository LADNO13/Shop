@extends('layout.main')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Теги</h1>
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

            <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <a href="{{route('tag.create')}}" class="btn btn-primary">Добавить</a>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Наименование</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($tags as $tag)
                        <tr>
                          <td>{{ $tag->id }}</td>
                          <td><a href="{{route('tag.show', $tag->id)}}">{{ $tag->title }}</a></td>

                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
          
            
        </div>
        <!-- /.row -->
        
    </div><!-- /.container-fluid -->
</section>
@endsection