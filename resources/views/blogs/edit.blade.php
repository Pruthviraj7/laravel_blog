@extends('layouts.admin')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Blog</div>

                    <div class="card-body">
                        <form action="{{ route('blogs.update', $blog->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="fname">First Name</label>
                                <input type="text" name="fname" id="fname" class="form-control" value="{{ $blog->fname }}" required>
                            </div>

                            <div class="form-group">
                                <label for="lname">Last Name</label>
                                <input type="text" name="lname" id="lname" class="form-control" value="{{ $blog->lname }}" required>
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" value="{{ $blog->email }}" required>
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" id="description" class="form-control" rows="4" required>{{ $blog->description }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="topic">
                                    Select Topic
                                </label>
                                <select name="topic" id="topic" class="form-control">
                                    @foreach ($topics as $topic)
                                    <option value="{{ $topic->id }}">
                                    {{ $topic->name }}
                                    </option>
                                    @endforeach
                                </select>

                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
