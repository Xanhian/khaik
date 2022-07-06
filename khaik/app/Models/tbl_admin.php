<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class tbl_admin extends Authenticatable
{
    protected $fillable = [
        'fcm_token',
    ];
    use HasFactory;

    protected $guard = 'admin';
    protected $guarded = ['id'];

    public function getAuthPassword()
    {
        return $this->password;
    }
}
