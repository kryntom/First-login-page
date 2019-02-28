<?php
include "config2.php";

if(isset($_POST['but_submit'])){

    $uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($con,$_POST['txt_pwd']);

    if ($uname != "" && $password != ""){

        $sql_query = "SELECT id as cntUser FROM details where username='".$uname."' and password='".$password."'"; 
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);
        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
            header('Location: welcome2.php');
        }else{
            echo "Invalid username or password";
        }

    }

}
?>
<html>
    
<div class="container">
    <link rel = "stylesheet" href="123.css">
    <form method="post" action="">
        <div id="div_login">
            <h1>Login</h1>
            <div>
                <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" />
            </div>
            <div>
                <input type="password" class="textbox" id="txt_uname" name="txt_pwd" placeholder="Password"/>
            </div>
            <div>
                <input type="submit" value="Submit" name="but_submit" id="but_submit" />
            </div>
        </div>
    </form>
</div>
</html>