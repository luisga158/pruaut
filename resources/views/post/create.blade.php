@extends('layouts.compulg')
@section('title','Crear Publicacion')
@section('mainttl')
@endsection
@section('content')
    @if(Session::has('message'))
        <div class="container alert alert-success">
            {{ Session::get('message') }}
        </div>
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
<form action="{{ route('posts.store') }}" method="post">
    @csrf
    <div>
        <div class="card">
            <div class="form-group">
                <div class="card-header"><span class="smplbl">@lang('main.lblttlpost')</span></div>
                <input type="text" class="form-control" name="title" id="title" placeholder="Titulo" value="{{ old('title') }}">
                <div class="card-header"><span class="smplbl">@lang('main.lblcontpost')</span></div>
                <textarea class="form-control" name="content" cols="30" rows="10">{{ old('content') }}</textarea>
                <div class="card-header"><span class="smplbl">@lang('main.lbltemapost')</span></div>
                <input list="temas" name="tema" value="{{ old('nombretema') }}">
                <datalist id="temas">
                    @foreach($temas as $tema)
                    <option value="{{ $tema->nombretema }}">
                    @endforeach
                </datalist>
            </div>
        </div>
        <div>
            <button class="btn btn-primary btn-block" type="submit">@lang('main.lblbtnsnd')</button>
        </div>
    </div>
</form>
@endsection