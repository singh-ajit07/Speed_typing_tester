<?php
include ('config.php');

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $dup_email = mysqli_query($con,"SELECT * FROM users WHERE email = '$email'");   //This checks if the email already exists in the database

    if(mysqli_num_rows($dup_email)){
        echo "
            <script>
                alert('This Email is already taken');
                window.location.href = 'register.php';
            </script>
        ";
    }
    else{
        mysqli_query($con,"INSERT INTO users(name, email, password) VALUES ('$name','$email','$password')");
        echo "
        <script>
                window.location.href = 'login.php';
        </script>";
    }

}

?>