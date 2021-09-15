{{-- @if ($loop->even)

<h3>{{ $key }}. {{ $post["title"] }}</h3>

@else

<h3>Odd Key</h3>

@endif --}}


<div class="my-5">
    <h3>Title: {{ $post["title"] }}</h3>
    <h3>Content: {{ $post["content"] }}</h3>

    <div>
        <p>Created {{ $post["created_at"]->diffForHumans(); }}</p> 
        <p>Updated {{ $post["updated_at"]->diffForHumans(); }}</p>
    </div>

    <div>
        <form action="{{ route("posts.destroy", $post->id) }}" method="post">
            @csrf
            @method("DELETE")
            <button type="submit" class="btn btn-danger">Delete</button>
            <a href="{{ route("posts.edit", $post->id) }}" class="btn btn-success">Edit</a>
        </form>

        
    </div>
</div>