<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <header >
    <nav>
      <div class = "main-login">
        <div class = "nav-login">
          <form class = "frm" action="firstFile.php" method="POST">
           <input type="text" name="user" placeholder="User">
           <input type="password" name="password" placeholder = "Password">
           <button type="submit" name="submit">Login</button><br><br>
           <a href="reset-password.php">Forgot password</a>
          </form>
        </div>
      </div>
    </nav>
  </header>
</body>
</html>