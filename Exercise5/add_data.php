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
 
        $sql_query = "INSERT INTO users (name,naickname,email_add,contact_no,gender,comment) VALUES('$name','$nickname','$email_add','$contact_no','$gender','$comment')";
 mysqli_query($sql_query);
        
        // sql query for inserting data into database
 
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CRUD Operations With PHP and MySql - By Cleartuts</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
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