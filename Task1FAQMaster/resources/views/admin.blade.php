@extends('layouts.app')

@section('content')
    <div class="flex items-center justify-center h-9/10">
        <div class="text-center">
            <h1 class="text-grey-darkest text-4xl mb-6">Admin</h1>
            <p class="uppercase tracking-wide text-sm text-grey-darkest ">For admin users only!</p>
            <div class="flex-center position-ref full-height">
                    <div class="top-right links">
                            <a href="{{ url('/menu') }}">FAQ Menu</a>
                            <a href="{{ url('/category') }}">FAQ Category</a>

                    </div>
        </div>
    </div>
@endsection