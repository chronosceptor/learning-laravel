@extends('layouts.app')

@section('title', 'Create Post')

@section('content')

<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <div>
        <label>Title</label><br>
        <input type="text" name="title">
    </div>
    <div>
        <label>Content</label><br>
        <textarea name="content"></textarea>
    </div>
    <div>
        <input type="submit" value="Create">
    </div>
</form>

@endsection
