<?php
if (!isset($_SESSION['email'])) {
  echo '<script>alert("Login failed")</script>';
} else {
  header('Location: ../View/Dashbord.php');
}
?>
<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
<!-- Link to CSS file -->
<!-- <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/login.css"> -->
<!-- link tailwind css -->
<!-- <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../assets/build/output.css"> -->
<!-- link to font awesome -->
<!-- <script src="https://kit.fontawesome.com/93e0a23dda.js" crossorigin="anonymous"></script>
  <title>home</title>
</head> -->

<!-- <body class="bg-blue-100">
  <section class="hero sticky top-0 w-full">
    <div class="left-nav">
      <div class="logo">
        <a href="../index.php"><img src="../assets/image/mobile logo.png" alt="logo"></a>
      </div>

    </div>

    <div class="search-bar">
      <input type="search" class="search" name="search" placeholder="search your item">
      <i class="fa-solid fa-search"></i>
    </div>
    <div class="icons">
      <div class="icon-item">
        <i class="fa-solid fa-user"></i>
      </div>
      <div>
        <a href="cart.php">
          <i class="fa-solid fa-cart-shopping"></i>
        </a>
      </div>
    </div>
  </section>
  <section>
    <h2>Weekly Coding Challenge #1: Sign in/up Form</h2>
    <div class="container" id="container">
      <div class="form-container sign-up-container">
        <form action="#">
          <h1>Create Account</h1>
          <div class="social-container">
            <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
            <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <span>or use your email for registration</span>
          <input type="text" placeholder="Name" />
          <input type="email" placeholder="Email" />
          <input type="password" placeholder="Password" />
          <button>Sign Up</button>
        </form>
      </div>
      <div class="form-container sign-in-container">
        <form action="#">
          <h1>Sign in</h1>
          <div class="social-container">
            <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
            <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <span>or use your account</span>
          <input type="email" placeholder="Email" />
          <input type="password" placeholder="Password" />
          <a href="#">Forgot your password?</a>
          <button>Sign In</button>
        </form>
      </div>
      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-panel overlay-left">
            <h1>Welcome Back!</h1>
            <p>To keep connected with us please login with your personal info</p>
            <button class="ghost" id="signIn">Sign In</button>
          </div>
          <div class="overlay-panel overlay-right">
            <h1>Hello, Friend!</h1>
            <p>Enter your personal details and start journey with us</p>
            <button class="ghost" id="signUp">Sign Up</button>
          </div>
        </div>
      </div>
    </div>

    
  </section> -->
<!-- <section class="login-sec">
    <div class="login-img max-lg:hidden">
      <img src="../assets/image/logo.png" alt="">
      <p>
      <h1><span class="text-blue-800">Log</span>in</h1>
      </p>

      <p class="font-bold">Shop the best of electronic, Grab the deals, offers and more.</p>
    </div>
    <div class="login">
      <form action="../index.php" class="login-form" method="POST">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" name="login" value="Login" class="w-fit hover:bg-blue-800 hover:text-white">
      </form>
      <div class="sm-btn" class="flex-col justify-around ">
        <button><i class="fa-brands fa-google"></i></button>
        <button><i class="fa-brands fa-facebook"></i></button>
        <button><i class="fa-brands fa-linkedin"></i></button>
      </div>
      <div class="login-method" class="flex-col">
        <p class="text-gray-500">------------------------or--------------------------</p>
        <p class="text-gray-500">New? create an account? </p>
        <a href="signup.php" class="bg-blue-800 p-1 rounded text-white">Sign Up</a>
      </div>
    </div>
  </section> -->

<!-- <section>
    <footer class="footer">
      <div class="footer__addr">
        <h1 class="footer__logo">
          <img src="../assets/image/mobile logo.png" alt="">
        </h1>

        <h2><b>Contact</b></h2>

        <address>
          5534 Somewhere In. The World 22193-10212<br>

          <a class="footer__btn" href="mailto:example@gmail.com">Email Us</a>
        </address>
      </div>

      <ul class="footer__nav">
        <li class="nav__item">
          <h2 class="nav__title"><b>Know Us</b></h2>

          <ul class="nav__ul">
            <li>
              <a href="#">About Us</a>
            </li>
            <li>
              <a href="#">
                Contact Us
              </a>
            </li>
            <li>
              <a href="#">
                Press
              </a>
            </li>
            <li>
              <a href="#">
                Careers
              </a>
            </li>
            <li>
              <a href="#">
                Elexo Earn
              </a>
            </li>
          </ul>
        </li>

        <li class="nav__item nav__item--extra">
          <h2 class="nav__title"><b>Policy</b></h2>

          <ul class="nav__ul nav__ul--extra">
            <li>
              <a href="#">
                Security
              </a>
            </li>
            <li>
              <a href="#">
                Privacy
              </a>
            </li>
            <li>
              <a href="#">
                Term of use
              </a>
            </li>
            <li>
              <a href="#">
                Return policy
              </a>
            </li>
            <li>
              <a href="#">
                Complience
              </a>
            </li>
          </ul>
        </li>
        <li class="nav__item">
          <h2 class="nav__title"><b>Social</b></h2>

          <ul class="nav__ul">
            <li>
              <a href="#">Facebbok</a>
            </li>
            <li>
              <a href="#">Instagram</a>
            </li>
            <li>
              <a href="#">Twitter</a>
            </li>
            <li>
              <a href="#">Youtube</a>
            </li>
          </ul>
        </li>
      </ul>

      <div class="legal">
        <p>&copy; 2019 Something. All rights reserved.</p>

        <div class="legal__links">
          <span>Made with <span class="heart">♥</span> by Achchcaimae Khalaf</span>
        </div>
      </div>
    </footer>
  </section>
