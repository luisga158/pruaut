@extends('layouts.compulg')
@section('title')
@lang('main.lblttlindxprfl')
@endsection
@section('mainttl')
@endsection
@section('content')
@if(Session::has('message'))
@if(Session::get('message') == 'lblactualizado')
<div class="container alert alert-success">
    @lang('main.lblactualizado')
</div>
@else
<div class="container alert alert-success">
    {{ Session::get('message') }}
</div>
@endif
@endif
<div>
    <div>
        <div>
            @foreach($perfils as $perfil)
            <div class="card">
                <div class="card-header"><span class="smplbl">@lang('main.lblname') </span>{{ $perfil->user_name }}</div>
                <div class="card-footer"><span class="smplbl">@lang('main.lblperfilnames') </span>{{ $perfil->nombres }}</div>
                <div class="card-header"><span class="smplbl">@lang('main.lblperfilapell') </span>{{ $perfil->apellidos }}</div>
                <div class="card-footer smplbl">@lang('main.lblperfilconoce') </div>
                <textarea class="spmlgcardin" cols="30" rows="10" readonly>{{ $perfil->conocimientos }}</textarea>
                <div class="card-footer"><span class="smplbl">@lang('main.lbluserol') </span>{{ $perfil->roll_name }}</div>
                <div class="card-header"><span class="smplbl">@lang('main.lblmail') </span>{{ $perfil->email }}</div>
                <div class="card-footer">
                    <spam class="d-flex justify-content-end ml-2">
                        <a href="{{ route('perfils.editroll',['perfil' => $perfil]) }}" class="btn btn-primary ml-2">@lang('main.lblbtnedit')</a>
                    </spam>
                </div>
            </div><br>
            @endforeach
        </div>
    </div>
</div>
@endsection
