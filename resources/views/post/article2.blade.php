@extends('layouts.app_without_right')

@section('meta')
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    {!! $post->meta_description or ''!!}

    <title>{{$post->title or ''}}</title>

@endsection

@section('path')
    <div id="path">
        <a href="/" >首页</a>
        @foreach($path_array as $p)
            / <a href="/{{$p->cname}}" >{{$p->title}}</a>
        @endforeach
    </div>

@endsection

@section('content')
    {!! $post->content or  '' !!}
@endsection

