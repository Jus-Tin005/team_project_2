<?php
session_start();
include "./db.php";
include "./partials/header.php";
include "./partials/nav.php";
?>

<div class="container-fluid" id="aboutus">
    <h2 class="text-center pt-5">About Us</h2>
    <div class="container mb-5 pb-5">
        <div class="row">
            <div class="col-lg-6 col-sm-12 pt-5">
                <img src="./img/others/About Us.jpg" class="img-fluid wow animate__animated animate__fadeInLeft">
                <div class="row pt-5 mt-5">
                    <div class="col-lg-6 col-sm-12">
                        <img src="./img/Activities/image 1.jpg" class="img-fluid wow animate__animated animate__backInLeft">
                    </div>
                    <div class="col-lg-6 col-sm-12 pt-5 mt-5">
                        <img src="./img/Activities/image 2.jpg" class="img-fluid wow animate__animated animate__backInRight">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 pt-5">
                <p class="pt-5 aboutText wow animate__animated animate__fadeInRight">Future Hope International School is an academically focused school that wants to instill and develop strong core values in our students. We firmly believe in the importance and the power of quality education and how it can change lives, societies and countries. As a team, we are committed to educate our next generation and to prepare them to be ready for tomorrow’s world. We aim to deliver quality education to provide more opportunities and access.</p>
                <div class="container pt-5 mt-5 pb-3 wow animate__animated animate__fadeInRight" id="about-text">
                    <div class="div1">
                        <h3 class="text-center">OUR VISION</h3>
                        <p class="text-center">Language proficiency is fundamental to international understanding, and therefore support to second-language acquisition and to mother-tongue development is recognised.</p>
                        <div></div>
                    </div>
                    <div class="div2">
                        <h3 class="text-center">OUR MISSION</h3>
                        <p class="text-center">At Future Hope we are committed to providing a supportive and enabling learning environment in which all members of the community are challenged to achieve their individual potential, encouraged to pursue their passions, and expected to fulfil their responsibilities.</p>
                        <div></div>
                    </div>
                    <div class="div3">
                        <h3 class="text-center">SLO</h3>
                        <p class="text-center">Involved Citizens, Academic Achievers, Critical Thinkers, Effective Communicators, Self-directed Lifelong Learners.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include "./partials/footer.php"
?>