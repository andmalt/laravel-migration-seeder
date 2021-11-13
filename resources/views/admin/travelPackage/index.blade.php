@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8 p-3">
            <table class="table table-striped table-hover table-light">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Guests</th>
                        <th scope="col">Locality</th>
                        <th scope="col">Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($travelPackages as $package)
                    <tr>
                        <th scope="row">{{ $package->id }}</th>
                        <td> <a href="{{ route('admin.packages.show', $package->id ) }}">{{ $package->name }}</a></td>
                        <td>{{ $package->guests }}</td>
                        <td>{{ $package->locality }}</td>
                        <td>{{ $package->price }}</td>
                    </tr>
                    @endforeach
                </tbody>    
            </table>
        </div>
    </div>
</div>
    
@endsection