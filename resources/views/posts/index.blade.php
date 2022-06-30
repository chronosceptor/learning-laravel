@extends('layouts.app')

@section('title', 'Blog Posts')

@section('content')
    @foreach ($posts as $key => $post)
        <div>
            <a href="./{{ $key }}">{{ $post['title'] }}</a>
        </div>
    @endforeach
@endsection
