<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    use HasFactory;

    protected $table = 'trainers';
//    function companies()
//    {
////        return $this->hasMany("App\Models\Company", "category_id");
//        return $this->morphMany("App\Company", 'category');
//    }
}
