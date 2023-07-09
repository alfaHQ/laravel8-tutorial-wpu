@extends('dashboard.layouts.main')

@section('container')
    @if ( session()->has('success') )
        <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Posts</h1>
    </div>

    <a href="{{ url('dashboard/posts/create') }}" class="btn bg-primary btn-dark btn-sm border-0 mt-2"><span class="mx-1" data-feather="plus"></span>New Post</a>

    @if ( count($posts) > 0 )
    <div class="row my-2">
        <div class="col-lg-8">
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $posts as $post )
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ url('dashboard/posts/' . $post->slug) }}" class="badge bg-info me-2"><span data-feather="eye"></span></a>
                                <a href="{{ url('dashboard/posts/' . $post->slug . '/edit') }}" class="badge bg-warning me-2"><span data-feather="edit"></span></a>
                                <form action="{{ url('dashboard/posts/' . $post->slug) }}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button class="badge bg-danger me-2 border-0" onclick="return confirm('You sure want to delete this post?');"><span data-feather="x-circle"></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div> 
        </div>
    </div>
    @else
        <h2 class="text-danger my-3 font-monospace">Belum ada Postingan</h2>
    @endif
@endsection