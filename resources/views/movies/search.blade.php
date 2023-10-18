<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Search results:</h1>
    <form action="/search" method="GET">
        <input type="text" name="search">
        <input type="submit">
    </form>
    <ul>
        @if ($searchItem != null)
        @foreach ($search as $key=>$result)
            <li>
                {{ $search[$key]->name }}
            </li>
        @endforeach
        @endif
    </ul>
</body>
</html>