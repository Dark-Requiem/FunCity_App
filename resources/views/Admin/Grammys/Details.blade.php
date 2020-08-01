@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Details</h1>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><b>{{ $grammy->nominee}}</b></h4>
                        <p class="card-text">{{ $grammy->workers }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Winner: </b> {{ $grammy->winner }}</li>
                        <li class="list-group-item"><b>Year: </b> {{ $grammy->year }}</li>
                    </ul>
                    <div class="card-body">
                        <a href="/admin/grammys/" class="btn btn-secondary btn-sm active" role="button" aria-pressed="true">Back</a>
                        <a href="/admin/grammys/edit/{{ $grammy->_id }}" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Edit</a>
                        <a href="/admin/grammys/delete/{{ $grammy->_id }}" class="btn btn-danger btn-sm active" role="button" aria-pressed="true">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