</body>

</html> -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Link to CSS file -->
  <link rel="stylesheet" href="../assets/css/style.css">
  <!-- link tailwind css -->
  <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../assets/build/output.css">
  <!-- link to font awesome -->
  <script src="https://kit.fontawesome.com/93e0a23dda.js" crossorigin="anonymous"></script>
  <title>Document</title>
  <style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

    * {
      box-sizing: border-box;
      scroll-behavior: smooth;
    }

    body {
      background: #f6f5f7;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      font-family: 'Montserrat', sans-serif;
      height: 100vh;
      margin: -20px 0 50px;
    }

    h1 {
      font-weight: bold;
      margin: 0;
    }

    h2 {
      text-align: center;
    }

    p {
      font-size: 14px;
      font-weight: 100;
      line-height: 20px;
      letter-spacing: 0.5px;
      margin: 20px 0 30px;
    }

    span {
      font-size: 12px;
    }

    a {
      color: #333;
      font-size: 14px;
      text-decoration: none;
      margin: 15px 0;
    }

    button {
      border-radius: 20px;
      border: 1px solid rgb(29 78 216);
      background-color: rgb(29 78 216);
      color: #FFFFFF;
      font-size: 12px;
      font-weight: bold;
      padding: 12px 45px;
      letter-spacing: 1px;
      text-transform: uppercase;
      transition: transform 80ms ease-in;
    }

    button:active {
      transform: scale(0.95);
    }

    button:focus {
      outline: none;
    }

    button.ghost {
      background-color: transparent;
      border-color: #FFFFFF;
    }

    form {
      background-color: #FFFFFF;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      padding: 0 50px;
      height: 100%;
      text-align: center;
    }

    input {
      background-color: #eee;
      border: none;
      padding: 12px 15px;
      margin: 8px 0;
      width: 100%;
    }

    .container {
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25),
        0 10px 10px rgba(0, 0, 0, 0.22);
      position: relative;
      overflow: hidden;
      width: 768px;
      max-width: 100%;
      min-height: 480px;
    }

    .form-container {
      position: absolute;
      top: 0;
      height: 100%;
      transition: all 0.6s ease-in-out;
    }

    .sign-in-container {
      left: 0;
      width: 50%;
      z-index: 2;
    }

    .container.right-panel-active .sign-in-container {
      transform: translateX(100%);
    }

    .sign-up-container {
      left: 0;
      width: 50%;
      opacity: 0;
      z-index: 1;
    }

    .container.right-panel-active .sign-up-container {
      transform: translateX(100%);
      opacity: 1;
      z-index: 5;
      animation: show 0.6s;
    }

    @keyframes show {

      0%,
      49.99% {
        opacity: 0;
        z-index: 1;
      }

      50%,
      100% {
        opacity: 1;
        z-index: 5;
      }
    }

    .overlay-container {
      position: absolute;
      top: 0;
      left: 50%;
      width: 50%;
      height: 100%;
      overflow: hidden;
      transition: transform 0.6s ease-in-out;
      z-index: 100;
    }

    .container.right-panel-active .overlay-container {
      transform: translateX(-100%);
    }

    .overlay {
      background: #FF416C;
      background: -webkit-linear-gradient(to right, rgb(29 78 216), #FF416C);
      background: linear-gradient(to right, rgb(29 78 216), #FF416C);
      background-repeat: no-repeat;
      background-size: cover;
      background-position: 0 0;
      color: #FFFFFF;
      position: relative;
      left: -100%;
      height: 100%;
      width: 200%;
      transform: translateX(0);
      transition: transform 0.6s ease-in-out;
    }

    .container.right-panel-active .overlay {
      transform: translateX(50%);
    }

    .overlay-panel {
      position: absolute;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      padding: 0 40px;
      text-align: center;
      top: 0;
      height: 100%;
      width: 50%;
      transform: translateX(0);
      transition: transform 0.6s ease-in-out;
    }

    .overlay-left {
      transform: translateX(-20%);
    }

    .container.right-panel-active .overlay-left {
      transform: translateX(0);
    }

    .overlay-right {
      right: 0;
      transform: translateX(0);
    }

    .container.right-panel-active .overlay-right {
      transform: translateX(20%);
    }

    .social-container {
      margin: 20px 0;
    }

    .social-container a {
      border: 1px solid #DDDDDD;
      border-radius: 50%;
      display: inline-flex;
      justify-content: center;
      align-items: center;
      margin: 0 5px;
      height: 40px;
      width: 40px;
    }

    footer {
      background-color: #222;
      color: #fff;
      font-size: 14px;
      bottom: 0;
      position: fixed;
      left: 0;
      right: 0;
      text-align: center;
      z-index: 999;
    }

    footer p {
      margin: 10px 0;
    }

    footer i {
      color: red;
    }

    footer a {
      color: #3c97bf;
      text-decoration: none;
    }
  </style>
</head>

<body class="bg-blue-100 flex felx-col justify-between ">
  <section class="hero w-full">
    <div class="left-nav">
      <div class="logo">
        <a href="../index.php"><img src="../assets/image/mobile logo.png" alt="logo"></a>
      </div>

    </div>

    <div class="icons">
      <div class="icon-item">
        <i class="fa-solid fa-user"></i>
      </div>
      <div>
        <a href="cart.php">
          <i class="fa-solid fa-cart-shopping"></i>
        </a>
      </div>
    </div>
  </section>
  <section class="m-auto">
    <div class="container" id="container">
      <div class="form-container sign-up-container">
        <form action="../index.php" method="POST">
          <h1>Create Account</h1>
          <div class="social-container">
            <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
            <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <span>or use your email for registration</span>
          <input type="text" placeholder="Name" />
          <input type="email" placeholder="Email" />
          <input type="password" placeholder="Password" />
          <button>Sign Up</button>
        </form>
      </div>
      <div class="form-container sign-in-container">
        <form action="../index.php" method="POST">
          <h1>Sign in</h1>
          <div class="social-container">
            <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
            <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <span>or use your account</span>

          <input type="email" placeholder="Email" name="email" />
          <input type="password" placeholder="Password" name="password" />
          <a href="#">Forgot your password?</a>
          
          <button name="login" value="Login">Sign In</button>
        </form>
      </div>
      <div class=" overlay-container">
            <div class="overlay">
              <div class="overlay-panel overlay-left">
                <h1>Welcome Back!</h1>
                <p>To keep connected with us please login with your personal info</p>
                <button class="ghost" id="signIn">Sign In</button>
              </div>
              <div class="overlay-panel overlay-right">
                <h1>Hello, Friend!</h1>
                <p>Enter your personal details and start journey with us</p>
                <button class="ghost" id="signUp">Sign Up</button>
              </div>
            </div>
      </div>
    </div>
  </section>
  <!-- <section >
    <footer class="footer">
      <div class="footer__addr">
        <h1 class="footer__logo">
          <img src="../assets/image/mobile logo.png" alt="">
        </h1>

        <h2><b>Contact</b></h2>

        <address>
          5534 Somewhere In. The World 22193-10212<br>

          <a class="footer__btn" href="mailto:example@gmail.com">Email Us</a>
        </address>
      </div>

      <ul class="footer__nav">
        <li class="nav__item">
          <h2 class="nav__title"><b>Know Us</b></h2>

          <ul class="nav__ul">
            <li>
              <a href="#">About Us</a>
            </li>
            <li>
              <a href="#">
                Contact Us
              </a>
            </li>
            <li>
              <a href="#">
                Press
              </a>
            </li>
            <li>
              <a href="#">
                Careers
              </a>
            </li>
            <li>
              <a href="#">
                Elexo Earn
              </a>
            </li>
          </ul>
        </li>

        <li class="nav__item nav__item--extra">
          <h2 class="nav__title"><b>Policy</b></h2>

          <ul class="nav__ul nav__ul--extra">
            <li>
              <a href="#">
                Security
              </a>
            </li>
            <li>
              <a href="#">
                Privacy
              </a>
            </li>
            <li>
              <a href="#">
                Term of use
              </a>
            </li>
            <li>
              <a href="#">
                Return policy
              </a>
            </li>
            <li>
              <a href="#">
                Complience
              </a>
            </li>
          </ul>
        </li>
        <li class="nav__item">
          <h2 class="nav__title"><b>Social</b></h2>

          <ul class="nav__ul">
            <li>
              <a href="#">Facebbok</a>
            </li>
            <li>
              <a href="#">Instagram</a>
            </li>
            <li>
              <a href="#">Twitter</a>
            </li>
            <li>
              <a href="#">Youtube</a>
            </li>
          </ul>
        </li>
      </ul>

      <div class="legal">
        <p>&copy; 2019 Something. All rights reserved.</p>

        <div class="legal__links">
          <span>Made with <span class="heart">♥</span> by Achchcaimae Khalaf</span>
        </div>
      </div>
    </footer>
  </section> -->
</body>
<script>
  const signUpButton = document.getElementById('signUp');
  const signInButton = document.getElementById('signIn');
  const container = document.getElementById('container');

  signUpButton.addEventListener('click', () => {
    container.classList.add("right-panel-active");
  });

  signInButton.addEventListener('click', () => {
    container.classList.remove("right-panel-active");
  });
</script>

</html>