<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
</head>

<body>


    <h1>
        Hello world!
    </h1>

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
</body>

</html>