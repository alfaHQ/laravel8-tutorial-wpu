@extends('layouts.main')

@section('container')

    <h2 class="my-4 text-uppercase font-monospace">{{ $title }}</h2>

    <div class="container">
        <div class="row">
            @foreach ( $categories as $category )
            <div class="col-4">
                <a href="{{ url('categories/' . $category->slug )}}">
                <div class="card text-white" style="width: 18rem;">
                    <img src="https://source.unsplash.com/200x200?{{ $category->name }}" class="card-img-top" alt="{{ $category->name }}">
                    <div class="card-img-overlay p-0 d-flex justify-content-center align-items-center">
                        <h5 class="card-title p-2 flex-fill text-center" style="background: rgba(0, 0, 0, .5);">{{ $category->name }}</h5>
                    </div>
                </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
@endsection