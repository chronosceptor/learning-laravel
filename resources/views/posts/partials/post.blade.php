@if($loop->even)
    <div style="background:#eee;">
        <a href="./{{ $key }}">{{ $post['title'] }}</a>
    </div>
@else
    <div style="background:#fff;">
        <a href="./{{ $key }}">{{ $post['title'] }}</a>
    </div>
@endif
