<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_article_price extends Model
{
    use HasFactory;
    protected $fillable = [
        'article_price_number',
    ];
}
