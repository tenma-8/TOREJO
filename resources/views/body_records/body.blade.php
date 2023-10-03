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
        <h1>今日のご予定は？</h1>
        <h2>トレー二ングの記録</h2>
        <h2>トレーニングを探す</h2>
        <h3>今日のあなたを記録しましょう！！</h3>
        <form action="/body_records" method="POST">
            @csrf
            <div class='height'>
                <p>身長：</p>
                <input type="number" name="body[height]" step="0.01" placeholder="000.00"/>
            </div>    
            <div class='weight'>    
                <p>体重：</p>
                <input type="number" name="body[weight]" step="0.01" placeholder="000.00"/>
            </div>
            <input type="submit" value="保存" />
        </form>
        <div>
            <p>ログインユーザー：{{ Auth::user()->name }}</p>
        </div>
    </body>
    </x-app-layout>
</html>
