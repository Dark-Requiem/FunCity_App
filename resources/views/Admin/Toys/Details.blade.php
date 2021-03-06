@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Details</h1>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><b>{{ $toy->product_name}}</b></h4>
                        <p class="card-text"><b>Price: </b> {{ $toy->price }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Manufacturer: </b> {{ $toy->manufacturer }}</li>
                        <li class="list-group-item"><b>Description: </b> {{ $toy->description }}</li>
                    </ul>
                    <div class="card-body">
                        <a href="/admin/toys/" class="btn btn-secondary btn-sm active" role="button" aria-pressed="true">Back</a>
                        <a href="/admin/toys/edit/{{ $toy->_id }}" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Edit</a>
                        <a href="/admin/toys/delete/{{ $toy->_id }}" class="btn btn-danger btn-sm active" role="button" aria-pressed="true">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
