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
        <h1> 柔軟トレーニング</h1>
        <h2>柔軟トレーニングとは、腱や関節、筋肉を伸ばし、関節の可動域を広げるトレーニングです。</h2></br>
        
        <h3></br>関節の可動域が広いと、自身の体を思い通り動かしやすくなり、また、ケガ予防にもなります。。
        </h3>
        
        
        <div class='trainings'>
            @foreach ($training as $flexible)
                <div class='training'>
                    <h2 class='name'>
                        <a href="/trainings/{{ $flexible->id }}">{{ $flexible->name }}</a>
                    </h2>
                </div>
            @endforeach
        </div>
            
            <p>ログインユーザー：{{ Auth::user()->name }}</p>
            </div>
            
    </body>
    </x-app-layout>
</html>