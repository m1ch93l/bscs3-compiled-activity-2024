<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio</title>
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="./bootstrap/js/bootstrap.min.js">
  <script src="./bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="container">
  <header class="header">
    <h1>My Portfolio</h1>
    <!-- Navigation Links -->
    <nav class="nav-items">
      <button onclick="location.href='#portfolio'">
        <i class="fa fa-th-large fa-fw"></i>Home
      </button>
      <button onclick="location.href='#about'">
        <i class="fa fa-user fa-fw"></i>About
      </button>
      <button onclick="location.href='#Skills'">
        <i class="fa fa-edit fa-fw"></i>Skills
      </button>
      <button onclick="location.href='#contact'">
        <i class="fa fa-envelope fa-fw"></i>Contact
      </button>
    </nav>
  </header>
</div>
</header>

</div>
</div>
</div>
    <aside class="left">
      <img src="./pictures/Mae Ann.png" width="150px" alt="Mae Ann L. Canton" />
      <p class="align-center">About Me</p>

      <div class="panel-large">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-snapchat w3-hover-opacity"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
      </div>

      <p class="paragraph">"Everything has a purpose. I purposely think about you every minute every second "
        <br>- Ms. Mae Ann</p>
    </aside>

    <header class="homepage" id="portfolio">
      <p><a href="https://web.facebook.com/anne.annellagas22/"><h2>Mae Ann L. Canton</h2></a></p>

      <div class="content">
        <div class="col m6">
          <img src="./pictures/5..png" alt="Me" style="width:110%">
        </div>
        <div class="col m6">
      <img src="./pictures/2..png" alt="Me" style="width:110%">
    </div>
    <div class="col m6">
      <img src="./pictures/4..png" alt="Me" style="width:110%">
    </div>
    <div class="col m6">
      <img src="./pictures/8.png" alt="Me" style="width:110%">
    </div>
    <div class="col m6">
      <img src="./pictures/3..png" alt="Me" style="width:110%">
    </div>
    <div class="col m6">
      <img src="./pictures/1..png" alt="Me" style="width:110%">
    </div>
      </div>
      <br>
    </header>

    <hr>

    <main>
      <div class="row" id="about">
        <h3>About Me</h3>
        <p>
          Just Myself and I, lived in the Philippines exploring the code of programming languages. I'd want to learn
          more to improve myself in everything because I am always curious about what to do. I have a heart of love and
          an interest in this field so I can do it. I want to share my knowledge with you. Some of my hobbies include
          walking around, watching TV, reading, writing, and coding.
        </p>

        <br>

        <h3>My Description</h3>
        <p>I am a hard-working and driven individual who isn't afraid to face challenges.</p>
        <hr>

        <br>

        <!-- Skills Section -->
        <div style="padding: 100px;" id="Skills">
          <h3>Technical Skills</h3>

          <p>Photography</p>
          <div class="container2">
            <div class="skills p">70%</div>
          </div>

          <p>Photoshop</p>
          <div class="container2">
            <div class="skills c">60%</div>
          </div>

          <p>Web Design</p>
          <div class="container2">
            <div class="skills web">50%</div>
          </div>
        </div>
</div>
       <br>
       <hr>

        <div class="Contact">
  <h3 id="contact"><b>Contact Me</b></h3>

  <div class="contact-container" style="display: flex; justify-content: space-around;">
    <div class="contact-item">
      <div class="container" style="background-color: lightblue; color: white; padding: 60px; text-align: center; border-radius: 8px;">
        <p><i class="fa fa-envelope" style="width: 20px;"></i></p>
        <p>itsmemaeanncanton@gmail.com</p>
      </div>
    </div>
    <div class="contact-item">
      <div class="container" style="background-color: pink; color: white; padding: 60px; text-align: center; border-radius: 8px;">
        <p><i class="fa fa-map-marker" style="width: 20px;"></i></p>
        <p>Camarines Sur, Philippines</p>
      </div>
    </div>
    <div class="contact-item">
      <div class="container" style="background-color: grey; color: white; padding: 60px; text-align: center; border-radius: 5px;">
        <p><i class="fa fa-phone" style="width: 20px;"></i></p>
        <p>0991******5</p>
      </div>
    </div>
  </div>
</div>

    </main>

    <br><br>

    <footer class="footer">© Copyright 2023</footer>

  </div>
</body>

<style>
body {

margin: 0;
box-sizing: border-box;
}



.nav-container {
  display: flex;
    align-items: center;
    background-color: blue; /* Adding blue background color */
    padding: 10px;
  }

  .nav-items {
    display: flex;
    margin-left: 1000px;
    
  }

  .nav-items button {
    margin-right: 20px;
    background-color: white; 
  }



