@extends('layouts.compulg')
@section('title')
@lang('main.lblbtnedit')
@endsection
@section('mainttl')
@endsection
@section('content')
@if(Session::has('message'))
@if(Session::get('message') == 'lblactualizado')
<div class="container alert alert-success">
    @lang('main.lblactualizado')
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
<form action="{{ route('posts.update',['post' => $post]) }}" method="post">
    @method('PUT')
    @csrf
    <div class="card">
        <div class="form-group">
            <div class="card-header"><span class="smplbl">@lang('main.lblttlpost')</span></div>
            <input type="text" class="form-control" name="title" id="title" placeholder="Titulo" value="{{ $post->title }}">
            <div class="card-header"><span class="smplbl">@lang('main.lblcontpost')</span></div>
            <textarea class="txtpost form-control" name="content" cols="30" rows="10">{{ $post->content }}</textarea>
            <div class="card-header"><span class="smplbl">@lang('main.lbltemapost')</span>
                <input class="txtwhtbkblack" list="temas" name="tema" placeholder="{{ $post->tema }}" value="{{ $post->tema }}">
                <datalist id="temas">
                    @foreach($temas as $tema)
                    <option value="{{ $tema->nombretema }}">
                    @endforeach
                </datalist>
            </div>
            <button class="btn btn-primary btn-block" type="submit">@lang('main.lblupdate')</button>
        </div>
    </div>
</form>
@endsection
