@if($loop->even)
    <div style="padding:.5rem; background:#eee;">
@else
    <div style="padding:.5rem; background:#fff;">
@endif

    {{ $post->title }}

    <div>
        <form action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="Delete">
        </form>
    </div>

</div>
