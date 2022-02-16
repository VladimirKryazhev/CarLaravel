<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $table = 'cars'; // привязываем модель к таблице явно
    protected $guarded = false;// для возможности внесения данных в таблицы, снимаем защиту

}
