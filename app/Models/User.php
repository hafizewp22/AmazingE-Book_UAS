<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory;

    protected $table = 'users';

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'gender_id',
        'email',
        'password',
        'role_id',
        'display_picture_link',
    ];

    public function roles()
    {
            return $this->belongsTo(Role::class, 'role_id', 'id');
    }

    public function genders()
    {
        return $this->belongsTo(Gender::class, 'gender_id', 'id');
    }

}
