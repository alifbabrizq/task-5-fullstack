@extends('layouts.main')

@section('content')
    <h1 class="mb-5 fw-bold">Post Categories</h1>

    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-md-4 mb-4">
                    <a href="/posts?category={{ $category->slug }}">
                        <div class="card text-bg-dark">
                            <img src="https://images.unsplash.com/photo-1416339306562-f3d12fefd36f?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max&s=92f3e02f63678acc8416d044e189f515" class="card-img" alt="{{ $category->name }}">
                            <div class="card-img-overlay d-flex align-items-center p-0  bg-dark bg-opacity-75">
                                <h5 class="card-title text-center flex-fill p-4 fs-3 text-white">{{ $category->name }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    
@endsection