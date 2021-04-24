@if(isset($errors))
    @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="text-red-500" role="alert">
                {{ $error }}
            </div>
        @endforeach
    @endif
@endif

<form action="{{ route('admin.recipe.store') }}"
      method="post"
      enctype="multipart/form-data"
      class="w-full">
    @csrf
    <div class="w-full flex justify-evenly">
        <div>
            <input name="name" id="name" type="text" placeholder="Nom">
        </div>

        <div>
            <input name="price" id="price" type="text" placeholder="Prix">
        </div>

        <ul>
            <select name="section" id="section">
                <option value="">Section</option>
                @foreach($all_sections as $section)
                    <option value="{{ $section->id }}">{{ $section->name }}</option>
                @endforeach
            </select>
        </ul>
    </div>

    <div class="flex w-full">
        <div>
            <input name="img" id="img" type="file">
        </div>

        <div>
            <input class="w-96" name="alt_img" id="alt_img" type="text" placeholder="Description Image">
        </div>
    </div>

    <hr>
    <ul class="grid grid-cols-2">
        @foreach($all_ingredients as $ingredient)
            <li class="col-span-1">
                <input name="ingredients[]" id="ingredient_{{ $ingredient->id }}"
                       value="{{ $ingredient->id }}"
                       type="checkbox">
                <label for="ingredient_{{ $ingredient->id }}">{{ $ingredient->name }}</label>
            </li>
        @endforeach
    </ul>
    <hr>
    <ul class="grid grid-cols-2">
        @foreach($all_allergens as $allergen)
            <li class="col-span-1">
                <input name="allergens[]" id="allergen_{{ $allergen->id }}"
                       value="{{ $allergen->id }}"
                       type="checkbox">
                <label for="allergen_{{ $allergen->id }}">{{ $allergen->name }}</label>
            </li>
        @endforeach
    </ul>

    <div>
        <select name="menu" id="menu">menu
            <option value="">Menu</option>
            <option value="1">Oui</option>
            <option value="0">Non</option>
        </select>
    </div>

    <button class="button" type="submit">Creer</button>
</form>

