@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Grammys</h1>
                <a class="text-right" href="/admin/grammys/create">Create New</a>
                <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nominee</th>
                        <th scope="col">Workers</th>
                        <th scope="col">Winner</th>
                        <th scope="col">Year</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($grammys as $grammy)
                    <tr>
                        <th scope="row">{{ $loop->index + 1}}</th>
                        <td>{{ $grammy->nominee }}</td>
                        <td>{{ $grammy->workers }}</td>
                        <td>{{ $grammy->winner }}</td>
                        <td>{{ $grammy->year }}</td>
                        <td>
                            <a href="/admin/grammys/{{ $grammy->_id }}">Details</a> |
                            <a href="/admin/grammys/edit/{{ $grammy->_id }}">Edit</a> |
                            <a href="/admin/grammys/delete/{{ $grammy->_id }}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection