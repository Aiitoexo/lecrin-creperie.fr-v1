@extends('layouts.default')

@section('main')
    <div class="h-screen w-screen relative">
        <div class="z-20 absolute top-0 h-screen w-screen flex justify-center items-center">
            @include('partials.type_command')
            @csrf
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ mix('js/access_carte.js') }}">

                setTimeout(function (){
                    window.location.href = {{ route('homepage') }}
                }, 5000)
    </script>
@endsection


