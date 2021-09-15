@extends("layouts.app")


@section("title", "Edit")


@section("content")

<h1 class="my-4 display-3">Edit Post</h1>

<div>

    <form action="{{ route("posts.update", $post->id)}}" method="POST">
        @csrf
        @method("PUT")
        @include("posts.partials.form")

        <button type="submit" class="btn btn-primary btn-block">Update</button>

    </form>

</div>

@endsection