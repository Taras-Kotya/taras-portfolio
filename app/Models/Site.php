<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    use HasFactory;
    protected $table = 'sites';
    
    protected $fillable = [
        'title',
        'title_user',
        'welcome_content',
        'photo_colo',
        'photo_back',
        'photo1',
        'photo2',
        'specialty',
        'portfolio_content',
        'portfolio_view'
    ];
}

