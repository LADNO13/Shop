@extends('layout.main')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Добавить пользователя</h1>
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
            <form action="{{ route('user.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Имя" required>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="email" value="{{ old('email') }}" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" required>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="password" value="{{ old('password') }}" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Пароль" required>
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="password" value="{{ old('password_confirmation') }}" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Подтверждение пароля" required>
                    @error('password_confirmation')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="text" value="{{ old('surname') }}" name="surname" class="form-control @error('surname') is-invalid @enderror" placeholder="Фамилия">
                    @error('surname')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="text" value="{{ old('patronymic') }}" name="patronymic" class="form-control @error('patronymic') is-invalid @enderror" placeholder="Отчество">
                    @error('patronymic')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="text" value="{{ old('age') }}" name="age" class="form-control @error('age') is-invalid @enderror" placeholder="Возраст">
                    @error('age')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="text" value="{{ old('address') }}" name="address" class="form-control @error('address') is-invalid @enderror" placeholder="Адрес">
                    @error('address')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <select name="gender" class="custom-select form-control" id="exampleSelectBorder">
                        <option disabled selected>Пол</option>
                        <option value="1" {{ old('gender') == 1 ? 'selected' : '' }}>Мужской</option>
                        <option value="2" {{ old('gender') == 2 ? 'selected' : '' }}>Женский</option>
                    </select>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Добавить">
                </div>
            </form>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
@endsection