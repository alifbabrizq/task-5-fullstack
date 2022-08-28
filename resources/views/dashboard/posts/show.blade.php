@extends('dashboard.layout.main')

@section('content')
    <div class="container">
        <div class="row my-4">
            <div class="col-lg-8">
                <h1 class="mb-3">{{ $post->title }}</h1>
                <a href="/dashboard/posts" class="btn btn-outline-dark"><span data-feather="arrow-left" class=""></span> Back to all post</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit" class=""></span> Edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span data-feather="trash-2" class=""></span> Delete</button>
                </form>
                @if ($post->image)
                    <div style="max-height: 350px; overflow: hidden;">
                        <img class="img-fluid mt-3" src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="{{ $post->category->name }}">
                    </div>
                @else
                    <img class="img-fluid mt-3" style="max-height: 350px; overflow: hidden;" src="https://images.unsplash.com/photo-1461988320302-91bde64fc8e4?ixid=2yJhcHBfaWQiOjEyMDd9&fm=jpg&fit=crop&w=1080&q=80&fit=max" class="card-img-top" alt="{{ $post->category->name }}">
                @endif
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
            </div>
        </div>
    </div>
@endsection