<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Car $car)
    {

        $car->delete();
        return redirect()->route('admin.main.index');
    }
}
