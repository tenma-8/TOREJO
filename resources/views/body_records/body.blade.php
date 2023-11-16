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
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
    </head>
    </x-slot>
    
    <body>
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

     
 
        <div class="container">
            <h2>一週間ごとの体重グラフ</h2>
            <canvas id="chart-container"></canvas>
        </div>
        
  
        <script>
            var ctx = document.getElementById('chart-container').getContext('2d');
            var chartData = @json($data);
            
            var months = chartData.map(data => data.month + '/' + data.year);
            var weights = chartData.map(data => data.average_weidght);
        
            var chart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: months,
                    datasets: [{
                        label: '平均体重',
                        data: weights,
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>

        <div>
            <p>ログインユーザー：{{ Auth::user()->name }}</p>
        </div>
    </body>
    </x-app-layout>
</html>
