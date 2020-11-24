@extends('layouts.compulg')
@section('title','Crear Tema')
@section('mainttl')
@endsection
@section('content')
@if(Session::has('message'))
@if(Session::get('message') == 'lblyacreado')
<div class="container alert alert-success">
    @lang('main.lblyacreado')
</div>
@else
<div class="container alert alert-success">
    {{ Session::get('message') }}
</div>
@endif
@endif
@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{ route('temas.store') }}" method="post">
    @csrf
    <div class="card">
        <div>
            <div class="form-group">
                <div class="card-header"><span class="smplbl">@lang('main.lbltemapost')</span></div>
                <input type="text" class="form-control" name="nombretema" id="nombretema" value="{{ old('nombretema') }}">
            </div>
        </div>
        <div>
            <button class="btn btn-primary btn-block" type="submit">@lang('main.lblbtncrear')</button>
        </div>
    </div>
</form>
@endsection
