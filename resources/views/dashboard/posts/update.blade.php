@extends('dashboard.layouts.main')

@section('container')
    <div class="row mb-3">
        <div class="col-lg-8">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Update Post</h1>
            </div>

            <form action="{{ url('dashboard/posts/' . $post->slug) }}" method="POST" enctype="multipart/form-data">
                @method('put')
                @csrf

                <div class="mb-2">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $post->title) }}" required autofocus>
                    <div class="invalid-feedback">
                        @error('title') {{ $message }} @enderror
                    </div>
                </div>

                <div class="mb-2">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug', $post->slug) }}" required>
                    <div class="invalid-feedback">
                        @error('slug') {{ $message }} @enderror
                    </div>
                </div>

               <div class="mb-3">
                    <label for="title" class="form-label">Category</label>
                    <select class="form-select" name="category_id">
                        @foreach ( $categories as $category )
                            @if ( $category->id == old('category_id', $post->category_id) )
                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                            @else
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endif
                        @endforeach
                    </select>
               </div>

               <div class="mb-3">
                    <label for="image" class="form-label @error('image') is-invalid @enderror">Post Image</label>
                    @if ( $post->image )
                        <img class="img-preview img-fluid d-block mb-3" src="{{ url('storage/' . $post->image) }}">
                    @else
                        <img class="img-preview img-fluid d-block mb-3">
                    @endif
                    <input class="form-control" type="file" id="image" name="image" onchange="previewImage()">
                    <div class="invalid-feedback">
                        @error('image') {{ $message }} @enderror
                    </div>
                </div>

               <div class="mb-3">
                    <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}" required>
                    <trix-editor input="body"></trix-editor>
                    <div class="alert-danger">
                        @error('body') {{ $message }} @enderror
                    </div>
               </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>

<script>

    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function(){
        // cara FETCH

        // fetch('/dashboard/posts/createSlug?title=' + title.value)
        // .then(response => response.json())
        // .then(data => slug.value = data.slug)

        // cara REPLACE

        slug.value = title.value.replace(/\s/g, "-").toLowerCase();
    });

    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    });

    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);


        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }

    }

</script>
@endsection