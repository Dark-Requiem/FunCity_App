@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Delete</h1>
                <form action="/admin/grammys/delete" method= "POST">
                @csrf
                @method('DELETE')
                <input type="hidden" name="grammyid" id="grammyid" value="{{ $grammy->_id }}">
                <div class="form-group">
                        <label for="nominee">Nominee</label>
                        <input class="form-control" type="text" name="nominee" id="nominee" value="{{ $grammy->nominee }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="workers">Workers</label>
                        <input class="form-control" type="Text" name="workers" id="workers" value="{{ $grammy->workers }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="winner">Winner</label>
                        <input class="form-control" type="Text" name="winner" id="winner" value="{{ $grammy->winner }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="year">Year</label>
                        <input class="form-control" type="int" name="year" id="year" value="{{ $grammy->year }}" disabled>
                    </div>
                    <a href="/admin/grammys/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                    <button type="submit" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection