@extends('layouts.compulg')
@section('title')
@lang('main.lblbtnedit')
@endsection
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
<form action="{{ route('perfils.update',['perfil' => $perfil]) }}" method="post">
    @method('PUT')
    @csrf
    <div class="card">
        <div class="form-group">
            <div class="card-header"><span class="smplbl">@lang('main.lblname') </span>: {{ $perfil->user_name }}</div>
            <div class="card-header"><span class="smplbl">@lang('main.lblperfilnames') </span></div>
            <input type="text" class="form-control" name="nombres" id="nombres" value="{{ $perfil->nombres }}">
            <div class="card-header"><span class="smplbl">@lang('main.lblperfilapell') </span></div>
            <input type="text" class="form-control" name="apellidos" id="apellidos" value="{{ $perfil->apellidos }}">
            <div class="card-header smplbl">@lang('main.lblperfilconoce') </div>
            <textarea class="txtpost form-control" name="conocimientos" id="conocimientos" cols="30" rows="10">{{ $perfil->conocimientos }}</textarea>
            <div class="card-header"><span class="smplbl">@lang('main.lblmail') </span>{{ $perfil->email }}</div>
            <div class="card-header txtwhtbkblack"><center>@lang('main.lblrolldelista')</center></div>
            <div class="card-header"><span class="smplbl">@lang('main.lbluserol'): </span>
                <input class="txtwhtbkblack" list="rolls" name="roll_name" placeholder="{{ $perfil->roll_name }}" value="{{ $perfil->roll_name }}">
                <datalist id="rolls">
                    @foreach($rolls as $roll)
                    <option value="{{ $roll->roll_name }}">
                    @endforeach
                </datalist>
            </div>
            <button class="btn btn-primary btn-block" type="submit">@lang('main.lblupdate')</button>
        </div>
        <div class="card"><br><b><center>@lang('main.lblneedmoreacces')</center></b><br></div>
    </div>
</form>
@endsection