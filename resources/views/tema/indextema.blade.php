@extends('layouts.compulg')
@section('title')
@lang('main.lblttlpsts')
@endsection
@section('mainttl')
@endsection
@section('content')
@if(Session::has('message'))
<div class="container alert alert-success">
    {{ Session::get('message') }}
</div>
@endif
<div>
    <div>
        @foreach($posts as $post)
        <div class="card">
            <div class="card-header"><span class="smplbl">@lang('main.lblttlpost'): </span>{{ $post->title }}</div>
            <div class="card-footer"><span class="smplbl">@lang('main.lblcontpost'): </span><spam class="d-flex justify-content-end">
                    <a href="{{ route('posts.show',['post' => $post]) }}" class="btn btn-primary mr-2">@lang('main.lblbtnver')</a>
            </spam></div>
            <textarea class="form-control" name="content" cols="30" rows="10" readonly>{{ $post->content }}</textarea>
            <div class="card-header"><span class="smplbl">@lang('main.lblautor'): </span>{{ $post->autor }}</div>
            <div class="card-footer"><span class="smplbl">@lang('main.lbltemapost'): </span>{{ $post->tema }}</div>
            <div class="card-footer"><span class="smplbl">@lang('main.lbldatepost'): </span>{{ $post->created_at }}</div>
            <div class="card-footer"><span class="smplbl">@lang('main.lblupdatepost'): </span>{{ $post->updated_at }}</div>
        </div><br>
        @endforeach
    </div>
</div>
@endsection