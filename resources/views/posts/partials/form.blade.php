<div>
    <label>Title</label><br>
    <input type="text" name="title" value="{{ old('title', optional($post ?? null)->title) }}">
    @error('title')
        <div>
            {{ $message }}
        </div>
    @enderror
</div>
<div>
    <label>Content</label><br>
    <textarea name="content">{{ old('content', optional($post ?? null)->content) }}</textarea>
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
