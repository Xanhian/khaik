<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_article extends Model
{
    use HasFactory;
    protected $fillable = [
        'article_name',
        'article_option',


    ];
}
