<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardView extends Model
{
    use HasFactory;

    protected $table = 'cards_view';

    protected $guarded = [];
    
}