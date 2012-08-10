<h2>#<?php echo $user->id?></h2>
<form action="" method="post">
<input type="text" name="name" value="<?php echo $user->name?>" /><br />
<input type="hidden" name="id" value="<?php echo $user->id?>" />
<input type="submit" name="update" value="обновить" />
</form>