<!---------- file upload -------------->
<?php
    if(isset($_POST['upload'])){
        $file_name=$_FILES['file']['name'];
        $file_type=$_FILES['file']['type'];
        $file_size=$_FILES['file']['size'];
        $file_tem_loc=$_FILES['file']['tmp_name'];
        $file_store="upload/".$file_name;
        echo $file_store;
        if(move_uploaded_file($file_tem_loc,$file_store)){
            echo "<img src='' height='100' width='100'/>";
        }
    }
    
?>




<!DOCTYPE HTML>
<html>
    <head>
        <title>Uploading file</title>
     <!------   <link rel="stylesheet" href="style.css" type="text/css" >--->
        <style>
            form{
                 width: 90%;
                margin: 0px auto 0px;
                padding: 20px;
                border: 1px solid gray;
                background: white;
                border-radius: 10px 10px 10px 10px;
                text-align: center;
            } 
            input[type=file],[type=submit]{
                width: 50%;
                padding: 12px 20px;
                margin: 8px 0px;
                display: inline-block;
                border: 1px solid #ccc;
            } 
             .header{
                width: 50%;
                margin: 60px auto 0px;
                background: #5F9EA0;
                color: white;
                text-align: center;
                border:1px solid #80C4DE;
                padding: 20px;
		border-radius: 10px 10px 10px 10px;
            }
            input[type=submit]:hover{
                background: #008B8B;
            }
        </style>
    </head>
    <body>
        <form class="header" method="post" action="studentdashboard.php" enctype="multipart/form-data">
            <label>Uplaoding Files</label>
            <p><input type="file" name="file"/></p>
            <p><input type="submit" name="upload" value="upload Image"/></p>
        </form>
    </body>
</html>