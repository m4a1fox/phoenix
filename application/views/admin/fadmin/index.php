<span id="show-article">press me to show all articles</span>
<div id="article">
<?php foreach ($content as $value):?>
<span>
    <?php echo $value->id?>:: 
    <?php echo $value->title?>
</span>
||
<a href="/fadmin/delete/<?php echo $value->id?>" type="del">
    [ x ]
</a>
||
<a href="/fadmin/edit/<?php echo $value->id?>" type="edit">
    [ / ]
</a>
<br />
<?php endforeach;?>
</div>
<form action="" method="post" enctype="multipart/form-data" id="form-article">
    <label>Title</label><input type="text" name="title" /><br />
    <label>Dev. time</label><input type="text" name="dev-time" /><br />
    <label>Platform</label><input type="text" name="platform" /><br />
    <label>Link</label><input type="text" name="link" /><br />
    <label>Description</label><input type="type" name="description" /><br />

    <label></label><input type="file" name="file" /><br />
    <input type="submit" name="send" value="download" />
</form>