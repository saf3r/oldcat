<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViewPetColor extends Model
{
    use HasFactory;

    protected $table = 'v_pet_color';

    protected $guarded = [];
    
}