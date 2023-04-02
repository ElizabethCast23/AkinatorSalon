<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
    protected $fillable = [
        "first_lastname",
        "second_lastname",
        "first_name",
        "second_name",
        "third_name",
        "sex",
        "document",
        "date_born",
        "year_income",
        "cicle",
        "is_delete",
    ];

    use HasFactory;
}
