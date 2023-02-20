<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- css link -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/signup.css">
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
        <a class="nav-left" href="signIn.php">Sign in</a>
      </div>
    </nav>
  </header>

  <section class="sec-1">
        <form class="sign-up-main grid grid-col-2" action="create.php" method = "post" id="login-area">
            <div class="two-part left-part common">
                <img class="left-img" src="images/signupbackground.jpg" alt="">
            </div>
            <div class="two-part right-part common right">
                <div class="right-first right-back">
                    <h1 class="signup-title">First Name</h1>
                    <input class="input-box" type="text" placeholder="First Name" name = "fname">
                    <h1 class="signup-title">Last Name</h1>
                    <input class="input-box" type="text" placeholder="Last Name" name = "lname">
                    <h1 class="signup-title">Email</h1>
                    <input class="input-box" type="text" placeholder="Email" name = "email">
                    <h1 class="signup-title">Date of Birth</h1>
                    <input class="input-box" type="date" placeholder="Birth Date" name = "bdate">
                    <div>
                        <input class="btn btn-dark" type="submit" value = "Sign Up">
                        <h4 style="color: gray;">Already a member? <a href="signIn.php"><span class="btn-span" style="color: black;">Sign In</span></a></h4>
                    </div>
                </div>
                <div class="right-last right-back">
                    <h1 class="signup-title">Password</h1>
                    <input class="input-box" type="password" placeholder="Password" name = "pass">
                    <h1 class="signup-title">Phone Number</h1>
                    <input class="input-box" type="tel" placeholder="Phone Number" name = "num">
                    <h1 class="signup-title">Gender</h1>

                    <input type="radio" value="Male" name = "gender">
                    <label class="gen-text" for="male">Male</label><br>
                    <input type="radio" value="Female" name = "gender">
                    <label class="gen-text" for="female">Female</label><br>
                    <input type="radio" value="Other" name = "gender">
                    <label class="gen-text" for="other">Other</label>

                </div>
            </div>
        </form>
    </section>
  </body>
</html>