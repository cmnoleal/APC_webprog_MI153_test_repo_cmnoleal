<?php
include_once 'dbconfig.php';
if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM users WHERE user_id=".$_GET['edit_id'];
 $result_set=mysqli_query($con, $sql_query);
 $fetched_row=mysqli_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
 // variables for input data
 $name = $_POST['name'];
 $nickname = $_POST['nickname'];
 $email_add = $_POST['email_add'];
 $contact_no = $_POST['contact_no'];
 $gender = $_POST['gender'];
 $comment = $_POST['comment'];
 // variables for input data

 // sql query for update data into database
 $sql_query = "UPDATE users SET name='$name',nickname='$nickname',email_add='$email_add',contact_no='$contact_no', gender='$gender',comment = '$comment' WHERE user_id=".$_GET['edit_id'];
 // sql query for update data into database
 
 // sql query execution function
 if(mysqli_query($con, $sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Updated Successfully');
  window.location.href='index.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while updating data');
  </script>
  <?php
 }
 // sql query execution function
}
if(isset($_POST['btn-cancel']))
{
 header("Location: index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CRUD Operations With PHP and MySql - By Cleartuts</title>
<link rel="stylesheet" href="style.css" type="text/css" />
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
    <label>Something wrong? Or something needs to be updated?</label>
    </div>
</div>

<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td><input type="text" name="name" placeholder="Name" value="<?php echo $fetched_row['name']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="nickname" placeholder="Nickname" value="<?php echo $fetched_row['nickname']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="email_add" placeholder="Email Address" value="<?php echo $fetched_row['email_add']; ?>" required /></td>
    </tr>
	 <tr>
    <td><input type="text" name="contact_no" placeholder="Contact number" value="<?php echo $fetched_row['contact_no']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="gender" placeholder="Gender (M or F)" value="<?php echo $fetched_row['gender']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="comment" placeholder="Comment (Something about yourself)" value="<?php echo $fetched_row['comment']; ?>" required /></td>
    </tr>
    <tr>
    <td>
    <button type="submit" name="btn-update"><strong>UPDATE</strong></button>
    <button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
    </td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>