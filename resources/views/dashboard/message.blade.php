@extends('layouts.main')

@section('title', 'Message')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h2>Ω|All Message User Page|Ω</h2>
</div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Message</th>
      </tr>
    </thead>
    <tbody>
      @foreach($message as $ms)
      <tr>
        <th>{{$loop->iteration}}</th>
        <td>{{$ms->name}}</td>
        <td>{{$ms->message}}</td>
        <td>
          <form action="{{ route('users.destroy',$ms->id) }}" method="POST">
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