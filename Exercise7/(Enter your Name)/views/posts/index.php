<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\PostsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'My Page';
$this->params['breadcrumbs'][] = 'Home';
?>
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
<body>
<div class="body">
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


<hr>


<div class="post-index">

    <h1><?= Html::encode('Forms') ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Post', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'firstname',
            'slug',
            'lastname',
            'midname',
            // 'nickname',
            // 'email:email',
            // 'homeadd',
            // 'gender',
            // 'comment:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$(document).ready(function()
{
    $("#show").click(function(){
        $("answers").toggle(500);
    });
});
</script>
<hr>
<div class="Trivias">
<h1>Trivias</h1>
<br>
<ul>
<?php foreach ($trivias as $trivia): ?>

    <li>
        <strong><?= Html::encode("{$trivia->question}") ?>:</strong>
		<br></br>	
		<answers style=display:none><?= $trivia->answer ?></answers>
		<br></br>	
    </li>	
<?php endforeach; ?>
<button id="show">Show all answer</button>
</ul>
</div>
