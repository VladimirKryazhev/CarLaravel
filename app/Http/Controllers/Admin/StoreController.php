<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $request->only(['brand', 'title', 'wheel']);
        Car::firstOrCreate($data);
        return redirect()->route('admin.main.index');

    }
}
