@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Edit Book Record</h1>

            @include('partials.validation-errors')

            <form action="/save-edit-book" method="POST">
                <input type="hidden" name="id" value="{{ $book->getId() }}" />
                @csrf
                <div class="form-group">
                    <label>Book Title</label>
                    <input type="text" class="form-control" name="book_title" value="{{ $book->getBookTitle() }}">
                </div>
                <div class="form-group">
                    <label>Author Name</label>
                    <input type="text" class="form-control" name="author_name" value="{{ $book->getAuthorName() }}">
                </div>
                <div class="form-group">
                    <label>Book Description</label>
                    <input type="text" class="form-control" name="book_description" value="{{ $book->getBookDescription() }}">
                </div>
                <div class="form-group">
                    <label>Year Published</label>
                    <input type="number" class="form-control" name="year_published" value="{{ $book->getYearPublished() }}">
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </form>
        </div>
    </div>
</div>
@endsection
