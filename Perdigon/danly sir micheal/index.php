<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <!-- link to jquiry-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
     <!--cnd of bootsrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script type="text/javascript"src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!--cnd of fontawesome-->
    <script type="text/javascript" src="https://kit.fontawesome.com/def1544ec9.js" crossorigin="anonymous"></script>
    <!--cnd of adminLTE-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

</head>
<body>
            <!--sidebar-->
            <!-- Main Sidebar Container -->
            
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="position: fixed; top: 0; left: 0; height: 100%; overflow-y: auto;">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="dan.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">Admin</span>
  </a>    
</a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
      <img src="dan.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"style="left: 12px"></div>
      <div class="info">
        <a href="#" class="d-block">Camille Delfino</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Starter Pages
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>Active Page</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Inactive Page</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Simple Link
              <span class="right badge badge-danger">New</span>
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light layout-fixed fixed-top">

            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                <a href="home.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Help
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                    <a class="dropdown-item" href="#">FAQ</a>
                    <a class="dropdown-item" href="#">Support</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Contact</a>
                </div>
                </li>
            </ul>

            <!-- SEARCH FORM -->
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                    </button>
                </div>
                </div>
            </form>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-comments"></i>
                    <span class="badge badge-danger navbar-badge">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                        <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                        <div class="media-body">
                        <h3 class="dropdown-item-title">
                            Brad Diesel
                            <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                        </h3>
                        <p class="text-sm">Call me whenever you can...</p>
                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                    </div>
                    <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                        <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                        <div class="media-body">
                        <h3 class="dropdown-item-title">
                            John Pierce
                            <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                        </h3>
                        <p class="text-sm">I got your message bro</p>
                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                    </div>
                    <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                        <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                        <div class="media-body">
                        <h3 class="dropdown-item-title">
                            Nora Silvester
                            <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                        </h3>
                        <p class="text-sm">The subject goes here</p>
                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                    </div>
                    <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-warning navbar-badge">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                    <i class="fas fa-envelope mr-2"></i> 4 new messages
                    <span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                    <i class="fas fa-users mr-2"></i> 8 friend requests
                    <span class="float-right text-muted text-sm">12 hours</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                    <i class="fas fa-file mr-2"></i> 3 new reports
                    <span class="float-right text-muted text-sm">2 days</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                </div>
                </li>
                <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
                    class="fas fa-th-large"></i></a>
                </li>
            </ul>
            </nav>
            <!-- /.navbar -->
            <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Expanding Bar Chart</title>
    <!-- Include Chart.js library -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
            text-align: center;
        }

        canvas {
            max-width: 600px;
            margin: 100px auto;
        }
    </style>
</head>
<body>
    <!-- First Bar Chart -->
    <h1>Expanding Bar Chart Example</h1>
    <canvas id="myBarChart"></canvas>

    <!-- Second Bar Chart -->
    <h1>Another Bar Chart Example</h1>
    <canvas id="mySecondBarChart"></canvas>

    <script>
        // Sample data for the initial bar chart
        const initialData = {
            labels: ['January', 'February', 'March', 'April', 'May'],
            datasets: [{
                label: 'Monthly Sales',
                backgroundColor: [
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 205, 86, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                ],
                borderColor: [
                    'rgba(75, 192, 192, 1)',
                    'rgba(255, 99, 132, 1)',
                    'rgba(255, 205, 86, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(153, 102, 255, 1)',
                ],
                borderWidth: 1,
                data: [0, 0, 0, 0, 0], // Initialize data with zeros
            }],
        };

        // Chart configuration for the first bar chart
        const config = {
            type: 'bar',
            data: initialData,
            options: {
                animations: {
                    tension: {
                        duration: 1000,
                        easing: 'linear',
                        from: 1,
                        to: 0,
                        loop: true,
                    },
                },
            },
        };

        // Get the canvas element and create the first bar chart
        const ctx = document.getElementById('myBarChart').getContext('2d');
        const myBarChart = new Chart(ctx, config);

        // Function to update chart data and redraw
        function updateBarLengths(timestamp) {
            const progress = Math.min(timestamp / 1000, 1); // Duration of the animation is 1000 milliseconds

            const newData = {
                labels: initialData.labels,
                datasets: [{
                    label: 'Monthly Sales',
                    backgroundColor: initialData.datasets[0].backgroundColor,
                    borderColor: initialData.datasets[0].borderColor,
                    borderWidth: initialData.datasets[0].borderWidth,
                    data: initialData.datasets[0].data.map(() => Math.random() * 100 * progress), // Gradually increase the values
                }],
            };

            myBarChart.data = newData;
            myBarChart.update();

            if (progress < 1) {
                // Request the next animation frame if the animation is not complete
                requestAnimationFrame(updateBarLengths);
            }
        }

        // Start the expanding animation for the first chart
        requestAnimationFrame(updateBarLengths);

        // Sample data for the second bar chart
        const secondChartData = {
            labels: ['June', 'July', 'August', 'September', 'October'],
            datasets: [{
                label: 'Monthly Revenue',
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(255, 205, 86, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(255, 205, 86, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(153, 102, 255, 1)',
                ],
                borderWidth: 1,
                data: [0, 0, 0, 0, 0], // Initialize data with zeros
            }],
        };

        // Chart configuration for the second bar chart
        const secondConfig = {
            type: 'bar',
            data: secondChartData,
            options: {
                animations: {
                    tension: {
                        duration: 1000,
                        easing: 'linear',
                        from: 1,
                        to: 0,
                        loop: true,
                    },
                },
            },
        };

        // Get the canvas element and create the second bar chart
        const secondCtx = document.getElementById('mySecondBarChart').getContext('2d');
        const mySecondBarChart = new Chart(secondCtx, secondConfig);

        // Function to update chart data and redraw for the second chart
        function updateSecondBarLengths(timestamp) {
            const progress = Math.min(timestamp / 1000, 1); // Duration of the animation is 1000 milliseconds

            const newSecondData = {
                labels: secondChartData.labels,
                datasets: [{
                    label: 'Monthly Revenue',
                    backgroundColor: secondChartData.datasets[0].backgroundColor,
                    borderColor: secondChartData.datasets[0].borderColor,
                    borderWidth: secondChartData.datasets[0].borderWidth,
                    data: secondChartData.datasets[0].data.map(() => Math.random() * 100 * progress), // Gradually increase the values
                }],
            };

            mySecondBarChart.data = newSecondData;
            mySecondBarChart.update();

            if (progress < 1) {
                // Request the next animation frame if the animation is not complete
                requestAnimationFrame(updateSecondBarLengths);
            }
        }

        // Start the expanding animation for the second chart
        requestAnimationFrame(updateSecondBarLengths);
        
    </script>
</body>
<footer class="main-footer">
  <div class="float-right d-none d-sm-inline">
    Version 1.0
  </div>
  <strong>&copy; 2023 Your Website</strong> All rights reserved.
</html>
