@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit</h1>
                <form action="/admin/grammys/edit" method= "POST">
                @csrf
                <input type="hidden" name="grammyid" id="grammyid" value="{{ $grammy->_id }}">
                <div class="form-group">
                        <label for="nominee">Nominee</label>
                        <input class="form-control" type="text" name="nominee" id="nominee" value="{{ $grammy->nominee }}">
                    </div>
                    <div class="form-group">
                        <label for="workers">Workers</label>
                        <input class="form-control" type="text" name="workers" id="workers" value="{{ $grammy->workers }}">
                    </div>
                    <div class="form-group">
                        <label for="winner">Winner</label>
                        <input class="form-control" type="winner" name="winner" id="winner" value="{{ $grammy->winner }}">
                    </div>
                    <div class="form-group">
                        <label for="year">Year</label>
                        <input class="form-control" type="int" name="year" id="year" value="{{ $grammy->year }}">
                    </div>
                <a href="/admin/grammys/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                <button type="submit" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Edit</button>
                </form>
            </div>
        </div>
    </div>
@endsection