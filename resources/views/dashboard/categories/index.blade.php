@extends('dashboard.layout.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Post Categories</h1>
    </div>

    @if (session('success'))    
      <div class="alert alert-success col-lg-6" role="alert">
        {{ session('success') }}
      </div>
    @endif

    <div class="table-responsive col-lg-6">
        <a href="/dashboard/categories/create" class="btn btn-primary mb-3">Create Categories</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Category Name</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($categories as $category)    
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge bg-warning"><span data-feather="edit" class="align-text-bottom"></span></a>
                        <form action="/dashboard/categories/{{ $category->slug }}" method="POST" class="d-inline">
                          @csrf
                          @method('delete')
                          <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="trash-2" class="align-text-bottom"></span></button>
                        </form>
                    </td>
                </tr>
            @endforeach
          </tbody>
        </table>
    </div>
@endsection