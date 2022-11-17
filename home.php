<?php
session_start();
include "./db.php";
include "./partials/header.php";
include "./partials/nav.php";
?>



<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button  data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button  data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button  data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active imgOva">
      <img src="./img/Slider Photos/slider1.jpg" class="d-block w-100" alt="">
      <div class="overlay0 wow animate__animated animate__fadeInUp">
        <h1>A Brighter Future For All The Kids</h1>
        <p>A pace to explore, imaging and learn.</p>
        <div class="text-start">
          <button class="btnOva">START A COURSE</button>
          <button class="btnOva2">Read More</button>
        </div>
      </div>
    </div>
    <div class="carousel-item imgOva">
      <img src="./img/Slider Photos/slider2.jpg" class="d-block w-100" alt="">
      <div class="overlay0 ">
        <h1>A Brighter Future For All The Kids</h1>
        <p>A pace to explore, imaging and learn.</p>
        <div class="text-start">
          <button class="btnOva">START A COURSE</button>
          <button class="btnOva2">Read More</button>
        </div>
      </div>
    </div>
    <div class="carousel-item imgOva">
      <img src="./img/Slider Photos/slider3.jpg" class="d-block w-100" alt="">
      <div class="overlay0">
        <h1>A Brighter Future For All The Kids</h1>
        <p>A pace to explore, imaging and learn.</p>
        <div class="text-start">
          <button class="btnOva">START A COURSE</button>
          <button class="btnOva2">Read More</button>
        </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" id="btn" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" id="btn" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- welcome  -->
<div class="welcome">
  <div class="d-flex row">

    <div class=" col-lg-5 col-md-6 col-sm-12  welcome_img">
      <img src="./img/Slider Photos/slider2.jpg" alt="">
    </div>
    <div class="offset-lg-1 col-lg-6 col-sm-12 welcome_text">
      <h2>Welcome to Future Hope International School</h2>
      <p class="mb-4">Future Hope International School is an academically focused school that wants to instill and develop strong core values in our students. We firmly believe in the importance and the power of quality education and how it can change lives, societies and countries. As a team, we are committed to educate our next generation and to prepare them to be ready for tomorrow’s world. We aim to deliver quality education to provide more opportunities and access.</p>
      <a href="about.php" class="welcomeBtn text-decoration-none">About Us</a>
    </div>
  </div>
</div>

<!-- features  -->
<div class="icons ">
  <h1>Features</h1>
  <div class="row iconMenu shadow-lg">
    <div class="col-sm-6 col-md-4 col-lg-3 shadow-sm iconList">
      <img src="./img/icons/mortarboard.png" width="150px" alt="">
      <h3>Expert Teachers with an advanced degree</h3>
    </div>
    <div class="col-sm-6 col-md-4 col-lg-3 shadow-sm ">
      <img src="./img/icons/education.png" width="150px" alt="">
      <h3>1 to 8 Teacher to student ratio</h3>
    </div>
    <div class="col-sm-6 col-md-4 col-lg-3 shadow-sm iconList2">
      <img src="./img/icons/music.png" width="150px" alt="">
      <h3>Art and Creative Learning</h3>
    </div>
    <div class="col-sm-6 col-md-4 col-lg-3 shadow-sm ">
      <img src="./img/icons/juggling.png" width="150px" alt="">
      <h3>Extra and co-curricular
      activities</h3>
    </div>
    <div class="col-sm-6 col-md-4 col-lg-3 shadow-sm ">
      <img src="./img/icons/award.png" width="150px" alt="">
      <h3>Teachers with 10+ years of experience</h3>
    </div>
    <div class="col-sm-6 col-md-4 col-lg-3 shadow-sm iconList2">
      <img src="./img/icons/winner.png" width="150px" alt="">
      <h3>AP Capstone Diploma</h3>
    </div>
    <div class="col-sm-6 col-md-4 col-lg-3 shadow-sm ">
      <img src="./img/icons/teaching.png" width="150px" alt="">
      <h3>PS-Grade 12
      American Curriculum</h3>
    </div>
    <div class="col-sm-6 col-md-4 col-lg-3 iconList">
      <img src="./img/icons/learning.png" width="150px" alt="">
      <h3>Logical Thinking</h3>
    </div>
  </div>
</div>

<?php
include "./partials/footer.php"
?>