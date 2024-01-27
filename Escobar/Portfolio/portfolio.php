<!DOCTYPE html>
<html lang="en">
<head>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin</title>
<!-- link of jquery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<!-- cdn of bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<!-- cdn of fontawesome -->
<script type="text/javascript" src="https://kit.fontawesome.com/f4f3fe4e20.js" crossorigin="anonymous"></script>
<!-- cdn of adminLTE -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
</head>

<body>
<!-- Sidebar -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
<a href="#" class="brand-link logo-switch">
<img src="images/Arvin.jpg" alt="AdminLTE Docs Logo Small" class="brand-image-xl logo-xs">
<img src="images/Arvin.jpg" alt="AdminLTE Docs Logo Large" class="brand-image-xs logo-xl" style="left: 12px">
</a>

<!-- Sidebar -->
<div class="sidebar">
<!-- Sidebar user panel (optional) -->
<div class="user-panel mt-3 pb-3 mb-3 d-flex">
<div class="image">
<img src="images/Arvin.jpg" class="img-circle elevation-2" alt="User Image">
</div>
<div class="info">
<a href="#" class="d-block">Arvin Escobar</a>
</div>
</div>

<!-- Sidebar Menu -->
<nav class="mt-2">
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
<!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
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
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
<!-- Left navbar links -->
<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
</li>
<li class="nav-item d-none d-sm-inline-block">
<a href="index3.html" class="nav-link">Home</a>
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
<a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i class="fas fa-th-large"></i></a>
</li>
</ul>
</nav>
</div>
</body>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Web Portfolio</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
 
  </style>
</head>
<body>
  <header class="hero bg-primary text-white text-center py-5">
    <h1 class="display-4">Welcome to My Portfolio</h1>
    <p class="lead">I'm a student with a keen interest in web development, actively learning and aspiring to craft visually appealing and functional websites.</p>
  </header>


  <section id="about" class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2>About Me</h2>
          <p>My name is Arvin Escobar, and I am currently a 3rd-year student pursuing a degree in Computer Science at ACLC College of Iriga. As a passionate learner, I have always been fascinated by technology and its potential to address challenges and enhance lives.</p>
          <p>Throughout my academic journey, I have built a strong foundation in programming languages such as Java, HTML, and C++. Additionally, I have honed my skills in web development, database management, and software engineering.</p>
          <p>Beyond my technical abilities, I am a committed and driven student. I find joy in taking on challenging projects and devising innovative solutions. Embracing the philosophy of continuous learning, I strive to stay abreast of the latest advancements in the field.</p>







        </div>
          <div class="col-md-6">
          <img src="images/Arvin.jpg" alt="Profile Image" class="img-fluid rounded-circle">
        </div>
      </div>
    </div>
  </section>
  

  
<section id="projects" class="bg-light py-5">
  <div class="container">
    <h2 class="text-center">Projects</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="card mb-4">
          <img src="images/Treasury.jpg" class="card-img-top" alt="Project 1">
          <div class="card-body">
            <h5 class="card-title">Treasury</h5>
            <p class="card-text">Treasury Record Management System. This web application is designed to streamline the process of collecting contributions for various events. With a user-friendly interface, it allows you to start collections, add contributions, track funds, and even update contributions if needed. Whether you're organizing events or managing finances, this system provides a simple yet effective way to keep records and ensure transparency. Explore the functionality and design of this project to witness how it simplifies the task of managing contributions for events.</p>
            <a href="Treasury.html" class="btn btn-primary view-details">Try</a>
            <div class="details">
              
              
              
              
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4">
          <img src="images/AttendanceTracker.jpg" class="card-img-top" alt="Project 2">
          <div class="card-body">
            <h5 class="card-title">Attendance Tracker</h5>
            <p class="card-text">The "Attendance Tracker" web application is a versatile tool for streamlined attendance management. With an easy-to-use interface, it allows you to initiate attendance sessions, record attendance for participants, and perform general timeouts when necessary. The dynamic table instantly updates with the recorded attendance data, enabling efficient tracking for various subjects and courses. Whether you're overseeing classes, meetings, or events, this application enhances your ability to manage attendance effortlessly.</p>
            <a href="Attendance.html" class="btn btn-primary view-details">Try</a>
            <div class="details">



            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4">
          <img src="images/ChatLuigi.jpg" class="card-img-top" alt="Project 3">
          <div class="card-body">
            <h5 class="card-title">Chat Luigi</h5>
            <p class="card-text">The "Chat Luigi" web application is a real-time chat platform where Mario and Luigi engage in lively conversations. This interactive chat interface allows you to witness their dynamic exchanges, with Mario sending messages and Luigi responding in a friendly and animated manner. As you explore the chat, you'll notice the delightful and quirky responses from both characters, making it a fun and engaging experience. Whether you're a fan of Mario and Luigi or simply looking for an entertaining chat, this application brings a touch of humor and nostalgia to your conversations.</p>
            <div class="details">
              
