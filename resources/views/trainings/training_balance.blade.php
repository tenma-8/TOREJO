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
        <h1> バランスレーニング</h1>
        <h2>バランストレーニングとは、不安定な場所でトレーニングを行うことで、普段刺激されにくい筋肉・腱・関節に刺激を与えるトレーニングです。</br>自身の重心位置をコントロールできるようになるので、スポーツではパフォーマンスアップ、ケガ予防に効果があります。</h2></br>
        
        
        
        <div class='trainings'>
            @foreach ($training as $balance)
                <div class='training'>
                    <h2 class='name'>
                        <a href="/trainings/{{ $balance->id }}">{{ $balance->name }}</a>
                    </h2>
                </div>
            @endforeach
        </div>
            
            <p>ログインユーザー：{{ Auth::user()->name }}</p>
            </div>
            
    </body>
    </x-app-layout>
</html>