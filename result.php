<div class="col-sm-12">
    <h2>Student Name</h2>
    <h3>Course Name</h3>
</div>

<div class="col-sm-12">
<div id="canvas-holder" style="width:100%">
        <canvas id="chart-area"></canvas>
    </div>
</div>
    <script>
        var randomScalingFactor = function() {
            return Math.round(Math.random() * 100);
        };

        var config = {
            type: 'doughnut',
            data: {
                datasets: [{
                    data: [
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                    ],
                    backgroundColor: [
                        window.chartColors.green,
                        window.chartColors.red,
                        window.chartColors.grey,
                    ],
                    label: 'Student Result'
                }],
                labels: [
                    'Correct',
                    'Incorrect',
                    'Left'
                ]
            },
            options: {
                responsive: true,
                legend: {
                    position: 'left',
                },
                title: {
                    display: true,
                    text: ''
                },
                animation: {
                    animateScale: true,
                    animateRotate: true
                }
            }
        };

        window.onload = function() {
            var ctx = document.getElementById('chart-area').getContext('2d');
            window.myDoughnut = new Chart(ctx, config);
        };

        document.getElementById('randomizeData').addEventListener('click', function() {
            config.data.datasets.forEach(function(dataset) {
                dataset.data = dataset.data.map(function() {
                    return randomScalingFactor();
                });
            });

            window.myDoughnut.update();
        });
    </script>