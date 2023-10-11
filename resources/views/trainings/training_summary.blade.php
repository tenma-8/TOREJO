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
        <h1> あなたの目的に合ったトレーニングを選んでください。</h1>
        
        <a href='/trainings/training_resistance'>レジスタンストレーニング</a></br>
        <a> 筋肉に繰り返し抵抗（レジスタンス）を負荷をかけるトレーニング。一般的な筋トレはこれを指す。</a></br>
        
        <a href='/exercise_records/exercise_numerical'>スピードトレーニング</a></br>
        <a> スポーツで重要な能力の一つであるスピードを高めるトレーニング。</a>
        
        <a href='/exercise_records/exercise_numerical'>バランスレーニング</a></br>
        <a> 身体をバランスを鍛える、日常においても必要不可欠なトレーニング。体幹などを鍛える。</a>
        
        <a href='/exercise_records/exercise_numerical'>パワートレーニング</a></br>
        <a> 瞬間的に大きな力を発揮するためのトレーニング</a>
        
        <a href='/exercise_records/exercise_numerical'>持久力トレーニング</a></br>
        <a> 運動を持続して行うことで、体の機能を高める方法。</a>
        
        <a href='/exercise_records/exercise_numerical'>柔軟性トレーニング</a></br>
        <a> 筋肉を伸ばすことで関節の可動域を広げ、体の柔軟性を高める運動。</a>
            <div>
            <p>ログインユーザー：{{ Auth::user()->name }}</p>
            </div>
            
    </body>
    </x-app-layout>
</html>