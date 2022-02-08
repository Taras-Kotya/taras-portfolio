<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $table = 'portfolios';
    
    protected $fillable = [
        'title',
        'url',
        'content',
        'image',
        'button_url',
        'button_name'
    ];

}
