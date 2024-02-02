
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.min.js"></script>
</head>
<body>

<?php include 'scripts.php' ?>
<div class="wrapper">
    <h1>Computer Science Enrollment Progress</h1>
    <h2>Status of computer science enrollment for the past 9 years until now</h2>

    <canvas id="myChart"></canvas>
</div>

<script>
    // Our labels along the x-axis
    var years = [2015, 2016, 2017, 2018, 2019, 2020, 2021, 2022, 2023];
    
    // Example enrollment data for each location
    var sorsogon = [50, 60, 70, 80, 90, 100, 110, 120, 130];
    var legaspi = [60, 70, 80, 90, 100, 110, 120, 130, 140];
    var iriga = [70, 80, 90, 100, 110, 120, 130, 140, 150];
    var naga = [80, 90, 100, 110, 120, 130, 140, 150, 160];
    var pili = [90, 100, 110, 120, 130, 140, 150, 160, 170];

    var ctx = document.getElementById("myChart").getContext("2d");
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: years,
            datasets: [
                {
                    data: sorsogon,
                    label: "Sorsogon",
                    borderColor: "#3e95cd",
                    fill: false
                },
                {
                    data: legaspi,
                    label: "Legaspi",
                    borderColor: "#8e5ea2",
                    fill: false
                },
                {
                    data: iriga,
                    label: "Iriga",
                    borderColor: "#3cba9f",
                    fill: false
                },
                {
                    data: naga,
                    label: "Naga",
                    borderColor: "#e8c3b9",
                    fill: false
                },
                {
                    data: pili,
                    label: "Pili",
                    borderColor: "#c45850",
                    fill: false
                }
            ]
        },
        options: {
            animation: {
                animateRotate: true,
                animateScale: true,
                onComplete: function(animation) {
                    // Pulse effect
                    var duration = 1000; // 1 second
                    var startTime = Date.now();
                    var animationFrame = function() {
                        var elapsedTime = Date.now() - startTime;
                        var pulse = Math.sin((elapsedTime % duration) / duration * Math.PI);
                        myChart.data.datasets.forEach(function(dataset) {
                            dataset.data = dataset.data.map(function(value) {
                                return value + pulse * 5; // Adjust the pulsating effect
                            });
                        });
                        myChart.update();
                        requestAnimationFrame(animationFrame);
                    };
                    animationFrame();
                }
            }
        }
    });
</script>
</body>
</html>






<div class="content-wrapper">
    <section class="content">
        <?php
        // Check the value of a parameter or variable to determine which content to display
        $page = isset($_GET['page']) ? $_GET['page'] : 'default';

        // Include content based on the page parameter
        switch ($page) {
            case 'active':
                include 'activepage.php';
                break;

            case 'inactive':
                include 'inactivepage.php';
                break;

            // Add more cases as needed

            default:
                include 'default_page.php';
                break;
        }
        ?>
    </section>
</div>