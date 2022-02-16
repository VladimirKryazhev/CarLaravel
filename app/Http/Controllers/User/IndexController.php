<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $cars = Car::get();
        return view('user.index', compact('cars'));
    }
}
