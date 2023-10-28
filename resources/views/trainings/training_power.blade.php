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
        <h1> パワートレーニング</h1>
        <h2>パワートレーニングとは、瞬間的に大きなパワーを発揮できるようにするトレー二ングです。</h2></br>
        
        <h3></br>そもそもパワーとは、力×速度　と表されます。言い換えると、大きな力をとても速く発揮できればより大きなパワーを生み出せるということです。
        </br>しかし、力を大きくトレーニング（筋力トレーニング）だけでパワーを大きくするにも限界値があります。理由は力は速度に依存するからです。
        </br>そのため、最大筋力を向上させるトレーニングとは別に、パワー発揮のためのトレーニングが必要となります。
        </h3>
        
        
        <div class='trainings'>
            @foreach ($training as $power)
                <div class='training'>
                    <h2 class='name'>
                        <a href="/trainings/{{ $power->id }}">{{ $power->name }}</a>
                    </h2>
                </div>
            @endforeach
        </div>
            
            <p>ログインユーザー：{{ Auth::user()->name }}</p>
            </div>
            
    </body>
    </x-app-layout>
</html>