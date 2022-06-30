@extends('layouts.app')

@section('title', $post['title'])

@section('content')

    @if($post['is_new'])
        <div>Its new</div>
    @else
        <div>Its old</div>
    @endif

    <h1>{{ $post['title'] }}</h1>
    <p>{{ $post['content'] }}</p>
@endsection
