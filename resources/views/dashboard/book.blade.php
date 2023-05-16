@extends('layouts.main')

@section('title', 'Book')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<h2>Ω|Books Page|Ω</h2>
</div>
<a class="btn btn-primary" href="{{route('book.create')}}">Create new Book</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">title</th>
      <th scope="col">author</th>
      <th scope="col">cover</th>
      <th scope="col">publisher</th>
      <th scope="col">synopsis</th>
    </tr>
  </thead>
  <tbody>
    @foreach($book as $bk)
    <tr>
      <th>{{$loop->iteration}}</th>
      <td>{{$bk->title}}</td>
      <td>{{$bk->author}}</td>
      <td>{{$bk->cover}}</td>
      <td>{{$bk->publisher}}</td>
      <td>{{$bk->synopsis}}</td>
      <td>
        <form action="{{ route('users.destroy',$bk->id) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="fas da-trash text-danger btn">DELETE</button>
        </form>
      </td>
    @endforeach
    </tr>
  </tbody>
</table>
@endsection