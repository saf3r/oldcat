<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatColor extends Model
{
    use HasFactory;

    protected $table = 'cats_color';

    protected $guarded = [];
    public $timestamps = false;
}
