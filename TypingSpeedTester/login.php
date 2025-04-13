<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Speed O Type - Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
  <div class="wrapper">
     <nav>
        <ul>
            <li><a href="#">Typist Pro</a></li>
        </ul>
     </nav>

     <main class="main-container">
      <div class="login-container">
        <h1>Login</h1>
        <form action="login_connect.php" method="POST">    <!-- when user subits form then the data will be sent to login_connect.php for authencating --->
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <button type="submit" name="login" class="login-btn">Login</button>
        </form>
        <p>Don't have an account? <a href="register.php">Register</a></p>
       </div>
     </main>

     <footer>
        <p>&copy;2024 Typist Pro - All Rights Reserved</p>
     </footer>
    </div>
</body>
</html>