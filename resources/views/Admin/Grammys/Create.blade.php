@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Create</h1>
                <form action="/admin/grammys/create" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="nominee">Nominee</label>
                        <input class="form-control" type="text" name="nominee" id="nominee">
                    </div>
                    <div class="form-group">
                        <label for="workers">Workers</label>
                        <input class="form-control" type="text" name="workers" id="workers">
                    </div>
                    <div class="form-group">
                        <label for="winner">Winner</label>
                        <input class="form-control" type="text" name="winner" id="winner">
                    </div>
                    <div class="form-group">
                        <label for="year">Year</label>
                        <input class="number" type="int" name="year" id="year">
                    </div>
                    <a href="/admin/grammys/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                    <button type="submit" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Create</>
                    </form>
            </div>
        </div>
    </div>
@endsection