@extends('layouts.main')

@section('content')
    <section class="mx-8">
        <form action="/chart" method="post">
            @csrf
            <div class="bg-white">
                <h1 class="text-3xl mb-6">
                    Chart
                </h1>
                    <!-- Show Graph Data -->
                <script src="https://cdnjs.com/libraries/Chart.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>

                <div class="map_canvas">
                    <canvas id="myChart" width="auto" height="100"></canvas>
                </div>

                <script>
                var ctx = document.getElementById('myChart').getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: <?php echo json_encode($labels) ?>,
                        datasets: [{
                            label: '',
                            data: <?php echo json_encode($prices); ?>,
                            backgroundColor: 'orange',
                            borderColor: 'orange',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                max: <?php echo json_encode(max($prices) * 1.25) ?>,
                                min: 0,
                                ticks: {
                                    stepSize: 50
                                }
                            }
                        },
                        plugins: {
                            title: {
                                display: false,
                                text: 'Custom Chart Title'
                            },
                            legend: {
                                display: false,
                            }
                        }
                    }
                });
                </script>
            </div>
        </form>
    </section>

@endsection
