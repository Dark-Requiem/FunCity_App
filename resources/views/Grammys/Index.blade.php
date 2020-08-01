@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Grammys</h1>
                <div class="row">
                        @foreach($grammys as $grammy)
                        <div class="card col-md-3">
                            <div class="card-body">
                            <br>
                                <h5 class="card-title">{{ $grammy->nominee }}</h5>
                                <p class="card-text">{{ $grammy->year }}</p>
                                <a href="/grammys/{{ $grammy->_id }}" class="btn btn-primary">View</a>
                            </div>
                        </div>
                        @endforeach
                        <div class="col-md-12 ">
                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                <div class="btn-group mx-auto" role="group" aria-label="First group">
                                    @php 
                                        $cpage = request('pg') == 0 ? 1 : request('pg');
                                    @endphp

                                    <a href ="/grammys?pg={{ $cpage - 1 }}" class="btn btn-secondary {{ $cpage == 1 ? 'disabled' : '' }}">&lt</a>
                                    @for ($i = 1; $i <= ceil($grammyCount/500); $i++)
                                    <a href="/grammys?pg={{$i}}" class="btn btn-secondary {{ $cpage == $i ? 'disabled' : ''}}">{{$i}}</a>
                                    @endfor
                                    <a href="/grammys?pg={{ $cpage + 1}}" class="btn btn-secondary {{$cpage == ceil($grammyCount/500) ? 'disabled' : '' }}">&gt</a>
                                </div>
                          </div>
                     </div>
                 </div>
            </div>
        </div>
    </div>
@endsection
