@extends('layout.main')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Категории</h1>
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
                    <a href="{{route('category.create')}}" class="btn btn-primary"></a>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                      <thead>
                        <tr>
                          <th><ya-tr-span data-index="69-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="ID" data-translation="ID" data-ch="0" data-type="trSpan" style="visibility: inherit !important;">ID</ya-tr-span></th>
                          <th><ya-tr-span data-index="70-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="User" data-translation="Пользователь" data-ch="0" data-type="trSpan" style="visibility: inherit !important;">Пользователь</ya-tr-span></th>
                          <th><ya-tr-span data-index="71-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Date" data-translation="Дата" data-ch="0" data-type="trSpan" style="visibility: inherit !important;">Дата</ya-tr-span></th>
                          <th><ya-tr-span data-index="72-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Status" data-translation="Статус" data-ch="0" data-type="trSpan" style="visibility: inherit !important;">Статус</ya-tr-span></th>
                          <th><ya-tr-span data-index="73-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Reason" data-translation="Причина" data-ch="0" data-type="trSpan" style="visibility: inherit !important;">Причина</ya-tr-span></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>183</td>
                          <td><ya-tr-span data-index="74-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="John Doe" data-translation="Джон Доу" data-ch="0" data-type="trSpan" style="visibility: inherit !important;">Джон Доу</ya-tr-span></td>
                          <td>11-7-2014</td>
                          <td><span class="tag tag-success"><ya-tr-span data-index="75-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Approved" data-translation="Одобренный" data-ch="0" data-type="trSpan" style="visibility: inherit !important;">Одобренный</ya-tr-span></span></td>
                          <td><ya-tr-span data-index="76-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Bacon ipsum dolor sit amet salami venison chicken flank fatback doner." data-translation="Бекон, ipsum dolor sit amet, салями, оленина, куриная грудка, жирный донер." data-ch="0" data-type="trSpan" style="visibility: inherit !important;">Бекон, ipsum dolor sit amet, салями, оленина, куриная грудка, жирный донер.</ya-tr-span></td>
                        </tr>
                        <tr>
                          <td>219</td>
                          <td><ya-tr-span data-index="77-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Alexander Pierce" data-translation="Александр Пирс" data-ch="1" data-type="trSpan" style="visibility: inherit !important;">Александр Пирс</ya-tr-span></td>
                          <td>11-7-2014</td>
                          <td><span class="tag tag-warning"><ya-tr-span data-index="78-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Pending" data-translation="Ожидающий рассмотрения" data-ch="0" data-type="trSpan" style="visibility: inherit !important;">Ожидающий рассмотрения</ya-tr-span></span></td>
                          <td><ya-tr-span data-index="79-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Bacon ipsum dolor sit amet salami venison chicken flank fatback doner." data-translation="Бекон, ipsum dolor sit amet, салями, оленина, куриная грудка, жирный донер." data-ch="1" data-type="trSpan" style="visibility: inherit !important;">Бекон, ipsum dolor sit amet, салями, оленина, куриная грудка, жирный донер.</ya-tr-span></td>
                        </tr>
                        <tr>
                          <td>657</td>
                          <td><ya-tr-span data-index="80-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Bob Doe" data-translation="Боб Доу" data-ch="0" data-type="trSpan" style="visibility: inherit !important;">Боб Доу</ya-tr-span></td>
                          <td>11-7-2014</td>
                          <td><span class="tag tag-primary"><ya-tr-span data-index="81-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Approved" data-translation="Одобренный" data-ch="1" data-type="trSpan" style="visibility: inherit !important;">Одобренный</ya-tr-span></span></td>
                          <td><ya-tr-span data-index="82-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Bacon ipsum dolor sit amet salami venison chicken flank fatback doner." data-translation="Бекон, ipsum dolor sit amet, салями, оленина, куриная грудка, жирный донер." data-ch="1" data-type="trSpan" style="visibility: inherit !important;">Бекон, ipsum dolor sit amet, салями, оленина, куриная грудка, жирный донер.</ya-tr-span></td>
                        </tr>
                        <tr>
                          <td>175</td>
                          <td><ya-tr-span data-index="83-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Mike Doe" data-translation="Майк Доу" data-ch="0" data-type="trSpan" style="visibility: inherit !important;">Майк Доу</ya-tr-span></td>
                          <td>11-7-2014</td>
                          <td><span class="tag tag-danger"><ya-tr-span data-index="84-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Denied" data-translation="Отказано" data-ch="0" data-type="trSpan" style="visibility: inherit !important;">Отказано</ya-tr-span></span></td>
                          <td><ya-tr-span data-index="85-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Bacon ipsum dolor sit amet salami venison chicken flank fatback doner." data-translation="Бекон, ipsum dolor sit amet, салями, оленина, куриная грудка, жирный донер." data-ch="1" data-type="trSpan" style="visibility: inherit !important;">Бекон, ipsum dolor sit amet, салями, оленина, куриная грудка, жирный донер.</ya-tr-span></td>
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