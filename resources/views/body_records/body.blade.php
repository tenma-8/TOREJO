<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <x-app-layout>
    <x-slot name="header">
    <head>
        <meta charset="utf-8">
        <title>Torejo</title>

        <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>

    </head>
   </x-slot>
    
    <body style="background-color: white;">
        <h1>今日のあなたを記録しましょう！！</h1>
        <form action="/body_records" method="POST">
        　　 @csrf
            <div class='height'>
                <h2>身長：</h2>
                <input type="number" name="body[height]" step="0.01" placeholder="000.00"/>
            </div>    
            <div class='weight'>    
                <h2>体重：</h2>
                <input type="number" name="body[weight]" step="0.01" placeholder="000.00"/>
            </div>
            <input type="submit" value="store" />
        </form>

       
        <div style="width:500px;">
            <h2>一週間ごとの体重グラフ</h2>
            <canvas id="chart-container"></canvas>
        </div>
    

        <script>
            var ctx = document.getElementById('chart-container').getContext('2d');
            var chartData = @json($data);
            
            var months = chartData.map(data => data.created_at);
            var weights = chartData.map(data => data.weight);
        
            var chart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: months,
                    datasets: [{
                        label: '体重',
                        data: weights,
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }]
                }
            });
        </script>

        <div>
            <p>ログインユーザー：{{ Auth::user()->name }}</p>
        </div>
    </body>
    </x-app-layout>
</html>
