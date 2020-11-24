@extends('layouts.compulg')
@section('title')
@lang('main.titlepg')
@endsection
@section('mainttl')
@endsection
@section('content')
@if(Session::has('message'))
@if(Session::get('message') == 'lblupdateok')
<div class="container alert alert-success">
    @lang('main.lblupdateok')
</div>
@elseif(Session::get('message') == 'lblactualizado')
<div class="container alert alert-success">
    @lang('main.lblactualizado')
</div>
@else
<div class="container alert alert-success">
    {{ Session::get('message') }}
</div>
@endif
@endif
<div class="card">
    <div class="card-header">@lang('main.lblindice') @lang('main.title')</div>
    <div class="card-body">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif
        <div>
            <a href="{{route('post/index')}}" class="btn btn-primary btn-block">
                @lang('main.lblposts')
            </a>
            <a href="{{route('post/create')}}" class="btn btn-primary btn-block">
                @lang('main.lblcreatepost')
            </a>
            <a href="{{route('post/my')}}" class="btn btn-primary btn-block">@lang('main.lblbtnmyposts')</a>
            <a href="{{route('tema/index')}}" class="btn btn-primary btn-block">@lang('main.lbltemapost')s</a>
            <a href="{{route('perfil/index')}}" class="btn btn-primary btn-block">@lang('main.lblttlindxprfl')</a>
        </div>
    </div>
</div>
@endsection