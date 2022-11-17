<?php 
session_start();
include "./db.php";
$errors = [];
if (isset($_POST['login'])) {
    $email = mysqli_escape_string($conn, $_POST['email']);
    $password = mysqli_escape_string($conn, md5($_POST['password']));
    empty($email) ? $errors[] = "email required" : "";
    if (count($errors) > 0) {
        $errors[] = "invalid fields";
    } else {
        $userCheck = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
        if (mysqli_num_rows($userCheck) > 0) {
            $fetch_user = mysqli_fetch_assoc($userCheck);
            $fetch_email = $fetch_user['email'];
            $fetch_password = $fetch_user['password'];
            if ($email === $fetch_email && $password === $fetch_password) {
                $_SESSION['name'] = $fetch_user['name'];
                header("location:home.php");
            } else {
                $errors[] = "email and password do not match";
            }
        }
    }
}  

include "./partials/header.php";
include "./partials/nav.php";
?>


<div class="loginPage">
    <img src="./img/Slider Photos/slider3.jpg" width="100%" alt="">
    <div class="overlay3 shadow-lg">
            <h3 class="text-center mb-4">Login</h3>
            <form method="POST" action="">
                  <input type="text" placeholder="Email" class=" form-control form_Ui mb-3" name="email" require>
                  <input type="password" placeholder="Password" class=" form-control form_Ui mb-4" name="password" require>
                  <button name="login" class="form_Btn form-control ">Login</button>
            </form>
            <p>Don't have an account? <a href="./register.php">Register Here.</a></p>
            <?php
            foreach ($errors as $key => $value) {
            echo "<p class='text-danger' style='font-size : 12px; margin : 5px; padding:0px;' onclick='this.remove()'>*$value</p>";
            }
            ?>
    </div>
</div>



<?php
include "./partials/footer.php"
?>
