<?php
session_start();
if(!file_exits('user/'. $_SESSION['user'].'.xml')){
    header('Location:login.php');
    die;
}


<!!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>user login</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <h1>user page</h1>
        <h2>welcome, <?php echo $_SESSION['user']; ?></h2>
         <hr/>
		 <a href="logout.php">logout</a>
    </body>
</html>