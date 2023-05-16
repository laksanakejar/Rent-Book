@extends('layouts.main')

@section('title', 'Create Book')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2>Ω|Create Book|Ω</h2>
</div>

<form action="{{ route('book.store')}}" method="post">
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" id="title">
    </div>
    <div class="mb-3">
      <label for="author" class="form-label">Author</label>
      <input type="text" class="form-control" id="author">
    </div>
    <div class="mb-3">
      <label for="cover" class="form-label">Cover</label>
      <input type="text" class="form-control" id="cover">
    </div>
    <div class="mb-3">
      <label for="publisher" class="form-label">Publisher</label>
      <input type="text" class="form-control" id="publisher">
    </div>
    <div class="mb-3">
        <label for="synopsis" class="form-label">Synopsis</label>
        <textarea name="synopsis" class="form-control" id="synopsis"></textarea>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection