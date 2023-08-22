<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Torejo</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body>
        <h1>あなたの身長と体重を教えてください</h1>
        <form action="/body_records" method="POST">
            @csrf
            <div class='body_records'>
                @foreach ($body_records as $body_record)
                <div class='body'>
                <p class='height'>身長：{{ $body_record->height }} </p>
                <p class='weight'>体重：{{ $body_record->weight }} </p>
                </div>
                @endforeach
            </div>
    </body>
</html>
