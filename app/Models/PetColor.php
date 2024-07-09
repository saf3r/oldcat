<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetColor extends Model
{
    use HasFactory;

    protected $table = 'pets_color';

    protected $guarded = [];
    public $timestamps = false;
}