.align-center {
text-align: center;
font-size: larger;
font-family: "Pacifico", cursive;
}

.header {

align-items: center;
padding: 30px;
}

.header h1 {
color: #222222;
font-size: 30px;
font-family: 'Border';
}

.left {
float: left;
width: 180px;
margin: 0;
padding: 1em;
}

.panel-large i {
font-size: 20px;
margin: 0 3px;
}

.paragraph {
font-style: italic;
font-size: 23px;
padding: 25%;
}

.homepage h2 {
align-items: center;
font-size: xx-large;
font-family: 'Times New Roman', Times, serif;
}

.text span {
font-size: larger;
font-weight: bolder;
}

.text button {
font-weight: bold;
border: none;
padding: 15px 32px;
text-align: center;
font-size: 16px;
background-color: skyblue;
}

.content {
margin-right: 200px;
margin: auto;
border-left: 1px solid #d4d4d4;
padding: 20px;
overflow: hidden;
}

.col {
float: left;
width: 30%;
padding: 20px;
}

.row p {
font-style: italic;
font-size: 26px;
text-align: center;
margin: 1%;
padding: 5%;
}

.h2 {
font-style: bolder;
font-size: 26px;
text-align: center;
}
.Contact {
  text-align: center;
}

.Contact h3 {
  display: inline-block;
  font-size: 26px;
}

h3 {
    text-align: center;
  }



.nav-items {
display: flex;
justify-content: space-around;
align-items: center;
font-size: large;
margin-right: 10px;
}

.nav-items a {
margin-right: 20px;
justify-content: space-around;
font-size: 20px;
padding: 5px;
}

.nav-items button {
  background-color: transparent;
  color: black;
  border: none;
  cursor: pointer;
  padding: 0;
  font-size: inherit;
  font-size: 20px;
}

.nav-items button:hover {
  color: #4CAF50; /* Change the color on hover if needed */
}


.p { width: 90%; background-color: #aa0452; }
.c { width: 80%; background-color: #2196F3; }
.web { width: 65%; background-color: #f44336; }

.footer {

background-color: #2e3550;
color: white;
text-align: center;
}







body {

  margin: 0;
  box-sizing: border-box;
  }
  
  .container {
    display: flex;
    align-items: center;
  }

  .nav-items {
    display: flex;
  }

  .nav-items button {
    margin-left: 10px;
  }
  
  .header {
  
  align-items: center;
  padding: 30px;
  }
  
  .header h1 {
  color: #222222;
  font-size: 30px;
  font-family: 'Border';
  }
  
  .left {
  float: left;
  width: 180px;
  margin: 0;
  padding: 1em;
  }
  
  .panel-large i {
  font-size: 20px;
  margin: 0 3px;
  }
  
  .paragraph {
  font-style: italic;
  font-size: 23px;
  padding: 25%;
  }
  
  .homepage h2 {
  align-items: center;
  font-size: xx-large;
  font-family: 'Times New Roman', Times, serif;
  }
  
  .text span {
  font-size: larger;
  font-weight: bolder;
  }
  
  .text button {
  font-weight: bold;
  border: none;
  padding: 15px 32px;
  text-align: center;
  font-size: 16px;
  background-color: skyblue;
  }
  
  .content {
  margin-right: 200px;
  margin: auto;
  border-left: 1px solid #d4d4d4;
  padding: 20px;
  overflow: hidden;
  }
  
  .col {
  float: left;
  width: 30%;
  padding: 20px;
  }
  
  .row p {
  font-style: italic;
  font-size: 26px;
  text-align: center;
  margin: 1%;
  padding: 5%;
  }
  
  .h2 {
  font-style: bolder;
  font-size: 26px;
  text-align: center;
  }
  .Contact {
    text-align: center;
  }
  
  .Contact h3 {
    display: inline-block;
    font-size: 26px;
  }
  
  
  
  
  
  .nav-items {
  display: flex;
  justify-content: space-around;
  align-items: center;
  font-size: large;
  margin-right: 10px;
  }
  
  .nav-items a {
  margin-right: 20px;
  justify-content: space-around;
  font-size: 20px;
  padding: 5px;
  }
  
  .nav-items button {
    background-color: transparent;
    color: black;
    border: none;
    cursor: pointer;
    padding: 0;
    font-size: inherit;
    font-size: 20px;
  }
  
  .nav-items button:hover {
    color: #4CAF50; /* Change the color on hover if needed */
  }
  
  
  .p { width: 90%; background-color: #aa0452; }
  .c { width: 80%; background-color: #2196F3; }
  .web { width: 65%; background-color: #f44336; }
  
  .footer {
  
  background-color: #2e3550;
  color: white;
  text-align: center;
  }
</style>
</html>
