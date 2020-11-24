@extends('layouts.compulg')
@section('title')
@lang('main.lblshwttlpst')
@endsection
@section('mainttl')
@endsection
@section('content')
@if(Session::has('message'))
@if (Session::get('message') == 'lblcreado')
<div class="container alert alert-success">
        @lang('main.lblcreado')
</div>
@elseif (Session::get('message') == 'lblactualizado')
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
    <div class="card">
        <div class="card-header"><span class="smplbl">@lang('main.lblttlpost'): </span>{{ $post->title }}</div>
        <div class="card-footer"><span class="smplbl">@lang('main.lblcontpost'): </span></div>
        <textarea class="spmlgcardin" cols="30" rows="10" readonly>{{ $post->content }}</textarea>
        <div class="card-footer"><span class="smplbl">@lang('main.lbltemapost'): </span>{{ $post->tema }}</div>
        <div class="card-header"><span class="smplbl">@lang('main.lblautor'): </span>{{ $post->autor }}</div>
        <div class="card-footer"><span class="smplbl">@lang('main.lbldatepost'): </span>{{ $post->created_at }}</div>
            <div class="card-footer"><span class="smplbl">@lang('main.lblupdatepost'): </span>{{ $post->updated_at }}</div>
    </div><br>
</div>
@endsection