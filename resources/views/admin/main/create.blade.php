@extends('admin.layouts.main')
@section('content')



    <div class="container">

        <div class="row">

            <div class="card-body">

                <div class="col mb-2">
                    <a href="{{ route('admin.main.index') }}" class="btn btn-dark col-md-2" role="button">Назад к каталогу</a>
                </div>

                <form method="POST" {{--все запихали в одну форму и метод store и метод update, но можно и через два разных view сделать, будут разные формы--}}
                @if(isset($car))   {{--если есть такая машина в форме то мы идем по маршруту апдейт, а если нет то по маршруту store--}}
                action="{{ route('admin.main.update', $car) }}"
                      @else
                      action="{{ route('admin.main.store') }}"
                      @endif
                      enctype="multipart/form-data">

                    @csrf
                    @isset($car)
                        @method('PUT')
                    @endisset

                    <div class="form-group mb-3">
                        <label for="">Производитель</label>
                        <input type="text"
                               value="{{ isset($car) ? $car->brand : null }}"
                               name="brand" placeholder="Производитель" class="form-control">
                    </div>

                    <div class="form-group mb-3">
                        <label for="">Модель</label>
                        <input type="text"
                               value="{{ isset($car) ? $car->title : null }}"
                               name="title" placeholder="Модель" class="form-control">
                    </div>

                    <div class="form-group mb-3">
                        <label for="">Руль</label>
                        <input type="file"
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

@endsection
