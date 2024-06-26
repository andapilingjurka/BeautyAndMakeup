<?php
include "./include/functions.php";
?>

<?php
if(isset($_POST['login'])){
    login($_POST['email'],$_POST['password']);
}
?>

<?php
if (isset($_POST['signup'])) {
  signup(
      $_POST['name'],
      $_POST['surname'],
      $_POST['email'],
      $_POST['password']
  );
} 

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Plaza Cosmetics</title>
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css/forms.css"/>
    <link rel="icon" type="image/x-icon" href="images/icon.png">
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <!--FORMA PER SIGN IN -->
          <form
            method="POST"
            id="signup-login"
            class="sign-in-form"
            action="#"
            name="login"
          >
            <h2 class="title">SIGN IN</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input name="email" type="text" required/>
              <label for="">Email</label>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input name="password" type="password" required/>
              <label for="">Password</label>
            </div>

            <button type="submit" class="btn submit" id="login" name="login">
              Sign in
            </button>

            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>


           <!--FORMA PER SIGN UP -->
          <form
            method="POST"
            id="signup-form"
            class="sign-up-form"
            action="#"
            name="signup"
          >
            <h2 class="title">SIGN UP</h2>
            <div class="input-field-row">
                <div class="input-field">
                    <input type="text" name="name" required />
                    <label for="name">First Name</label>
                </div>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="surname" required />
                    <label for="surname">Last Name</label>
                </div>
             </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" required/>
              <label for="">Email</label>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" required/>
              <label for="">Password</label>
            </div>

            <button type="submit" class="btn submit" id="signup" name="signup">
              Sing Up
            </button>

            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>NEW HERE !</h3>
            <p>
            Create a new account to personalize your experience.
            </p>
            <button class="btn transparent" id="sign-up-btn">Sign up</button>
          </div>
          <img src="./images/img1.png" class="image" alt="" style="margin-right:20px;" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>ALREADY HAVE AN ACCOUNT !</h3>
            <p>
            It's great to have you back! Click 'Sign in' to continue.
            </p>
            <button class="btn transparent" id="sign-in-btn">Sign in</button>
          </div>
          <img src="./images/img2.png" class="image" alt="" style="padding-left:50px;" />
        </div>
      </div>
    </div>

    <script src="js/forms.js"></script>
  </body>
</html>
