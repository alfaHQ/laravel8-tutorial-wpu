@extends('dashboard.layouts.main')

@section('container')
    @if ( session()->has('success') )
        <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Post Categories</h1>
    </div>

    <a href="{{ url('dashboard/categories/create') }}" class="btn bg-primary btn-dark btn-sm border-0 mt-2"><span class="mx-1" data-feather="plus"></span>New Post</a>

    @if ( count($categories) > 0 )
    <div class="row my-2">
        <div class="col-lg-4">
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $categories as $category )
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->name}}</td>
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