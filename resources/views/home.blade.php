<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>


    <div id="main-container">
        <h1>Home Page</h1>
        <ul id="links">
           <li><a href="{{ route('home') }}">Home</a></li>
           <li><a href="{{ route('news') }}">News</a></li>
           <li><a href="{{ route('articles') }}">Articles</a></li>
           <li><a href="{{ route('about_us') }}">About Us</a></li>
        </ul>

        <h4>
            {{$introduction}}
        </h4>
        <strong>Things to do to learn Laravel:</strong>
        <ul>
            @foreach ($toDo as $singleToDo)
            <li>
                {{$singleToDo}}
            </li>
            @endforeach
        </ul>
    </div>
</body>

</html>