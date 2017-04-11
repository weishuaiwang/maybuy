<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
    .pagination li{display: inline-block; width: 18px; height: 18px; line-height: 18px; padding: 3px; border:1px solid #ddd;margin: 3px; text-align: center;}
    </style>
</head>
<body>
    <ul>
        @foreach ($users as $user)
        <li>{{ $user->email }}</li>
        @endforeach
    </ul>

    {{ $users->links() }}
</body>
</html>