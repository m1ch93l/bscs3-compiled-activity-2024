<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services" id="services-link">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skills">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
                <a href="#theme" id="dark-mode-toggle" onclick="toggleDarkMode()">
                    <i class="fas fa-moon" class="theme-button"></i>
            </a>
            </div>
        </div>
    </nav>
</header>

<section id="home" class="py-5 mt-5">
    <div class="container" class="py-5 mt-5">
        <div class="row" class="py-5 mt-5">
            <div class="col-md-6">
                <h1 class="display-4 font-weight-bold text-primary">
                    Hello, I'm Kris Jane Cabilan
                    <h2>A <span class="auto-type"></span></h2>
                </h1>
                <p class="lead mt-3">I'm a passionate student studying at ACLC College of Iriga. I may not be a professional though, but I can craft visually stunning websites that provide exceptional user experiences. I'm dedicated to gaining more knowledge. Let's collaborate and achieve remarkable outcomes together.</p>
            </div>
            <div class="col-md-6">
                <div class="text-center" id="my-pic-circle">
                    <img src="krisjane.jpg" alt="Your Photo" class="img-fluid rounded-circle" width="300" height="300">
                </div>
                <!-- Social Media Icons -->
                <div class="contact-icon-holder">
                    <a href="https://web.facebook.com/krisjane.cabilan" target="_blank" class="text-primary"><i class="fab fa-facebook fa-2x mx-3"></i></a>
                    <a href="https://www.instagram.com/krisjane_cabilan/" target="_blank" class="text-primary"><i class="fab fa-instagram fa-2x mx-3"></i></a>
                    <a href="https://twitter.com/CabilanKris05" target="_blank" class="text-primary"><i class="fab fa-twitter fa-2x mx-3"></i></a>
                    <a href="https://www.linkedin.com/in/kris-jane-cabilan-003265278/" target="_blank" class="text-primary"><i class="fab fa-linkedin fa-2x mx-3"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="services" class="py-5 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-title mb-5">My Services</h2>
                </div>
                <div class="row pt-5 mt-30">
                    <div class="col-lg-4 col-sm-6 mb-30 pb-5">
                        <a class="card" style="text-decoration: none;">
                        <div class="box-shadow bg-white rounded-circle mx-auto text-center" style="width: 90px; height: 90px; margin-top: -45px;"><i class="fa fa-code fa-3x head-icon"></i></div>
                        <div class="card-body text-center">
                            <h3 class="card-title">Web Development</h3>
                            <p class="card-text text-sm" style="color: black;">Welcome to my Web Development showcase, where ideas come to life through code! I specialize in creating dynamic and functional websites, utilizing a stack of technologies including HTML, CSS, JavaScript, and various frameworks. Each project is an opportunity to deliver a unique online experience, blending creativity with technical expertise.</p><span class="text-sm text-uppercase font-weight-bold" style="color: black;"><i class="fe-icon-arrow-right"></i></span>
                        </div>
                    </a>
                </div>

        <div class="col-lg-4 col-sm-6 mb-30 pb-5">
            <a class="card" style="text-decoration: none;">
            <div class="box-shadow bg-white rounded-circle mx-auto text-center" style="width: 90px; height: 90px; margin-top: -45px;"><i class="fa fa-address-book fa-3x head-icon"></i></div>
            <div class="card-body text-center">
                <h3 class="card-title">Front-End Development</h3>
                <p class="card-text text-sm" style="color: black;">Welcome to my Front-End Development showcase, where creativity meets functionality! I specialize in crafting visually stunning and responsive user interfaces. From HTML and CSS for structure and frameworks like Bootstrap, I ensure a seamless and engaging user experience. Explore my projects to see how I bring designs to life on the web.</p><span class="text-sm text-uppercase font-weight-bold" style="color: black;"><i class="fe-icon-arrow-right"></i></span>
            </div>
            </a>
        </div>

        <div class="col-lg-4 col-sm-6 mb-30 pb-5">
            <a class="card" style="text-decoration: none;">
                <div class="box-shadow bg-white rounded-circle mx-auto text-center" style="width: 90px; height: 90px; margin-top: -45px;"><i class="fa fa-database fa-3x head-icon"></i></div>
                <div class="card-body text-center">
                    <h3 class="card-title">Back-End Development</h3>
                    <p class="card-text text-sm" style="color: black;">Welcome to my Back-End Development showcase, where server-side magic happens! I specialize in building robust and scalable back-end solutions. From server management to database design and API development, I ensure the seamless functioning of web applications. Explore my projects to see how I handle the behind-the-scenes complexities of web development.</p><span class="text-sm text-uppercase font-weight-bold" style="color: black;"><i class="fe-icon-arrow-right"></i></span>
                </div>
            </a>
        </div>
</section>



<section id="skills" class="py-5 mt-5 text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-title mb-5">My Skills</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 skill-card">
                <div class="card mb-4">
                    <div class="card-body">
                        <h2 class="card-title">Web Development</h2>
                        <p class="card-text">
                            <ul>
                                <li>HTML</li>
                                <li>CSS</li>
                                <li>JavaScript</li>
                                <li>Bootstrap</li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 skill-card">
                <div class="card mb-4">
                    <div class="card-body">
                        <h2 class="card-title">Front-end Development</h2>
                        <p class="card-text">
                            <ul>
                                <li>HTML</li>
                                <li>CSS</li>
                                <li>Bootstrap</li>
                                <li>Javascript</li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 skill-card">
                <div class="card mb-4">
                    <div class="card-body">
                        <h2 class="card-title">Back-end Development</h2>
                        <p class="card-text">
                            <ul>
                                <li>PHP</li>
                                <li>MySQL</li>
                                <li>Database Management</li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="py-3 py-md-5">
  <div class="container ">
    <div class="row justify-content-md-center">
      <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
        <h2 class="mb-4 display-5 text-center">Contact</h2>

        <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row justify-content-lg-center">
        <div class="col-12 col-lg-9">
            <div class="bg-white border rounded custom-shadow-lg overflow-hidden">
                <form action="#!">
                    <div class="row gy-4 gy-xl-5 p-4 p-xl-5">
                    <div class="col-12">
                        <label for="fullname" class="form-label">Full Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="fullname" name="fullname" value="" required>
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                        <div class="input-group">
                        <span class="input-group-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                            </svg>
                        </span>
                        <input type="email" class="form-control" id="email" name="email" value="" required>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="phone" class="form-label">Phone Number</label>
                        <div class="input-group">
                        <span class="input-group-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                            </svg>
                        </span>
                        <input type="tel" class="form-control" id="phone" name="phone" value="">
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="message" class="form-label">Message <span class="text-danger">*</span></label>
                        <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                    </div>
                    <div class="col-12">
                        <div class="d-grid">
                        <button class="btn btn-primary btn-lg float-end mt-3" type="submit">SUBMIT</button>
                        </div>
                    </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
  </div>
</section>

<script>

</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
