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
        <h1> 腕</h1>
        <h2>物を投げる、相手を押したりする動作に役立つ筋肉です</br>
        腕は大きく上腕二頭筋と上腕三頭筋の二つに分けられます。</br>
            二つをバランスよく鍛えることでより太く逞しい腕を作り上げることが出来ます。</br>
        
        <div class='training'>
            @foreach ($trainings as $training)
            <div class='training'>
            <h2 class='name'>
            <a href="/trainings/{{ $training->id }}">{{ $training->name }}</a>
            </h2>
            <p class='part'>{{ $training->part }}</p>
            <p class='body'>{{ $training->body }}</p>
            </div>
            @endforeach
            </div>
            <div class='paginate'>
            {{ $trainings->links() }}
            </div>
            
            </h2>
        
                   <div>
            <p>ログインユーザー：{{ Auth::user()->name }}</p>
            </div>
            
    </body>
    </x-app-layout>
</html>