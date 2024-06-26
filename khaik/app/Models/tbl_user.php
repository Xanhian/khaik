<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class tbl_user extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'name', 'lastname', 'password', 'phonenumber', 'email', 'fcm_token'
    ];
    protected $guard = 'users';
    public function getAuthPassword()
    {
        return $this->password;
    }
}
