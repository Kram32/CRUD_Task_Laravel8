@extends("layouts.app")



@section("title", "Blog Posts")


@section("content")
    
    <h1 class="mt-5 display-3">List of Posts</h1>
        


        {{--  @if (count($posts))

            @foreach ($posts as $key => $post)

                <h3>{{ $key }}. {{ $post["title"] }}</h3>
            
            @endforeach


        @else
        
        
            <h3>No Posts</h3>
            
            
        @endif  --}}


        {{--  @forelse is mixed with the if and foreach statement  --}}
        @forelse ($posts as $key => $post)


            {{--  It will skip the content with $key == 1  --}}
            {{--  @continue($key == 1)  --}}
            
            {{--  We use the @break if we want to break the execution of our code  --}}
            {{--  @break($key == 2)  --}}

        @include("posts/partials/post", [])
            
            
        @empty

            <h3>No Posts</h3>
            
        @endforelse
  

@endsection