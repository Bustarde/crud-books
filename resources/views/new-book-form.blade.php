@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Add New Book</h1>

            @include('partials.validation-errors')

            <form action="/save-new-book" method="POST">
                @csrf
                <div class="form-group">
                    <label>Book Title</label>
                    <input type="text" class="form-control" name="book_title" required>
                </div>
                <div class="form-group">
                    <label>Author Name</label>
                    <input type="text" class="form-control" name="author_name" required>
                </div>
                <div class="form-group">
                    <label>Book Description</label>
                    <input type="text" class="form-control" name="book_description">
                </div>
                <div class="form-group">
                    <label>Year Published</label>
                    <input type="number" class="form-control" name="year_published">
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </form>
        </div>
    </div>
</div>
@endsection
