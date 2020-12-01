<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newspaper extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'intro',
        'image',
        'description',
        'category_id',
        ];

    public $timestamps = false;

    function getNameImage(){
        return '/storage/images/' .ltrim($this->image, '/public/images/');
    }

    function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
