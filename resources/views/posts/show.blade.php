@extends("layouts.app")


@section("title", "Show")


@section("content")

    <h1 class="my-5 display-3">Show</h1>


    {{-- @if ($post["is_new"] === true) 

        {{ "NEW COURSE" }}

        
    @else

        {{ "OLD COURSE" }}
        
    @endif --}}



    {{--  As always, you will get the false output using the unless()  --}}
    {{--  @unless ($post["is_new"])


        {{ "Not New Course" }}
        

    @endunless  --}}



    <div class="mb-3">
        <h4>Title: {{ $post["title"] }}</h4>
        <h4>Content: {{ $post["content"] }}</h4>



        @isset($post["has_comments"])

            <p>{{ "You have a comments" }}</p>
        
        @endisset
    </div>


    <a href="{{ route("posts.index") }}">[ Go to your list ]</a>

@endsection