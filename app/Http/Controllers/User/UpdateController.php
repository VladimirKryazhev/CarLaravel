<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke (Request $request, Car $car)
    {

        $data = $request->only(['brand', 'title', 'wheel']);//если без валидации с условием only
        $car->update($data);
        return redirect()->route('user.index');

    }
}
