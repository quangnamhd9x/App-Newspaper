<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    function newspaper(){
        return $this->hasMany(Newspaper::class, 'category_id');
    }

    public $timestamps = false;
}
