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
        <h1> 胸</h1>
        <h2>腕を持ち上げる、押し上げるなど腕を動かすときに役立つ筋肉です</br>
        対象部位：大胸筋、小胸筋、前鋸（ぜんきょ）筋</br>
            上腕と連動しているため腕を使うスポーツに重要な筋肉です。</br></h2>
        
        <div class='trainings'>
            @foreach ($training as $chest)
                <div class='training'>
                    <h2 class='name'>
                        <a href="/trainings/{{ $chest->id }}">{{ $chest->name }}</a>
                    </h2>
                </div>
            @endforeach
        </div>
            
            <p>ログインユーザー：{{ Auth::user()->name }}</p>
            </div>
            
    </body>
    </x-app-layout>
</html>