<html>
        <head>
                <title>CodeIgniter Tutorial</title>
        </head>
<style>
#body{
	font-family:courier;
	font-size:20px;
	color:white;
	background-color:black;
}
#title{
	font-family:courier;
	font-size:30px;
	color:white;
	background-color:black;
}
#links{
		font-family:courier;
	font-size:20px;
	color:white;
	background-color:black;
}
</style>
        <body id = 'body'>
                <h1 id = 'title'><center>Who's viewing this?</center></h1>
               <p id ='links'> <center><a href="<?php echo site_url('news'); ?>">Home</a> | <a href="<?php echo site_url('news/create'); ?>">Add News</a></center></p>
</body>
</html>