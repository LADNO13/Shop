@extends('layout.main')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Цвет</h1>
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
                  <div class="card-header d-flex p-3">
                    <div class="mr-3">
                         <a href="{{route('color.edit', $color->id)}}" class="btn btn-primary">Редактировать</a>
                    </div>
                    <form action="{{ route('color.delete', $color->id) }}" method="POST" >
                        @csrf
                        @method('delete')
                        <input type="submit" class="btn btn-danger" value="Удалить" >
                    </form>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                     
                      <tbody>
                        <tr>
                          <td>ID</td>
                          <td>{{ $color->id }}</td>
                        </tr>

                        <tr>
                          <td>Наименование</td>
                          <td>{{ $color->title }}</td>
                        </tr>
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