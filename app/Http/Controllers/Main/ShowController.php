<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Car $car)
    {
        return view('main.show', compact('car'));
    }
}
