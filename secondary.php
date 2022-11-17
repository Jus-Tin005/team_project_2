<?php
session_start();
include "./db.php";
include "./partials/header.php";
include "./partials/nav.php";
?>


        <!-- Google Chart API -->
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
         <!-- font Awesone 6.2.0 -->
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
         <!-- custom css -->
        <link rel="stylesheet" href="./css/secondary.css" type="text/css">



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



        <!-- START HEADER SECTION  -->
            <header>

                <!-- Start Navbar  -->
               <nav class="sticky"></nav>
                <!-- ............................navbar codes excutes here........................... -->

                <!-- End Navbar -->


                <!-- Start Banner -->
                        <div class="main-box">
                                <h1>FUTURE HOPE INTERNATIONAL SECONDARY SCHOOL, MYANMAR</h1>
                                <p>Myanmar's One Of The Best International School</p>
                               <a href="register.php"> <button>ENROLL NOW</button></a>
                        </div>
                        <div class="containers">
                                <h2>FACILITIES</h2>
                                <div class="rows">
                                                <div class="column">
                                                        <a href="#"><img src="./images/secondary/second1.jpg" alt=""></a>
                                                        <a href="#">CAMPUS</a>
                                                </div>
                                                <div class="column">
                                                        <a href="#"><img src="./images/secondary/second2.jpg" alt=""></a>
                                                        <a href="#">CANTINE</a>
                                                </div>
                                                <div class="column">
                                                        <a href="#"><img src="./images/secondary/second3.jpg" alt=""></a>
                                                        <a href="#">LIBRARY</a>
                                                </div>
                                </div>
                        </div>

                        <!-- End Banner -->
            </header>
        <!-- END HEADER SECTION  -->


   <!-- START AMBITIONS SECTION  -->

            <section class="wrapper" id="features-grid" style="background: white;">
                <div class="features-grid-container">
                        <div class="container d-flex text-center">
                                <h2 class="features-grid-title"><img src="./images/secondary/goals.png" class="goals" alt="01"><span class="plus">+ </span>OUR AMBITIONS <span class="plus">+</span> <img src="./images/secondary/goals2.png" class="goals" alt="02"></h2>
                        </div>

                        <div class="d-flex d-flex-r features-grid-row" id="first-row">

                                <div class="features-grid-row-img w-50">
                                        <img src="./images/secondary/ambition1.jpg" alt="">
                                </div>

                                <div class="features-grid-row-text w-50">
                                        <div class="m-3">
                                                <h2 class="">Our Passion</h2>
                                                <div>
                                                        <p class="text-justify"><span style="color: #F7971E; font-size: 18px; font-style: italic;">OUR PASSION</span> is to provide a safe, welcoming and fun environment where your child will learn and develop socially, emotionally, physically and intellectually.....................................</p>
                                                </div>
                                                <div><a href="#" class="btn btn-pink">View More</a></div>
                                        </div>
                                </div>


                        </div>
                        <div class="d-flex d-flex-r features-grid-row" id="second-row">

                                <div class="features-grid-row-img w-50">
                                        <img src="./images/secondary/ambition2.jpg" alt="">
                                </div>

                                <div class="features-grid-row-text w-50">
                                        <div class="m-3">
                                                <h2 class="">Academic Life At Future Hope</h2>
                                                <div>
                                                        <p class="text-justify"><span style="color: #F7971E; font-size: 18px; font-style: italic;">FUTURE HOPE</span> aims to be a caring, welcoming, stable and <br> friendly  school community.We will provide the best possible environment for  children to learn and develop, as well as to <br> cultivate a sense  of wonder, empathy and understanding of <br> the world around them.Together, we will strive to bring the best  out of our children, ensuring that they maximise their potential and are prepared as fully as possible  for the next stage of their lives...............................................................................</p>
                                                </div>
                                                <div><a href="#" class="btn btn-pink">View More</a></div>
                                        </div>
                                </div>

                        </div>


                </div>
            </section>
        <!-- END AMBITIONS SECTION  -->

        <!-- START RELATED ARTICLES SECTION -->
        <section class="article-section">
                <div class="container py-3">

                            <div class="about-text">
                                    <h2 class="u-mb-small heading-secondary">Latest Articles</h2>
                                    <p class="u-mb-large">Get the latest news and updates on school issues from Future Hope International Secondary school.</p>
                            </div>

                            <div class="article">

                                    <div class="article-box">
                                            <img src="./images/secondary/pic9.jpg" alt="01" class="u-mb-small">
                                            <div class="article-content">
                                                    <p class="article-author u-mb-small">By <b>MS.Agelar Hale</b>, 19/9/2022</p>
                                                    <h4 class="article-heading u-mb-small">Discover our improved Results Service</h4>
                                                    <p class="article-excerpt">Recognising Organisations can use the results of individuals or groups and receive alerts when new results are shared. Let’s take a quick look inside the Service and see how easy it is to use...</p>
                                            </div>
                                    </div>

                                    <div class="article-box">
                                                <img src="./images/secondary/teacher.jpg" alt="02" class="u-mb-small">
                                                <div class="article-content">
                                                            <p class="article-author u-mb-small">By <b>MS.Mona Li Brown Li</b>, 15/9/2022</p>
                                                            <h4 class="article-heading u-mb-small">What's the best way to learn receptive skills?</h4>
                                                            <p class="article-excerpt">These guides are designed to help teachers understand the subskills of listening, with activities, tips and strategies to help you develop your learners’ listening skills as they prepare for their exams.</p>
                                                </div>
                                    </div>

                                    <div class="article-box">
                                            <img src="./images/secondary/pic4.jpg" alt="03" class="u-mb-small">
                                            <div class="article-content">
                                                    <p class="article-author u-mb-small">By <b>MR.Willson</b>, 14/8/2022</p>
                                                    <h4 class="article-heading u-mb-small">How can I start preparing learners for a Qualification?</h4>
                                                    <p class="article-excerpt">This guide will show you how to assess your students’ level, provide some tips for teaching mixed ability classes, and share some extra resources to help you get started with exam preparation...</p>
                                                </div>
                                    </div>

                                    <div class="article-box">
                                                    <img src="./images/secondary/pic10.jpg" alt="" class="u-mb-small">
                                                    <div class="article-content">
                                                                <p class="article-author u-mb-small">By <b>MS.Anna joee</b>, 10/8/2022</p>
                                                                <h4 class="article-heading u-mb-small">Shaping the Future of Education</h4>
                                                                <p class="article-excerpt">21st century education is facing the most extraordinary challenges. There’s globalisation, digitalisation and increasing marginalisation...</p>
                                                    </div>
                                    </div>

                            </div>

                </div>
          </section>

        <!-- END RELATED ARTICLES SECTION -->


        <!-- START STUDENT RATING SECTION  -->
        <section class="py-5">
                <div class="container">
                        <div class="row">
                                <div class="col text-center">
                                        <h3>Future Hope Students Datas</h3>
                                        <p class="small">This is all students attending on Fure Hope School according to all grades in 2022</p>
                                </div>
                        </div>
                        <div class="row">
                                <div class="col-md-4 col-sm-12 chart_div">
                                        <div id="chart_div" style="width: 350px; height: 200px;"></div>
                                </div>
                                <div class="col-md-8 col-sm-12">
                                        <span class="headings">Students Rating at Future Hope</span>
                                        <i class="fa-regular fa-star fills"></i>
                                        <i class="fa-regular fa-star fills"></i>
                                        <i class="fa-regular fa-star fills"></i>
                                        <i class="fa-regular fa-star fills"></i>
                                        <i class="fa-regular fa-star fills"></i>
                                        <p>Rating average based on 5.5k reviews.</p>
                                        <hr style="border: 1px solid #999;">

                                        <div class="rows">
                                                <div class="lefts">
                                                        <div>Grades-1</div>
                                                </div>

                                                <div class="middles">
                                                        <div class="bar-container">
                                                                <div class="bar-one"></div>
                                                        </div>
                                                </div>

                                                <div class="rights">
                                                        <div>Ages-6</div>
                                                </div>

                                                <div class="lefts">
                                                        <div>Grades-2</div>
                                                </div>

                                                <div class="middles">
                                                        <div class="bar-container">
                                                                <div class="bar-two"></div>
                                                        </div>
                                                </div>

                                                <div class="rights">
                                                        <div>Ages-7</div>
                                                </div>

                                                <div class="lefts">
                                                        <div>Grades-3</div>
                                                </div>

                                                <div class="middles">
                                                        <div class="bar-container">
                                                                <div class="bar-three"></div>
                                                        </div>
                                                </div>

                                                <div class="rights">
                                                        <div>Ages-8</div>
                                                </div>

                                                <div class="lefts">
                                                        <div>Grades-4</div>
                                                </div>

                                                <div class="middles">
                                                        <div class="bar-container">
                                                                <div class="bar-four"></div>
                                                        </div>
                                                </div>

                                                <div class="rights">
                                                        <div>Ages-9</div>
                                                </div>

                                                <div class="lefts">
                                                        <div>Grades-5</div>
                                                </div>

                                                <div class="middles">
                                                        <div class="bar-container">
                                                                <div class="bar-five"></div>
                                                        </div>
                                                </div>

                                                <div class="rights">
                                                        <div>Ages-10</div>
                                                </div>

                                                <div class="lefts">
                                                        <div>Grades-6</div>
                                                </div>

                                                <div class="middles">
                                                        <div class="bar-container">
                                                                <div class="bar-six"></div>
                                                        </div>
                                                </div>

                                                <div class="rights">
                                                        <div>Ages-11</div>
                                                </div>

                                                <div class="lefts">
                                                        <div>Grades-7</div>
                                                </div>

                                                <div class="middles">
                                                        <div class="bar-container">
                                                                <div class="bar-seven"></div>
                                                        </div>
                                                </div>

                                                <div class="rights">
                                                        <div>Ages-12</div>
                                                </div>

                                                <div class="lefts">
                                                        <div>Grades-8</div>
                                                </div>

                                                <div class="middles">
                                                        <div class="bar-container">
                                                                <div class="bar-eight"></div>
                                                        </div>
                                                </div>

                                                <div class="rights">
                                                        <div>Ages-13</div>
                                                </div>

                                                <div class="lefts">
                                                        <div>Grades-9</div>
                                                </div>

                                                <div class="middles">
                                                        <div class="bar-container">
                                                                <div class="bar-nine"></div>
                                                        </div>
                                                </div>

                                                <div class="rights">
                                                        <div>Ages-14</div>
                                                </div>

                                                <div class="lefts">
                                                        <div>Grades-10</div>
                                                </div>

                                                <div class="middles">
                                                        <div class="bar-container">
                                                                <div class="bar-ten"></div>
                                                        </div>
                                                </div>

                                                <div class="rights">
                                                        <div>Ages-15</div>
                                                </div>

                                                <div class="lefts">
                                                        <div>Grades-11</div>
                                                </div>

                                                <div class="middles">
                                                        <div class="bar-container">
                                                                <div class="bar-eleven"></div>
                                                        </div>
                                                </div>

                                                <div class="rights">
                                                        <div>Ages-16</div>
                                                </div>

                                        </div>
                                </div>
                        </div>
                </div>
        </section>
        <!-- END STUDENT RATING SECTION  -->





        <!-- START FOOTER SECTION -->

        <!-- .........................footer codes excutes here.................... -->

        <!-- END FOOTER SECTION -->





<!-- custom js         -->
  <script src="./js/secondary.js" type="text/javascript"></script>


<?php
include "./partials/footer.php"
?>