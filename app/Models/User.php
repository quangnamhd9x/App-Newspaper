<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'username',
        'image',
        'birthday',
        'gender',
        'address',
        'password',
        'phone',
        'role_id',
        'job_id',
        'email',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];

    public $timestamps = false;

    function getNameImage(){
        return '/storage/images/' .ltrim($this->image, '/public/images/');
    }
}
