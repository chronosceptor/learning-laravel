@extends('layouts.app')

@section('title', 'Blog Posts')

@section('content')

    @forelse ($posts as $key => $post)
        <div>
            <a href="./{{ $key }}">{{ $post['title'] }}</a>
        </div>
    @empty

        No posts found!

    @endforelse

@endsection
