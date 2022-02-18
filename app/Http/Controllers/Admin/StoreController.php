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
       // return redirect()->back()->withSuccess('Добавление прошло успешно!'); вариант с выведением сообщения и редиректом на ту же форму с добавлением. Необходимо тогда добавить еще и блок кода с условием вывода через session ('success') во views create

    }
}
