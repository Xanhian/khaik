<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class tbl_restaurant_owner extends Authenticatable

{
    use HasFactory;
    protected $guard = 'vendors';
    protected $guarded = ['id'];
    public function getAuthPassword()
    {
        return $this->password;
    }
}
