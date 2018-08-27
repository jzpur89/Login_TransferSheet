<?php
   ob_start();
   session_start();
?>

<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>

  <?php
     $msg = '';

     if (isset($_POST['login']) && !empty($_POST['username'])
        && !empty($_POST['password'])) {

        if ($_POST['username'] == 'tutorialspoint' &&
           $_POST['password'] == '1234') {
           $_SESSION['valid'] = true;
           $_SESSION['timeout'] = time();
           $_SESSION['username'] = 'tutorialspoint';

           header("Location: jscript2.php");
        }
        else {
           $msg = 'Wrong username or password';
        }
     }
  ?>

<html>
  <head>
    <title> Login Form </title>
          <link rel="stylesheet" type="text/css" href="login.css"
      <body>
          <div class="loginbox">
          <img src="mortal.png" class="avatar">
            <h1>Login Here</h1>
              <form class = "form-signin" role = "form"
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);
            ?>" method = "post">
                <p>Username</p>
                <input type="username" name="username" placeholder="Enter Username">
                <p>Password</p>
                <input type="password" name="password" placeholder="Enter Password">
                <input type="submit" name="login" value="BOOM"><br>
                <a href="#"> Lost your password Sucka??</a><br>
                <a href="#"> No account yet bitch?!</a>
              </form>
              Click here to clean <a href = "jscript2.php" tite = "Logout">Session.
      </body>
  </head>
</html>
