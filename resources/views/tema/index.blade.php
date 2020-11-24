@extends('layouts.compulg')
@section('title','Publicaciones por temas')
@section('mainttl')
@endsection
@section('content')
@if(Session::has('message'))
@if(Session::get('message') == 'lblcreado')
<div class="container alert alert-success">
    @lang('main.lblcreado')
</div>
@else
<div class="container alert alert-success">
    {{ Session::get('message') }}
</div>
@endif
@endif
<div>
    <div class="card">
        <div class="card-header"></div>
        @foreach($temas as $tema)
        <div class="card-header">
            <a href="{{route('temas.show', ['tema' => $tema])}}" class="btn"><b>{{ $tema->nombretema }}</b></a>
        </div>
        @endforeach
    </div><br>
    <div>
        <a href="{{route('tema/create')}}" class="btn btn-primary">@lang('main.lblbtncrear')</a>
    </div>
</div>
@endsection
