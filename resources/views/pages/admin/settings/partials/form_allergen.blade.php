@if(isset($errors))
    @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="text-red-500" role="alert">
                {{ $error }}
            </div>
        @endforeach
    @endif
@endif

<form action="{{ route('admin.allergen.store') }}"
      method="post"
      enctype="multipart/form-data">
    @csrf

    <label for="name"></label>
    <input name="name" id="name" type="text">

    <label for="img"></label>
    <input name="img" id="img" type="file">

    <button type="submit">yolo</button>
</form>


<ol>
    @foreach($all_allergens as $allergen)
        <li class="flex">
            <p>{{ $allergen->name }}</p>
            <form action="{{ route('admin.allergen.edit', ['id' => $allergen->id]) }}">
                <button>
                    <svg class="h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                    </svg>
                </button>
            </form>

            <form action="{{ route('admin.allergen.destroy', ['id' => $allergen->id]) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">
                    <svg class="h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                </button>
            </form>
        </li>
    @endforeach
</ol>
