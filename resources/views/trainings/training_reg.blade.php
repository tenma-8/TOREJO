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
        <h1> 脚</h1>
        <h2>走る、投げる、跳ぶなど人間の動力の起点となる筋肉です。</br>
        対象部位：大臀筋、中臀筋、大腿四頭筋、ハムストリングス、腓腹筋、ヒラメ筋</br>
        </h2>
        
        <div class='trainings'>
            @foreach ($training as $reg)
                <div class='training'>
                    <h2 class='name'>
                        <a href="/trainings/{{ $reg->id }}">{{ $reg->name }}</a>
                    </h2>
                </div>
            @endforeach
        </div>
            
            <p>ログインユーザー：{{ Auth::user()->name }}</p>
            </div>
            
    </body>
    </x-app-layout>
</html>