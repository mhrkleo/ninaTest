<!DOCTYPE html>
<html>
<head>
    <title>GeeksforGeeks</title>
</head>
<body>
    <h1>Users</h1>
    <ul>
        @foreach ($articles as $article)
            <li>{{ $article }}</li>
        @endforeach
    </ul>
</body>
</html>