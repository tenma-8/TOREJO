<!DOCTYPE html>//
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
        
            <input type="submit" value="保存" />
        </form>
            <div>
            <p>ログインユーザー：{{ Auth::user()->name }}</p>
            </div>
    </body>
    </x-app-layout>
</html>