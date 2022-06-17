@extends('admin.layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Товари</h1>

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
                <a href="{{ route('admin.products.create') }}" class="btn btn-primary">Додати товар</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Назва товару</th>
                      <th>Категорія товару</th>
                      <th>Ціна</th>
                      <th>Залишок</th>
                      <th>Фотографія</th>
                      <th>Дії</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($products as $product)
                    <tr>
                      <td>{{ $product->id }}</td>
                      <td><a href="{{ route('admin.products.show', $product->id) }}">{{ $product->title_ua }}</a></td>
                      <td>cat</td>
                      <td>{{ $product->price }}</td>
                      <td>{{ $product->count }}</td>
                      <td><img src="{{ 'storage/' .  $product->preview_image }}"> </td>
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
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection