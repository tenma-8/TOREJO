<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-app-layout>
    <x-slot name="header">
    <head>
        <meta charset="utf-8">
        <title>Torejo</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    </x-slot>
    <body>
        <h1>今日のあなたを記録しましょう！！</h1>
        <form action="/body_records" method="POST">
        　　 @csrf
            <div class='height'>
                <h2>身長：</h2>
                <input type="number" name="body[height]" step="0.01" placeholder="000.00"/>
            </div>    
            <div class='weight'>    
                <h2>体重：</h2>
                <input type="number" name="body[weight]" step="0.01" placeholder="000.00"/>
            </div>
            <input type="submit" value="store" />
        </form>
        
        <h1>graph</h1>
        {{ $log_list }}

        <div>
            <p>ログインユーザー：{{ Auth::user()->name }}</p>
        </div>
    </body>
    </x-app-layout>
</html>
