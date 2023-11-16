<!DOCTYPE html>
<html lang="ja">
<head>
 <meta charset="utf-8">
 <title>グラフ</title> 
</head>
 <body>
	@extends('layouts.app')

@section('content')
<div class="container">
    <h2>一週間ごとの体重グラフ</h2>
    <canvas id="weightChart"></canvas>
</div>

<script>
    var ctx = document.getElementById('weightChart').getContext('2d');
    var dates = @json($data->pluck('date'));
    var weights = @json($data->pluck('average_weight'));

    var chart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: dates,
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
@endsection
   <!-- グラフを描画ここまで -->
 </body>
</html>