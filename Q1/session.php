<?php
session_start();
?>
<?php
if (isset($_POST["submit"])) {

    $username = $_POST["username"];
    $age =  $_POST["age"];
    $password = $_POST["password"];

    if ($username == "user1@gmail.com" && $password == "pass") {
        echo "You are logged in successfully !!! <br>";
        $_SESSION["username"]  = $username;
        echo "Your sessions are set <br> ";
        require 'Login_Success.php';
    } else {
        echo "Wrong username or password"; 
        session_unset();
        session_destroy();
        // require 'Login_Failed';
    }
}
?>