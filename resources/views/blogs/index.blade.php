@extends('layouts.admin')

@section('content')
    <div class="container-fluid py-5" style="background: linear-gradient(135deg, #f6d365 0%, #fda085 100%);">
        <div class="container">
            <div class="row justify-content-center">
                @foreach($blogs as $blog)
                    <div class="col-md-4 mb-4">
                        <div class="card shadow rounded" style="background-color: #fff3e1;">
                            <div class="card-body">
                                <h5 class="card-title text-info">{{ $blog->fname }} {{ $blog->lname }}</h5>
                                <p class="card-text">{{ $blog->description }}</p>
                                <p class="card-text"><small class="text-muted">{{ $blog->email }}</small></p>
                                @if ($blog->topics->isNotEmpty())
                                    <h5>Topics:</h5>
                                    <ul>
                                        @foreach ($blog->topics as $topic)
                                            <li>{{ $topic->name }}</li>
                                        @endforeach
                                    </ul>
                                @else
                                    <p>No topic found.</p>
                                @endif

                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                                    <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

