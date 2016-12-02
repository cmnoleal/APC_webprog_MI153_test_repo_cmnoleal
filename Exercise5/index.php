<?php
include_once 'dbconfig.php';

// delete condition
if(isset($_GET['delete_id']))
{
 $sql_query="DELETE FROM users WHERE user_id=".$_GET['delete_id'];
 mysqli_query($con, $sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
// delete condition
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>The Carl's Page</title>
<script type="text/javascript">
function edt_id(id)
{
 if(confirm('Sure to edit ?'))
 {
  window.location.href='edit_data.php?edit_id='+id;
 }
}
function delete_id(id)
{
 if(confirm('Sure to Delete ?'))
 {
  window.location.href='index.php?delete_id='+id;
 }
}
</script>
</head>
<body>
<center>
<style>
#page{
	font-family:courier;
	font-size:20px;
	color:white;
	background-color:black;
}
table {
    font-size:100%;
    font-family: courier;
    border-collapse: collapse;
    width: 55%;
}

td, th {
    border: 5px solid rgb(128,128,128);
    text-align: left;
    padding: 15px;
}

tr:nth-child(even) {
    background-color: black;
}

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
 background:#00a2d1;
 padding:9px 15px 9px 15px;
 color:#f9f9f9;
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
<div id="header">
 <div id="content">
    <label>HELLO! WELCOME TO MY PERSONAL WEBSITE!</label>
    </div>
</div>

<div id="body">
 <div id="content">
    <table align="center">
    <tr>
    <th colspan="8"><a href="add_data.php"><center>add data here.</center></a></th>
    </tr>
    <th>Name</th>
    <th>Nickname</th>
    <th>Email Address</th>
	<th>Contact Number</th>
    <th>Gender</th>
    <th>Comment</th>
    <th colspan="2">Operations</th>
    </tr>
    <?php
 $sql_query="SELECT * FROM users";
 $result_set=mysqli_query($con, $sql_query);
 while($row=mysqli_fetch_row($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[3]; ?></td>
		<td><?php echo $row[4]; ?></td>
		<td><?php echo $row[5]; ?></td>
		<td><?php echo $row[6]; ?></td>
  <td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')"><img src="b_edit.png" align="EDIT" /></a></td>
        <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')"><img src="b_drop.png" align="DELETE" /></a></td>
        </tr>
        <?php
 }
 ?>
    </table>
    </div>
</div>

</center>
</body>
<body id ="page">  <center>
<p style="color:white;font-size:200;">-----------------------------------------------------------------------------------------------------------------------------------------</p>

<h1 style ="color:white;font-family:courier;"> <center> HELLO! WELCOME TO MY PERSONAL WEBSITE! <center> </h1>

<table>
  <tr>
    <th style = "color:white;">Name:</th>
  </tr>

  <tr>
    <td style = "color:white;">Carl Justine Noleal</td>
  </tr>
</table>

<p style="color:white;font-size:200;">-----------------------------------------------------------------------------------------------------------------------------------------</p>

<table>
  <tr>
    <th style = "color:white;">
	Nicknames:
    </th>
  </tr>

  <tr>
    <td style = "color:white;">Carl, Justin, Jus, CJ</td>
  </tr>
</table>

<p style="color:white;font-size:200;">-----------------------------------------------------------------------------------------------------------------------------------------</p>

<table>
  <tr>
    <th style = "color:white;">Hobies:</th>
    <th style = "color:white;"></th>
  </tr>

  <tr>
    <td id="SW"; style = "color:white;"><center>What do I do when I'm inspired?</center>
    <center><button type="button"; style = "background-color:black;color:White;font-family:courier;font-size:100%" onclick="document.getElementById('SW').innerHTML = 'Song Writing!'">Want to know?!</button></center>
    </td>
    <td><img src="SW.jpg" alt = "Song Writing" style ="width:550px;height:200;"></td>
 </tr>

  <tr>
    <td id="AG"; style = "color:white;"><center>What do I use?</center>
    <center><button type="button"; style = "background-color:black;color:White;font-family:courier;font-size:100%" onclick="document.getElementById('AG').innerHTML = 'Acoustic Guitar!'">Want to know?!</button></center>
    </td>
    <td> 
	<img src="AG.jpg" alt = "Acoustic Guitar" style ="width:550px;height:200;">
    </td>
  </tr>

  <tr>
   <td id="Band"; style = "color:white;"> <center>What is my favorite band?</center>
   <center> <button type="button"; style = "background-color:black;color:White;font-family:courier;font-size:100%" onclick="document.getElementById('Band').innerHTML = 'The 1975!'">Want to know?!</button></center>
    </td>
    <td>
	<img id = "THE"; src="1975.jpg" alt = "The 1975" style ="width:550px;height:200;">
    </td>
  </tr>

  <tr>
   <td id="web"; style = "color:white;"> <center>What is my favorite website?</center>
   <center> <button type="button"; style = "background-color:black;color:White;font-family:courier;font-size:100%" onclick="document.getElementById('web').innerHTML = '9gag I think? Hmm.'">Want to know?!</button></center>
    </td>
    <td>
	<img id = "9gag"; src="9gag.png" alt = "9gag" style ="width:550px;height:200;">
    </td>
  </tr>
</table>
</center>
</table>
</body>
</html>