@extends('layouts.admin')

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                Blog Details
                <a href="{{ route('blogs.index') }}" class="btn btn-sm btn-secondary float-right">Back</a>
            </div>

            <div class="card-body">
                <h5 class="card-title">{{ $blog->fname }} {{ $blog->lname }}</h5>
                <p class="card-text"><strong>Email:</strong> {{ $blog->email }}</p>
                <p class="card-text"><strong>Description:</strong> {{ $blog->description }}</p>
            </div>
        </div>
    </div>
@endsection
