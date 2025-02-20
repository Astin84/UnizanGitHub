<?php
session_start();
?>

<?php
require_once('config/loader.php');

?>

<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
</head>
 
<body>
  <div class="container" id="container">

  <!-- sign up -->
    <div class="form-container sign-up">
      <form method="POST" action="action/sign-up.php">
        <h1>Sign up</h1>
        <input type="text" name="username" placeholder="userName">
        <input type="email" name="email" placeholder="Email">
        <input type="text" name="mobile" name placeholder="MobileNumber">
        <input type="password" name="password" placeholder="Password">
        <button type="submit" name="signup">Sign Up</button>
      </form>
    </div>

  <!-- sign in -->
    <div class="form-container sign-in">
      <form method="POST" action="action/sign-in.php">
        <h1>Sign In</h1>
 <br>
            <input type="text" name="key" placeholder="Mobile / Username / Email">
            <input type="password" name="password" placeholder="Password">
            <a href="#">Forget your Password?</a>
            <div style="display: inline;">
                <button type="submit" name="signin">Sign In</button>
                <a style="margin-left: 15px" href="otp.php">Send OTP</a>        
            </div>
            <?php if(isset($_GET['notuser'])) { ?>
              <p style="width:100%" class="alert alert-danger">User not found!</p>
            <?php }else if(isset($_GET['loginned'])){ ?>
              <p style="width:100%" class="alert alert-success">Login to website!</p>
            <?php } ?>
      </form>
    </div>
    <div class="toggle-container">
      <div class="toggle">
        <div class="toggle-panel toggle-left">
          <h1>Welcome to UNIZAN!</h1>
          <p>Enter your Personal details to use all of Unizan features</p>
          <button class="hidden" id="login">Sign In</button>
        </div>
        <div class="toggle-panel toggle-right">
          <h1> Say Hello to UNIZAN!</h1>
          <p>Register with your Personal details to use all of Unizan features</p>
          <button class="hidden" id="register">Sign Up</button>
        </div>
      </div>
    </div>
  </div>
</body>
<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>