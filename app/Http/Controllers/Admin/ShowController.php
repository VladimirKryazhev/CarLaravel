<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Car $car)
    {
        return view('admin.main.show', compact('car'));// с помощью компакта делаем доступным переменную категориес во view index в функции
    }
}
