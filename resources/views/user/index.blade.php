@extends('layout.main')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Пользователи</h1>
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
                    <a href="{{route('user.create')}}" class="btn btn-primary">Добавить</a>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Имя</th>
                          <th>Фамилия</th>
                          <th>Отчество</th>
                          <th>Email</th>
                          <th>Возраст</th>
                          <th>Пол</th>
                          <th>Адресс</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($users as $user)
                        <tr>
                          <td>{{ $user->id }}</td>
                          <td><a href="{{route('user.show', $user->id)}}">{{ $user->name }}</a></td>
                          <td>{{ $user->surname }}</td>
                          <td>{{ $user->patronymic }}</td>
                          <td>{{ $user->email }}</td>
                          <td>{{ $user->age }}</td>
                          <td>{{ $user->genderTitle }}</td>
                          <td>{{ $user->address }}</td>
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