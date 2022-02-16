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

                <tr>
                    <td>
                        <p>{{ $car->brand}}</p>

                    </td>
                    <td>
                        <p>{{ $car->title}}</p>

                    </td>
                    <td>
                        <p>{{ $car->wheel}}</p>

                    </td>

                </tr>


            </tbody>
        </table>
    </div>
@endsection





