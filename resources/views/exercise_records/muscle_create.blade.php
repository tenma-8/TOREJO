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
        <form action="/exercise_records" method="POST">
            @csrf
            <div class='exercise_records'>
                <p class='training_name'>
                <input type="text" name="exercise_record[training_name]"  placeholder="トレーニング名"/>
                </p>
                <p class='weight'>重量：
                <input type="number" name="exercise_record[weight]" step="0.01" placeholder="000.00"/>kg
                </p>
                <p class='count'>1set
                <input type="number" name="exercise_record[count]" placeholder="0"/>回
                </p>
                <p class='count'>2set
                <input type="number" name="exercise_record[count]" placeholder="0"/>回
                </p>
                <p class='count'>3set
                <input type="number" name="exercise_record[count]" placeholder="0"/>回
                </p>
                <p class='comment'>
                <input type="text" name="exercise_record[comment]"  />
                </p>
            </div>
            <input type="submit" value="保存" />
        </form>
            <div>
            <p>ログインユーザー：{{ Auth::user()->name }}</p>
            </div>
    </body>
    </x-app-layout>
</html>
