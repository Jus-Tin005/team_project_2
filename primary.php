<?php
session_start();
include "./db.php";
include "./partials/header.php";
include "./partials/nav.php";
include_once  ('./fullcalendar/calendar.php');
?>



        <!-- font Awesone 6.2.0 -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- custom css -->
        <link rel="stylesheet" href="./css/primary.css" type="text/css">

<body onload="slider()">



<!-- Cookie codes Area  -->

<div class="cookie-container">
                                <p>
                                        We use cookies in this website to give you the best experience on our
                                        site and show you relevant ads. To find out more, read our
                                        <a href="#">privacy policy</a> and <a href="#">cookie policy</a>.
                                </p>

                                <button class="accept-btn buttons">Accept All</button>
                                <button class="reject-btn buttons">Reject All</button>
</div>



<!-- START HEADER SECTION -->
<header class="headers">


            <!-- Start Navbar -->

                <!-- .................................................Navbar codes excutes here....................................................... -->

                <!-- End Navbar -->




                <!-- Start Banner  -->

                <section>
                <div class="banner">
                <div class="slider">
                        <img src="./images/primary/image5.jpg" id="slide-img" alt="">
                </div>

                <div class="overlay">
                        <!-- <div class="navbars">
                                <div class="logo">
                                        <img src="./images/sliders/logo.png" alt="The Future Hope">
                                </div>
                                <div class="menu-icons">
                                        <a href="https://www.facebook.com"><i class="fa-brands fa-facebook-f"></i></a>
                                        <a href="https://twitter.com"><i class="fa-brands fa-twitter"></i></a>
                                        <a href="https://www.linkedin.com"><i class="fa-brands fa-linkedin-in"></i></a>
                                </div>
                        </div> -->

                        <div class="contents">
                                <h1>OUR VALUES </h1>
                                <h3  class="text-uppercase">We learn together, we succeed together.</h3>
                                <button type="button">WATCH MORE &nbsp; &nbsp; <i class="fa-solid fa-arrow-right arrows"></i></button>
                                <button type="button" class="btn-two">SUBSCRIBE &nbsp; &nbsp; <i class="fa-solid fa-arrow-right arrows"></i></button>
                        </div>
                </div>
        </div>

                </section>

                <!-- End Banner -->

</header>









<!-- END HEADER SECTION -->


<!-- START WELCOME SECTION -->
        <section class="container-fluid" style="background-color: #F2F2F2;">
                <div class="welcomes">
                        <div class="welcome-inner">
                                <div class="welcome-content ">
                                        <h2 id="welccome-title" class="mb-5">Kindle the fire, brighten your future</h2>
                                        <div class="welcome-content-region">
                                                <p>
                                                        Welcome to Future Hope International School. Today's ever changing world is
                                                        an exciting place <br>  for young people overflowing with fascinating opportunities and
                                                        challenges. At  Future Hope <br>  International School we open a door to that world and with
                                                        our support students from <br>  across the globe can create rewarding lives, successful
                                                        careers and make their mark on...
                                                </p>
                                        </div>
                                        <div class="welcome-link mt-5">
                                                <a href="">Read More</a>&nbsp; &nbsp; <i class="fa-solid fa-arrow-right"  style="color: orange;"></i>
                                        </div>
                                </div>
                        </div>
                </div>
        </section>
<!-- END WELCOME SECTION -->


<!-- START NEWS SECTION  -->
<section class="news">
        <div class="container">
                <div class="row text-center">
                        <h3 class="news-title mt-3">Lastest News</h3>
                </div>

                <div class="container">
                        <div class="d-flex">
                                <div class="flip-cards">
                                        <div class="flip-card-inners">
                                                <div class="flip-card-fronts">
                                                        <img src="./images/activities/image1.jpg" alt="">
                                                </div>
                                                <div class="flip-card-backs pt-3">
                                                        <h4 class="flip-card-title">IGCSE, AS and A  Level Exam Result...</h4>
                                                        <div class="flip-card-more mt-5"><a href="#">Read More</a>&nbsp; &nbsp; <i class="fa-solid fa-arrow-right"  style="color: orange;"></i></div>
                                                </div>
                                        </div>
                                </div>

                                <div class="flip-cards">
                                        <div class="flip-card-inners">
                                                <div class="flip-card-fronts">
                                                        <img src="./images/activities/closed (1).jpg" width="400" height="400" alt="">
                                                </div>
                                                <div class="flip-card-backs pt-3">
                                                        <h4 class="flip-card-title">School Closed...</h4>
                                                        <div class="flip-card-more mt-5"><a href="#">Read More</a>&nbsp; &nbsp; <i class="fa-solid fa-arrow-right"  style="color: orange;"></i></div>
                                                </div>
                                        </div>
                                </div>

                                <div class="flip-cards">
                                        <div class="flip-card-inners">
                                                <div class="flip-card-fronts">
                                                        <img src="./images/activities/reopening.jpg" width="400" height="400" alt="">
                                                </div>
                                                <div class="flip-card-backs pt-3">
                                                        <h4 class="flip-card-title">School Reopening...</h4>
                                                        <div class="flip-card-more mt-5"><a href="#">Read More</a>&nbsp; &nbsp; <i class="fa-solid fa-arrow-right"  style="color: orange;"></i></div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
</section>
<!-- END NEWS SECTION  -->


