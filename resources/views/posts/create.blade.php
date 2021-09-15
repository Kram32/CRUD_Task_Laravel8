@extends("layouts.app")



@section("title", "Create Post")


@section("content")

    <h1 class="my-4 display-3">Create Post</h1>

    <div>
        <form action="{{ route("posts.store")}}" method="POST">
            @csrf

            @include("posts.partials.form")
        
            <button type="submit" class="btn btn-primary btn-block">Create</button>

        </form>
    </div>


@endsection