<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViewPet extends Model
{
    use HasFactory;

    protected $table = 'v_pet';

    protected $guarded = [];
    
}