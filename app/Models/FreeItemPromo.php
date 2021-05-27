<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FreeItemPromo extends Model
{
    protected $fillable = [
        'promos_id',
        'menu_items_id',
    ];

    use HasFactory;
}