<!-- START EVENT SECTION  -->
<section class="container-fluid events">
        <div class="">
                <div class="events-inner">
                        <div class="events-header">
                                <h2 class="events-title mb-5">Primary School Events</h2>
                        </div>
                </div>
                <div class="button-link">
                        <a href="./fullcalendar/calendar.php" target="_blank">Full Calendar &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span></span></a>
                </div>
        </div>
</section>
<!-- END EVENT SECTION  -->


<!-- START ADDRESS SECTION -->
<section id="address">
        <div class="container">

                <div class="row mb-3">

                        <div class="col-3">
                                <h2 class="address-title primary-title">Future Hope International Primary School</h2>

                                <div class="secondary-title text-secondary">
                                        <div class="mt-2">
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d488818.5096994892!2d95.89185046130376!3d16.831583776201402!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c195230c3e98fb%3A0xb508ea3f4ccdcb15!2sFuture%20Hope%20Training%20Centre!5e0!3m2!1sen!2snl!4v1663065201376!5m2!1sen!2snl" width="350" height="100" style="border:1px solid #e1e1e1;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>

                                        <address>
                                                <i class="fas fa-map-marker-alt text-primary"></i>
                                                No ( 3 ), Chan Mya Yate Mon Street, Bahan Township, Yangon, Myanmar.
                                        </address>

                                        <div class="phone">
                                                <i class="fas fa-mobile text-primary"></i>
                                                : +95 9742110221, 01 211 4321
                                        </div>

                                        <div class="email">
                                                <i class="fas fa-envelope text-primary"></i>
                                                info@educaremm.com
                                        </div>

                                </div>
                        </div>

                        <div class="col-3">
                                <h2 class="address-title primary-title">Our School Posts</h2>

                                <div class="feature-post">
                                        <div class="flex-item">
                                                <article class="article">
                                                        <div class="d-flex">
                                                                <a href="#">
                                                                        <img src="./images/activities/image2.jpg" class="object-fit px-1" alt="">
                                                                        <div class="px-1">
                                                                                <a href="#" class="text-title display-2 text-dark">
                                                                                Painting altogether that we made daily...
                                                                                </a>
                                                                        <p class="secondary-title text-secondary display-3">
                                                                                <span><i class="far fa-clock text-primary"></i> Clock Wed 09, 2022 </span>
                                                                        </p>
                                                                        </div>
                                                                </a>
                                                        </div>
                                                </article>
                                        </div>
                                        <div class="flex-item">
                                                <article class="article">
                                                        <div class="d-flex">
                                                                <a href="#">
                                                                <img src="./images/activities/image6.jpg" class="object-fit px-1" alt="">
                                                                <div class="px-1">
                                                                        <a href="#" class="text-title display-2 text-dark">
                                                                        Playing the game by group and one by one altogether...
                                                                        </a>
                                                                        <p class="secondary-title text-secondary display-3">
                                                                                <span><i class="far fa-clock text-primary"></i> Clock Tue 09, 2022 </span>
                                                                        </p>
                                                                </div>
                                                                </a>
                                                        </div>
                                                </article>
                                        </div>
                                        <div class="flex-item">
                                                <article class="article">
                                                        <div class="d-flex">
                                                                <a href="#">
                                                                        <img src="./images/activities/image4.jpg" class="object-fit px-1" alt="">
                                                                        <div class="px-1" style="font-size: 15px;">
                                                                                <a href="#" class="text-title display-2 text-dark">
                                                                                Exercising for healthy body by playing football or sorcer...
                                                                                </a>
                                                                        <p class="secondary-title text-secondary display-3">
                                                                                <span><i class="far fa-clock text-primary"></i> Clock Sun 05, 2022 </span>
                                                                        </p>
                                                                        </div>
                                                                </a>
                                                        </div>
                                                </article>
                                        </div>
                                </div>
                        </div>

                        <div class="col-3">
                        <h2 class="address-title primary-title">Tags</h2>

                        <div class="tags">
                                <div class="d-flex flex-wrap">
                                        <a href="#" class="nav-link btn bg-light">Games</a>
                                        <a href="#" class="nav-link btn bg-light">Foods</a>
                                        <a href="#" class="nav-link btn bg-light">Toys</a>
                                        <a href="#" class="nav-link btn bg-light">Painting</a>
                                        <a href="#" class="nav-link btn bg-light">Sport</a>
                                </div>
                        </div>

                        <h2 class="footer-title secondary-title mt-2">Socials :</h2>

                        <div class="tags social">
                                <div class="d-flex flex-wrap">
                                        <a href="#" class="nav-link btn bg-light"><i class="fa-brands fa-facebook-f"></i></a>
                                        <a href="#" class="nav-link btn bg-light"><i class="fa-brands fa-twitter"></i></a>
                                        <a href="#" class="nav-link btn bg-light"><i class="fa-brands fa-instagram"></i></a>
                                        <a href="#" class="nav-link btn bg-light"><i class="fa-brands fa-youtube"></i></a>
                                </div>
                        </div>
                        </div>

                </div>
        </div>
</section>

<!-- END ADDRESS SECTION -->



<!-- START FOOTER SECTION -->

<!-- ................................................Footer section codes excutes here.......................................... -->

<!-- END FOOTER SECTION -->






<!-- custom js         -->
<script src="./js/primary.js" type="text/javascript"></script>





<?php
include "./partials/footer.php"
?>