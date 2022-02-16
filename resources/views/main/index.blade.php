@extends('layouts.main')
@section('content')
        <div class="container">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">Производитель</th>
                                <th scope="col">Модель</th>
                                <th scope="col">Расположение руля</th>


                            </tr>
                            </thead>
                            <tbody>
                     @foreach($cars as $car)
                                <tr>
                                    <td>
                                        <a href="{{ route('main.show', $car) }}">{{ $car->brand}}</a>

                                    </td>
                                    <td>
                                        <a href="{{ route('main.show', $car) }}">{{ $car->title}}</a>

                                    </td>
                                    <td>
                                        <a href="{{ route('main.show', $car) }}">{{ $car->wheel}}</a>

                                    </td>

                                </tr>
                            @endforeach

                            </tbody>
                        </table>
        </div>
@endsection




