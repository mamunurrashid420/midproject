<?php
            /* $userErr = $passwordErr ="";
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
           */
        $error=false;
        if(isset($_POST['login'])){
            $user = preg_replace('/[^A-za-z]/','',$_POST['user']);
            $password=md5($_POST['password']);
            if(file_exits('users/'. $user.'xml')){
                $xml=new SimpleXMLElement('users/'.$user . '.xml',0,true);
                if($password==$xml->password){
                    session_start();
                    $_SESSION['user']=$user;
                    header('Location:index.php');
                    die;
                }
            }
            $error=true;
        }
        ?>
         


<!!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>user login</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        
           <div class="header">
                <h1>Login</h1>
        </div>
        <form method="post" action="">
            <div  >
                <label>Username</label><br>
                <input type="text" name="user" placeholder="user name..."/>
                
            </div>
             <div >
                <label>password</label><br>
                <input type="text" name="password" >
               <?php
                    if($error){
                        echo'<p>Invalid username and /or password </p>';
                    }
                 ?>
            </div>
              <div class="input_group">
                <input type="submit" value="Submit">
            </div>
            <p>
                Not yet a member?<a href="teacherRegist.php">signup</a>
            </p>
        </form>
         
    </body>
</html>