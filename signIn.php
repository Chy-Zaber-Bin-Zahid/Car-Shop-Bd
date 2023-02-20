<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- css file link -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/signin.css">
  <title>Car Workshop BD | The Fastest Car Service Center</title>
</head>
<body>
<header class="header">
    <nav>
      <div>
        <a class="nav-car-title" href="home.php">CAR WORKSHOP BD</a>
      </div>
      <div class="nav-left-box">
        <a class="nav-left" href="home.php">Home</a>
        <a class="nav-left" href="signUp.php">Sign up</a>
      </div>
    </nav>
  </header>

  <section class="section-signin">
    <form id="login-area" action="logIn.php" method = "post">
      <h1 class="text-center">
            Sign In
      </h1>
      <div class="submit-area">
        <input id = "name" required type="email" class="form-control" placeholder="Email" name="email" />
        <br />
        <input id = "password" required type="password" class="form-control" placeholder="Password" name="pass" />
        <br />
        <!-- <button id="login" class="btn btn-success">Enter</button> -->
        <div class="sub-btn">
          <input id="submit" type="submit" value = "Sign In">
        </div>
        <br>
        <p class="dont-have" >Don't have an account? <a href="signUp.php">Sign Up</a>
      </p>
      </div>
    </form>
  </section>
</body>
</html>