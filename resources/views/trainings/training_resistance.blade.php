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
        <h1> レジスタンストレーニング</h1>
        <h2>レジスタンストレーニングとは、腕立て伏せスクワットのように、筋肉に繰り返し抵抗（レジスタンス）をかける運動を指し、一般的に筋トレと呼ばれます。</br>
            レジスタンストレーニングの主な効果は、以下の通りです。</br>
            ・筋肉量の増加(筋肥大)</br>
            ・筋力の向上</br>
            ・基礎代謝の向上</br>
            ・体力、持久力の向上</br></br>
            
            鍛えたい体の部位を選んでください。</br></br>
            
            <a href='/trainings/training_arm'>腕</a></br>
            <a href='/trainings/training_resistance'>肩</a></br>
            <a href='/trainings/training_resistance'>背中</a></br>
            <a href='/trainings/training_resistance'>胸</a></br>
            <a href='/trainings/training_resistance'>脚</a></br>

            </h2>
        
                   <div>
            <p>ログインユーザー：{{ Auth::user()->name }}</p>
            </div>
            
    </body>
    </x-app-layout>
</html>