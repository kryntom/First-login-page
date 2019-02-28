<?php
include "config2.php";

// Check user login or not
if(!isset($_SESSION['uname'])){
    header('Location: index.php');
}

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: login2.php');
    
}
?>

<!doctype html>
<html>
    <head></head>
    <body>
        <h1>Homepage</h1>
        <h2> Hi, Welcome to your first page</h2>
        <form method='post' action="">
            <input type="submit" value="Logout" name="but_logout">
        </form>
    </body>
</html>

