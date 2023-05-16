@extends('layouts.main')

@section('title', 'Edit User')
@section('content')
<form action="{{route('users.update', $users->id)}}" method="POST">
    @csrf

  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" value="{{ $users->name }}" name="name">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" value="{{ $users->email }}" name="email">
  </div>
  <div class="mb-3">
    <label for="phone" class="form-label">No Hp</label>
    <input type="number" class="form-control" id="phone" value="{{ $users->phone }}" name="phone">
  </div>
  <div class="mb-3">
    <label for="address" class="form-label">Address</label>
    <textarea class="form-control" id="address" rows="3" value="{{$users->address}}" name="address"></textarea>
  </div>
  <div class="d-grip gap-2 d-md-flex justify-content-md-start mt-3">
    <a class="btn btn-danger btn-sm" href="/user">Cancel</a>
    <button type="submit" class="btn btn-primary btn-sm">Submit <i class="fa-regular fa-pen-to-square"></i></button>
  </div>
</form>   
@endsection
