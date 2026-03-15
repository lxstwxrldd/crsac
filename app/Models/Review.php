<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['place_id', 'user_name', 'rating', 'comment'];
}
