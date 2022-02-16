<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $cars = Car::all();
        return view('admin.main.index', compact('cars'));// с помощью компакта делаем доступным переменную категориес во view index в функции
    }
}
