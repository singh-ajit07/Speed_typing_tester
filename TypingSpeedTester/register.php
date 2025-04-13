<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Typist Pro - Register</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <div class="wrapper">
        <nav>
            <ul>
                <li><a href="#">Typist Pro</a></li>
            </ul>
        </nav>
        <main class="main-container">
          <div class="register-container">
             <h1>Create Account</h1>
               <form action="insert.php" method="post">
                 <div class="input-group">
                    <label for="Name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter your name" required>
                 </div>
                 <div class="input-group">
                    <label for="Email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                 </div>
                 <div class="input-group">
                    <label for="Password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Create a password" required>
                 </div>
                 <button type="submit" name="submit" class="register-btn">Register</button>
                 <p>Already have an account? <a href="login.php">Login</a></p>
               </form>
        </div>
      </main>
        <footer>
            <p>&copy;2024 Typist Pro - All Rights Reserved</p>
        </footer>
    </div>
</body>
</html>
