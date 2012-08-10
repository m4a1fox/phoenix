<form action="/about/add" method="post">
<input type="text" name="name" />
<input type="submit" name="send" value="Add" />
</form>

<table border="1" cellpadding="10">
<?php foreach($welcome as $val):?>

<tr>
<td><?php echo $val->id;?></td>
<td><?php echo $val->name;?></td>
<td><a href="<?php echo M4A1_HOST?>about/edit/<?php echo $val->id?>">X</a></td>
<td><a href="<?php echo M4A1_HOST?>about/edit/<?php echo $val->id?>">Edit</a></td>

</tr>
<?php endforeach?>

</table>
