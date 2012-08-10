<form action="" method="post">
<input type="text" name="name" />
<input type="submit" name="send" value="Add" />
</form>

<table border="1" cellpadding="10">
<?php foreach($result as $val):?>
<tr>
<td><?php echo $val->id?></td>
<td><?php echo $val->name?></td>
<td><a href="/about/edit/<?php echo $val->id?>">X</a></td>
<td><a href="/about/edit/<?php echo $val->id?>">Edit</a></td>
</tr>
<?php endforeach?>    
</table>

<br />
<?php

    echo $number;
?>