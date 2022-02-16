<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Car $car)
    {
        return view('admin.main.create', compact('car'));
    }
}
