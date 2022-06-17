@extends('admin.layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h1 class="card-title">Дотати Товар</h1>
                        </div>
                        <div class="card-body">
                            <!-- Date -->

                            <form action="{{ route('admin.products.store') }}" method="post">
                                @csrf

                                <div class="form-group">
                                    <label>Назва товару</label>
                                    <input type="text" name="title_ua" class="form-control" placeholder="Назва товару">
                                </div>

                                <div class="form-group">
                                    <label for="">Коротний опис товару</label>
                                    <textarea name="description_ua" id="summernote1" name="content_ua"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="">Детальний опис товару</label>
                                    <textarea name="content_ua" id="summernote2" style="display: none;">    </textarea>
                                </div>

                                <div class="">
                                    <label for="">Завантажити фотограцію</label>
                                    
                                </div>
                                <div class="mb-3 form-group">
                                    <label for="formFileDisabled"  class="form-label">Завантажити фотограцію</label>
                                    <input class="form-control" name="preview_image" type="file" id="formFileDisabled">
                                </div>

                                <div class="form-froup d-flex justify-content-around mb-3">
                                    <div class="form-group">
                                        <label>Вартість товару</label>
                                        <input type="text" name="price" class="form-control" placeholder="Ціна">
                                    </div>

                                    <div class="form-group">
                                        <label>Залишок товару</label>
                                        <input type="text" name="count" class="form-control" placeholder="Кількість">
                                    </div>
                                </div>




                                <div class="card card-info">
                                    <div class="card-header">
                                        <h4>Параметри товару</h4>
                                    </div>

                                    <div class="p-3">
                                        <div class="form-group">
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch1"
                                                    checked>
                                                <label class="custom-control-label" for="customSwitch1">
                                                    Опублікувати товар
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch2">
                                                <label class="custom-control-label" for="customSwitch2">
                                                    Новинка
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch3">
                                                <label class="custom-control-label" for="customSwitch3">
                                                    Хіт продажів
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch4">
                                                <label class="custom-control-label" for="customSwitch4">
                                                    Рекомендований товар
                                                </label>
                                            </div>
                                        </div>
                                    </div>




                                </div>

                                <div class="card card-info">
                                    <div class="card-header">
                                        <h4>SEO налаштування сторінки</h4>
                                    </div>

                                    <div class="m-3">
                                        <div class="form-group">
                                            <input type="text" name="seo_description_ua" class="form-control"
                                                placeholder="SEO опис">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="seo_keywords_ua" class="form-control"
                                                placeholder="SEO ключові слова">
                                        </div>
                                    </div>


                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" value="Додати товар">
                                </div>
                            </form>
                        </div>
                        <div class="card-footer">
                        </div>
                        <!-- /.card-body -->
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    @endsection
