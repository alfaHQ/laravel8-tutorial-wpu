@extends('dashboard.layouts.main')

@section('container')
    <div class="row mb-3">
        <div class="col-lg-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">New Categories</h1>
            </div>

            <form action="{{ url('dashboard/categories') }}" method="POST">
                @csrf

                <div class="mb-2">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required autofocus>
                    <div class="invalid-feedback">
                        @error('name') {{ $message }} @enderror
                    </div>
                </div>

                <div class="mb-2">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug') }}" required>
                    <div class="invalid-feedback">
                        @error('slug') {{ $message }} @enderror
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>

<script>

    const name = document.querySelector('#name');
    const slug = document.querySelector('#slug');

    name.addEventListener('change', function(){
        // cara FETCH

        // fetch('/dashboard/posts/createSlug?title=' + title.value)
        // .then(response => response.json())
        // .then(data => slug.value = data.slug)

        // cara REPLACE

        slug.value = name.value.replace(/\s/g, "-").toLowerCase();;
    });

</script>
@endsection