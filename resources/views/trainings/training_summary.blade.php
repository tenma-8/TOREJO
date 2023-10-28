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
        <h1> あなたの目的に合ったトレーニングを選んでください。</h1></br>
        
        
        <a href='/trainings/training_resistance'>１、レジスタンストレーニング</a>
        <a> ：筋肉に繰り返し抵抗（レジスタンス）を負荷をかけるトレーニング。</a></br>
        
        <a href='/trainings/training_saq'>２、SAQトレーニング</a>
        <a> ：スポーツで重要なスピード(Speed)、アジリティ(Agility)、クイックネス(Quickness)を鍛えるトレーニング。</a></br>
        
        <a href='/trainings/training_balance'>３、バランスレーニング</a>
        <a> ：身体をバランスを鍛える、日常においても必要不可欠なトレーニング。体幹などを鍛える。</a></br>

        
        <a href='/trainings/training_power'>４、パワートレーニング</a>
        <a>：瞬間的に大きな力を発揮するためのトレーニング。</a></br>
        
        
        <a href='/trainings/training_stamina'>５、持久力トレーニング</a>
         <a> ：運動を持続して行うことで、体の機能を高める方法。</a></br>
       
        
        <a href='/trainings/training_flexible'>６、柔軟トレーニング</a> 
        <a> ：筋肉を伸ばすことで関節の可動域を広げ、体の柔軟性を高めるトレーニング。</a></br>
            
            <div>
            <p>ログインユーザー：{{ Auth::user()->name }}</p>
            </div>
            
    </body>
    </x-app-layout>
</html>