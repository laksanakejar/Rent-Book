@extends('layouts.user')

@section('title', 'Dashboard')
@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<h2>Ω|Welcome to RentBook, {{Auth::user()->name}}|Ω</h2>
</div>

@foreach ($data as $dt)
    <div class="row my-4 ms-5">
        <div class="col-md-4 mb-3">
            <div class="card" style="width: 18rem;">
                <img src="{{$data->cover}}" class="card-img-top" alt="..." style="max-height: 400px;">
                <div class="card-body">
                    <h5 class="card-title">{{$data->title}}</h5>
                    <p class="card-text">{{$data->synopsis}}</p>
                    <a href="#" class="btn btn-secondary w-100">Read</a>
                </div>
            </div>
        </div>
    </div>
@endforeach
@endsection