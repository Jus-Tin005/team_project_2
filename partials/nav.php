<?php
    $name = isset($_SESSION['name']);
?>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirm Logout</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure you want to logout?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancle</button>
        <a href="logout.php" class="btn btn-primary">Logout</a> 
      </div>
    </div>
  </div>
</div>


<!-- navbar  -->
<div class="navBar" id="menu">
    <ul class="navList">
        <li><a href="./home.php" class="active">HOME</a></li>
        <li><a href="./about.php">ABOUT US</a></li>
        <!-- <li><a href="php" class="me-2">Courses</a><i class="fa fa-caret-down" aria-hidden="true"></i></li>
        <li><a href="./home.php" class="me-2">Programs</a><i class="fa fa-caret-down" aria-hidden="true"></i></li> -->

        <div class="dropdown navDrops">
          <a href="primary.php" class="dropdown-toggle"  data-bs-toggle="dropdown" >
            COURSES
          </a>
          <ul class="dropdown-menu">
            <a class="dropdown-item text-black-50" href="./primary.php">PRIMARY</a>
            <a class="dropdown-item text-black-50" href="./secondary.php">SECONDARY</a>
          </ul>
        </div>

        <div class="dropdown navDrops">
          <a href="programs.php" class="dropdown-toggle"  data-bs-toggle="dropdown" >
            PROGRAMS
          </a>
          <ul class="dropdown-menu">
            <a class="dropdown-item text-black-50" href="./programs.php">SUMMER PROGRAMS</a>
          </ul>
        </div>

        <li><a href="./activity.php">ACTIVITIES</a></li>
        <li><a href="./contact.php">CONTACT US</a></li>           
    </ul>

    <div class="dropdown">
      
    <a class="dropdown-toggle login_btn" href="login.php">
      <i class="fa fa-user me-2" aria-hidden="true"></i>
      <?php echo $_SESSION['name'] ?? "Login" ?>
    </a>
    <ul class="dropdown-menu">
      <a class="dropdown-item" href="#"><i class="fa fa-gear me-2" aria-hidden="true"></i>Settings</a>
      <a class="dropdown-item" href="#"><i class="fa fa-info-circle me-2" aria-hidden="true"></i>Help</a>
      <a class="dropdown-item" href="#"><i class="fa fa-bars me-2" aria-hidden="true"></i>Activity Log</a>
     
      <?php  if($name) :   ?>
      <a class="dropdown-item" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-sign-out me-2" aria-hidden="true"></i>Logout</a>
      <?php   endif   ?>

    </ul>
  </div>
    
</div>