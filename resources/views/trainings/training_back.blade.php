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
        <h1> 背中</h1>
        <h2>首や肩、体幹を支える筋肉です</br>
        対象部位：僧帽筋、広背筋、脊柱起立筋</br>
            鍛えることで腰痛や肩こりの改善やスポーツでは引く動作に役立ちます。</br></h2>
        
        <div class='trainings'>
            @foreach ($training as $back)
                <div class='training'>
                    <h2 class='name'>
                        <a href="/trainings/{{ $back->id }}">{{ $back->name }}</a>
                    </h2>
                </div>
            @endforeach
        </div>
            
            <p>ログインユーザー：{{ Auth::user()->name }}</p>
            </div>
            
    </body>
    </x-app-layout>
</html>