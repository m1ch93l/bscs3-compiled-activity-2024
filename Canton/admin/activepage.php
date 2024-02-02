<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer Science Enrollment Progress</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.0/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="content-wrapper" id="active">
   <aside class="control-sidebar control-sidebar-dark"></aside> 
   <div class="content">
    <h1>Computer Science Enrollment Progress</h1>
    <h2>BS Computer Science Enrollment status</h2>



  <canvas id="BarChart" width="1000" height="500"></canvas>

  <script>

    const years = [2015, 2016, 2017, 2018, 2019, 2020, 2021, 2022, 2023];
    const Students = [50, 70, 120, 80, 90, 100, 60, 130, 145];

    var ctx = document.getElementById("BarChart").getContext("2d");

    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [],
            datasets: [{
                label: 'Enrollment Data',
                data: [],
                backgroundColor: 'rgba(255, 0, 0, 0.7)', 
                borderColor: 'rgba(255, 0, 0, 1)', 
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    max: 150 // You can adjust the maximum value based on your data
                }
            },
            animation: {
                duration: 1000,
                easing: 'linear'
            }
        }
    });

    // Function to update chart with enrollment data and create pulsating effect
    function updateChart() {
        const pulsateData = Students.map(value => value + Math.sin(Date.now() / 500) * 10);

        // Update chart data
        myChart.data.labels = years;
        myChart.data.datasets[0].data = pulsateData;

        // Update the chart
        myChart.update();

        // Call the function again after a short delay to create a pulsating effect
        setTimeout(updateChart, 50);
    }

    // Call the function to initially update the chart
    updateChart();
  </script>
</body>
</html>