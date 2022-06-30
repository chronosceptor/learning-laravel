@extends('layouts.app')

@section('title', $post['title'])

@section('content')

    @if($post['is_new'])
        <div>Its new</div>
    @else
        <div>Its old</div>
    @endif

    @unless($post['is_new'])
        <div>Its an old post using unless</div>
    @endunless

    <h1>{{ $post['title'] }}</h1>
    <p>{{ $post['content'] }}</p>

    @isset(  $post['has_comments'] )
        This post has comments using isset
    @endisset


@endsection
