<!DOCTYPE HTML>
<html>
    <head>
        <title>Home page</title>
       <!--- <link rel="stylesheet" type="text/css" >---->
        <style>
            .header{
                   width: 50%;
                margin: 60px auto 0px;
                background: #5F9EA0;
                color: white;
                text-align: center;
                border:1px solid #80C4DE;
                padding: 20px;
		       border-radius: 10px 10px 0px 0px;
            }
            .main{
                height: 316px;
                width: 53%; 
                background: black;
                margin: 0px auto 0px;
                text-align: center;
                border-radius: 0px 0px 10px 10px;
            }
            .teacher{
                width: 50%;
                height: 100%;
                 float: left;
                background: #219961;
                  border-radius: 0px 0px 10px 10px;
               
            }
            .student{
                width: 50%;
                height: 100%;   
                background: #2599c4;
                border-radius: 0px 0px 10px 10px;
                float: right;
            }
            img{
                width: 100%;
                height: 100%;
            }
        
        </style>
    </head>
    <body>
        <div class="header">
             <h1>Home</h1>
        </div>
        <div class="main">
            <!----- teacher  content---------->
            <div class="teacher">
                <a href="teacherLogin.php"><img src="image/teacher.png"></a>
            </div>
            <!----- student  content---------->
            <div class="student">
                <a href="studentLogin.php"><img src="image/student.png"></a>
            </div>
        </div>
    </body>
</html>