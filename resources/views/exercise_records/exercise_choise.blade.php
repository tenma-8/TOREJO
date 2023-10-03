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
        <a href='/exercise_records/muscle_create'>筋力トレーニング</a></br>
        <a> ベンチプレスやスクワットなど重量と回数を記録するのに向いています</a></br>
        <a href='/exercise_records/exercise_numerical'>その他トレーニングを記録する</a></br>
        <a> タイムや回数などを記録するのに向いています</a>
            <div>
            <p>ログインユーザー：{{ Auth::user()->name }}</p>
            </div>
            
    </body>
    </x-app-layout>
</html>