@extends('admin.layouts.main')
@section('content')

    <div class="content-wrapper">

        <section class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-12">
                        <a href="{{ route('admin.main.index') }}" class="btn btn-dark col-md-2" role="button">Назад к каталогу</a>


                        <form method="POST" action="{{ route('admin.main.update', $car) }}" enctype="multipart/form-data">

                            @csrf
                            @method('patch')


                            <div class="form-group w-50">
                                <label for="exampleInputFile">Производитель</label>
                                <input type="text"
                                       value="{{ $car->brand }}"
                                       name="brand" placeholder="Производитель" class="form-control">
                            </div>

                            <div class="form-group w-50">
                                <label for="exampleInputFile">Модель</label>
                                <input type="text"
                                       value="{{ $car->title }}"
                                       name="title" placeholder="Модель" class="form-control">
                            </div>

                            <div class="form-group w-50">
                                <label for="exampleInputFile">Руль</label>
                                <input type="text"
                                       value="{{ $car->wheel }}"
                                       name="wheel" placeholder="Расположение руля" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-success col-md-2">Обновить</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
