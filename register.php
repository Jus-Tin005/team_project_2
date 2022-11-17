<?php

session_start();
include "./db.php";

// function strongValidation($pw){
//     $upperCase = false;
//     $lowerCase = false;
//     $numCase = false;
//     if(preg_match('/[A-Z]/' , $pw)){
//         $upperCase =true;
//     }
//     if(preg_match('/[a-z]/' , $pw)){
//         $lowerCase =true;
//     }
//     if(preg_match('/[0-9]/' , $pw)){
//         $numCase =true;
//     }
//     if($upperCase && $numCase & $lowerCase){
//         return true;
//     } else{
//         return false;
//     }
// }
$errors = [];
if(isset($_POST['registerBtn'])){
    $name = mysqli_escape_string($conn ,$_POST['userName']);
    $email = mysqli_escape_string($conn , $_POST['userEmail']);
    $pw = mysqli_escape_string($conn, md5($_POST['userPw']));
    empty($name) ? $errors[] = "The name field is required." : "" ;
    empty($email) ? $errors[] = "The email field is required." : "";
    empty($pw) ? $errors[] = "The password field is required." : "";
    if(count($errors) > 0){
        $errors[] = "Invalid Fields";
    } else {
                $sql = "SELECT * FROM users WHERE email = '$email' ";
                $emailCheck = mysqli_query($conn,$sql);
                if(mysqli_num_rows($emailCheck) > 0 ){
                    $errors[] = "Email already exists";
                } else {
                        $sql2 = "INSERT INTO users(`name`, `email`, `password`,`created_at`, `updated_at`) VALUES ('$name','$email','$pw', now(),now())";
                        $newUser = mysqli_query($conn, $sql2);
                        if($newUser) {
                            $_SESSION['status'] = "Registration Successful!";
                            
                            // header("location:login.php");
                            
                        } else {
                            $errors[] = "db insert error found";
                        }
                }
       
    }
}

include "./partials/header.php";
include "./partials/nav.php";
?>





<div class="row registerPage">
    <div class="registerBg col-6">
        <img src="./img/others/About Us.jpg" alt="">
        <div class="overlay2 wow animate__animated animate__fadeInLeft">
            <h4>Welcome To Future Hope</h4>
            <p>Create an account and learn free courses.</p>
        </div>

    </div>
    <div class="col-6 registerForm">
        <form action="" method="POST">
            <h3 class="mb-3">Register Here</h3>
            <div class="mb-3 registerInput">
                <label for="">User Name</label>  <br>
                <input type="text" placeholder="User Name" name="userName" class="form-control">
                <!-- <span class="text-danger" style="font-size: 12px;"><?php echo $errorName ?></span> -->
                
            </div>
            <div class="mb-3 registerInput">
                <label for="">Email Address</label> <br>
                <input type="email" placeholder="Email Address" name="userEmail" class="form-control">
                <!-- <span class="text-danger" style="font-size: 12px;"><?php echo $errorEmail ?></span> -->

            </div>
            <div class="mb-3 registerInput">
                <label for="">Password</label> <br>
                <input type="password" placeholder="Password" name="userPw" class="form-control">
                <!-- <span class="text-danger" style="font-size: 12px;"><?php echo $errorPw ?></span> -->
            </div>

                    <?php
                    foreach ($errors as $key => $value) {
                
                        echo "<p class='text-danger' style='font-size : 12px; margin : 5px;' onclick='this.remove()'>$value</p>";
                    }
                    ?>

            <div class="registerBtn">
                <button name="registerBtn">Register</button>
            </div>
            
            <?php
              if(isset($_SESSION['status'])){
                ?>
                <div class="alert alert-success alert-dismissible fade show successAlert mt-3" role="alert">
                  <strong>Hey :)</strong> <?php echo $_SESSION['status']; ?>
                  <a type="submit" href="login.php" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></a>
                </div>
                <?php
    
                unset($_SESSION['status']);
              }
            ?>
        </form>
    </div>

</div>




<?php
include "./partials/footer.php"
?>
