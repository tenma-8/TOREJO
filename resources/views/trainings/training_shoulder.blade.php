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
        <h1> 肩</h1>
        <h2>肩は全てのスポーツで使う場所であり、肩関節を守るのに役に立つ筋肉です。</br>
        対象部位:三角筋</br>
            肩はほとんどのスポーツで使う筋肉で、特に投げる動作に使い、痛める頻度が高い場所です。肩の筋力トレーニングとともに柔軟トレーニングも一緒に行うようにしましょう。</br></h2>
        
        <div class='trainings'>
            @foreach ($training as $shoulder)
                <div class='training'>
                    <h2 class='name'>
                        <a href="/trainings/{{ $shoulder->id }}">{{ $shoulder->name }}</a>
                    </h2>
                </div>
            @endforeach
        </div>
            
            <p>ログインユーザー：{{ Auth::user()->name }}</p>
            </div>
            
    </body>
    </x-app-layout>
</html>