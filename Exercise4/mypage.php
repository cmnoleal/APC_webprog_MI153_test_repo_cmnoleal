<!DOCTYPE HTML>  
<html>
<head>
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

</style>
</head>
<body id ="page">  <center>
<div>
<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL"; 
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
</div>
<h2>Who's viewing this?</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="Female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="Male">Male
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
<table>
<?php
echo "<h2>Viewer's Info:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
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