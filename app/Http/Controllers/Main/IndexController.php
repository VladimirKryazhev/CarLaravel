<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;

class IndexController extends Controller
{
    public function __invoke()
    {
        $cars = Car::get();

        return view('main.index', compact('cars'));
    }
}
