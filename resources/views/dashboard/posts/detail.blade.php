@extends('dashboard.layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-md-9">
                <h2>{{ $post->title }}</h2>
                <div class="btn-group my-2">
                    <a href="{{ url('dashboard/posts') }}" class="btn btn-sm text-white btn-primary me-2">Back to posts <span data-feather="arrow-left"></span></a>
                    <a href="{{ url('dashboard/posts/' . $post->slug . '/edit') }}" class="btn btn-sm text-white btn-warning me-2">Edit <span data-feather="edit"></span></a>
                    <form action="{{ url('dashboard/posts/' . $post->slug) }}" method="POST">
                        @method('delete')
                        @csrf
                        <button class="btn btn-sm text-white btn-danger me-2" onclick="return confirm('You sure want to delete this post?');">Delete <span data-feather="x-circle"></button>
                    </form>
                </div>

                @if ( $post->image )
                    <img src="{{ url('img/' . $post->image) }}" class="img-fluid d-block">
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid">
                @endif

                <article class="fs-5 my-3">
                    {!!  $post->body !!}
                </article>

            </div>
        </div>
    </div>

@endsection