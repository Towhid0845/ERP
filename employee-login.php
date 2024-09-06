<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0, user-scalable=yes">
  <title>Project Management System</title>
  <link rel="shortcut icon" href="" type="image/x-icon">
  <!--all css link -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="fontawsome/css/all.min.css">
  <link rel="stylesheet" href="fontawsome/css/fontawesome.min.css">
  <link rel="stylesheet" href="css/slick.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" href="css/odometer.css">
  <link rel="stylesheet" href="css/select2.min.css">
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
</head>


<body>
  <section class="employee_login" data-background="images/employee-login.jpg">
    <div class="container">
      <!-- <div class="login_box" data-background="images/employee-sm.jpg"> -->
      <div class="login_box">
        <div class="logo">
          <a href="employee-login.php">
            <img src="images/logo.png" alt="logo" width="180px">
          </a>
        </div>
        <div class="form">
          <h3 class="title text-start">Employee Login</h3>
          <form action="index.php">
            <label>Email Address</label>
            <div class="input_groups">
              <input type="text" placeholder="Email adddress">
              <!-- <small class="text-danger fw-medium">Email is required</small> -->
            </div>
            <label>Password</label>
            <div class="input_groups position-relative">
              <input type="password" placeholder="Password">
              <i class="fa-regular fa-eye"></i>
            </div>
            <button type="submit">Login</button>
          </form>
          <div class="text-center">
            <a href="forgot-password.php" class="password_forgot">Forgot Password?</a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- all js link -->
  <!-- <script src="js/jquery-3.6.4.min.js"></script> -->
  <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>

<script>
  /* Data Background js */
  const elementsWithDataBackground = document.querySelectorAll('[data-background]');

  elementsWithDataBackground.forEach(element => {
    element.style.backgroundImage = `url(${element.getAttribute('data-background')})`;
  });
</script>