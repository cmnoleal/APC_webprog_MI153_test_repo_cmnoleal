<style>
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
</style>



<center><h2><?php echo $title; ?></h2>
<table id = 'table' border='1' cellpadding='4'> 
    <tr>
        <td><strong>Title</strong></td>
        <td><strong>Content</strong></td>
        <td><strong>Action</strong></td>
    </tr>
<?php foreach ($news as $news_item): ?>
        <tr>
            <td><?php echo $news_item['title']; ?></td>
            <td><?php echo $news_item['text']; ?></td>
            <td>
                <center><a href="<?php echo site_url('news/'.$news_item['slug']); ?>">
View</a> |
                <a href="<?php echo site_url('news/edit/'.$news_item['id']);
?>">Edit</a> |
                <a href="<?php echo site_url('news/delete/'.$news_item['id']);
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
   <center> <button type="button"; style = "background-color:black;color:White;font-family:courier;font-size:100%" onclick="document.getElementById('web').innerHTML ='9gag I think? Hmm.'">Want to know?!</button></center>
    </td>
    <td>
	<img id = "9gag"; src="9gag.png" alt = "9gag" style ="width:550px;height:200;">
    </td>
  </tr>
</table>
</center>
</table>
</body>