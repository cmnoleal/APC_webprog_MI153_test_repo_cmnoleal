<!DOCTYPE html>
<html style="background-color:black;">
<head>
<style>
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
<body> <center>

<h1 style ="color:white;font-family:courier;"> <center> HELLO! WELCOME TO MY PERSONAL WEBSITE! <center> </h1>

<h2 style ="color:white;font-family:courier;"> <center> A Guest User? Please fill up the following indicated below: </center></h2>
<p style ="color:white;font-family:courier;"><center> var name = prompt("Please enter your name:"<center></P>

<table>
<tr>
    <th style = "color:white;">Name:</th>
  </tr>

  <tr>
<?php<td style = "color:white;"> echo Carl Justine Noleal</td>?>
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
<?php<td style = "color:white;"> echo Carl, Justin, Jus, CJ</td>?>
  </tr>
</table>

<p style="color:white;font-size:200;">-----------------------------------------------------------------------------------------------------------------------------------------</p>
<table>
<tr>
    <th style = "color:white;">
    Email Address:
    </th>
  </tr>
<tr>
<?php<td style = "color:white;"> echo justinenoleal@gmail.com</td>?>
  </tr>
</table>

<p style="color:white;font-size:200;">-----------------------------------------------------------------------------------------------------------------------------------------</p>
<table>
<tr>
    <th style = "color:white;">
    Home Address:
    </th>
  </tr>
<tr>
<?php<td style = "color:white;"> echo St. Francis Street, P14 Zone3b Signal Village, Taguig City, Philippines</td>?>
  </tr>
</table>

<p style="color:white;font-size:200;">-----------------------------------------------------------------------------------------------------------------------------------------</p>
<table>
<tr>
    <th style = "color:white;">
    Gender:
    </th>
  </tr>
<tr>
<?php<td style = "color:white;"> echo Male</td>?>
  </tr>
</table>

<p style="color:white;font-size:200;">-----------------------------------------------------------------------------------------------------------------------------------------</p>
<table>
<tr>
    <th style = "color:white;">
    Contact Number:
    </th>
  </tr>
<tr>
<?php<td style = "color:white;"> echo 09950963329</td>?>
  </tr>
</table>

<p style="color:white;font-size:200;">-----------------------------------------------------------------------------------------------------------------------------------------</p>
<table>
<tr>
    <th style = "color:white;">Hobies:</th>
    <th style = "color:white;"></th>
  </tr>

<tr>
<td id="SW"; style = "color:white;"><center> echo What do I do when I'm inspired?</center>
    <center><button type="button"; style = "background-color:black;color:White;font-family:courier;font-size:100%" onclick="document.getElementById('SW').innerHTML = 'Song Writing!'">Want to know?!</button></center>
    </td>
<td><img src="SW.jpg" alt = "Song Writing" style ="width:550px;height:200;"></td>
 </tr>

  <tr>
    <td id="AG"; style = "color:white;"><center>What do I use?</center>
    <center><button type="button"; style = "background-color:black;color:White;font-family:courier;font-size:100%" onclick="document.getElementById('AG').innerHTML = 'Acoustic Guitar!'">Want to know?!</button></center>
    </td>
<td><img src="AG.jpg" alt = "Acoustic Guitar" style ="width:550px;height:200;">
    </td>
  </tr>

  <tr>
   <td id="Band"; style = "color:white;"> <center>What is my favorite band?</center>
   <center> <button type="button"; style = "background-color:black;color:White;font-family:courier;font-size:100%" onclick="document.getElementById('Band').innerHTML = 'The 1975!'">Want to know?!</button></center>
    </td>
<td><img id = "THE"; src="1975.jpg" alt = "The 1975" style ="width:550px;height:200;">
    </td>
  </tr>

  <tr>
   <td id="web"; style = "color:white;"> <center>What is my favorite website?</center>
   <center> <button type="button"; style = "background-color:black;color:White;font-family:courier;font-size:100%" onclick="document.getElementById('web').innerHTML = '9gag I think? Hmm.'">Want to know?!</button></center>
    </td>
<td><img id = "9gag"; src="9gag.png" alt = "9gag" style ="width:550px;height:200;"></td>
  </tr>

</table>
</center>
</body>
</html>

