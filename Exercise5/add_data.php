<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
{
 // variables for input data
 $name = $_POST['name'];
 $nickname = $_POST['nickname'];
 $email_add = $_POST['email_add'];
 $contact_no = $_POST['contact_no'];
 $gender = $_POST['gender'];
 $comment = $_POST['comment'];
 // variables for input data
 
 // sql query for inserting data into database
 
        $sql_query = "INSERT INTO users (name,nickname,email_add,contact_no,gender,comment) VALUES('$name','$nickname','$email_add','$contact_no','$gender','$comment')";
 mysqli_query($con, $sql_query);
        
        // sql query for inserting data into database
 
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CRUD Operations With PHP and MySql - By Cleartuts</title>
</head>
<style>
{
 margin:0;
 padding:0;
}
body
{
 background:black;
 font-family:Courier;
}
#header
{
 width:100%;
 height:50px;
 background:Black;
 color:#f9f9f9;
 font-family:courier;
 font-size:35px;
 text-align:center;
}
#header a
{
 color:#fff;
 text-decoration:blink;
}
#body
{
 margin-top:50px;
}
table
{
 width:80%;
 font-family:courier;
 font-weight:bolder;
 color:#999;
 margin-bottom:80px;
}
table a
{
 text-decoration:none;
 color:white;
}
table,td,th
{
 border-collapse:collapse;
 border:solid #d0d0d0 1px;
 padding:20px;
}
table td input
{
 width:97%;
 height:35px;
 border:dashed #00a2d1 1px;
 padding-left:15px;
 font-family:courier;
 box-shadow:0px 0px 0px rgba(1,0,0,0.2);
 outline:none;
}
table td input:focus
{
 box-shadow:inset 1px 1px 1px rgba(1,0,0,0.2);
 outline:none;
}
table td button
{
 border:solid #f9f9f9 0px;
 box-shadow:1px 1px 1px rgba(1,0,0,0.2);
 outline:none;
 background:white;
 padding:9px 15px 9px 15px;
 color:black;
 font-family:courier;
 font-weight:bolder;
 border-radius:3px;
 width:49.5%;
}
table td button:active
{
 position:relative;
 top:1px;
}
</style>
<body>
<center>

<div id="header">
 <div id="content">
    <label>Who's viewing this?</label>
    </div>
</div>
<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td align="center"><a href="index.php">back to main page</a></td>
    </tr>
    <tr>
    <td><input type="text" name="name" placeholder="Name" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="nickname" placeholder="Nickname"  /></td>
    </tr>
    <tr>
    <td><input type="text" name="email_add" placeholder="Email Address"  /></td>
    </tr>
	<tr>
    <td><input type="text" name="contact_no" placeholder="Contact Number"  /></td>
    </tr>
	 <tr>
    <td><input type="text" name="gender" placeholder="Gender (M or F)" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="comment" placeholder="Comment (Something about you)"  /></td>
    </tr>
    <tr>
    <td><button type="submit" name="btn-save"><strong>SAVE</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>