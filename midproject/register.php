<!DOCTYPE HTML>
<html>
    <head>
         <title>User registration system and using php </title>
    <link rel="stylesheet" type="text/css" href="style.css">
        <style>
            .error{
                color: darkred;
            }
        </style>
    </head>
    <body>
        <?php
            $first_nameErr = $lastnameErr = $userErr = $emailErr = $passwordErr = $confirm_passwordErr = $studentErr = $teacherErr = "";
            $first_name = $lastname = $user = $email = $password = $confirm_password = $student = $teacher = "";
            
        
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                if($user=test_input($_POST["user"])){
                    
                }
                if(empty($_POST["first_name"])){
                    $first_nameErr="Name is reqired";
                }
                else{
                    $first_name= test_input($_POST["first_name"]);
                }
                if(empty($_POST["email"])){
                    $emailErr="email is required";
                }
                else{
                    $email=test_input($_POST["email"]);
                }
                 $_POST['password'];
                    $_POST['confirm_password'];
                    if($_POST['password']==$_POST['confirm_password']){
                        echo "successfull";
                    }
                    else{
                        echo "wrong password";
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
            <h2>Registration</h2>
        </div>
        <p>
            <span class="error">* required field</span>
        </p>
        <form  method="post" action="register.php">

            <div class="input_group">
                <label>First Name</label><br>
                <input type="text" name="first_name" placeholder=""/>
                <span class="error">* <?php echo $first_nameErr;?></span>
            </div>
            <div class="input_group">
                <label>last name</label><br>
                <input type="text" name="lastname"/>
            </div>
            <div class="input_group" >
                <label>Username</label><br>
                <input type="text" name="user" placeholder="user name..."/>
            </div>
            <div class="input_group">
                <label>email</label><br>
                <input type="text" name="email"/>
                    <span class="error">* <?php echo $emailErr;?></span>
            </div>
            <div class="input_group">
                <label>password</label><br>
                <input type="text" name="password" >
            </div> 
            <div class="input_group">
                <label>confirm password</label><br>
                <input type="text" name="confirm_password"/>
            </div>
            <div class="input_group">
                 <label>User</label><br>
                <input type="radio" name="teacher" value="teacher"/ >Teacher
                <input type="radio" name="student" value="student"/>student
            </div>
            <div class="input_group">
                <input type="submit" value="Submit">
            </div>
              <p>
                  Already a member? <a href="studentLogin.php">Sign in</a>
            </p>
        </form>
    </body>
</html>