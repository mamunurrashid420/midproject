<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Title</title>
</head>
<body>
File Write:
<hr>
<form name="xmlwrite" method="post" action="write.php">
    <table>
        <tr>
            <td>Name</td>
            <td>:</td>
            <td><input type="text" name="username" placeholder="username"/></td>
        </tr>
        <tr>
            <td>number</td>
            <td>:</td>
            <td><input type="number" name="number" placeholder="minimum 8 character"/></td>
        </tr><!---
		<tr>
		<td>Gender</td>
            <td>:</td>
		<td>Male:<input type="radio" name="gender" value="male"/>
            Female:<input type="radio" name="gender" value="female"/> </td>
		</tr>---->
        <tr>
            <td><input type="submit"/></td>
            <td><input type="reset" /> </td>
            
        </tr>
    </table>
</form>
<hr>
XML Read
<hr>
<a href='read.php'>Read XML</a>
</body>
</html>