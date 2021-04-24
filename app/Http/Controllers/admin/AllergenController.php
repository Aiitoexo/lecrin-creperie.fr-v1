<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\TypeAllergen;
use App\Models\TypeIngredient;
use http\Cookie;
use Illuminate\Http\Request;
use function date;
use function dd;
use function http_build_cookie;
use function redirect;
use function response;
use function route;
use function sprintf;
use function storage_path;
use function str_replace;
use function view;

class AllergenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|unique:type_allergens,name',
            'img' => 'required|image'
        ]);

        $data_name = str_replace(" ", "", $data['name']);

        $file_name = sprintf('%s-%s.%s', $data_name, date('d.m.y'),
            $request->file('img')->getClientOriginalExtension());
        $request->file('img')->move(storage_path('app/public/img_allergens'), $file_name);

        $data['img'] = sprintf('storage/img_allergens/%s', $file_name);

        TypeAllergen::create($data);

        return redirect(route('admin.ingredient.allergen'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $allergen_item = TypeAllergen::findOrFail($id);
        $all_ingredients = TypeIngredient::all();
        $all_allergens = TypeAllergen::all();

        return view('pages.admin.ingredient_allergen.index', [
            'allergen_item' => $allergen_item,
            'all_ingredients' => $all_ingredients,
            'all_allergens' => $all_allergens,
            'title' => 'Ingredient Allergen | Admin'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'img' => 'image'
        ]);


        $ingredient = TypeAllergen::findOrFail($id);
        $ingredient->update($data);

        return redirect(route('admin.ingredient.allergen'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ingredient = TypeAllergen::findOrFail($id);
        $ingredient->delete();
        return redirect()->back();
    }
}