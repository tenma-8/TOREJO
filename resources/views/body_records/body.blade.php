<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Torejo</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body>
        <h1>今日のご予定は？</h1>
        <h2>トレー二ングの記録</h2>
        <h2>トレーニングを探す</h2>
        <h3>あなたの身長と体重を教えてください</h3>
        <form action="/body_records" method="POST">
            @csrf
            <div class='body_records'>
                <div class='body'>
                <p class='height'>身長：
                <input type="number" name="body[height]" step="0.01" placeholder="半角000.00"/>cm
                </p>
                <p class='weight'>体重：
                <input type="number" name="body[weight]" step="0.01" placeholder="半角000.00"/>kg
                </p>
                </div>
            </div>
            <input type="submit" value="保存" />
            </form>
    </body>
</html>
