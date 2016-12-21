<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('news/edit/'.$news_item['user_id']); ?>
    <table>
        <tr>
            <td><label for="name">Name:</label></td>
            <td><input type="input" name="title" size="50" value="<?php echo $news_item['name'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="nickname">Nicknames:</label></td>
            <td><textarea name="text" rows="10" cols="40"><?php echo $news_item['nickname'] ?></textarea></td>
        </tr>
		<tr>
            <td><label for="email_add">Email Address:</label></td>
            <td><input type="input" name="title" size="50" value="<?php echo $news_item['email_add'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="contact_no">Contact Number:</label></td>
            <td><textarea name="text" rows="10" cols="40"><?php echo $news_item['contact_no'] ?></textarea></td>
        </tr>
		<tr>
            <td><label for="gender">Gender</label></td>
            <td><textarea name="text" rows="10" cols="40"><?php echo $news_item['gender'] ?></textarea></td>
        </tr>
	    <tr>
            <td><label for="comment">Comment</label></td>
            <td><textarea name="text" rows="10" cols="40"><?php echo $news_item['comment'] ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Edit news item" /></td>
        </tr>
    </table>
</form>