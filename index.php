<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Log-in</title>
  
  
  <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>

      <link rel="stylesheet" href="css/login.css">

  
</head>

<body>
  <div class="login-card">
    <h1>Log-in</h1><br>
  <form action="logreg.php" method="post" accept-charset="utf-8">
    <input type="text" name="username" value="" placeholder="Username">
    <input type="password" name="password" value="" placeholder="Password">
    <input type="submit" name="login" value="Login">
	<input type="submit" name="register" value="Register">
  </form>
    
  <div class="login-help">
    <a href="#">Register</a> • <a href="#">Forgot Password</a>
  </div>
</div>

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>

  
</body>
</html>
