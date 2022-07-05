@extends('layouts.app')

@section('title', 'Create Post')

@section('content')

<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <div>
        <label>Title</label><br>
        <input type="text" name="title">
        @error('title')
            <div>
                {{ $message }}
            </div>
        @enderror
    </div>
    <div>
        <label>Content</label><br>
        <textarea name="content"></textarea>
        @error('content')
            <div>
                {{ $message }}
            </div>
        @enderror
    </div>

    @if($errors->any())
        <div>
            <ul>
                @foreach( $errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div>
        <input type="submit" value="Create">
    </div>
</form>

@endsection
