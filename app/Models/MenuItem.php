<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    protected $fillable = [
        'name',
        'img',
        'alt_img',
        'price_ht',
        'tva_id',
        'total_tva',
        'price_ttc',
        'section_id',
        'menu'
    ];

    protected $casts = [
        'active' => 'boolean'
    ];

    use HasFactory;

    public function ingredientItemRecipe()
    {
        return $this->belongsToMany(Ingredient::class, 'ingredient_recipes', 'menu_id', 'ingredient_id');
    }

    public function allergenItemRecipe()
    {
        return $this->belongsToMany(Allergen::class, 'allergen_recipes', 'menu_id', 'allergen_id');
    }

    public function sectionMenu()
    {
        return $this->belongsTo(SectionMenu::class, 'section_id');
    }

    public function tvaItems() {
        return $this->belongsTo(TvaRestaurant::class, 'tva_id');
    }
}
