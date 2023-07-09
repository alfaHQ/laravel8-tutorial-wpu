{{-- @dd($post); --}}
@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-md-9">
                <h2>{{ $post->title }}</h2>
                <p>By : <a href="{{ url('author/' . $post->author->username ) }}" class="text-decoration-none">{{ $post->author->name }}</a>
                    in <a href="{{ url('categories/' .  $post->category->slug ) }}" class="text-decoration-none">{{ $post->category->name }}
                    </a>
                </p>

                @if ( $post->image )
                    <img src="{{ url('img/' . $post->image) }}" class="card-img-top" alt="{{ $post->category->name }}">
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid">
                @endif

                <article class="fs-5 my-3">
                    {!!  $post->body !!}
                </article>

                <a href="{{ url('/blog') }}">Back</a>

            </div>
        </div>
    </div>

@endsection