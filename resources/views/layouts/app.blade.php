<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix("css/app.css") }}">
    <script src="{{ mix("js/app.js") }}" defer></script>
    <title>@yield("title")</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand font-weight-bold" href="#">Blog App</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ route("home.index") }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route("posts.create") }}">Add</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route("posts.index") }}">Posts</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route("home.contact") }}">Contact</a>
            </li>
          </ul>
        </div>
      </nav>


    <div class="container">
        @if (session("status"))
            <div style="background: green;color: white">
                
                <div class="alert alert-success" role="alert">
                    {{ session("status") }}
                </div>
            </div>
        @endif

        @yield("content")
    </div>

</body>
</html>