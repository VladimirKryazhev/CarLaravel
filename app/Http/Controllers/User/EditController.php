<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Car $car)
    {
        return view('user.edit', compact('car'));
    }
}
