@extends('layouts.main')

@section('container')

    <h2 class="my-4 text-uppercase font-monospace">{{ $title }}</h2>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="{{ url('/blog') }}">
                @if( request('category') )
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif

                @if( request('author') )
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari postingan.." name="search" value="{{ request('search') }}">
                    <button class="btn btn-outline-danger" type="submit">Cari</button>
                  </div>
            </form>
        </div>
    </div>

    @if( $posts->count() ) 
    <div class="card mb-5" id="hero-post">
    @if ( $posts[0]->image )
            <img src="{{ url('img/' . $posts[0]->image) }}" sclass="card-img-top" alt="{{ $posts[0]->category->name }}">
        @else
            <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" sclass="card-img-top" alt="{{ $posts[0]->category->name }}">
        @endif
        
        <div class="card-body text-center">
            <h2 class="card-title">
            <a href="{{ url('blog/' . $posts[0]->slug ) }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a>
            </h2>
            <small class="text-muted">
            By : <a href="{{ url('blog?author=' . $posts[0]->author->username ) }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a>
                in <a href="{{ url('blog?category=' .  $posts[0]->category->slug ) }}" class="text-decoration-none">{{ $posts[0]->category->name }} 
                </a>
                {{ $posts[0]->created_at->diffForHumans() }}
            </small>
            <p class="card-text">{{ $posts[0]->excerpt }}</p>
            <a href="{{ url('blog/' . $posts[0]->slug) }}" class="text-decoration-none btn btn-primary btn-sm">
            Read more
            </a>
        </div>
    </div>

    <div class="container">
        <div class="row">
            @foreach ( $posts->skip(1) as $post  )
            <div class="col-md-4 mb-5">
                
                <div class="card" style="width: 18rem;">
                    <div class="label-category position-absolute bg-dark text-white px-2 py-1" style="background: rgba(0, 0, 0, .4);">
                        <a href="{{ url('blog?category=' . $post->category->slug) }}" class="text-decoration-none text-white">{{ $post->category->name }}</a>
                    </div>
                    @if ( $post->image )
                        <img src="{{ url('img/' . $post->image) }}" class="card-img-top" alt="{{ $post->category->name }}">
                    @else
                        <img src="https://source.unsplash.com/600x300?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                    @endif
                   
                    <div class="card-body">
                    <h5 class="card-title">
                        <a href="{{ url('blog/' . $post->slug ) }}" class="text-decoration-none text-dark">{{ $post->title }}</a>
                    </h5>
                    <small class="text-muted">
                        By : <a href="{{ url('blog?author=' . $post->author->username ) }}" class="text-decoration-none">{{ $post->author->name }}</a>
                        {{ $post->created_at->diffForHumans() }}
                    </small>
                    <p class="card-text my-3">{{ $post->excerpt }}</p>
                    <a href="{{ url('blog/' . $post->slug) }}" class="text-decoration-none btn btn-primary btn-sm">
                        Read more
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @else
        <h2 class="font-monospace text-danger">Belum terdapat postingan</h2>
    @endif

    <div>
        {{ $posts->links() }}
    </div>
@endsection