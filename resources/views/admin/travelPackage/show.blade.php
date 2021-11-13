@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8 p-3">
            <div class="card text-dark bg-light mb-3" >
                <div class="card-header">{{ $package->name }}</div>
                <div class="card-body">
                  <h5 class="card-title">located in {{ $package->locality }}</h5>
                  <p class="card-text">{{$package->description}}</p>
                  <p class="card-text">Price {{$package->price}} &dollar;</p>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection