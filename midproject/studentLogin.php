<!DOCTYPE HTML>
<html>
    <head>
        <title>user login</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
         <?php
             $userErr = $passwordErr ="";
             $user = $password ="";
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            if(empty($_POST["user"])){
                $userErr="user is required";
            }
            else{
                $user=test_input($_POST["user"]);
            }
            if(empty($_POST["password"])){
                $passwordErr="password is required";
            }
            else{
                $password=test_input($_POST["password"]);
            }
        }
        function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
            
        ?>
         
           <div class="header">
                <h1>Login</h1>
        </div>
        <form method="post" action="studentdashboard.php">
            <div  >
                <label>Username</label><br>
                <input type="text" name="user" placeholder="user name..."/>
                <span class="error">*<?php echo $userErr; ?></span>
            </div>
             <div >
                <label>password</label><br>
                <input type="text" name="password" >
                 <span class="error">* <?php echo $password ; ?></span>
            </div>
              <div class="input_group">
                <input type="submit" value="Submit">
            </div>
            <p>
                Not yet a member?<a href="register.php">signup</a>
            </p>
        </form>
         
    </body>
</html>