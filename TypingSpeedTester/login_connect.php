<?php
include ("config.php");

if (isset($_POST['login'])) {
    $u_email = $_POST['email'];
    $u_pass = $_POST['password'];

    // Query to select the user details
    $result = mysqli_query($con, "SELECT * FROM users WHERE email = '$u_email' AND password = '$u_pass'");

    if ($result && mysqli_num_rows($result) > 0) {
        
        $row = mysqli_fetch_assoc($result);
    } else {
        // Handle case where no matching user is found
        echo "No user found or invalid login details.";
    }

    if (mysqli_num_rows($result)) {
        
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $u_email;
  
        echo "
        <script>
            alert('Login Success');
            window.location.href = 'index.html';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Incorrect Email/Password');
            window.location.href = 'login.php';
        </script>
        ";
    }
}