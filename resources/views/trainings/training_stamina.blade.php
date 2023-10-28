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
        <h1>持久力レーニング</h1>
        <h2>持久力は、「全身持久力」（心肺持久力とも呼び、身体のスタミナのことを言う。マラソンなど長時間にわたり全身を動かすことで鍛えられる。）と「筋持久力」（筋肉を長時間使い続けられる能力。全身持久力と違い、負荷がかかっている部位の筋肉しか鍛えられない。）の二つに分けられ、持久力トレーニングとはそれらを鍛えるトレーニングを指します。</h2></br>
        
        <h3></br>持久力を高めることで、少ないエネルギーで身体を動かせるようになり、仕事をしても夕方まで集中できるようになったり、スポーツではパフォーマンスが向上します。
        </h3>
        
        
        <div class='trainings'>
            @foreach ($training as $stamina)
                <div class='training'>
                    <h2 class='name'>
                        <a href="/trainings/{{ $stamina->id }}">{{ $stamina->name }}</a>
                    </h2>
                </div>
            @endforeach
        </div>
            
            <p>ログインユーザー：{{ Auth::user()->name }}</p>
            </div>
            
    </body>
    </x-app-layout>
</html>