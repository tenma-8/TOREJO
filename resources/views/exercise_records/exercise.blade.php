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
            <div class='exercise_records'>
                @foreach ($exercise_records as $exercise)
                <div class='exercise'>
                    <p class='created_at'>{{ $exercise->created_at }}</p>
                    <p class='training_name'>{{ $exercise->training_name }}</p>
                    <p class='weight'>{{ $exercise->weight }}</p>
                    <p class='count'>{{ $exercise->count }}</p>
                    <p class='numerical_value'>{{ $exercise->numerical_value }}</p>
                    <p class='comment'>{{ $exercise->comment }}</p>
                </div>
                @endforeach
            </div>
            <div>
            <p>ログインユーザー：{{ Auth::user()->name }}</p>
            </div>
            </div>
            <div class='paginate'>
            {{ $exercise_records->links() }}
            </div>
    </body>
    </x-app-layout>
</html>