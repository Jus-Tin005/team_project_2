<?php
session_start();
include "./db.php";
include "./partials/header.php";
include "./partials/nav.php";
?>


<link rel="stylesheet" href="css/mdb.min.css" />

    <!-- Start your project here-->

<div class="row p-3 mainProject">
<div class="card text-white bg-success mb-3 col-lg-4 col-md-6 col-sm-12" >
      <div class="card-header">English</div>
      <div class="card-body">
    
        <p class="card-text">
          - Reading<br>
          - Writing<br>
          - Speaking<br>
          - Listening<br>
          - Translation
        </p>
        <button type="button" class="btn btn-primary">More ></button>
      </div>
    </div>
    <div class="card text-white bg-danger mb-3 col-lg-4 col-md-6 col-sm-12" >
      <div class="card-header">Art</div>
      <div class="card-body">
  
        <p class="card-text">
            
          - Drawing Objects<br>
          - Coloring
          <br>
            <br>
            <br>
        </p>
        <button type="button" class="btn btn-primary">More ></button>
      </div>
    </div>
    <div class="card bg-warning mb-3 col-lg-4 col-md-6 col-sm-12" >
      <div class="card-header">Musical Instruments</div>
      <div class="card-body">
    
        <p class="card-text">
          - Piano<br>
          - Violin
          <br>
            <br>
            <br>
        </p>
        <button type="button" class="btn btn-primary">More ></button>
      </div>
    </div>
    <div class="card text-body bg-info mb-3 col-lg-4 col-md-6 col-sm-12" >
      <div class="card-header">Creativity Skills</div>
      <div class="card-body">
    
        <p class="card-text">
          - Creating Objects<br>
          - Critical Thinking<br>
          - Problem Solving
          <br>
            <br>
        </p>
        <button type="button" class="btn btn-primary">More ></button>
      </div>
    </div>
    <div class="card bg-yellow mb-3 col-lg-4 col-md-6 col-sm-12" >
      <div class="card-header">Professional Practice</div>
      <div class="card-body">
    
        <p class="card-text">
          - Soft Skills<br>
          - Social Communication
          <br>
            <br>
            <br>
        </p>
        <button type="button" class="btn btn-primary">More ></button>
      </div>
    </div>
    <div class="card text-white bg-dark mb-3 col-lg-4 col-md-6 col-sm-12" >
      <div class="card-header">IT Course</div>
      <div class="card-body">
    
        <p class="card-text">
          - Basic Computer Training<br>
          - introduction to IT(Software & Hardware)
          <br>
            <br>
            <br>
        </p>
        <button type="button" class="btn btn-primary">More ></button>
      </div>
    </div>
</div>
 
    <!-- End your project here-->

    <!-- MDB -->

<?php
include "./partials/footer.php"
?>


