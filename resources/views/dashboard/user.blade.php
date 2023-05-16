@extends('layouts.main')

@section('title', 'User')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h2>Ω|All User Page|Ω</h2>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">No HP</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $dt)
    <tr>
      <th>{{$loop->iteration}}</th>
      <td>{{$dt->name}}</td>
      <td>{{$dt->email}}</td>
      <td>{{$dt->phone}}</td>
      <td>{{$dt->address}}</td>
      <td>
        <form action="{{ route('users.destroy',$dt->id) }}" method="POST">

         <a class="fa-solid fa-pen btn" href="{{route('users.edit', $dt->id)}}">EDIT</a>

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