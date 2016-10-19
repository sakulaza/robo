@extends('layouts.app_operations')

@section('meta')
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    {!! $post->meta_description !!}

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

@section('left')
    {!! $post->content or '' !!}

@endsection

@section('right')

    <div id="right">
        <ul id="r-menu">
            @foreach($right_menu as $r)
                <li @if($r->id == $post_cid) class="selected" @endif >
                    <a href="/{{$r->cname}}">{{$r->title}}</a>
                </li>
            @endforeach
        </ul>


        @include('user.partials.right_bar')


    </div>


@endsection
