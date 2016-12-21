<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
<style>
#table{
	    font-size:100%;
    font-family: courier;
    border-collapse: collapse;
    width: 100%;
	 border:solid #d0d0d0 1px;
 padding:20px;
}

</style>  

<?php echo form_open('news/edit/'.$news_item['user_id']); ?>
    <table id = "table">
        <tr>
            <td><label for="name">Name:</label></td>
            <td><input type="input" name="name" size="50" value="<?php echo $news_item['name'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="nickname">Nicknames:</label></td>
            <td><textarea name="nickname" rows="4" cols="44.5"><?php echo $news_item['nickname'] ?></textarea></td>
        </tr>
		<tr>
            <td><label for="email_add">Email Address:</label></td>
            <td><input type="input" name="email_add" size="50" value="<?php echo $news_item['email_add'] ?>" /></td>
        </tr>
			<tr>
            <td><label for="contact_no">Contact Number:</label></td>
            <td><input type="input" name="contact_no" size="50" value="<?php echo $news_item['contact_no'] ?>" /></td>
        </tr>
			<tr>
            <td><label for="gender">Gender (M or F):</label></td>
            <td><input type="input" name="gender" size="1" value="<?php echo $news_item['gender'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="comment">Comment:</label></td>
            <td><textarea name="comment" rows="4" cols="44.5"><?php echo $news_item['comment'] ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Edit news item" /></td>
        </tr>
    </table>
</form>