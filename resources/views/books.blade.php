@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            @if (Session::has('message'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('message') }}
            </div>
            @endif

            @if (Session::has('error'))
            <div class="alert alert-danger" role="alert">
                {{ Session::get('error') }}
            </div>
            @endif

            <div>
                <a class="btn btn-primary btn-sm" href="/new-book-form">Add a Book</a>
            </div>
            <br>
            <table class="table" id="books-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Book Title</th>
                    <th>Author Name</th>
                    <th>Book Description</th>
                    <th>Year Published</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($library_books as $book)
                <tr>
                    <td>{{ $book->getId() }}</td>
                    <td>{{ $book->getBookTitle() }}</td>
                    <td>{{ $book->getAuthorName() }}</td>
                    <td>{{ $book->getBookDescription() }}</td>
                    <td>{{ $book->getYearPublished() }}</td>
                    <td>
                        <a class="btn btn-info btn-sm" href="/edit-book/{{ $book->getId() }}">
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" onclick="return confirmDelete()" href="/delete-book/{{ $book->getId() }}">
                            Delete
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
</div>

<script>
function confirmDelete() {
    var answer = confirm("Are you sure you want to remove this record? This cannot be undone.");
    if (answer == true) {
        return true;
    }
    return false;
}

jQuery(document).ready( function () {
    jQuery('#books-table').DataTable();
});
</script>
@endsection
