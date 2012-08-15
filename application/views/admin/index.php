<?php
    if(!Session::get('login'))
        header("Location: /");
?>
<span id="show-article">press me to show all articles</span>
<div id="article">
<?php foreach ($content as $value):?>
<span>
    <?php echo $value->id?>:: 
    <?php echo $value->title?>
</span>
||
<a href="/admin/delete/<?php echo $value->id?>" type="del">
    [ x ]
</a>
||
<a href="/admin/edit/<?php echo $value->id?>" type="edit">
    [ / ]
</a>
<br />
<?php endforeach;?>
</div>
<form action="/admin/add" method="post" id="form-article">
    <label>Title</label><input type="text" name="title" /><br />
    <label>Link</label><input type="text" name="link" /><br />
    <label>Tags</label><input type="text" name="tag" /><br />
    <label>KeyWords</label><input type="text" name="meta_k" /><br />
    <label>Description</label><input type="text" name="meta_d" /><br />
    <label>Content</label><textarea name="content"></textarea><br />
    <label></label><input type="date" name="date" />
    <input type="time" name="time" value="<?php echo date("H:i:s"); ?>" />
    <input type="submit" name="send" value="ok" />
</form>