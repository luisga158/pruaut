@extends('layouts.compulg')
@section('title')
@lang('main.lblbtnmyposts')
@endsection
@section('mainttl')
@endsection
@section('content')
@if(Session::has('message'))
@if (Session::get('message') == 'lblcreado')
<div class="container alert alert-success">
    @lang('main.lblcreado')
</div>
@elseif (Session::get('message') == 'lblborrado')
<div class="container alert alert-success">
    @lang('main.lblborrado')
</div>
@elseif (Session::get('message') == 'lblactualizado')
<div class="container alert alert-success">
    @lang('main.lblactualizado')
</div>
@elseif (Session::get('message') == 'lblnopermisos')
<div class="container alert alert-success">
    @lang('main.lblnopermisos')
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
            @foreach($posts as $post)
            <div class="card">
                <div class="card-header"><span class="smplbl">@lang('main.lblttlpost'): </span>{{ $post->title }}</div>
                <div class="card-footer"><span class="smplbl">@lang('main.lblcontpost'): </span></div>
                <textarea class="spmlgcardin" cols="30" rows="10" readonly>{{ $post->content }}</textarea>
                <div class="card-header"><span class="smplbl">@lang('main.lblautor'): </span>{{ $post->autor }}</div>
                <div class="card-footer"><span class="smplbl">@lang('main.lbltemapost'): </span>{{ $post->tema }}</div>
                <div class="card-footer"><span class="smplbl">@lang('main.lbldatepost'): </span>{{ $post->created_at }}</div>
                <div class="card-footer"><span class="smplbl">@lang('main.lblupdatepost'): </span>{{ $post->updated_at }}</div>
                <div class="card-footer">
                    <spam class="d-flex justify-content-end ml-2">
                        <a href="{{ route('posts.show',['post' => $post]) }}" class="btn btn-primary">@lang('main.lblbtnver')</a>
                        <a href="{{ route('posts.edit',['post' => $post]) }}" class="btn btn-primary ml-2">@lang('main.lblbtnedit')</a>
                        <form action=" {{ route('posts.destroy',['post' => $post]) }} " method="post">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger ml-2 mr-2">@lang('main.lblbtndel')</button>
                        </form>
                    </spam>
                </div>
            </div><br>
            @endforeach
        </div>
    </div>
</div>
@endsection
