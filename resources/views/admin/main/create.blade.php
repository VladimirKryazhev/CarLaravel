@extends('admin.layouts.main')
@section('content')



    <div class="content-wrapper">

        <section class="content">
            <div class="container-fluid">
                <div class="row">

                <div class="col-12">
                    <a href="{{ route('admin.main.index') }}" class="btn btn-dark col-md-2" role="button">Назад к каталогу</a>


                <form method="POST" {{--все запихали в одну форму и метод store и метод update, но можно и через два разных view сделать, будут разные формы--}}
                @if(isset($car))   {{--если есть такая машина в форме то мы идем по маршруту апдейт, а если нет то по маршруту store--}}
                action="{{ route('admin.main.update', $car) }}"
                      @else
                      action="{{ route('admin.main.store') }}"
                      @endif
                      enctype="multipart/form-data">

                    @csrf
                    @isset($car)
                        @method('patch')
                    @endisset

                    <div class="form-group w-50">
                        <label for="exampleInputFile">Производитель</label>
                        <input type="text"
                               value="{{ isset($car) ? $car->brand : null }}"
                               name="brand" placeholder="Производитель" class="form-control">
                    </div>

                    <div class="form-group w-50">
                        <label for="exampleInputFile">Модель</label>
                        <input type="text"
                               value="{{ isset($car) ? $car->title : null }}"
                               name="title" placeholder="Модель" class="form-control">
                    </div>

                    <div class="form-group w-50">
                        <label for="exampleInputFile">Руль</label>
                        <input type="text"
                               value="{{ isset($car) ? $car->wheel : null }}"
                               name="wheel" placeholder="Расположение руля" class="form-control">
                    </div>

                    <div class="form-group mb-3">
                        <button type="submit" class="btn btn-success col-md-2">Создать запись</button>
                    </div>

                </form>
                </div>
            </div>
            </div>
        </section>
    </div>

@endsection
