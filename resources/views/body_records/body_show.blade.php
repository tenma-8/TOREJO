<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="weight">
            {{ $body->weight }}
        </h1>
        <p>{{ $body->created_at }}</p>
        </div>
        <div class="footer">
            <a href="/body_records/body">戻る</a>
        </div>
    </body>
</html>