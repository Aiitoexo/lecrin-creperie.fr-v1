<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllergenRecipe extends Model
{
    use HasFactory;

    protected $fillable = [
      'menu_id',
      'allergen_id'
    ];
}
