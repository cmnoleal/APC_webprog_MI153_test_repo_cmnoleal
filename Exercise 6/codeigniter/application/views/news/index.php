<style>
	#h1 {
	font-size:100%;
	font-family: courier;
	border-collapse: collapse;
	width: 100%;
	border:solid #d0d0d0 1px;
	padding:20px;
		}
#table{
	    font-size:100%;
    font-family: courier;
    border-collapse: collapse;
    width: 100%;
	 border:solid #d0d0d0 1px;
 padding:20px;
}
#t1{
	    font-size:100%;
    font-family: courier;
    border-collapse: collapse;
    width: 80%;
	 border:solid #d0d0d0 1px;
 padding:20px;
}
#t2{
	    font-size:100%;
    font-family: courier;
    border-collapse: collapse;
    width: 80%;
	 border:solid #d0d0d0 1px;
 padding:20px;
}
#t3{
	    font-size:100%;
    font-family: courier;
    border-collapse: collapse;
    width: 80%;
	 border:solid #d0d0d0 1px;
 padding:20px;
}
#t4{
	    font-size:100%;
    font-family: courier;
    border-collapse: collapse;
    width: 80%;
	 border:solid #d0d0d0 1px;
 padding:20px;
}
#t5{
	    font-size:100%;
    font-family: courier;
    border-collapse: collapse;
    width: 80%;
	 border:solid #d0d0d0 1px;
 padding:20px;
}
#t6{
	    font-size:100%;
    font-family: courier;
    border-collapse: collapse;
    width: 80%;
	 border:solid #d0d0d0 1px;
 padding:20px;
}
#t7{
	    font-size:100%;
    font-family: courier;
    border-collapse: collapse;
    width: 80%;
	 border:solid #d0d0d0 1px;
 padding:20px;
}
</style>



<center><h2><?php echo $title; ?></h2>
<table id = 'table' border='1' cellpadding='2'> 
    <tr>
        <td id = "t1"><strong>Name</strong></td>
        <td id = "t2"><strong>Nicknames</strong></td>
        <td id = "t3"><strong>Email Address</strong></td>
        <td id = "t4"><strong>Contact Number</strong></td>
        <td id = "t5"><strong>Gender</strong></td>
		<td id = "t6"><strong>Comment</strong></td>
        <td id = "t7"><strong>Action</strong></td>
    </tr>
<?php foreach ($news as $news_item): ?>
        <tr>
            <td><?php echo $news_item['name']; ?></td>
            <td><?php echo $news_item['nickname']; ?></td>
			<td><?php echo $news_item['email_add']; ?></td>
			<td><?php echo $news_item['contact_no']; ?></td>
			<td><?php echo $news_item['gender']; ?></td>
			<td><?php echo $news_item['comment']; ?></td>
            <td>

                <a href="<?php echo site_url('news/edit/'.$news_item['user_id']);
?>">Edit</a> |
                <a href="<?php echo site_url('news/delete/'.$news_item['user_id']);
?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a></center>
            </td>
        </tr>
<?php endforeach; ?>

</table>
</center>
<body id ="page">  <center>
<p style="color:white;font-size:18;">-----------------------------------------------------------------------------------------------------------------------------------------</p>

<h1 style ="color:white;font-family:courier;"> <center> HELLO! WELCOME TO MY PERSONAL WEBSITE! <center> </h1>

<table id = 't1'><center>
  <tr>
    <th style = "color:white;">Name:</th>
  </tr>

  <tr>
    <td style = "color:white;"><center>Carl Justine Noleal</center></td>
  </tr>
</center></table>

<p style="color:white;font-size:18;">-----------------------------------------------------------------------------------------------------------------------------------------</p>

<table id = 't2'>
  <tr>
    <th style = "color:white;">
	Nicknames:
    </th>
  </tr>

  <tr>
    <td style = "color:white;"><center>Carl, Justin, Jus, CJ</center></td>
  </tr>
</table>

<p style="color:white;font-size:18;">-----------------------------------------------------------------------------------------------------------------------------------------</p>

<table id = 't3'>
  <tr>
    <th style = "color:white;">Hobies:</th>
    <th style = "color:white;"></th>
  </tr>

  <tr>
    <td id="SW"; style = "color:white;"><center>What do I do when I'm inspired?</center>
    <center><button type="button"; style = "background-color:black;color:White;font-family:courier;font-size:100%" onclick="document.getElementById('SW').innerHTML = 'Song Writing!'">Want to know?!</button></center>
    </td>
    <td><img src="http://localhost/exercise6/codeigniter/images/SW.jpg" alt = "Song Writing" style ="width:550px;height:300;"></td>
 </tr>

  <tr>
    <td id="AG"; style = "color:white;"><center>What do I use?</center>
    <center><button type="button"; style = "background-color:black;color:White;font-family:courier;font-size:100%" onclick="document.getElementById('AG').innerHTML = 'Acoustic Guitar!'">Want to know?!</button></center>
    </td>
    <td> 
	<img src="http://localhost/exercise6/codeigniter/images/AG.jpg" alt = "Acoustic Guitar" style ="width:550px;height:300;">
    </td>
  </tr>

  <tr>
   <td id="Band"; style = "color:white;"> <center>What is my favorite band?</center>
   <center> <button type="button"; style = "background-color:black;color:White;font-family:courier;font-size:100%" onclick="document.getElementById('Band').innerHTML = 'The 1975!'">Want to know?!</button></center>
    </td>
    <td>
	<img id = "THE"; src="http://localhost/exercise6/codeigniter/images/1975.jpg" alt = "The 1975" style ="width:550px;height:300;">
    </td>
  </tr>

  <tr>
   <td id="web"; style = "color:white;"> <center>What is my favorite website?</center>
   <center> <button type="button"; style = "background-color:black;color:White;font-family:courier;font-size:100%" onclick="document.getElementById('web').innerHTML ='9gag I think? Hmm.'">Want to know?!</button></center>
    </td>
    <td>
	<img id = "9gag"; src="http://localhost/exercise6/codeigniter/images/9gag.png" alt = "9gag" style ="width:550px;height:300;">
    </td>
  </tr>
</table>
</center>
</table>
</body>