<!DOCTYPE html>
<html>
    <head>
        <style>
            .div1{
                    width:50%;
                    height:50px;
                    background:black;
                   text-align:center;
                   padding:20px;
                   list-style: none;
                   margin:0px auto 0px;
                   /*border-radius:10px 10px 0px 0px;*/
                }
                .div2{
                     width:50%;
                    height:50px;
                    font-size: 20px;
                    background:red;
                    text-align: center;
                    padding:20px;
                    margin:0px auto 0px;
                    }
                    a{
                    text-align:center;
                    }
                    .div3{
                    width:50%;
                    height:50px;
                    background:yellow;
                    padding:20px;
                    text-align:center;
                    font-size:25px;
                    text-decoration: none;
                    border-radius:  0px 0px 10px 10px;
                    margin:0px auto 0px;}

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
            .div4{
                   width:50%;
                    height:50px;
                    background:gray;
                    padding:20px;
                    text-align:center;
                    font-size:25px;
                    text-decoration: none;
                    border-radius:  0px 0px 10px 10px;
                    margin:0px auto 0px;
            }
                        a{
                        text-decoration: none;}
                  /*   width: 100%;
                            margin: 0px auto 0px;
                            padding: 20px;
                            border: 1px solid gray;
                            background: white;
                            border-radius: 0px 0px 10px 10px;*/
        </style>
    </head>
    <body>
        <div class="header">
            <h2>Dashboard</h2>
        </div>

        <div class="div1">
                <a href="question.php">Quiz</a>
        </div>
        <div class="div2">
            <p>
                <a href="upload.php" >upload</a>
            </p>
        </div>
        <div class="div3">
           <a href="#">result</a>
        </div>
        <div class="div4">
            <a href="logout.php">Logout </a>
        </div>

    </body>
</html>
