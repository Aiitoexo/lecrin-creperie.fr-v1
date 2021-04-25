<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Allergen;
use App\Models\Ingredient;
use function view;

class AdminController extends Controller
{
    public function index()
    {
        $all_allergens = Allergen::all();
        $all_ingredients = Ingredient::all();

        return view('pages.admin.index', [
            'all_ingredients' => $all_ingredients,
            'all_allergens' => $all_allergens,
            'title' => 'Accueil | Admin'
        ]);
    }

}
